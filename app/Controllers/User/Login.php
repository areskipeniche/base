<?php namespace App\Controllers\User;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;

class Login extends BaseController
{
	/**
	 * Function: index()
	 * 
	 * Exibe a página de login ou redireciona para o dashboard se o usuário já estiver logado.
	 * Verifica se o usuário está autenticado. Se estiver, redireciona para o dashboard.
	 * Caso contrário, renderiza a view de login.
	 *
	 * @return string|RedirectResponse Retorna a view de login ou uma resposta de redirecionamento para o dashboard.
	 */
	public function index(): string|RedirectResponse
	{
		// Se o usuário já está logado, redireciona para o dashboard
		if (auth()->loggedIn()) {
			return redirect()->route('dashboard.index');
		}
		$data['title'] = lang('Auth.page.login');
		return view('User/login', $data);

	} //.public function index(): string|RedirectResponse

	/**
	 * Function: authenticate()
	 * 
	 * Autentica um usuário com base nas credenciais fornecidas.
	 *
	 * Valida as credenciais de entrada (email/nome de usuário e senha), determina o tipo de
	 * credencial e tenta a autenticação. Se bem-sucedida, verifica o status do usuário e a
	 * associação a grupos, definindo o grupo ativo na sessão, se aplicável, e redireciona para
	 * a página de seleção de perfil ou dashboard.
	 *
	 * @return RedirectResponse Retorna uma resposta de redirecionamento com mensagens ou erros apropriados.
	 */
	public function authenticate(): RedirectResponse
	{	
		// Validação dos dados
		$rules = [
			'credential' => 'required|min_length[3]|max_length[255]', // Garante que a credencial seja fornecida e esteja dentro dos limites de tamanho
			'password'   => 'required|min_length[8]',                 // Garante que a senha seja fornecida e tenha pelo menos 8 caracteres
		];

		if (! $this->validate($rules)) {
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		}
		// Obtém as credenciais
		$credential = $this->request->getPost('credential'); 			// Obtém a entrada de credencial (email ou nome de usuário)
		$password = $this->request->getPost('password');     			// Obtém a entrada de senha
		$remember = $this->request->getPost('remember') === 'on'; // Verifica se a opção "lembrar-me" está marcada
		// Determina se a credencial é um e-mail ou nome de usuário
		$credentials['password'] = $password;
		if (filter_var($credential, FILTER_VALIDATE_EMAIL)) {
			$credentials['email'] = $credential; // Define email como credencial se válido
		} else {
			$credentials['username'] = $credential; // Define nome de usuário como credencial caso contrário
		}
		// Tenta autenticar com email ou nome de usuário
		$authenticator = service('auth'); // Carrega o serviço de autenticação
		$result = $authenticator->attempt($credentials, $remember); // Tenta autenticar o usuário
		// Verifica se a autenticação foi bem-sucedida
		if (! $result->isOK()) {
			return redirect()->back()->withInput()->with('error', lang('Auth.message.user.login.invalid-credentials'));
		}
		// Verifica se o usuário está ativo
		unset($credentials['password']); // Remove a senha das credenciais por segurança
		$user = model('UserModel')->findByCredentials($credentials); // Busca o usuário pelas credenciais

		if ($user && ! $user->active) {
			$authenticator->logout(); // Faz logout se a conta do usuário estiver inativa
			return redirect()->back()->withInput()->with('error', lang('Auth.message.user.login.not-activate'));
		}
		// Verifica os grupos do usuário
		if (count(current_user_groups()) < 1) {
      set_current_user_groups(); // Define os grupos do usuário na sessão
		}
    set_current_group(current_user_groups()[0]);
    return redirect()->route('dashboard.index');
	} //.public function authenticate()

	/**
	 * Faz logout do usuário e limpa os dados da sessão.
	 *
	 * Remove o grupo ativo da sessão, faz logout do usuário usando o serviço de autenticação
	 * e redireciona para a página de login com uma mensagem de sucesso.
	 *
	 */
	public function logout(): void
	{
    remove_current_user_groups();
		auth()->logout();	// Faz logout do usuário
	} //.public function logout(): void

} //.class Login extends BaseController

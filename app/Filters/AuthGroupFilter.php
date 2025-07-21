<?php namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Shield\Authentication\Authenticators\Session;
use CodeIgniter\Shield\Entities\User;
use Config\Services;

/**
 * Filter para verificar autenticação e gerenciar grupo atual na sessão
 */
class AuthGroupFilter implements FilterInterface
{
	/**
	 * Executa antes da requisição
	 *
	 * @param RequestInterface $request
	 * @param array|null $arguments
	 * @return mixed
	 */
	public function before(RequestInterface $request, $arguments = null)
	{
		$auth = auth();
		$session = Services::session();
		
		// Verifica se o usuário está logado
		if (!$auth->loggedIn()) {
			// Limpa qualquer informação de grupo da sessão se não estiver logado
			$session->remove('current_user_group');
			$session->remove('current_user_groups');
			
			// Redireciona para login ou retorna erro 401
			return redirect()->to('/login')->with('error', 'Você precisa estar logado para acessar esta página.');
		}

		// Obtém o usuário atual
		$user = $auth->user();
		
		// Obtém todos os grupos do usuário
		$userGroups = $user->getGroups();
		
		if (empty($userGroups)) {
			// Se o usuário não tem grupos, remove da sessão e redireciona
			$session->remove('current_user_group');
			$session->remove('current_user_groups');
			
			return redirect()->to('/unauthorized')->with('error', 'Usuário sem permissões de grupo definidas.');
		}

		// Armazena todos os grupos do usuário na sessão
		$groupNames = array_map(function($group) {
			return $group->name;
		}, $userGroups);
		
		$session->set('current_user_groups', $groupNames);
		
		// Verifica se há um grupo específico solicitado nos argumentos do filter
		if (!empty($arguments)) {
			$requiredGroups = is_array($arguments) ? $arguments : [$arguments];
			
			// Verifica se o usuário possui pelo menos um dos grupos requeridos
			$hasRequiredGroup = false;
			foreach ($requiredGroups as $requiredGroup) {
				if (in_array($requiredGroup, $groupNames)) {
					$hasRequiredGroup = true;
					// Define o grupo atual baseado no primeiro grupo encontrado que atende aos requisitos
					$session->set('current_user_group', $requiredGroup);
					break;
				}
			}
			
			if (!$hasRequiredGroup) {
				return redirect()->to('/unauthorized')->with('error', 'Você não possui permissão para acessar esta página.');
			}
		} else {
			// Se não há grupos específicos requeridos, define o primeiro grupo como atual
			// Ou mantém o grupo atual se já estiver definido e ainda for válido
			$currentGroup = $session->get('current_user_group');
			
			if (!$currentGroup || !in_array($currentGroup, $groupNames)) {
				// Define o primeiro grupo como atual se não houver um definido ou se o atual não for válido
				$session->set('current_user_group', $groupNames[0]);
			}
		}

		// Adiciona informações úteis para uso nos controllers/views
		$request->current_user = $user;
		$request->current_user_groups = $groupNames;
		$request->current_user_group = $session->get('current_user_group');

		return $request;
	}

	/**
	 * Executa após a requisição
	 *
	 * @param RequestInterface $request
	 * @param ResponseInterface $response
	 * @param array|null $arguments
	 * @return mixed
	 */
	public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
	{
		return $response;
	}

} //.class AuthGroupFilter implements FilterInterface
<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Error extends BaseController
{
  /**
   * Exibe a página de erro para acesso não autorizado.
   *
   * Renderiza a view de erro 'unauthorized' quando o usuário tenta acessar uma área sem permissão.
   * Passa o título da página para a view.
   *
   * @return string Retorna a view de erro de acesso não autorizado.
   */
  public function unauthorized(): string
  {
    $data['title'] = lang('Auth.page.unauthorized'); // Define o título da página de erro
    $data['logged'] = auth()->user();
    return view('errors/unauthorized', $data);  // Renderiza a view localizada em 'errors/unauthorized'
  } //.public function unauthorized()

}

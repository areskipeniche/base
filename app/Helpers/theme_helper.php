<?php

if (!function_exists('theme_view')) {
  helper('assets');
  /**
   * Localiza a view no tema apropriado ou retorna o caminho padrão
   */
  function theme_view(string $view, bool $admin = false): string
  {
    $themesConfig = config('Themes');
    $theme = $admin ? $themesConfig->adminTheme : $themesConfig->publicTheme;

    if (!is_dir($themesConfig->themesPath . $theme)) {
      $theme = 'default'; # Garante que sempre será carregado um tema válido.
    }
    $type = $admin ? 'dashboard' : 'public';
    
    $themePath = $themesConfig->themesPath . "{$theme}/{$type}/{$view}";
    
    // Verifica se existe no tema com alguma extensão suportada
    foreach ($themesConfig->fileExtensions as $ext) {
      if (file_exists($themePath . $ext)) {
        return "_themes/{$theme}/{$type}/{$view}{$ext}";
      }
    }
    // Retorna o caminho original se não encontrar no tema
    return $view;
  }
}

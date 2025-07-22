<?php

if (! function_exists('userName')) {
  function userName(): string
  {
    $user = Auth()->user();
    $username = ($user->first_name 
      ? $user->first_name . ($user->last_name ? ' '. $user->last_name : '') 
      : $user->username
    );
    return $username;
  } //.function userName()
}

if (! function_exists('initials')) {
  function initials(string $text) : string
  {
    // Remove espaços extras no início e fim da string
    $text = trim($text);

    // Divide a string em um array de palavras
    $words = explode(' ', $text);

    $result = '';
    foreach ($words as $word) {
      // Verifica se a palavra não está vazia (para lidar com múltiplos espaços)
      if (!empty($word)) {
        // Adiciona a primeira letra da palavra (em maiúscula) às iniciais
        $result .= strtoupper($word[0]);
      }
    }

    return (string) $result;
  } //.function initials()
}
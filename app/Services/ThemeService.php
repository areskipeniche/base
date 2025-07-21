<?php namespace App\Services;

use Config\Themes;

class ThemeService
{
  protected $themesConfig;

  public function __construct()
  {
    $this->themesConfig = config('Themes');
  } //.public function __construct()

  public function setTheme(string $type, string $themeName): bool
  {
    if (in_array($type, ['public', 'admin']) && 
      is_dir($this->themesConfig->themesPath . "{$type}/{$themeName}")) {
      $this->themesConfig->{$type.'Theme'} = $themeName;
      return true;
    }
    return false;
  } //.public function setTheme(string $type, string $themeName): bool

  public function getCurrentTheme(bool $admin = false): string
  {
    return $admin ? $this->themesConfig->adminTheme : $this->themesConfig->publicTheme;
  } //.public function getCurrentTheme(bool $admin = false): string

} //.class ThemeService
<?php namespace Config;

use CodeIgniter\Config\BaseConfig;

class Themes extends BaseConfig
{

	public $publicTheme = 'default';
	public $adminTheme = 'default';
	public $themesPath = APPPATH . 'Views/_themes/';
	
	// Extensões de arquivo suportadas (prioridade na ordem)
	public $fileExtensions = ['.php', '.html'];

} //.class Themes extends BaseConfig
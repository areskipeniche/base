<?php namespace App\Cells\Menu;

use CodeIgniter\View\Cells\Cell;

class LoginCell extends Cell
{
	
	public function render(): string
	{
		return $this->view('login', [
			'title'	=> 'Login',
			'icon' 	=> 'box-arrow-in-right',
			'url' 	=> route_to('login'),
			'attr' 	=> ['class'=>'btn btn-light']
		]);
	} //.public function render(): string

} //.class LoginCell extends Cell
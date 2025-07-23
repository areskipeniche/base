<?php namespace App\Cells\Navbar;

use CodeIgniter\View\Cells\Cell;

class MenuCell extends Cell
{
	public $data = [];

	public function mount(): void
	{
		$this->data['menu'] = [
			['title' => 'Home', 'href' => route_to('home.index')],
			['title' => 'Sobre', 'href' => route_to('about.index')],
			['title' => 'Serviços', 'href' => route_to('services.index')],
			['title' => 'Contato', 'href' => route_to('contact.index')],
		];

		$this->data['uri'] = uri_string() != '' ? uri_string() : base_url();
	} //.public function mount(): void

	public function render(): string
	{
		return $this->view('menu', $this->data);
	} //.public function render(): string

} //.class MenuCell extends Cell
<?php namespace App\Cells\Navbar;

use CodeIgniter\View\Cells\Cell;

class UserCell extends Cell
{
	public $data = [];

	public function mount(): void
	{
		$this->data['menu'] = [
			['title' => 'Meu Perfil', 'href' => route_to('profile.index'), 'icon' => 'person'],
			['title' => 'Mudar Perfil', 'href' => route_to('change-profile'), 'icon' => 'person-square'],
			['title' => 'Preferências', 'href' => route_to('settings.index'), 'icon' => 'gear'],
			['title' => 'separator'],
			['title' => 'Sair', 'href' => route_to('logout'), 'icon' => 'box-arrow-right', 'modal' => '#logoutModal'],
		];
		$this->data['user'] = userName();
		if (uri_string() != 'dashboard') {
			array_splice($this->data['menu'], 0, 0, [['title' => 'Dashboard', 'href' => route_to('dashboard.index'), 'icon' => 'speedometer2', ]]);
		}
			$this->data['header'] = '<div class="dropdown text-light">';
			$this->data['footer'] = '</div>';
	} //.public function mount(): void

	public function render(): string
	{
		return $this->view('user', $this->data);
	} //.public function render(): string

} //.class UserCell extends Cell
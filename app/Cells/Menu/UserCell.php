<?php namespace App\Cells\Menu;

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
		$withoutDashboard = ['', 'unauthorized', 'select-profile', 'select-profile/change'];
		$this->data['user'] = userName();
		if (in_array(uri_string(), $withoutDashboard)) {
			$this->data['header'] = '<div class="dropdown text-light">';
			$this->data['footer'] = '</div>';
			array_splice($this->data['menu'], 0, 0, [['title' => 'Dashboard', 'href' => route_to('dashboard.index'), 'icon' => 'speedometer2', ]]);
		} else {
			$this->data['header'] = '<li class="nav-item dropdown mx-2">';
			$this->data['footer'] = '</li>';
		}
	} //.public function mount(): void

	public function render(): string
	{
		return $this->view('user', $this->data);
	} //.public function render(): string

} //.class UserCell extends Cell
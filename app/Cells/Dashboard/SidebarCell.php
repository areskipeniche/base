<?php namespace App\Cells\Dashboard;

use CodeIgniter\View\Cells\Cell;

class SidebarCell extends Cell
{
	public $data = [];

	public function mount(): void
	{
    $this->data['items'] = $this->getFilteredMenuItems();
	} //.public function mount(): void

	public function render(): string
	{
		return $this->view('sidebar', $this->data);
	} //.public function render(): string

	protected function getFilteredMenuItems(): array
	{
		$menuItems = [
			['route' => 'dashboard.index', 'title' => 'Dashboard', 'icon' => 'speedometer2'],
			['route' => 'report.index', 'title' => 'Relatórios', 'icon' => 'file-earmark-text'],
			['route' => 'statistics.index', 'title' => 'Estatísticas', 'icon' => 'graph-up'],
			['route' => 'configurations.index', 'title' => 'Configurações', 'icon' => 'gear'],
			['route' => 'notifications.index', 'title' => 'Notificações', 'icon' => 'bell'],
		];

		$routePermissions = getRoutePermissions();
		helper('auth_permissions');
		$userPermissions =getSubordinateGroups(session()->get('active_group'));

		$filteredItems = [];

		foreach ($menuItems as $menuItem) {
			if ($this->userHasPermissionForRoute($menuItem['route'], $routePermissions, $userPermissions)) {
				$filteredItems[] = [
					'title' => $menuItem['title'],
					'icon' => $menuItem['icon'],
					'url' => route_to($menuItem['route'])
				];
			}
		}

		return $filteredItems;
	} //.protected function getFilteredMenuItems(): array

	protected function userHasPermissionForRoute(string $route, array $routePermissions, array $userPermissions): bool
	{
		$sanitizedRoute = ltrim(route_to($route), '/');
		
		if (!array_key_exists($sanitizedRoute, $routePermissions)) {
			return false;
		}

		return !empty(array_intersect($userPermissions, $routePermissions[$sanitizedRoute]));
		
	} //.protected function userHasPermissionForRoute(string $route, array $routePermissions, array $userPermissions): bool

} //.class SidebarCell extends Cell

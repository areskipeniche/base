<?php namespace App\Cells\Utils;

use CodeIgniter\View\Cells\Cell;

class AlertMessageCell extends Cell
{
	public $data = [];

	public function mount() : void
	{
		$validLevels = [
			'message', 'error', 'errors',
			'info', 'critical', 'success', 'warning', 'debug', 'notice', 'alert', 'emergency'
		];

		// Mapeamento de níveis para tipos e ícones compatíveis com Bootstrap
		$levelConfig = [
			'message' => ['type' => 'success', 'icon' => 'check-circle-fill'],
			'error' => ['type' => 'danger', 'icon' => 'x-circle-fill'],
			'errors' => ['type' => 'danger', 'icon' => 'x-circle-fill'], 	

			'info' => ['type' => 'info', 'icon' => 'info-circle-fill'],
			'critical' => ['type' => 'danger', 'icon' => 'x-circle-fill'],
			'success' => ['type' => 'success', 'icon' => 'check-circle-fill'],
			'warning' => ['type' => 'warning', 'icon' => 'exclamation-circle-fill'],
			'debug' => ['type' => 'secondary', 'icon' => 'bug-fill'],
			'notice' => ['type' => 'info', 'icon' => 'info-circle-fill'],
			'alert' => ['type' => 'warning', 'icon' => 'exclamation-triangle-fill'],
			'emergency' => ['type' => 'danger', 'icon' => 'exclamation-circle-fill'],
		];

		// Lidar com níveis padrão
		foreach ($validLevels as $level) {
			if (session()->has($level)) {
				$this->data['type'] = $levelConfig[$level]['type'];
				$this->data['icon'] = $levelConfig[$level]['icon'];
				if ($level == 'errors') {
					$this->data['message'] = '<ul>';
					foreach (session('errors') as $error) {
						$this->data['message'] .= "<li>" . htmlspecialchars($error) . "</li>";
					}
					$this->data['message'] .= '</ul>';
				} else {
					$this->data['message'] = esc(session($level));
				}
				break; // Exit after finding the first valid level
			}
		}
	} //.public function mount()

	public function render() : string
	{
		return $this->view('alert_message', $this->data);
	} //.public function render()
	
} //.class AlertMessageCell extends Cell

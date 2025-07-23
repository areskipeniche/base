<?php namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
	public function index()
	{
		$dashboard = current_user_group();
		switch ($dashboard) {
			case "user":
				return $this->user();
				break;
				// case "domingo":
				// 		echo "Hoje é domingo, dia de relaxar!";
				// 		break;
		}
	}

	public function user()
	{
		$data = [
			'title' => 'Dashboard [' . ucfirst(current_user_group()) . ']',
		];
		return view('Dashboard/' . current_user_group(), $data);
	}


}

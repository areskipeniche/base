<?php namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
		$data['title'] = lang('Auth.page.home');
		
		return view('Home/index', $data);
    } //.public function index(): string

} //.class Home extends BaseController
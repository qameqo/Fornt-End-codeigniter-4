<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('Templates/header');
		echo view('pages/Home');
		echo view('Templates/footer');
	}
}

<?php

namespace App\Controllers;

class Newabout extends BaseController
{
	public function index()
	{
		echo view('Templates/header');
		echo view('pages/new');
		echo view('Templates/footer');
	}
}
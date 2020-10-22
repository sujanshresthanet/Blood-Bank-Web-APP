<?php namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		$data = [];
		
		echo view('templates/header', $data);
		echo view('templates/dashboard');
		echo view('templates/footer');
	}
	public function hdashboard()
	{
		$data = [];
		
		echo view('templates/header', $data);
		echo view('templates/hdashboard');
		echo view('templates/footer');
		echo view ('templates/viewreq');
	}

	//--------------------------------------------------------------------

}

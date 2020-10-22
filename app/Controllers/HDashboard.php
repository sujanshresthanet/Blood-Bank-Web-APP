<?php namespace App\Controllers;

class HDashboard extends BaseController
{
	public function index()
	{
		$data = [];
		
		echo view('templates/header', $data);
		echo view('templates/hdashboard');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}

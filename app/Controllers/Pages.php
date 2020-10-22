<?php namespace App\Controllers;
use App\Models\User_RModel;
use App\Models\Hospital;
class Pages extends BaseController
{
	public function index()
	{
		$data = [];
		echo view ('templates/header', $data);
		echo view ('pages/home');
		echo view ('templates/footer');
	}
	public function hospitals()
	{
		$data = [];
		echo view ('templates/header', $data);
		echo view ('pages/hospitals');
		echo view ('templates/footer');
	}
		function showme($page = 'home'){
			$data = [];
		if ( ! is_file(APPPATH.'/Views/Pages/'.$page.'.php'))
		{
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);	
		}
		
		echo view ('templates/header', $data);
		echo view ('pages/'.$page);
		echo view ('templates/footer');
	

	//--------------------------------------------------------------------
		}
}

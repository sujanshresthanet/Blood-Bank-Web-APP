<?php namespace App\Controllers;

use App\Models\HospitalModel;

class Hospital extends BaseController
{
	public function index()
	{
		$data = [];
		helper(['form']);


		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				'email' => 'required|min_length[6]|max_length[50]|valid_email',
				'pass' => 'required|min_length[8]|max_length[255]|validateUserH[email,pass]',
			];

			$errors = [
				'pass' => [
				'validateUserH' => 'Email or Password don\'t match'
				]
			];

			if (! $this->validate($rules, $errors)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new HospitalModel();

				$user = $model->where('email', $this->request->getVar('email'))
											->first();

				$this->setUserSession($user);
				//$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to('hdashboard');

			}
		}

		echo view('templates/header', $data);
		echo view('hpages/hlogin');
		echo view('templates/footer');
	}
	private function setUserSession($user){
		$data = [
			'id' => $user['id'],
			'name' => $user['name'],
			'mob' => $user['mob'],
			'email' => $user['email'],
			'city' => $user['city'],
			'state' => $user['state'],
			'address' => $user['address'],
			'ap' => $user['ap'],
			'an' => $user['an'],
			'bp' => $user['bp'],
			'bn' => $user['bn'],
			'abp' => $user['abp'],
			'abn' => $user['abn'],
			'op' => $user['op'],
			'one' => $user['one'],
			'isLoggedH' => true,
		];

		session()->set($data);
		return true;
	}
		public function hregister(){
			$data = [];
			helper(['form']);
	
			if ($this->request->getMethod() == 'post') {
				//let's do the validation here
				$rules = [
					'name' => 'required|min_length[3]|max_length[30]',
					'city' => 'required|min_length[3]|max_length[30]',
					'state' => 'required|min_length[3]|max_length[30]',
					'address' => 'required|min_length[3]|max_length[30]',
					'mob' => 'required|min_length[3]|max_length[20]',
					'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[hospital.email]',
					'pass' => 'required|min_length[8]|max_length[255]',
					'password_confirm' => 'matches[pass]',
					'ap' => 'required|greater_than_equal_to[0]',
					'an' => 'required|greater_than_equal_to[0]',
					'bp' => 'required|greater_than_equal_to[0]',
					'bn' => 'required|greater_than_equal_to[0]',
					'abp' => 'required|greater_than_equal_to[0]',
					'abn' => 'required|greater_than_equal_to[0]',
					'op' => 'required|greater_than_equal_to[0]',
					'one' => 'required|greater_than_equal_to[0]',
					
				];
				
				if (! $this->validate($rules)) {
					$data['validation'] = $this->validator;
				}else{
					$model = new HospitalModel();
	
					$newData = [
						'name' => $this->request->getVar('name'),
						'mob' => $this->request->getVar('mob'),
						'city' => $this->request->getVar('city'),
						'state' => $this->request->getVar('state'),
						'address' => $this->request->getVar('address'),
						'email' => $this->request->getVar('email'),
						'pass' => $this->request->getVar('pass'),
						'an' => $this->request->getVar('an'),
						'ap' => $this->request->getVar('ap'),
						'bn' => $this->request->getVar('bn'),
						'bp' => $this->request->getVar('bp'),
						'abn' => $this->request->getVar('abn'),
						'abp' => $this->request->getVar('abp'),
						'one' => $this->request->getVar('one'),
						'op' => $this->request->getVar('op'),
					];
					$model->save($newData);
					$session = session();
					$session->setFlashdata('success', 'Successful Registration');
					return redirect()->to('/hlogin');
	
				}
			}
	
	
			echo view('templates/header', $data);
			echo view('hpages/hregister');
			echo view('templates/footer');
		}

	public function hprofile(){
		$data = [];
		helper(['form']);
		$model = new HospitalModel();
		$data['user'] = $model->where('id', session()->get('id'))->first();
		
		
		
		echo view('templates/header', $data);
		echo view('hpages/hprofile');
		echo view('templates/footer');
	}
	
	public function hUpdateprofile(){
		$data = [];
		helper(['form']);
		$model = new HospitalModel();
		$data['user'] = $model->where('id', session()->get('id'))->first();
	
			if ($this->request->getMethod() == 'post') {
				//let's do the validation here
				$rules = [
					'name' => 'required|min_length[3]|max_length[30]',
					'city' => 'required|min_length[3]|max_length[30]',
					'state' => 'required|min_length[3]|max_length[30]',
					'address' => 'required|min_length[3]|max_length[30]',
					'mob' => 'required|min_length[3]|max_length[20]',
					'pass' => 'required|min_length[8]|max_length[255]',
					'password_confirm' => 'matches[pass]',
					'ap' => 'required|greater_than_equal_to[0]',
					'an' => 'required|greater_than_equal_to[0]',
					'bp' => 'required|greater_than_equal_to[0]',
					'bn' => 'required|greater_than_equal_to[0]',
					'abp' => 'required|greater_than_equal_to[0]',
					'abn' => 'required|greater_than_equal_to[0]',
					'op' => 'required|greater_than_equal_to[0]',
					'one' => 'required|greater_than_equal_to[0]',
				];
	
				if (! $this->validate($rules)) {
					$data['validation'] = $this->validator;
				}else{
					$model = new HospitalModel();
	
					$newData = [
						'id' => session()->get('id'),
						'name' => $this->request->getVar('name'),
						'mob' => $this->request->getVar('mob'),
						'city' => $this->request->getVar('city'),
						'state' => $this->request->getVar('state'),
						'address' => $this->request->getVar('address'),
						'pass' => $this->request->getVar('pass'),
						'an' => $this->request->getVar('an'),
						'ap' => $this->request->getVar('ap'),
						'bn' => $this->request->getVar('bn'),
						'bp' => $this->request->getVar('bp'),
						'abn' => $this->request->getVar('abn'),
						'abp' => $this->request->getVar('abp'),
						'one' => $this->request->getVar('one'),
						'op' => $this->request->getVar('op'),
					];
					if($this->request->getPost('password') != ''){
						$newData['password'] = $this->request->getPost('password');
					}
					$model->save($newData);
					
					session()->setFlashdata('success', 'Successfuly Updated');
					return redirect()->to('/hprofile');
	
				}
			}
		
		
		echo view('templates/header', $data);
		echo view('hpages/hupdateprofile');
		echo view('templates/footer');
	}

	public function logout(){
		session()->destroy();
		
		return redirect()->to('/');
	}
}


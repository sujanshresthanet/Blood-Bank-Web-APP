<?php namespace App\Controllers;

use App\Models\User_RModel;

class User_R extends BaseController
{
	public function index()
	{
		$data = [];
		helper(['form']);


		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				'email' => 'required|min_length[6]|max_length[50]|valid_email',
				'pass' => 'required|min_length[8]|max_length[255]|validateUser[email,pass]',
			];

			$errors = [
				'pass' => [
				'validateUser' => 'Email or Password don\'t match'
				]
			];

			if (! $this->validate($rules, $errors)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new User_RModel();

				$user = $model->where('email', $this->request->getVar('email'))
											->first();

				$this->setUserSession($user);
				//$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to('dashboard');

			}
		}

		echo view('templates/header', $data);
		echo view('pages/login');
		echo view('templates/footer');
	}
	private function setUserSession($user){
		$data = [
			'id' => $user['id'],
			'name' => $user['name'],
			'mob' => $user['mob'],
			'email' => $user['email'],
			'gender' => $user['gender'],
			'age' => $user['age'],
			'bloodgroup' => $user['bloodgroup'],
			'city' => $user['city'],
			'state' => $user['state'],
			'address' => $user['address'],
			'isLoggedIn' => true,
		];

		session()->set($data);
		return true;
	}
		public function register(){
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
					'age' => 'required|greater_than_equal_to[16]',
					'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[registration_user.email]',
					'pass' => 'required|min_length[8]|max_length[255]',
					'password_confirm' => 'matches[pass]',
					'gender'=> 'required|max_length[6]'
				];
	
				if (! $this->validate($rules)) {
					$data['validation'] = $this->validator;
				}else{
					$model = new User_RModel();
	
					$newData = [
						'name' => $this->request->getVar('name'),
						'mob' => $this->request->getVar('mob'),
						'gender' => $this->request->getVar('gender'),
						'age' => $this->request->getVar('age'),
						'bloodgroup' => $this->request->getVar('bloodgroup'),
						'city' => $this->request->getVar('city'),
						'state' => $this->request->getVar('state'),
						'address' => $this->request->getVar('address'),
						'email' => $this->request->getVar('email'),
						'pass' => $this->request->getVar('pass'),
					];
					$model->save($newData);
					$session = session();
					$session->setFlashdata('success', 'Successful Registration');
					return redirect()->to('/login');
	
				}
			}
	
	
			echo view('templates/header', $data);
			echo view('pages/register');
			echo view('templates/footer');
		}

	public function profile(){
		$data = [];
		helper(['form']);
		$model = new User_RModel();
		$data['user'] = $model->where('id', session()->get('id'))->first();
		
		
		
		echo view('templates/header', $data);
		echo view('pages/profile');
		echo view('templates/footer');
	}
	
	public function Updateprofile(){
		$data = [];
		helper(['form']);
		$model = new User_RModel();
		$data['user'] = $model->where('id', session()->get('id'))->first();
	
			if ($this->request->getMethod() == 'post') {
				//let's do the validation here
				$rules = [
					'name' => 'required|min_length[3]|max_length[30]',
					'city' => 'required|min_length[3]|max_length[30]',
					'state' => 'required|min_length[3]|max_length[30]',
					'address' => 'required|min_length[3]|max_length[30]',
					'mob' => 'required|min_length[3]|max_length[20]',
					'age' => 'required|greater_than_equal_to[16]|less_than[80]',
					'pass' => 'required|min_length[8]|max_length[255]',
					'password_confirm' => 'matches[pass]',
					'gender'=> 'required|max_length[6]'
				];
	
				if (! $this->validate($rules)) {
					$data['validation'] = $this->validator;
				}else{
					$model = new User_RModel();
	
					$newData = [
						'id' => session()->get('id'),
						'name' => $this->request->getVar('name'),
						'mob' => $this->request->getVar('mob'),
						'gender' => $this->request->getVar('gender'),
						'age' => $this->request->getVar('age'),
						'bloodgroup' => $this->request->getVar('bloodgroup'),
						'city' => $this->request->getVar('city'),
						'state' => $this->request->getVar('state'),
						'address' => $this->request->getVar('address'),
						'pass' => $this->request->getVar('pass'),
					];
					if($this->request->getPost('password') != ''){
						$newData['password'] = $this->request->getPost('password');
					}
					$model->save($newData);
					
					session()->setFlashdata('success', 'Successfuly Updated');
					return redirect()->to('/profile');
	
				}
			}
		
		
		echo view('templates/header', $data);
		echo view('pages/updateprofile');
		echo view('templates/footer');
	}

	public function logout(){
		session()->destroy();
		
		return redirect()->to('/');
	}
}


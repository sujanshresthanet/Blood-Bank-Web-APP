<?php namespace App\Models;

use CodeIgniter\Model;

class User_RModel extends Model{
    protected $table = 'registration_user';
    protected $allowedFields = ['name', 'mob', 'email', 'gender', 'age', 'bloodgroup', 'city','state','address','pass', 'date'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];
  

protected function beforeInsert(array $data){
    $data = $this->passwordHash($data);
      $data['data']['date'] = date('Y-m-d H:i:s');
  
      return $data;
    }
  
    protected function beforeUpdate(array $data){
      $data = $this->passwordHash($data);
      $data['data']['date'] = date('Y-m-d H:i:s');
      return $data;
    }
  
    protected function passwordHash(array $data){
      if(isset($data['data']['pass']))
        $data['data']['pass'] = password_hash($data['data']['pass'], PASSWORD_DEFAULT);
  
      return $data;
    }
  
  }
  
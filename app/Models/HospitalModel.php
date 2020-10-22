<?php namespace App\Models;

use CodeIgniter\Model;

class HospitalModel extends Model{
    protected $table = 'hospital';
    protected $allowedFields = ['name', 'mob', 'email', 'bloodgroup', 'city','state','address','pass', 'date', 'ap',	'an',	'bp',	'bn', 'abp', 'abn', 'op',	'one'];
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
  
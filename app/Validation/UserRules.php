<?php
namespace App\Validation;
use App\Models\User_RModel;
use App\Models\HospitalModel;

class UserRules
{

  public function validateUser(string $str, string $fields, array $data){
    $model = new User_RModel();
    $user = $model->where('email', $data['email'])
                  ->first();

    if(!$user)
      return false;

    return password_verify($data['pass'], $user['pass']);
  }

  public function validateUserH(string $str, string $fields, array $data){
    $model = new HospitalModel();
    $user = $model->where('email', $data['email'])
                  ->first();

    if(!$user)
      return false;

    return password_verify($data['pass'], $user['pass']);
  }
}

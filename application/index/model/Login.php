<?php 
namespace app\index\model;
use think\Model;


class Login extends Model{
    protected $table = 'bick_admin'; 


public function Login($data){
     
     $req = $this->where('username',$data['username'])->find();

		if (!$req) {
			return false;
		}

		if ($req['password']!= sha1($data['password'])) {
			return false;
		}

		session('user',$req);
		return true;

}






}















 ?>
<?php 
namespace app\index\controller;
use think\Controller;
use app\index\model\Login as LoginModel;


class Login extends Controller{

public function login(){

	if (request()->isPost()) {
		$data = input();
		$user = new LoginModel;
		$req = $user->login($data);

		if ($req) {
			$this->success('成功','amdin/dede');
		}else{
			$this->error('用户名或者密码错误');
		}
		
		
	}


	return view('index@login/login');
}










}





 ?>
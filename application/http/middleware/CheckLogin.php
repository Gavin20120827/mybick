<?php 
namespace app\http\middleware;
use think\facade\Request;
use app\admin\controller\Auth;


class CheckLogin{

	public function handle($request,\closure $next){

		if (!session('?user')) {
			return redirect(url('index/login'))->with('error','请登录');
		}

		$auth=new Auth();
		$con = Request::controller();
		$action = Request::action();
		$name = $con.'/'.$action;

		if ($auth->check($name,session('id'))) {
			dump('没有权限');
			die;
		}


   //      $notCheck=array('Index/index','Admin/lst','Admin/logout');
       //  if(session('id')!=1){
       //  	if(!in_array($name, $notCheck)){
       //  		if(!$auth->check($name,session('id'))){
		    	// $this->error('没有权限',url('index/index')); 
		    	// }
       //  	}
        	
       //  }

		return $next($request);

	}









}










 ?>
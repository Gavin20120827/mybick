<?php 
namespace app\http\middleware;


class CheckLogin{

	public function handle($request,\closure $next){

		if (!session('?user')) {
			return redirect(url('index/login'))->with('error','请登录');
		}

		return $next($request);

	}









}










 ?>
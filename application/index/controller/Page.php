<?php
namespace app\index\controller;
use think\Controller;

class Page extends Controller{


    public function page(){
    	
        return view('index@page/page');
    }


}
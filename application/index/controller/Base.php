<?php
namespace app\index\controller;
use think\Controller;

class Base extends Controller{
    
    protected $cate;
    
    protected function initialize(){
        
        $this->cate= db('cate')->select();
        
        
    }
    
    
    
    
    
    
    
    
    
    
    
}


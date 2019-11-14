<?php
namespace app\index\controller;

class Index extends Base{
    
    
    public function index(){
        
//         $cate = db('cate')->select();
        $art = db('article')->select();
        
        return view('index@index/index',['cate'=>$this->cate,'art'=>$art]);
    }


    
}

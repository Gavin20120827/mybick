<?php
namespace app\index\controller;

class Article extends Base{
    
    
    public function article(int $id){
        
        $art = db('article')->find($id);
        
        return view('index@article/article',['cate'=>$this->cate,'art'=>$art]);
    }


}
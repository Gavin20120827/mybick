<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Article as ArticleModel;
use app\admin\model\Cate as CateModel;
use think\db;
use app\admin\validate\Article as ArticleValidate;
use think\facade\Request;

class Article extends Controller{
    
    
    public function index(){

       // $cate =  db::table('bick_cate')->alias('a')->join('bick_article b','b.cateid = a.id')->paginate(5);

        $art = ArticleModel::paginate(5);
  
        return view('admin@article/index',['art'=>$art]);
    }
    
    
    
    
    public function create(){

        return view();
        
        
    }
    
    
    public function save(){

         $data = input();

        $req = $this->validate($data,ArticleValidate::class);
        if (true !== $req) {
            $this->error($req);
        }

       
        ArticleModel::create($data);
        return redirect(root_path().'/admin/art');
    }
    
    
    public function edit($id){

        $art = ArticleModel::find($id);
        
        return view('admin@article/edit',['art'=>$art]);
    }
    
    
    
    public function update(){

        
        
        dump(input());
        
    }
    
    
    
    
    public function delete(){
        
        
        
        
    }
    
    
    
    
    
    public function read(){
        
        
        
        
        
    }
    
    
    
    
    
    
    
    
    
    
}


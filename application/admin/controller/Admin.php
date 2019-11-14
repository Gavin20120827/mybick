<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Admin as AdminModel;

class Admin extends Controller{
    
    
    public function index(){
        
      $admin =  AdminModel::select();   

      return view('admin@admin/index',['admin'=>$admin]);
    }
    
    
    
    
    public function create(){
        
        return view();
        
        
    }
    
    
    public function save(){
        
        
    }
    
    
    public function edit(){
        
        return view();
    }
    
    
    
    public function update(){
        
        
        
    }
    
    
    
    
    public function delete(){
        
        
        
        
    }
    
    
    
    
    
    public function read(){
        
        
        
        
        
    }
    
    
    
    
}


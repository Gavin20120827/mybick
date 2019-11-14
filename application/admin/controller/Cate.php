<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Cate as CateModel;

class Cate extends Controller{

   protected $beforeActionList = [
        'del'=>['only'=>'delete'],
     
    ];
    

    
    public function index(){
        // $cate =  CateModel::paginate(4);
        $cate = new CateModel;
        $all_cate = $cate->order('sort DESC')->select();
        $cateres = $cate->sort($all_cate);
        return view('admin@cate/index',['cate'=>$cateres]);
    }
    
    
    
    
    public function create(){
        
        $cate = new CateModel;
        $all_cate = $cate->select();
        $cateres = $cate->sort($all_cate);
        
        return view('admin@cate/create',['cate'=>$cateres]);
        
        
    }
    
    
    public function save(){
        
        $data = input();
        $data['create_time'] = time();
        if (db('cate')->insert($data)) {
            return redirect(root_path().'/admin/cate');
            
        }
    }
    
    
    public function edit(int $id){

        $cate = new CateModel;
        $all_cate = $cate->select();
        $cateres = $cate->sortEdit($all_cate,0,0,$id);
        $cate = db('cate')->find($id);
                
        return view('admin@cate/edit',['cate'=>$cate,'all_Cate'=>$cateres]);
    }
    
    
    
    public function update(int $id){
        
        if (db('cate')->update(input())!==false){
            return redirect(root_path().'/admin/cate');
        }
        
    }
    
    
    
    public function delete($id){
        
       if (CateModel::destroy($id)) {
            $this->success('删除成功',root_path().'/admin/cate');
        } 
    }

    protected function del(){

        $cateId = input('id');
        $cate = new CateModel;
        $all_cate = $cate->select();
        $cateres = $cate->getChildrenId($all_cate,$cateId);
        if ($cateres) {
            CateModel::destroy($cateres);
        }
    }
    
    

    public function read(){

    }



    public function sort(){

        $data = input('post.');

        foreach ($data as $key => $value) {
            CateModel::update(['id'=>$key,'sort'=>$value]);
        };

        $this->success('排序成功',root_path().'/admin/cate');
    }
    
    
    
}


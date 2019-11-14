<?php
namespace app\admin\model;
use think\Model;

class Article extends Model{
    
   public static function init(){

        self::event('before_insert', function ($Article) {
            
            if ($_FILES['image']['tmp_name']) {
             $file = request()->file('image');
            $info = $file->move(root_path_other().'/public/static/uploads');
            if($info){
                $Article['art_pic'] =root_path().'/static/uploads/'.$info->getSaveName();
            }else{
                echo $file->getError();
            }
        }
        
        });
    }


    public function cate(){
        return $this->belongsTo('cate','cateid');

    }


    
    
    
    
    
    
    
    
    
    
}


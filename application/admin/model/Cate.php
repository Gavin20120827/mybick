<?php
namespace app\admin\model;

use think\Model;

class Cate extends Model{

    public function sort($data,$pid=0,$level=0){
    	static $arr = array();
    	foreach ($data as $key => $value) {
    		if ($value['pid']==$pid) {
    			$value['level']=$level;
    			$arr[]=$value;
    			$this->sort($data,$value['id'],$level+1);
    		}
    	}

    	return $arr;

    }

    public function getChildrenId($data,$cateid){
    	static $arr = array();
    	foreach ($data as $key => $value) {
    		if ($value['pid']==$cateid) {
    			$arr[]=$value['id'];
    			$this->getChildrenId($data,$value['id']);
    		}
    	}
    	return $arr;

    }



	public function sortEdit($data,$pid=0,$level=0,$id=0){
		static $arr = array();
		foreach ($data as $key => $value) {
			if ($value['pid']==$pid) {
				$value['level']=$level;
				$arr[]=$value;
				$this->sortEdit($data,$value['id'],$level+1);
			}
		}

		foreach ($arr as $key => $value) {
			if ($value['id']==$id) {
				unset($arr[$key]);
			}
		}

		return $arr;
	}

    
    
    
    
    
}


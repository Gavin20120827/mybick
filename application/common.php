<?php
use think\facade\Env;

// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
use think\facade\Request;

function route_path(){
    
    return Env::get('ROOT_PATH').'route/';
}

function root_path(){
    return request::root(true);
}

function root_path_other(){
    return Env::get('ROOT_PATH');
}
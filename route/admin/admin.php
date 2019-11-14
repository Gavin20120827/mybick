<?php

//后台路由

use think\facade\Route;
// use app\http\middleware\CheckLogin;


Route::group('admin',function(){
    
    Route::group(['prefix'=>'admin/'],function(){
        
        //后台首页
        Route::get('/','index/index');
        
        //后台管理员的增删改查
        Route::resource('admin','admin');
        
        //导航的增删改查
        Route::resource('cate','cate');
        Route::get('cate/delete/:id','cate/delete')->name('admin/cate/delete');
        Route::post('cate/sort','cate/sort')->name('admin/cate/sort');
        
        Route::group(['middleware'=>['CheckLogin']],function(){
      

            //文章的增删改查
             Route::resource('art','article');

       });
        
    });
    
   
 
    
});
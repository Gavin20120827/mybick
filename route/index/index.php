<?php

//前台路由

use think\facade\Route;


Route::group('/',function(){
    
    Route::group(['prefix'=>'index/'],function(){
        
        //前台首页
        Route::get('/','index/index');

        Route::get('article/:id','article/article')->name('index/index/art');

        Route::get('imglist','imglist/imglist');

        Route::get('page','page/page');

        Route::get('artlist','artlist/artlist');

        // 登录
        Route::get('login','login/login')->name('index/login');
       Route::post('login','login/login')->name('login');
       
    });
    

});
<?php
namespace app\admin\validate;
use think\Validate;

class Article extends Validate{

	protected $rule = [

		// 'art_title'=>'require',
		'art_title'=>'checkName:thinkphp',
		'code'=>'require|captcha',

	];

	protected $message = [

		'art_title.require'=>'不能为空',
	];

	protected function checkName($rule,$value,$data=[]){

		return $rule == $value ? true : '名称错误';
	}










}
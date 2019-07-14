<?php
	namespace app\admin\validate;

	use think\Validate;


	class AlternateImg extends Validate
	{

	protected $rule = [
        'alimg_title'  =>  'require|unique:alternate_img',
        'alimg_url' =>  'require|url',
    ];
    
    protected $message = [
        'alimg_title.require'  =>  '睁眼好好看文字',
        'alimg_url.require'  =>  '阿萨德发射点发好看文字',
        'alimg_title.unique' =>  '品牌和爱情不能一起重温',
        'alimg_url.url' =>  'url格式不对',
    ];
    


	}
<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------


// think\Route::group([
// 	'cate',[
// 		'lst'=>['admin/cates/lst',[]],
// 		'add'=>['admin/cates/add',[]],
// 		'edit'=>['admin/cates/edit',[]],
// 	],



// ]);



use think\Route;

// 首页
Route::rule('index','index/Index/index','GET',['ext'=>'html']);

// 文章和分类列表
Route::rule([
	'goods/:commodity_id'=>[
		'index/goods/index',
		['commodity_id'=>'\d{1,4}']
	],
	'category/:cate_id'=>[
		'index/category/index',
		['cate_id'=>'\d{1,4}']
	],
	'article/:ar_id'=>[
		'index/article/index',
		['ar_id'=>'\d{1,4}']
	],
	'cates/:Catesid'=>[
		'index/cates/index',
		['Catesid'=>'\d{1,4}']
	]
], '', 'GET', ['ext'=>'html']);

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




// think\Route::rule('i/:dd','admin/index/he','GET',['ext'=>'html']);
// return [
//     '__pattern__' => [
//         'name' => '\w+',
//     ],
//     '[hello]'     => [
//         ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//         ':name' => ['index/hello', ['method' => 'post']],
//     ],

// ];



// think\Route::group('aa',[
// 			'/:num'=>'index1',
// 			'/:str'=>'index2',
// 			'/:bool'=>'index3',
// 		],['method'=>'get','prefix'=>'admin/index/'],[
// 			'num'=>'\d{2,5}',
// 			'str'=>'[a-zA-Z]',
// 			'bool'=>'0|1',]
// 	);

// think\Route::group(['name'=>'aa','method'=>'get','prefix'=>'admin/index/'],[
// 			'/:num'=>'index1',
// 			'/:str'=>'index2',
// 			'/:bool'=>'index3',
// 		],[
// 			'num'=>'\d{2,5}',
// 			'str'=>'[a-zA-Z]',
// 			'bool'=>'0|1',]
// 	);


// think\Route::group('aa',function(){
// 	think\Route::get(':num','admin/index/index1',[],['num'=>'\d{2,5}']);
// 	think\Route::get(':str','admin/index/index2',[],['str'=>'[a-zA-Z]']);
// 	think\Route::get(':bool','admin/index/index3',[],['bool'=>'0|1']);
// 	});

// think\Route::group('aa',[
// 		'/:num'=>['admin/index/index1',['method'=>'get'],['num'=>'\d{2,5}']],
// 		'/:str'=>['admin/index/index2',['method'=>'get'],['str'=>'[a-zA-Z]']],
// 		'/:bool'=>['admin/index/index3',['method'=>'get'],['bool'=>'0|1']],
// 	]);
// return [

// 	'[aa]'=>[
// 		'/:num'=>['admin/index/index1',['method'=>'get'],['num'=>'\d{2,5}']],
// 		'/:str'=>['admin/index/index2',['method'=>'get'],['str'=>'[a-zA-Z]']],
// 		'/:bool'=>['admin/index/index3',['method'=>'get'],['bool'=>'0|1']],
// 	],
// ];
// 
// 
// 
// 







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




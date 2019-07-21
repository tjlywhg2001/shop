<?php
namespace app\member\controller;

use think\Controller;
header("Content-Type: text/html;charset=utf-8");
/**
* 
*/
class User extends Controller
{

		// 底部帮助中心的底部配置项
	public function getBottomArts(){
		$bottomArt = db('article') -> where( 'ar_cateid', '=', 26 ) -> field('ar_id,ar_title,ar_linkurl') -> select();	
		return $bottomArt;
	}

	
	public function _initialize(){
		// 底部帮助中心的底部配置项
		if ( cache('bottoms')){
			$bottoms = cache('bottoms');
		} else {
			$bottoms = getBottomArts();
			if ( $cache == '是'){
				cache('bottoms',$bottoms ,$times);
			}
		}
		// dump($bottoms);die;
		// 赋值输出
		$this -> assign([
			'bottoms' => $bottoms,
		]);

	}


	public function reg()
	{
		return view();
	}

	public function login()
	{
		return view();
	}

}
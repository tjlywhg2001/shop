<?php
namespace app\member\controller;

use think\Controller;
use sms\sms;

header("Content-Type: text/html;charset=utf-8");
/**
* 
*/
class User extends Controller
{

	public function reg()
	{
		if ( request() -> isPost() ){
			$data = input('post.');
			// dump($data);die;
			$reg = db('user') -> insert($data);
			if ( $reg ){
				$this -> assign('注册成功！');
			} else {
				$this -> assign('注册失败！');
			}
		}
		return view();
	}

	public function login()
	{
		if ( request() -> isPost() ){
			$data = input('post.');
			$user = db('user') -> select();
			foreach ( $user as $k => $v ){
				if ( $v['us_name'] == $data['us_name'] && $v['us_password'] == $data['us_password'] ){
					// dump($data);die;
					$this -> assign('登录成功！');
				} else {
					$this -> assign('登录失败！');
				}
			}
		}
		return view();
	}


	
	// 底部帮助中心的底部配置项
	public function _initialize(){
		// 底部帮助中心的底部配置项
		// if ( cache('bottoms')){
		// 	$bottoms = cache('bottoms');
		// } else {
			$bottoms = db('article') -> where( 'ar_cateid', '=', 26 ) -> field('ar_id,ar_title,ar_linkurl') -> select();	
		// 	if ( $cache == '是'){
		// 		cache('bottoms',$bottoms ,$times);
		// 	}
		// }
		// 赋值输出
		$this -> assign([
			'bottoms' => $bottoms,
		]);

	}

	public function checking( $name, $password )
	{
		$data = db('user') ->select();
		foreach ( $data as $k => $v ){
			if ( $v['us_name'] == $name && $v['us_password'] == $password ){
				$aa = 1;
			}
		}
		if ( $aa == 1){
			return 1;
		} else {
			return 0;
		}
	}




}
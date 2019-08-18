<?php
namespace app\member\controller;

use think\Controller;
use sendcode\SendCode;

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


	public function sendcode(){

		$phone = '13821656007';
		$phonepassword = 'Whg963852';
		$phoneNumber = '18522268833';
		$var = mt_rand(100000,999999);
		$phoness = '111您的验证码是'.$var.'，如非本人操作，请忽略本短信！ha';

		$send = new SendCode();
 
		// $re = $send->send('您的账号','您的密码','手机号','短信内容',time(),1);
		$re = $send->send( $phone, $phonepassword, $phoneNumber, $phoness,time(),1);
		
		dump($re);
		if ( !is_null($re) ){
			if ( $re['result'] == 0 ){
				echo "短信发送成功！";
			} else {
				echo $re['result_msg'];
			}
		} else {
			return $re;
		}
	}


}
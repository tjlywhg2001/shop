<?php
namespace app\member\controller;

use think\Controller;
use sendcode\SendCode;
use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

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


	public function sendcode( $phoneNumber ){
		// 官网的账号和密码
		$phone = '138216560077';
		$phonepassword = 'Gang123456aa';
		// 该收到短信的手机号
		// $phoneNumber = '18522268833';
		$var = mt_rand(100000,999999);
		$phoness = '您的验证码是'.$var.'，如非本人操作，请忽略本短信！';

		$send = new SendCode();
 
		// $re = $send->send('您的账号','您的密码','手机号','短信内容',time(),1);
		$re = $send->send( $phone, $phonepassword, $phoneNumber, $phoness,time(),1);
		
		// dump($re);
		// $ss = "{'aa':".$re['result'].",'bb':".$re['result_msg']."}";

		// dump($re);
		if ( !is_null($re) ){
			if ( $re['result'] == 0 ){
				// return "短信发送成功！";
				return $re;
			} else {
				return $re;
				// return $re['result_msg'];
			}
		} else {
			return $re;
		}
	}

	public function sendMail( $ToMail ){
		// 收件人的信息
		// $ToMail = 'asdfasf@qq.com';
		$ToTitle = '零下二十度';
		$var = mt_rand(100000,999999);
		$ToContent = '你的验证码是'.$var;

		$Mail = new PHPMailer();
		// 设置为要发邮件
		$Mail -> isSMTP();
		// 是否允许发送HTML代码作为邮件的内容
		$Mail -> IsHTML(TRUE);
		$Mail -> CharSet ='UTF-8';
		// 是否需要身份验证
		$Mail -> SMTPAuth = TRUE;
		// 邮件服务器上的帐号是什么 -> 到163.注册一个帐号即可
		$Mail -> From = 'html2020@126.com';
		$Mail -> FromName = 'html2020';
		//发送邮件的服务协议地址
		$Mail -> Host = 'smtp.126.com';
		$Mail -> Username = 'html2020';
		$Mail -> Password = 'asdf123';
		// 发邮件端口号默认25
		$Mail -> Port = 25;
		// 收件人
		$Mail -> AddAddress($ToMail);
		// 邮件标题
		$Mail -> Subject = $ToTitle;
		// 邮件内容
		$Mail -> Body = $ToContent;

		// dump($Mail);die;

		$ToMailSuccess = $Mail -> Send();

		// dump($ToMailSuccess);die;
		if ( !$ToMailSuccess ){
			$res = ['status'=> 1, 'msg'=> '发送失败', 'msgErr'=> $Mail->ErrorInfo ];
			return json($res);
		   // echo "邮件发送失败. <p>";
		   // echo "错误原因: " . $Mail->ErrorInfo;
		} else {
			$res = ['status'=> 0, 'msg'=> '发送成功', 'msgErr'=> $Mail->ErrorInfo ];
			return json($res);
			// echo "发送成功";
		}
		// return ( $ToMailSuccess );

	}



	public function isRegistered(){
		echo 'aaa';
	}



}
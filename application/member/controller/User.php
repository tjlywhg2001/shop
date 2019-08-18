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


	public function sendcode(){
		// 官网的账号和密码
		$phone = '阿斯蒂芬';
		$phonepassword = 'asdfasdf';
		// 该收到短信的手机号
		$phoneNumber = '啊手动阀';
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

	public function sendMail(){
		// 收件人的信息
		$ToMail = 'asdfasf@qq.com';
		$ToTitle = '你好';
		$ToContent = '你吃过饭吗？';

		$Mail = new PHPMailer();
		// 设置为要发邮件
		$Mail -> isSMTP();
		// 是否允许发送HTML代码作为邮件的内容
		$Mail -> IsHTML(TRUE);
		$Mail -> CharSet ='UTF-8';
		// 是否需要身份验证
		$Mail -> SMTPAuth = TRUE;
		// 邮件服务器上的帐号是什么 -> 到163.注册一个帐号即可
		$Mail -> From = 'asdf@163.com';
		$Mail -> FromName = 'asdf';
		//发送邮件的服务协议地址
		$Mail -> Host = 'smtp.163.com';
		$Mail -> Username = 'asdf@163.com';
		$Mail -> Password = 'asdf';
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
		   echo "邮件发送失败. <p>";
		   echo "错误原因: " . $Mail->ErrorInfo;
		} else {
			echo "发送成功";
		}
		// return ( $ToMailSuccess );

	}



}
<?php
namespace app\index\controller;

use think\Controller;
header("Content-Type: text/html;charset=utf-8");

/**
* 
*/
class Base extends Controller
{
	
	public function _initialize()
	{
		$this -> _getFooterArtis();
		$this -> _getNav();
	}

	private function _getFooterArtis()
	{
		// 底部帮助中心
		$bases = model('article') -> getFooterArts();
		// 左边nav
		$ComCate = model('category') -> getComCate();

		// 赋值输出
		$this -> assign([
			'bases' => $bases,
			'ComCate' => $ComCate,
		]);
	}

	private function _getNav(){
		// 导航布局
		$navLayout = db('nav') -> select();
		$navArr = array();
		foreach ($navLayout as $k => $v) {
			$navArr[$v['nav_pos']][] = $v;
		}
		// dump($navArr);die;

		$this -> assign([
			'navArr' => $navArr,
		]);
	}
}



?>
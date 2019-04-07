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

}



?>
<?php
namespace app\index\controller;

use think\Controller;
header("Content-Type: text/html;charset=utf-8");

/**
* 
*/
class Base extends Controller
{

	// 配置项数组
	public $configss;
	
	public function _initialize()
	{
		// 获取并分配底部帮助信息
		$this -> _getFooterArtis();
		// 获取并分配导航
		$this -> _getNav();
		// 获取并分配配置项，为config赋值
		$this -> _getConfig();
		// 获取商品并且分配商品推荐位
		$this -> _HomeShowGoods();
	}


	private function _HomeShowGoods(){

		$CommRecpos = model('commodity') -> HomeShowGoods(2,1);
		$CommCates = model('cates') -> getCates();
		// dump($CommCates);die;
		$this -> assign([
			'CommRecpos' => $CommRecpos,
			'CommCates' => $CommCates,
		]);

	}






	private function _getFooterArtis()
	{
		$Articles = model('article');

		// 底部帮助中心
		$bases = $Articles -> getFooterArts();

		// 底部帮助中心的底部配置项
		$bottoms = model('article') -> getBottomArts();
		// dump($bottoms);die;
		
		// 左边nav
		$ComCate = model('category') -> getComCate();

		// 赋值输出
		$this -> assign([
			'bases' => $bases,
			'bottoms' => $bottoms,
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


	private function _getConfig(){

		$configArr = model('config') -> getConfigs();
		// dump($configArr);die;
		$this->configss = $configArr;
		$this -> assign([
			'configArr' => $configArr,
		]);

	}

}



?>
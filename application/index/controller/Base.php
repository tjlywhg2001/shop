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
		// 获取并分配配置项，为config赋值
		$this -> _getConfig();
		// 获取并分配底部帮助信息
		$this -> _getFooterArtis();
		// 获取并分配导航
		$this -> _getNav();
		// 获取商品并且分配商品推荐位
		$this -> _HomeShowGoods();
	}


	private function _HomeShowGoods(){
		// dump( $this -> configss );die;
        // 定义清除缓存时间
        $cache = $this -> configss['cache'];
        $times = $this -> configss['cache_time'];

		if ( cache('CommRecpos') ){
			$CommRecpos = cache('CommRecpos');
		} else {
			if ( $cache == '是'){
				$CommRecpos = model('commodity') -> HomeShowGoods(2,1);
				cache( 'CommRecpos', $CommRecpos, $times );
			}
		}

		if ( cache('CommCates') ){
			$CommCates = cache('CommCates');
		} else {
			$CommCates = model('cates') -> getCates();
			if ( $cache == '是' ){
				cache('CommCates',$CommCates,$times);
			}
		}
		// dump($CommCates);die;
		$this -> assign([
			'CommRecpos' => $CommRecpos,
			'CommCates' => $CommCates,
		]);

	}






	private function _getFooterArtis()
	{
        // 定义清除缓存时间
        $cache = $this -> configss['cache'];
        $times = $this -> configss['cache_time'];

		// 底部帮助中心
		if ( cache('bases')){
			$bases = cache('bases');
		} else {
			$bases = model('article') -> getFooterArts();
			if ( $cache == '是'){
				cache('bases',$bases ,$times);
			}
		}

		// 底部帮助中心的底部配置项
		if ( cache('bottoms')){
			$bottoms = cache('bottoms');
		} else {
			$bottoms = model('article') -> getBottomArts();
			if ( $cache == '是'){
				cache('bottoms',$bottoms ,$times);
			}
		}
		// dump($bottoms);die;
		
		// 左边nav
		if ( cache('ComCate')){
			$ComCate = cache('ComCate');
		} else {
			$ComCate = model('category') -> getComCate();
			if ( $cache == '是'){
				cache('ComCate',$ComCate ,$times);
			}
		}

		// 赋值输出
		$this -> assign([
			'bases' => $bases,
			'bottoms' => $bottoms,
			'ComCate' => $ComCate,
		]);
	}

	private function _getNav(){
        // 定义清除缓存时间
        $cache = $this -> configss['cache'];
        $times = $this -> configss['cache_time'];
		// 导航布局
		if ( cache('navArr')){
			$navArr = cache('navArr');
		} else {
			$navLayout = db('nav') -> select();
			$navArr = array();
			foreach ($navLayout as $k => $v) {
				$navArr[$v['nav_pos']][] = $v;
			}
			if ( $cache == '是'){
				cache('navArr',$navArr ,$times);
			}
		}
		// dump($navArr);die;

		$this -> assign([
			'navArr' => $navArr,
		]);
	}


	private function _getConfig(){
        // 定义清除缓存时间
		$configArr = model('config') -> getConfigs();
		// dump($configArr);die;
		$this->configss = $configArr;
		$this -> assign([
			'configArr' => $configArr,
		]);

	}

}



?>
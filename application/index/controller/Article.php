<?php
	namespace app\index\controller;

	use think\Controller;

	class Article extends Base
	{
		public function index($ar_id)
		{
			// dump( $this -> configss );die;
	        // 定义清除缓存时间
	        $cache = $this -> configss['cache'];
	        $times = $this -> configss['cache_time'];
			$article = db('article');
			$category = db('category');
			// 文章内容
			$artName = $ar_id.'_article';
	        if ( cache( $artName ) ){
	        	$articleContent = cache( $artName );
	        } else {
				$articleContent = $article -> find( $ar_id );
	        	cache( $artName, $articleContent , $times);
	        }

			// 面包屑导航
			$artiCateId = $articleContent['ar_cateid'].'_art';
			if( cache( $artiCateId ) ){
				$cateNav = cache( $artiCateId );
			} else {
				$cateNav = model('category') -> position($articleContent['ar_cateid']);
				if ( $cache == '是' ){
					cache( $artiCateId,$cateNav ,$times);
				}
			}
			// dump( $cateNav );die;
			$this -> assign([
				'articleContent' => $articleContent,
				'cateNav' => $cateNav,
			]);
			return view('article');
		}

		public function add()
		{

			return view();
		}

		public function IndexShowLogin( $cateid, $limit){
			$LoginArr = array();
			foreach ($cateid as $key => $v) {
		        $LoginArr[] = model('article') -> getloginArts( $v, $limit );
			}
	        return $LoginArr;
		}
	}


?>
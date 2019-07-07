<?php
	namespace app\index\controller;

	use think\Controller;

	class Article extends Base
	{
		public function index($ar_id)
		{
			$article = db('article');
			$category = db('category');
			$articleContent = $article -> find( $ar_id );
			// 面包屑导航
			$cateNav = model('category') -> position($articleContent['ar_cateid']);
 
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
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
			$categoryName = $category -> where( 'cate_id','=', $articleContent['ar_cateid'] ) -> find();
			// dump( $categoryName );die;
			$this -> assign([
				'articleContent' => $articleContent,
				'categoryName' => $categoryName,
			]);
			return view('article');
		}


		public function add()
		{

			return view();
		}




	}


?>
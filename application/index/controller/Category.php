<?php
	namespace app\index\controller;

	use categorytree\Categorytree;

	use think\Controller;

	class Category extends Base
	{
		public function index($cate_id)
		{

			$category = db('category');

			// 获取栏目以及子栏目ID，返回数组
			$categorys = new Categorytree();
			$cateId = $categorys -> childrenids( $cate_id, db('category') );
			$cateId[] = $cate_id;
			$artiArr['ar_cateid'] = array('IN', $cateId );
			// 文章
			$artiRes = db('article') -> where( $artiArr ) -> select();
			// 栏目
			$cateName = $category -> find($cate_id);

			// dump($artiRes);die;

			$this -> assign([
				'artiRes' => $artiRes,
				'cateName' => $cateName,
			]);

			return view('category');
		}


		public function add()
		{

			return view();
		}




	}


?>
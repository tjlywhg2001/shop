<?php
	namespace app\index\controller;

	use categorytree\Categorytree;

	use think\Controller;

	class Category extends Base
	{
		public function index($cate_id)
		{
			// dump( $this -> configss );die;
	        // 定义清除缓存时间
	        $cache = $this -> configss['cache'];
	        $times = $this -> configss['cache_time'];

			// 获取栏目以及子栏目ID，返回数组
			$category = db('category');
			$categorys = new Categorytree();
			$cateId = $categorys -> childrenids( $cate_id, db('category') );
			$cateId[] = $cate_id;
			$artiArr['ar_cateid'] = array('IN', $cateId );
			
			// 左边栏目获取栏目ID查询子栏目或文章
			$artiName = $cate_id.'_category';
			if ( cache( $artiName ) ){
				$artiRes = cache( $artiName );
			} else {
				$artiRes = db('article') -> where( $artiArr ) -> select();
				if ( $cache == '是' ){
					cache( $artiName , $artiRes , $times );
				}
			}

			// 右边的标题为栏目名字
			$categoryName = $cate_id.'_categorys';
			if ( cache( $categoryName ) ){
				$cateName = cache( $categoryName );
			} else {
				$cateName = $category -> find($cate_id);
				if ($cache == '是'){
					cache( $categoryName , $cateName , $times );
				}

			}

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
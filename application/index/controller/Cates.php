<?php
	namespace app\index\controller;

	use think\Controller;

	class Cates extends Base
	{
		public function index()
		{

			return view();
		}



		public function getCommsCates($CommCateid){
			// 顶部ID
			$data['cat_id'] = $CommCateid;
			// 右边的top
			$data['topic_content'] = '11111';

			// 二级和三级子分类
			$datas = model('cates') -> getCommCates($CommCateid);
			$subitems = '';
			foreach ($datas as $k => $v) {
				$subitems .= '<dl class="dl_fore"><dt>';
				$subitems .= '<a href="#" target="_blank">'.$v['cates_name'].'</a></dt><dd>';
				foreach ($v['children'] as $k1 => $v1) {
					$subitems .= '<a href="#" target="_blank">'.$v1['cates_name'].'</a>';
				}
				$subitems .= '</dd></dl>';
			}
			$data['cat_content'] = $subitems;

			$data['brands_ad_content'] = '22222';
			// dump($catesList);die;
			return json($data);

			// $this -> assign([
			// 	'catesList' => $catesList,
			// ]);


		}



	}


?>
<?php
	namespace app\index\controller;

	use think\Controller;

	class Cates extends Base
	{
		public function index($Catesid)
		{

			return view('cates');
		}



		public function getCommsCates($CommCateid){
			// dump($CommCateid);die;
			// 顶部ID
			$data['cat_id'] = $CommCateid;

			// 关联的商品分类
			$CommWords = model('cates_words') -> getCommWords($CommCateid);
			$channels = '';
			foreach ($channels as $k => $v) {
				$channels .= '<a href="#" target="_blank">'.$v['cw_word'].'</a>';
			}

			// 二级和三级子分类
			$CommCates = model('cates') -> getCommCates($CommCateid);
			$subitems = '';
			foreach ($CommCates as $k => $v) {
				$subitems .= '<dl class="dl_fore"><dt>';
				// ['url_html_suffix'=>'html']
				$subitems .= '<a href="'.url('index/cates/index',['Catesid'=> $v['cates_id']]).'" target="_blank">'.$v['cates_name'].'</a></dt><dd>';
				foreach ($v['children'] as $k1 => $v1) {
					$subitems .= '<a href="'.url('index/cates/index',['Catesid'=> $v1['cates_id']]).'" target="_blank">'.$v1['cates_name'].'</a>';
				}
				$subitems .= '</dd></dl>';
			}

			// 关联的商品分类
			$data['topic_content'] = $channels;

			// 二级和三级子分类
			$data['cat_content'] = $subitems;

			// 
			$data['brands_ad_content'] = '22222';
			// dump($catesList);die;
			return json($data);




		}



	}


?>
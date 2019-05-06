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
			$data = array();
			// 顶部ID
			$data['cat_id'] = $CommCateid;

			// 关联的商品分类
			$CommWords = model('cates_words') -> getCommWords($CommCateid);
			$channels = '';
			foreach ($CommWords as $k => $v) {
				$channels .= '<a href="#" target="_blank">'.$v['cw_word'].'</a>';
			}

			// 二级和三级子分类
			$CommCates = model('cates') -> getCommCates($CommCateid);
			// dump($CommCates);die;
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

			// brand图片
			$BrandCate = model('cates_brands') -> getCommBrand($CommCateid);
			// dump($BrandCate);die;
			$brands = '';
			foreach ($BrandCate as $k => $v) {
				$brands .= '<div class="cate-brand">';
				foreach ($v['children'] as $k1 => $v1) {
					$brands .= '<div class="img"><a href="#" target="_blank" title="'.$v1['brand_name'].'">';
					$brands .= '<img src="\static\uploadss\\'.$v1['brand_img'].'"></a></div>';
				}
				$brands .= '</div><div class="cate-promotion">';
				$brands .= '<a href="'.$v['cb_prourl'].'" target="_blank">';
				$brands .= '<img src="\static\uploadss\\'.$v['cb_proimg'].'" width="199" height="97"></a>';
				$brands .= '</div></div>';
			}


			// 关联的商品分类
			$data['topic_content'] = $channels;

			// 二级和三级子分类
			$data['cat_content'] = $subitems;

			// brand图片
			$data['brands_ad_content'] = $brands;
			// dump($catesList);die;
			return json($data);




		}



	}


?>
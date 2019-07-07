<?php
	namespace app\index\controller;

	use think\Controller;


	class Brand extends Base
	{
		public function getIndexBrand( $page ){
			$brandlistArr = array();
			$brandlist = db('brand') -> order('brand_id desc') -> paginate(17);
			$brandlistArr['lastPage'] = $brandlist -> lastPage();
			$branditems = $brandlist -> items();
			$brandHtml = '';
			foreach ($branditems as $k => $v) {
				$brandHtml .= '<li><div class="brand-img"><a href="'.$v['brand_url'].'" target="_blank"><img src="'.config('view_replace_str.__upload__').'/'.$v['brand_img'].'"></a></div>';
				$brandHtml .= '<div class="brand-mash">';
				$brandHtml .= '<div data-bid="204" ectype="coll_brand"><i class="iconfont icon-zan-alt"></i></div>';
				$brandHtml .= '<div class="coupon"><a href="brandn.php?id=204" target="_blank">关注人数<br><div id="collect_count_204">0</div></a></div>';
				$brandHtml .= '</div></li>';
			}
			$brandlistArr['items'] = $brandHtml;
			// dump($brandlist);die;
			// dump($brandlistArr);die;
			return $brandlistArr;
		}


	}

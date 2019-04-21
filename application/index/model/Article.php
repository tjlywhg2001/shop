<?php

namespace app\index\model;

use think\Model;


/**
* 
*/
class Article extends Model
{
	// 底部帮助中心
	public function getFooterArts()
	{
		$bases = model('category') -> where( array('cate_type' => 3, 'cate_pid' => 2 ) ) -> order('cate_sort asc') -> select();	
		foreach ($bases as $k => $v) {
			$bases[$k]['arts'] = $this -> where( array('ar_cateid' => $v['cate_id']) ) -> select();
		}
		// dump($bases);die;
		return $bases;
	}


	// 底部帮助中心的底部配置项
	public function getBottomArts(){
		$bottomArt = $this -> where( 'ar_cateid', '=', 26 ) -> field('ar_id,ar_title,ar_linkurl') -> select();	
		return $bottomArt;


	}
}







?>
<?php

namespace app\index\model;

use think\Model;


/**
* 
*/
class Article extends Model
{
	
	public function getFooterArts()
	{
		$bases = model('category') -> where( array('cate_type' => 3, 'cate_pid' => 2 ) ) -> order('cate_sort asc') -> select();	
		foreach ($bases as $k => $v) {
			$bases[$k]['arts'] = $this -> where( array('ar_cateid' => $v['cate_id']) ) -> select();
		}
		// dump($bases);die;
		return $bases;
	}
}







?>
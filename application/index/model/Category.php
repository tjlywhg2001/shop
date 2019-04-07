<?php
namespace app\index\model;

use think\Model;
/**
* 
*/
class Category extends Model
{
	public function getComCate(){
		$comCate = $this -> where( array('cate_type' => 5, 'cate_pid' => 0 ) ) -> order('cate_sort asc') -> select();
		foreach ($comCate as $k => $v) {
			$comCate[$k]['childCate'] = $this -> where( array('cate_pid' => $v['cate_id']) ) -> select();
		}
		return $comCate;
		// dump($comCate);die;


	}

}




?>
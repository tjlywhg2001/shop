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

	// 面包屑导航
	public function position($cateId){
		$navdata = $this -> field('cate_id,cate_pid,cate_name') -> select();
		return $this -> _position( $navdata, $cateId );
	}

	private function _position( $navdata, $cateId ){
		static $arr = array();
		$cates = $this -> field('cate_id,cate_pid,cate_name')->find($cateId);
		// dump(db('category'));die;
		if (empty($arr)){
			$arr[] = $cates;
		}
		foreach ($navdata as $k => $v) {
			if ( $v['cate_id'] == $cates['cate_pid'] ){
				$arr[]=$v;
				$this -> _position( $navdata, $v['cate_id'] );
			}
		}
		return array_reverse( $arr );


	}

}




?>
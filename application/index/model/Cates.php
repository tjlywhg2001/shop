<?php
namespace app\index\model;

use think\Model;
/**
* 
*/
class Cates extends Model
{

	// 顶级和二级分类获取
	public function getCates(){

		$commCatePid = $this -> where(array('cates_pid' => 0)) -> select();

		// dump($commCatePid);die;
		foreach ($commCatePid as $k => $v) {
			$commCatePid[$k]['children'] = $this -> where( array('cates_pid' => $v['cates_id']) ) -> select();
		}
		// dump($commCatePid);die;
		return $commCatePid;

	}





	// 通过顶级分类ID获取二级和三级子分类
	public function getCommCates($id){

		$commCatePid = $this -> where(array('cates_pid' => $id)) -> select();

		foreach ($commCatePid as $k => $v) {
			$commCatePid[$k]['children'] = $this -> where( array('cates_pid' => $v['cates_id']) ) -> select();
		}
		// dump($commCatePid);die;
		return $commCatePid;

	}




}




?>
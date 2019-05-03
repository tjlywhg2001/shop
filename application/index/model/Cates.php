<?php
namespace app\index\model;

use think\Model;
/**
* 
*/
class Cates extends Model
{


	public function getCates(){

		$commCatePid = $this -> where(array('cates_pid' => 0)) -> select();

		// dump($commCatePid);die;
		foreach ($commCatePid as $k => $v) {
			$commCatePid[$k]['children'] = $this -> where( array('cates_pid' => $v['cates_id']) ) -> select();
		}
		// dump($commCatePid);die;
		return $commCatePid;

	}




}




?>
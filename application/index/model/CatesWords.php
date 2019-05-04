<?php
namespace app\index\model;

use think\Model;
/**
* 
*/
class CatesWords extends Model
{
	

	public function getCommWords($id){

		$CommWordList = $this -> where('cw_cates_id','=',$id) -> select();
		// dump($CommWordList);die;
		return $CommWordList;
	}



}







?>
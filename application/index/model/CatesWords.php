<?php
namespace app\index\model;

use think\Model;
/**
* 
*/
class CatesWords extends Model
{
	

	public function getCommWords($id){

		$CommWordList = $this -> where(''=> $id) -> select();
		dump($CommWordList);die;
	}



}







?>
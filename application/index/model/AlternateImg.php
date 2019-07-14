<?php

namespace app\index\model;

use think\Model;


/**
* 
*/
class AlternateImg extends Model
{
	// 首页推荐商品（品牌）
	public function GetIndexAlternateImg()
	{

        $IndexAlternateImg = $this -> where( array( 'alimg_status' => 1) ) -> select();
        return $IndexAlternateImg;
    }

}







?>
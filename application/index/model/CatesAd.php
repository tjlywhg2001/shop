<?php
namespace app\index\model;

use think\Model;
/**
* 
*/
class CatesAd extends Model
{
	

	public function getCatesAd($CatesAdId){

		// 获取广告图片ID
		$CommBrandsList = db('cates_ad') -> where( array('catesAd_catesId' => $CatesAdId) ) -> select();
		// dump( $CommBrandsList );die;
		
		$CommBrandsArr = array();
		foreach ($CommBrandsList as $k => $v) {
		 	$CommBrandsArr[$v['catesAd_position']][] =$v;
		 } 
		// dump( $CommBrandsArr );die;

		
		return $CommBrandsArr;
	}


}







?>
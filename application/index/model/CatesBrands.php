<?php
namespace app\index\model;

use think\Model;
/**
* 
*/
class CatesBrands extends Model
{
	

	public function getCommBrand($id){

		// 第一种方法
		// $CommBrandList = $this -> where(array('cb_catesid' => $id)) -> select();
		// $Brand = db('brand') -> select();
		// foreach ($CommBrandList as $k => $v) {
		// 	$CommBrandList[$k] = $v;
		// 	$BrandArray = explode(',',$v['cb_brands_id']);
		// 	if ( is_array( $BrandArray )){
		// 		$BrandList = array();
		// 		foreach ($Brand as $k1 => $v1) {
		// 			if ( in_array( $v1['brand_id'],$BrandArray )){
		// 				$BrandList[]= $v1;
		// 			}
		// 		}
		// 	}
		// 	$CommBrandList[$k]['children'] = $BrandList;
		// }
		// dump($CommBrandList);die;
		

		// 第二种方法
		$CommBrandsID = $this -> where(array('cb_catesid' => $id)) -> find();
		$BrandIdArray = explode(',',$CommBrandsID['cb_brands_id']);
		$CommBrandList = array();
		$Brand = db('brand');
		foreach ($BrandIdArray as $k => $v) {
			$CommBrandList['children'][] = $Brand -> find($v);
		}
		$CommBrandList['pross']['proimg'] = $CommBrandsID['cb_proimg'];
		$CommBrandList['pross']['prourl'] = $CommBrandsID['cb_prourl'];
		
		// dump($CommBrandList);die;
		return $CommBrandList;
	}


}







?>
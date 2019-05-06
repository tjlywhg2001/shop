<?php
namespace app\index\model;

use think\Model;
/**
* 
*/
class CatesBrands extends Model
{
	

	public function getCommBrand($id){

		$CommBrandList = $this -> where(array('cb_catesid' => $id)) -> select();
		$Brand = db('brand') -> select();
		foreach ($CommBrandList as $k => $v) {
			$CommBrandList[$k] = $v;
			$BrandArray = explode(',',$v['cb_brands_id']);
			if ( is_array( $BrandArray )){
				$BrandList = array();
				foreach ($Brand as $k1 => $v1) {
					if ( in_array( $v1['brand_id'],$BrandArray )){
						$BrandList[]= $v1;
					}
				}
			}
			$CommBrandList[$k]['children'] = $BrandList;
		}
		// dump($CommBrandList);die;
		return $CommBrandList;
	}



}







?>
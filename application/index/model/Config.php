<?php
namespace app\index\model;

use think\Model;
/**
*
*/
class Config extends Model
{
	// 获取所有配置项
	public function getConfigs(){

		$conf = $this -> field('config_ename,config_default') -> select();
		$confArr = array();
		foreach ($conf as $k => $v) {
			$confArr[$v['config_ename']] = $v['config_default'];
		}
		// dump($confArr);die;
		return $confArr;

	}




}




?>
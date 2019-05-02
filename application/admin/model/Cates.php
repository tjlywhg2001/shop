<?php
namespace app\admin\model;
use think\Model;

class Cates extends Model
{

	public $field = true;

	// public 表示全局，类内部外部子类都可以访问；
	// private表示私有的，只有本类内部可以使用；
	// protected表示受保护的，只有本类或子类或父类中可以访问；
	protected static function init()
	{


        Cates::beforeUpdate(function ($cates) {
	        // 定义商品Id
	     	$catesid = $cates -> cates_id;
	     	// 处理商品属性
        	$goodsData = input('post.');
        	// dump($catesid);die;

        	// 处理商品推荐位
        	$recposComm = db('recpos_comm');

        	$recposComm -> where(array('recpos_type' => 2, 'commodity_id' => $catesid)) -> delete();

        	if ( $goodsData['recposs']){
        	// dump($recposData['recposs']);die;
	        	foreach ($goodsData['recposs'] as $k => $v) {
	        		// 存入数据信息
		        	$recposComm -> insert(['recpos_id' => $v, 'commodity_id' => $catesid, 'recpos_type' => 2]);
	        	}
        	}

        });


        Cates::afterInsert(function($cates){

        	$catesid = $cates -> cates_id;
        	$goodsData = input('post.');
        	// dump($catesid);die;

        	// 处理商品推荐位
        	$recposComm = db('recpos_comm');

        	if ( $goodsData['recposs']){
        	// dump($recposData['recposs']);die;
	        	foreach ($goodsData['recposs'] as $k => $v) {
	        		// 存入数据信息
		        	$recposComm -> insert(['recpos_id' => $v, 'commodity_id' => $catesid, 'recpos_type' => 2]);
	        	}
        	}


        });








    }

















}
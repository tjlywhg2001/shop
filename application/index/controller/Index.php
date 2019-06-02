<?php
namespace app\index\controller;

use catestree\Catestree;

// use think\Controller;
header("Content-Type: text/html;charset=utf-8");

class Index extends Base
{

    public function index()
    {
	    // dump($this->configss);die;
	    // $this -> HomeShowGoods();

        // $CommRecpos = model('commodity') -> HomeShowGoods(2,1);
        // dump($CommRecpos);die;

// ---------------------------------------------------------------------------------------------------------------------------------------------------------


        // 获取热卖商品


        // 获取商品的推荐分类
        $CatesRecpos = model('cates') -> getRecpos(5,0);
        foreach ($CatesRecpos as $k => $v) {
            // 获取当前商品顶级分类的二级分类
            $CatesRecpos[$k]['children'] = model('cates') -> getRecpos(5,$v['cates_id']);
            // dump($CatesRecpos[$k]['children']);die;

            // 获取新品推荐
            $CatesRecpos[$k]['newComm'] = model('commodity') -> GetCommRecpos( $v['cates_id'], 3 );

            $CtateRecposChild = $CatesRecpos[$k]['children'];

            // 获取精品推荐
            // $childrenComm = array();
            foreach ( $CtateRecposChild as $k1 => $v1) {

                $childComm = model('commodity') -> GetCommRecpos( $v1['cates_id'], 4 );

                $CtateRecposChild[$k1]['childComm'] = $childComm;
            }

        }

        dump($CatesRecpos);die;

    	$this -> assign([
    		'show_nav' => 1,
            'CatesRecpos' => $CatesRecpos,
    	]);

        return view();
    }



}

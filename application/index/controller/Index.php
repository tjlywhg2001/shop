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
            // 获取新品推荐
            // 获取顶级栏目的所有子栏目
            $RecposCommTree = new Catestree();
            $RecposCatesId = $RecposCommTree -> childrenids( $v['cates_id'] , db('cates'));
            $RecposCatesId[] = $v['cates_id'];
            // dump($RecposCatesId);die;

            // 获取被推荐的所有当前商品id
            $RecposCommId = db('recpos_comm') -> where( array( 'recpos_id' => 4, 'recpos_type' => 1 ) ) -> select();
            $RecposCommIds = array();
            foreach ($RecposCommId as $k1 => $v1) {
                $RecposCommIds[] = $v1['commodity_id'];
            }
            // dump($RecposCommId);die;

            // 将数组转为字符串
            $map['cates_id'] = array( 'IN', $RecposCatesId );
            $map['commodity_id'] = array( 'IN', $RecposCommIds );
            // dump($map);die;

            // 获取被推荐商品的所有信息
            $CommRecposArr = db('commodity') -> where( $map ) -> limit(6) -> order('commodity_id DESC') -> select();
            // dump($CommRecposArr);die;


            $CatesRecpos[$k]['childrenComm'] = $CommRecposArr;

        }

        dump($CatesRecpos);die;

    	$this -> assign([
    		'show_nav' => 1,
            'CatesRecpos' => $CatesRecpos,
    	]);

        return view();
    }



}

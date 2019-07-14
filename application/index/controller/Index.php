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
        $_CatesRecpos = model('cates') -> getRecpos(5,0);

        // 将对象转为数组
        $CatesRecpos = json_decode( json_encode( $_CatesRecpos ), true );
        // $loginList = json_decode( json_encode( $_loginList ), true );

        foreach ($CatesRecpos as $k => $v) {

            // 获取当前商品顶级分类的二级分类
            $CatesRecpos[$k]['children'] = model('cates') -> getRecpos(5,$v['cates_id']);
            // dump($CatesRecpos['children']);die;

            // 获取新品推荐
            $CatesRecpos[$k]['newComm'] = model('commodity') -> GetCommRecpos( $v['cates_id'], 3 );


            // 获取精品推荐
            foreach ( $CatesRecpos[$k]['children'] as $k1 => $v1) {

                $CatesRecpos[$k]['children'][$k1]['childComm'] = model('commodity') -> GetCommRecpos( $v1['cates_id'], 4 );
                // dump($CatesRecpos[$k]['children'][$k1]['childComm']);die;

            }

            // 获取品牌推荐
            $CatesRecpos[$k]['newBrand'] = model('CatesBrands') -> getCommBrand( $v['cates_id'], TRUE );

            // dump($CatesRecpos[$k]['newBrand']);die;

            // 获取广告图片
            $CatesRecpos[$k]['newCatesAd'] = model('CatesAd') -> getCatesAd( $v['cates_id']);

            // dump($CatesRecpos[$k]['newCatesAd']);die;


        }

        // 获取轮播图
        $IndexAlternateImg = model('AlternateImg') -> GetIndexAlternateImg();

        // dump($CatesRecpos[$k]['newBrand']);die;

        // 获得首页商品
        $CommRecpos = model('commodity') -> HomeShowGoods( 7,20 );

        // dump($CatesRecpos);die;
        

    	$this -> assign([
    		'show_nav' => 1,
            'CatesRecpos' => $CatesRecpos,
            'CommRecpos' => $CommRecpos,
            'IndexAlternateImg' => $IndexAlternateImg,
    	]);

        return view();
    }



}

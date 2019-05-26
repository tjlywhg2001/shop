<?php
namespace app\index\controller;

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


        // 商品分类
        $CatesRecpos = model('cates') -> getRecpos(5,0);
        foreach ($CatesRecpos as $k => $v) {
            $CatesRecpos[$k]['children'] = model('cates') -> getRecpos(5,$v['cates_id']);
        }
        // dump($CatesRecpos);die;

    	$this -> assign([
    		'show_nav' => 1,
            'CatesRecpos' => $CatesRecpos,
    	]);

        return view();
    }



}

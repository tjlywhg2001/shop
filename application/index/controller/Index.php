<?php
namespace app\index\controller;

// use think\Controller;
header("Content-Type: text/html;charset=utf-8");

class Index extends Base
{

    public function index()
    {
	    // dump($this->configss);die;
	    $this -> HomeShowGoods();
        return view();
    }

    public function HomeShowGoods(){

    	$recpos = db('recpos_comm');
    	$recposlist = $recpos -> where(array('recpos_type' => 1,'recpos_id' => 1 )) -> select();
    	dump($recposlist);die;


    }
}

<?php
namespace app\index\controller;

// use think\Controller;
header("Content-Type: text/html;charset=utf-8");

class Index extends Base
{
    public function index()
    {
        return view();
    }
}

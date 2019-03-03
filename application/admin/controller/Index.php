<?php

	namespace app\admin\controller;

	use think\Controlloer;

	class Index{
		public function index(){
			return view();
		}
		public function index1($num){
			echo "这是index控制器下的index1操作方法，我们只接受2~5的整型，当前的值为：".$num.'。恭喜你成功，但这个值如果是字母或0和1，才能接受第二条或第三条';
		}
		public function index2($str){
			echo "这是index控制器下的index2操作方法，我们只接受字母，当前的值为：".$str.'。恭喜您成功，但这个值如果是数字或0和1，才能接受第一条或第三条';
		}
		public function index3($bool){
			echo "这是index控制器下的index3操作方法，我们只接受布尔型，当前的值为：".$bool.'。恭喜您成功，但这个值如果是更多的数字或字母，才能接受第一条或第二条';
		}


		public function he($dd){
			echo "eee".$dd;
			// return view();
		}
	}
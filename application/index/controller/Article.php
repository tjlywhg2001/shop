<?php
	namespace app\index\controller;

	use think\Controller;

	class Article extends Controller
	{
		public function index()
		{
			return view('article');
		}


		public function add()
		{

			return view();
		}




	}


?>
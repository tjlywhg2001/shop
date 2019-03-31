<?php
	namespace app\admin\controller;

	use think\Controller;
	use catestree\Catestree;


	class CommoAttr extends Controller
	{
		public function ajaxdelAttr(){

			$del = db('comm_attr') -> delete(input('value'));
			if ($del)
				echo 1;
			else
				echo 2;
		}



	}
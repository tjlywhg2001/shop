<?php
	namespace app\admin\controller;

	use think\Controller;

	class Member extends Controller
	{
		public function lst(){

			$memlist = db('member_level')->order('level_id desc')->paginate(5);
			$this -> assign('memlist',$memlist);

			return view('list');

		}


		public function add(){

			if (request()->isPost()){
				$data=input('post.');
				
				// $validate = validate('type');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }


				$add=db('member_level')->insert($data);
				// dump($_FILES);
				// dump($data);die;
				if($add){
					$this->success('添加成功','lst');
				}else{
					$this->error('添加失败');
				}

				return;
			}
			return view();

		}


		public function edit(){

			if (request()->isPost()){
				$data=input('post.');
				
				

				// $validate = validate('type');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }



				$save=db('member_level')->update($data);
				// dump($_FILES);
				// dump($data);die;
				if($save){
					$this->success('修改成功','lst');
				}else{
					$this->error('修改失败');
				}

				return;
			}



			$level_id=input('level_id');
			$level = db('member_level')->find($level_id);
			$this->assign('level',$level);
			return view();

		}


		public function del($level_id){

			$del=db('member_level')->delete($level_id);
			if($del){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}

		}


	}
<?php
	namespace app\admin\controller;

	use think\Controller;

	class Recpos extends Controller
	{
		public function lst(){


			$recpos =db('recpos');
			$reclist = $recpos -> paginate(15);

			// dump($typeid);die;


			$this -> assign(['reclist'=>$reclist]);

			return view('list');

		}


		public function add(){

			// $recpos =db('recpos');
			// $reclist = $recpos -> select();
			// $this -> assign(['reclist' => $reclist]);

			if (request()->isPost()){

				$data=input('post.');
				// dump($data);die;

				$add = db('recpos') -> insert($data);

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
			$recpos =db('recpos');
			$reclist = $recpos -> select();
			$reclist = db('type') -> select();
			$this -> assign(['reclist' => $reclist]);

			if (request()->isPost()){

				$data=input('post.');

				$save=$recpos->update($data);

				if($save){
					$this->success('修改成功','lst');
				}else{
					$this->error('修改失败');
				}

				return;
			}



			$rec_id=input('rec_id');
			$rec = $recpos ->find($rec_id);
			$this->assign('rec',$rec);

			return view();

		}



		public function del($rec_id){
			$recpos =db('recpos');

			$del=$recpos->delete($rec_id);

			if($del){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}

		}



		// public function ajaxrecs(){

		// 	$typeaa = input('type_id');
		// 	$reccc = db('rec') -> where(array('rec_type_id' => $typeaa)) ->select();
		// 	echo json_encode($reccc);

		// }


	}
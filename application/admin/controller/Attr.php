<?php
	namespace app\admin\controller;

	use think\Controller;

	class Attr extends Controller
	{
		public function lst(){
			$typeid = input('type_id');
			$attr =db('attr');
			if ($typeid) {
				$tyid['type_id'] = ['=', $typeid];
			}else{
				$tyid = 1;
			}



			$attrlist = $attr -> alias('c') -> field('c.*,d.type_name') -> join('type d','c.attr_type_id = d.type_id') -> where($tyid) ->order('attr_id desc') -> paginate(10);

			// dump($typeid);die;


			$this -> assign(['attrlist'=>$attrlist]);

			return view('list');

		}


		public function add(){
			$attr =db('attr');
			$attrlist = $attr -> select();
			$attrlist = db('type') -> select();
			$this -> assign(['attrlist' => $attrlist]);

			if (request()->isPost()){
				$data=input('post.');
				
				$data['attr_values'] = str_replace('，', ',', $data['attr_values']);

				// $validate = validate('attr');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }


				$add=$attr->insert($data);

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
			$attr =db('attr');
			$attrlist = $attr -> select();
			$attrlist = db('type') -> select();
			$this -> assign(['attrlist' => $attrlist]);

			if (request()->isPost()){
				$data=input('post.');

				$data['attr_values'] = str_replace('，', ',', $data['attr_values']);

				// $validate = validate('attr');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }


				$save=$attr->update($data);
				if($save){
					$this->success('修改成功','lst');
				}else{
					$this->error('修改失败');
				}

				return;
			}



			$attr_id=input('attr_id');
			$attr = $attr ->find($attr_id);
			$this->assign('attr',$attr);

			return view();

		}



		public function del($attr_id){
			$attr =db('attr');

			$del=$attr->delete($attr_id);

			if($del){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}

		}



		public function ajaxattrs(){

			$typeaa = input('attr_type_id');
			$attrcc = db('attr') -> where(array('attr_type_id' => $typeaa)) ->select();
			echo json_encode($attrcc);

		}


	}
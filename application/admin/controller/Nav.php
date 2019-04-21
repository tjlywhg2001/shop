<?php
	namespace app\admin\controller;

	use think\Controller;


	class Nav extends Controller
	{
		public function lst(){
			$nav = db('nav');
			if (request()->isPost()) {
				$data=input('post.');
				// $navsorts = sort($data['nav_sort']);
				foreach ($data['nav_sort'] as $k => $v) {
					$nav -> where( 'nav_id','=', $k) -> update([
						'nav_sort' => $v,
					]);
				}
				// dump($data);die;
				$this->success('排序成功',url('lst'));
			}


			$navlist = $nav -> order('nav_sort asc') ->paginate(25);
			$this -> assign([
				'navlist'=>$navlist,

			]);
			return view('list');

		}


		public function add(){

			if (request()->isPost()){
				$data=input('post.');
				
				if ($data['nav_url']  && stripos($data['nav_url'],'http://') === false){
					$data['nav_url'] = 'http://'.$data['nav_url'];
				} 
				// else if (stripos($data['nav_url'],'https://') === false){
				// 	$data['nav_url'] = 'https://'.$data['nav_url'];
				// } else{
				// 	return $data['nav_url'];
				// }

				// $validate = validate('nav');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }


				$add=db('nav')->insert($data);
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
				
				if ($data['nav_url']  && stripos($data['nav_url'],'http://') === false){
					$data['nav_url'] = 'http://'.$data['nav_url'];
				}

				

				// $validate = validate('nav');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }



				$save=db('nav')->update($data);
				// dump($_FILES);
				// dump($data);die;
				if($save){
					$this->success('修改成功','lst');
				}else{
					$this->error('修改失败');
				}

				return;
			}



			$nav_id=input('nav_id');
			$navs = db('nav')->find($nav_id);
			$this->assign('navs',$navs);
			return view();

		}


		public function del($nav_id){
			$ardb = db('nav');

			$del=db('nav')->delete($nav_id);
			if($del){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}

		}


	}
<?php
	namespace app\admin\controller;

	use think\Controller;
	use catestree\Catestree;


	class CatesWords extends Controller
	{
		public function lst(){

			$cwList = db('cates_words') -> alias('cw')->field('cw.*,c.cates_name') -> join('cates c','cw.cw_cates_id=c.cates_id','LEFT') ->order('cw.cw_id desc')->paginate(25);
			// dump($cwList);die;
			$this -> assign('cwList',$cwList);

			return view('list');

		}


		public function add(){

			if (request()->isPost()){
				$data=input('post.');
				
				if ($data['cw_linkurl']  && stripos($data['cw_linkurl'],'http://') === false){
					$data['cw_linkurl'] = 'http://'.$data['cw_linkurl'];
				} 
				// else if (stripos($data['links_url'],'https://') === false){
				// 	$data['links_url'] = 'https://'.$data['links_url'];
				// } else{
				// 	return $data['links_url'];
				// }

				// $validate = validate('links');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }


				$add=db('cates_words')->insert($data);
				// dump($_FILES);
				// dump($data);die;
				if($add){
					$this->success('添加成功','lst');
				}else{
					$this->error('添加失败');
				}

				// return;
			}


			// 商品栏目
			$cates = new catestree();
			$cateslist = db('cates') ->select();
			$cateslist = $cates -> catestree($cateslist);
			$this -> assign([
				'cateslist' => $cateslist,
			]);



			return view();

		}


		public function edit(){

			if (request()->isPost()){
				$data=input('post.');
				
				if ($data['cw_linkurl']  && stripos($data['cw_linkurl'],'http://') === false){
					$data['cw_linkurl'] = 'http://'.$data['cw_linkurl'];
				}
				

				// $validate = validate('links');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }



				$save=db('cates_words')->update($data);
				// dump($_FILES);
				// dump($data);die;
				if($save){
					$this->success('修改成功','lst');
				}else{
					$this->error('修改失败');
				}

				return;
			}


			// 商品栏目
			$cates = new catestree();
			$cateslist = db('cates') ->select();
			$cateslist = $cates -> catestree($cateslist);



			$cw_id=input('cw_id');
			$cwList = db('cates_words')->find($cw_id);
			$this->assign([
				'cwList'=>$cwList,
				'cateslist' => $cateslist,
			]);
			return view();

		}


		public function del($cw_id){
			$CatesWords = db('cates_words');

			$del=$CatesWords->delete($cw_id);
			if($del){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}

		}

	}
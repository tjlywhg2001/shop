<?php
	namespace app\admin\controller;

	use think\Controller;
	use catestree\Catestree;

	class cates extends Controller
	{
		public function lst(){
			$cates =db('cates');
			$catest = new catestree();
			if (request()->isPost()) {
				$data=input('post.');
				$catest->sortss($data['cates_sort'],$cates);
				$this->success('排序成功',url('lst'));
			}
			$cateslist = $cates->order('cates_sort asc')->select();
			$cateslist = $catest ->catestree($cateslist);
			$this -> assign('cateslist',$cateslist);

			return view('list');

		}


		public function add(){
			$cates =db('cates');
			$catest = new catestree();
			$cateslist = $cates -> select();
			$cateslist = $catest ->catestree($cateslist);
			$this -> assign('cateslist',$cateslist);
			if (request()->isPost()){
				$data=input('post.');
				
				// if(in_array($data['cates_pid'], ['1','3'])){
				// 	$this->error("系统分类不能作为上级分类！");
				// }
				
				// if($data['cates_pid'] ==2){
				// 	$data['cate_type'] =3;
				// } 

				//  $catesID = $cates->field('cates_pid')->find($data['cates_pid']);
				//  $catesID = $catesID['cates_pid'];
				//  if ($catesID == 2 ){
				//  	$this->error("此分类不能作为上级分类！");
				//  }
				 


				// $validate = validate('cates');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }


				if ($_FILES['cates_img']['tmp_name']){
					$data['cates_img']=$this -> upload();
				}


				$add=db('cates')->insert($data);
				if($add){
					$this->success('添加成功','lst');
				}else{
					$this->error('添加失败');
				}
				$cateslist = $cates->order('cates_sort desc')->select();
				$cateslist = $catest ->catestree($cateslist);

				return;
			}
			$cates_id=input('cates_id');
			$catess = $cates ->find($cates_id);
			$this->assign('catess',$catess);


			return view();

		}


		public function edit(){
			$cates =db('cates');
			$catest = new catestree();
			$cateslist = $cates -> select();
			$cateslist = $catest ->catestree($cateslist);
			$this -> assign('cateslist',$cateslist);


			if (request()->isPost()){
				$data=input('post.');


				if ($_FILES['cates_img']['tmp_name']){
					$oldimg= $cates ->field('cates_img')->find($data['cates_id']);
					$oldimgs=imgupload.$oldimg['cates_img'];
						if (file_exists($oldimgs)){
							@unlink($oldimgs);
						}

					$data['cates_img']=$this -> upload();
				}


				// $validate = validate('cates');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }

				$save=$cates->update($data);
				if($save){
					$this->success('修改成功','lst');
				}else{
					$this->error('修改失败');
				}

				return;
			}



			$cates_id=input('cates_id');
			$catess = $cates ->find($cates_id);
			$this->assign('catess',$catess);
			return view();

		}



		public function del($cates_id){

			$cates =db('cates');
			$catesdel = new catestree();
			$al = $catesdel -> childrenids($cates_id,$cates);  //获取子栏目ID:4,5
			$al[] = intval($cates_id);  //获取栏目ID：2


			foreach ($al as $k => $v) {
				$art = $cates -> field('cates_id,cates_img') ->where(array('cates_id'=>$v)) ->select();
				foreach ($art as $k1 => $v1) {
					$oldimgs=imgupload.$v1['cates_img'];
					if (file_exists($oldimgs)){
						@unlink($oldimgs);
					}
				}
			}

			// $artid = db('article');
			// foreach ($al as $k => $v) {
			// 	$art = db('article') -> field('ar_id,ar_thumbnail') ->where(array('ar_catesID'=>$v)) ->select();
			// 	foreach ($art as $k1 => $v1) {
			// 		$oldimgs=imgupload.$v1['ar_thumbnail'];
			// 		if (file_exists($oldimgs)){
			// 			@unlink($oldimgs);
			// 		}
			// 		$artid -> delete($v1['ar_id']);
			// 	}
			// }

			$del=$cates->delete($al);

			if($del){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}

		}


		public function upload(){
		    // 获取表单上传文件 例如上传了001.jpg
		    $file = request()->file('cates_img');
		    
		    // 移动到框架应用根目录/public/uploads/ 目录下
		    if($file){
		        $info = $file->validate(['ext'=>'jpg,png,gif'])->move(ROOT_PATH . 'public' . DS . 'static'. DS . 'uploadss');
		        if($info){
		            // 成功上传后 获取上传信息
		            // 输出 jpg
		            // echo $info->getExtension();
		            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
		            return $info->getSaveName();
		            // 输出 42a79759f284b767dfcb2a0197904287.jpg
		            // echo $info->getFilename(); 
		        }else{
		            // 上传失败获取错误信息
		            echo $file->getError();
		        }
		    }
		}


	}
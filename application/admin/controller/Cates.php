<?php
	namespace app\admin\controller;

	use think\Controller;
	use catestree\Catestree;

	// 商品分类

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
			// 定义商品分类栏目
			$catest = new catestree();
			// cates信息
			$catesd = model('cates');
			// post信息
			if (request()->isPost()){
				// 当保存的信息内容
				$data=input('post.');
			
				// 处理图片
				if ($_FILES['cates_img']['tmp_name']){
					$data['cates_img']= $this -> upload();
				}

				// 处理推荐位
				$add = $catesd->save($data);
				if($add){
					$this->success('添加成功','lst');
				}else{
					$this->error('添加失败');
				}

			}

			// $cates_id=input('cates_id');

			// $catess = $cates ->find($cates_id);

			// 获取cates信息
			$cateslist = $catesd -> select();

			// 获取商品分类栏目信息
			$cateslist = $catest ->catestree($cateslist);

			// 推荐位
			$recpos = db('recpos');
			$reclist = $recpos -> where('rec_type','=',2) -> select();
			// dump($reclist);die;
			

			$this -> assign([
				'cateslist'=>$cateslist,
				'reclist' => $reclist,
				// 'catess' => $catess,
			]);


			return view();

		}


		public function edit(){
			$cates =db('cates');
			$catest = new catestree();
			$cateslist = $cates -> select();
			$cateslist = $catest ->catestree($cateslist);

			// 推荐位
			$recpos = db('recpos');
			$reclist = $recpos -> where('rec_type','=',2) -> select();

			// 提取商品分类推荐位
			$recposComm = db('recpos_comm');
			$_recposCommlist = $recposComm -> where(array('commodity_id'=> input('cates_id'),'recpos_type' =>2)) -> select();
			// dump($recposComm);die;
			$recposCommlist = array();
			foreach ($_recposCommlist as $k => $v) {
				$recposCommlist[] = $v['recpos_id'];
			}


			$this -> assign([
				'cateslist' => $cateslist,
				'reclist' => $reclist,
				'recposCommlist' => $recposCommlist,
			]);



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

				// $save=$cates->update($data);

				$save=model('cates') ->update($data);


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
			$commodity =db('commodity');
			foreach ($al as $k => $v) {
				db('recpos_comm') -> where( array( 'commodity_id' => $v, 'recpos_type' => 2 ) ) -> delete();
				$commodity -> where( array( 'cates_id' => $v ) ) -> delete();
			}

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
<?php
	namespace app\admin\controller;

	use think\Controller;


	class AlternateImg extends Controller
	{
		public function lst(){
			$AlternateImg = db('alternate_img');
			if ( request()->isPost() ) {
				$data=input('post.');
				foreach ($data['alimg_sort'] as $k => $v) {
					$alterlist = $AlternateImg -> where( 'alimg_id','=',$k ) -> update( ['alimg_sort' => $v] );
				}				
				$this->success('排序成功',url('lst'));
			}
			$alterlist = $AlternateImg->order('alimg_sort desc')->paginate(25);
			$this -> assign('alterlist',$alterlist);

			return view('list');

		}


		public function add(){

			if (request()->isPost()){
				$data=input('post.');
				
				if ($data['alimg_url']  && stripos($data['alimg_url'],'http://') === false){
					$data['alimg_url'] = 'http://'.$data['alimg_url'];
				} 
				// else if (stripos($data['alimg_url'],'https://') === false){
				// 	$data['alimg_url'] = 'https://'.$data['alimg_url'];
				// } else{
				// 	return $data['alimg_url'];
				// }

				if ($_FILES['alimg_src']['tmp_name']){
					$data['alimg_src']=$this -> upload();
				}

				// $validate = validate('AlternateImg');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }


				$add=db('alternate_img')->insert($data);
				// dump($_FILES);
				// dump($data);die;
				if($add){
					$this->success('添加成功','lst');
				}else{
					$this->error('添加失败');
				}

				return view('list');
			}

			return view();

		}


		public function edit(){

			if (request()->isPost()){
				$data=input('post.');
				
				if ($data['alimg_url']  && stripos($data['alimg_url'],'http://') === false){
					$data['alimg_url'] = 'http://'.$data['alimg_url'];
				}
				if ($_FILES['alimg_src']['tmp_name']){
					$oldimg=db('alternate_img')->field('alimg_src')->find($data['alimg_id']);
					$oldimgs=imgupload.$oldimg['alimg_src'];
						if (file_exists($oldimgs)){
							@unlink($oldimgs);
						}

					$data['alimg_src']=$this -> upload();
				}
				

				// $validate = validate('AlternateImg');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }



				$save=db('alternate_img')->update($data);
				// dump($_FILES);
				// dump($data);die;
				if($save){
					$this->success('修改成功','lst');
				}else{
					$this->error('修改失败');
				}

				return view('list');
			}


			$alimg_id=input('alimg_id');
			$alterEdit = db('alternate_img')->find($alimg_id);
			$this->assign([
				'alterEdit' => $alterEdit,
			]);
			return view();

		}


		public function del($alimg_id){
			$ardb = db('alternate_img');
			$oldimg= $ardb ->field('alimg_src')->find($alimg_id);
			$oldimgs=imgupload.$oldimg['alimg_src'];
			if (file_exists($oldimgs)){
				@unlink($oldimgs);
			}

			$del=db('alternate_img')->delete($alimg_id);
			if($del){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}

		}


		public function upload(){
		    // 获取表单上传文件 例如上传了001.jpg
		    $file = request()->file('alimg_src');
		    
		    // 移动到框架应用根目录/public/uploads/ 目录下
		    if($file){
		        $info = $file->validate(['ext'=>'jpg,png,gif'])->move(ROOT_PATH . 'public' . DS . 'static'. DS . 'uploadss');
		        if($info){
		            // 成功上传后 获取上传信息
		            $SaveImg = $info->getSaveName();
		            $SaveImgs = str_replace('\\','/',$SaveImg);
			        // dump( $SaveImgs );die;
		            return $SaveImgs;
		        }else{
		            // 上传失败获取错误信息
		            echo $file->getError();
		        }
		    }
		}
	}
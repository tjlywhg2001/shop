<?php
	namespace app\admin\controller;

	use think\Controller;


	class CatesAd extends Controller
	{
		public function lst(){



			$CatesAdList = db('cates_ad') -> alias('ca') -> field('ca.*,c.cates_id,c.cates_name,c.cates_pid') -> join('cates c','c.cates_id = ca.catesAd_catesId','LEFT') -> order('ca.catesAd_id desc') ->paginate(25);

			// $CatesAdList = db('cates_ad') -> order('catesAd_id desc') -> paginate(25);
			// dump($CatesAdList);die;
			$this -> assign([
				'CatesAdList' => $CatesAdList,
			]);

			return view('list');

		}


		public function add(){

			if (request()->isPost()){
				$data=input('post.');

				if ( $data['catesAd_position'] == 1 || $data['catesAd_position'] == 2) {
					$CateAdPos = db('catesAd') -> where( array( 'catesAd_position'=> $data['catesAd_position'], 'catesAd_catesId'=> $data['catesAd_catesId'] ) ) -> select();
					if ( $CateAdPos ) {
						$this->error('当前位置只能添加一个记录');
					}
				}
				
				if ($data['catesAd_url']  && stripos($data['catesAd_url'],'http://') === false){
					$data['catesAd_url'] = 'http://'.$data['catesAd_url'];
				} 
				// else if (stripos($data['brand_url'],'https://') === false){
				// 	$data['brand_url'] = 'https://'.$data['brand_url'];
				// } else{
				// 	return $data['brand_url'];
				// }

				if ($_FILES['catesAd_img']['tmp_name']){
					$data['catesAd_img']=$this -> upload();
				} else {
					$this->error('请上传图片');
				}

				// $validate = validate('brand');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }


				$add=db('cates_ad')->insert($data);
				// dump($_FILES);
				// dump($data);die;
				if($add){
					$this->success('添加成功','lst');
				} else {
					$this->error('添加失败');
				}

				return view('list');
			}

			// 提取商品分类
			$cates = db('cates');
			$cateslist = $cates -> where('cates_pid','=',0) -> select();

			// dump($cateslist);die;

			$this -> assign([
				'cateslist' => $cateslist,
			]);


			return view();

		}


		public function edit(){

			if (request()->isPost()){
				$data=input('post.');
				
				if ($data['catesAd_url']  && stripos($data['catesAd_url'],'http://') === false){
					$data['catesAd_url'] = 'http://'.$data['catesAd_url'];
				}

				if ($_FILES['catesAd_img']['tmp_name']){
					$oldimg = db('cates_ad')->field('catesAd_img')->find($data['catesAd_id']);
					$oldimgs = imgupload.$oldimg['catesAd_img'];
						if (file_exists($oldimgs)){
							@unlink($oldimgs);
						}

					$data['catesAd_img']= $this -> upload();
				}
				

				// $validate = validate('brand');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }



				$save=db('cates_ad')->update($data);
				// dump($_FILES);
				// dump($data);die;
				if($save){
					$this->success('修改成功','lst');
				}else{
					$this->error('修改失败');
				}

				return view('list');
			}


			// 提取商品分类
			$cates = db('cates');
			$cateslist = $cates -> where('cates_pid','=',0) -> select();

			// dump($cateslist);die;

			$catesAdId=input('catesAd_id');
			$catesAds = db('cates_ad')->find($catesAdId);
			// dump($catesAds);die;
			$this->assign([
				'catesAds' => $catesAds,
				'cateslist' => $cateslist,
			]);
			return view();

		}


		public function del($catesAdId){
			$CatesAd = db('cates_ad');
			$oldimg= $CatesAd -> field('catesAd_img') -> find($catesAdId);
			$oldimgs=imgupload.$oldimg['catesAd_img'];
			if (file_exists($oldimgs)){
				@unlink($oldimgs);
			}

			$del = $CatesAd -> delete($catesAdId);
			if($del){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}

		}


		public function upload(){
		    // 获取表单上传文件 例如上传了001.jpg
		    $file = request()->file('catesAd_img');
		    
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
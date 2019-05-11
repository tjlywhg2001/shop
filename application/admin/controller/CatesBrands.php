<?php
	namespace app\admin\controller;

	use think\Controller;


	class CatesBrands extends Controller
	{
		public function lst(){

			$cbList = db('cates_brands') -> alias('cb') -> field('cb.*,c.cates_id,c.cates_name') -> join('cates c','c.cates_id = cb.cb_catesid','LEFT') ->order('cb_id desc')->paginate(5);
			$cbBrandStr = array();
			foreach ($cbList as $k => $v) {
				$cbBrandIds = explode(',',$v['cb_brands_id']);
				$cbBrand = array();
				foreach ($cbBrandIds as $k1 => $v1) {
					$cbBrand[] = db('brand') -> where('brand_id','=',$v1) -> find();
				}
				$cbBrandName = array();
				foreach ($cbBrand as $k1 => $v1) {
					$cbBrandName[] = $v1['brand_name'];
				}
				$cbBrandStr[$k]['cb_brand_name'] = implode(',',$cbBrandName);
				$cbBrandStr[$k]['cb_id'] = $v['cb_id'];
			}
			$this -> assign([
				'cbList'=>$cbList,
				'cbBrandStr'=>$cbBrandStr,
			]);

			return view('list');

		}


		public function add(){

			// 商品分类
			$cates = db('cates') -> where(array('cates_pid' => 0)) -> select();

			// 品牌
			$brands = db('brand') -> select();
			$this -> assign([
				'brands' => $brands,
				'cates' => $cates,
			]);


			if (request()->isPost()){
				$data=input('post.');
				

				if ($data['cb_prourl']  && stripos($data['cb_prourl'],'http://') === false){
					$data['cb_prourl'] = 'http://'.$data['cb_prourl'];
				} 
				// else if (stripos($data['links_url'],'https://') === false){
				// 	$data['links_url'] = 'https://'.$data['links_url'];
				// } else{
				// 	return $data['links_url'];
				// }


				if ($_FILES['cb_proimg']['tmp_name']){
					$data['cb_proimg']=$this -> upload();
				}

				if (isset( $data['cb_brands_id'] )){
					$data['cb_brands_id'] = implode(',',$data['cb_brands_id'] );
				} else {
					$data['cb_brands_id'] = '';
				}


				// $validate = validate('links');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }


				$add=db('cates_brands')->insert($data);
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


			$cb_id=input('cb_id');
			$cbList = db('cates_brands')->find($cb_id);
			// dump($cbList);die;

			// 商品分类
			$cates = db('cates') -> where(array('cates_pid' => 0)) -> select();

			// 品牌
			$brands = db('brand') -> select();
			$this -> assign([
				'cbList' => $cbList,
				'brands' => $brands,
				'cates' => $cates,
			]);


			
			if (request()->isPost()){
				$data=input('post.');
				
				if ($data['cb_prourl']  && stripos($data['cb_prourl'],'http://') === false){
					$data['cb_prourl'] = 'http://'.$data['cb_prourl'];
				}
				if ($_FILES['cb_proimg']['tmp_name']){
					$oldimg=db('cates_brands')->field('cb_proimg')->find($data['cb_id']);
					$oldimgs=imgupload.$oldimg['cb_proimg'];
						if (file_exists($oldimgs)){
							@unlink($oldimgs);
						}

					$data['cb_proimg']=$this -> upload();
				}
				

				if (isset( $data['cb_brands_id'] )){
					$data['cb_brands_id'] = implode(',',$data['cb_brands_id'] );
				} else {
					$data['cb_brands_id'] = '';
				}


				// $validate = validate('links');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }



				$save=db('cates_brands')->update($data);
				// dump($_FILES);
				// dump($data);die;
				if($save){
					$this->success('修改成功','lst');
				}else{
					$this->error('修改失败');
				}

				return;
			}



			return view();

		}


		public function del($cb_id){
			$ardb = db('cates_brands');
			$oldimg= $ardb ->field('cb_proimg')->find($cb_id);
			$oldimgs=imgupload.$oldimg['cb_proimg'];
			if (file_exists($oldimgs)){
				@unlink($oldimgs);
			}

			$del=db('cates_brands')->delete($cb_id);
			if($del){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}

		}


		public function upload(){
		    // 获取表单上传文件 例如上传了001.jpg
		    $file = request()->file('cb_proimg');
		    
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
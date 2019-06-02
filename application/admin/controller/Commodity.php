<?php
	namespace app\admin\controller;

	use think\Controller;
	use catestree\Catestree;


	class Commodity extends Controller
	{


		public function lst() {

				// rc.*,rc.recpos_type,
			$field = ['
				g.*,
				c.cates_name,
				b.brand_name,
				t.type_name,
				SUM(p.product_commodity_number) produ
			'];

			$join = [
				// ['recpos_comm rc','g.cates_id=rc.commodity_id','LEFT'],
				// ['recpos r','rc.commodity_id=r.rec_name'],
				['cates c','g.cates_id=c.cates_id'],
				['brand b','g.brand_id=b.brand_id','LEFT'],
				['type t','g.type_id=t.type_id','LEFT'],
				['product p','g.commodity_id=p.product_commodity_id','LEFT'],
			];

			$commRes = db('commodity') -> alias('g') -> field($field) -> join($join) -> group('g.commodity_id') -> order('g.commodity_id DESC') -> paginate(20);


			$recpos = db('recpos_comm') -> alias('rc') -> field('rc.*,r.rec_id,r.rec_name') -> join('recpos r','rc.recpos_id=r.rec_id','LEFT') -> where(array('rc.recpos_type' => 1)) -> select();

			// dump($commRes);die;
			$this -> assign( [
				'commRes' => $commRes,
				'recpos' => $recpos,
			] );
			return view('list');
		}




		public function add(){

			$comm = db('commodity');

			if (request()->isPost()){
				$data=input('post.');




				$add= model('commodity') ->save($data);
				// dump($_FILES);
				// dump($data);die;
				if($add){
					$this->success('添加成功');
				}else{
					$this->error('添加失败');
				}

				// return;
			}



			// 提取会员级别数据
			$mblevel = db('member_level');
			$mblevellist = $mblevel -> field('level_id,level_name') -> select();

			// 提取推荐位数据
			$recpos = db('recpos');
			$recposlist = $recpos -> where('rec_type','=',1) -> select();

			// 获取商品类型
			$attrlists = db('type') -> select();

			// 商品栏目
			$cates = new catestree();
			$cateslist = db('cates') ->select();
			$cateslist = $cates -> catestree($cateslist);

			$brandlist = db('brand') -> field( 'brand_id,brand_name') -> select();


			$this -> assign([	'cateslist' => $cateslist,
								'brandlist' => $brandlist,
								'mblevellist' => $mblevellist,
								'attrlists' => $attrlists,
								'recposlist' => $recposlist
							]);






			return view();

		}


		public function edit(){

			$comm = db('commodity');

			$commodityId = input('commodity_id');

			if (request()->isPost()){
				$data=input('post.');
				//dump($data);die;
				$getsedit= model('commodity') ->update($data);
				// dump($_FILES);
				// dump($data);die;
				if($getsedit){
					$this->success('添加成功');
				}else{
					$this->error('添加失败');
				}

				// return;
			}



			// 提取会员级别数据
			$mblevel = db('member_level');
			$mblevellist = $mblevel -> field('level_id,level_name') -> select();


			// 获取商品类型
			$attrlists = db('type') -> select();

			// 商品栏目
			$cates = new catestree();
			$cateslist = db('cates') ->select();
			$cateslist = $cates -> catestree($cateslist);

			$brandlist = db('brand') -> field( 'brand_id,brand_name') -> select();

			// 当前商品信息
			$commedit = $comm -> find($commodityId);

			// 推荐位信息
			$recpos = db('recpos');
			$recposlist = $recpos -> where('rec_type','=',1) -> select();

			// 提取商品推荐位
			$recposComm = db('recpos_comm');
			$_recposCommlist = $recposComm -> where(array('commodity_id'=> $commodityId,'recpos_type' =>1)) -> select();
			// dump($recposCommlist);die;
			$recposCommlist = array();
			foreach ($_recposCommlist as $k => $v) {
				$recposCommlist[] = $v['recpos_id'];
			}
			// dump($recposCommlist);die;

			// 提取会员价钱数据
			$mbleveledit = db('member_price') -> where('commoditys_id','=', $commodityId) -> select();
			// dump($mbleveledit);die;
			$mblevelarr = array();
			foreach ($mbleveledit as $k => $v) {
				$mblevelarr[$v['price_mlevel_id']] = $v;
			}
			// 提取属性类型
			$typeedit = db('attr') -> where('attr_type_id', '=', $commedit['type_id']) -> select();
			// 提取商品属性
			$commattredit = db('commAttr') -> where('commattr_commid','=', $commodityId) -> select();
			$commattreditArr = array();
			foreach ($commattredit as $k => $v) {
				$commattreditArr[$v['commattr_attrid']][] = $v;
			}
			// dump($commattreditArr);die;
			// 提取图片数据
			$photoedit = db('comm_photo') -> where('comm_commodity_id','=', $commodityId ) -> select();

			// dump($photoedit);die;
			$this -> assign([	'cateslist' => $cateslist,
								'brandlist' => $brandlist,
								'mblevellist' => $mblevellist,
								'attrlists' => $attrlists,
								'commedit' => $commedit,
								'mblevelarr' => $mblevelarr,
								'photoedit' => $photoedit,
								'typeedit' => $typeedit,
								'commattreditArr' => $commattreditArr,
								'recposlist' => $recposlist,
								'recposCommlist' => $recposCommlist,
							]);






			return view();

		}

		public function del($commodity_id){


			$del=model('commodity')->destroy($commodity_id);
			if($del){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}

		}


		// 库存
		public function product($commodity_id){
			// 判断是否请求
			if ( request()->isPost()){
				// 删除信息
				db('product')-> where('product_commodity_id','=',$commodity_id) -> delete();
				// 获取所有数据信息
				$data = input('post.');
				// 定义要获取的name值
				$productAttrType = $data['product_attr_type'];
				$produmNumber = $data['product_number'];
				// 定义表名
				$product = db('product');


				foreach ($produmNumber as $k => $v) {
					$strAttr = array();
					foreach ($productAttrType as $k1 => $v1) {
						if (intval($v1[$k] <= 0)){
							continue 2;
						}
						$strAttr[] = $v1[$k];
					}
					sort( $strAttr );
					$strAttrs = implode(',', $strAttr );
					$product->insert([
						'product_commodity_id' => $commodity_id,
						'product_commodity_number' => $v,
						'product_commodity_attr_type' => $strAttrs,
					]);
				}
				// dump($data);die;



				// // 存入数据库
				// $add= model('product') ->save($data);
				// dump($data);die;

				// 判断是否传值成功
				// if($add){
				// 	$this->success('添加成功');
				// }else{
				// 	$this->error('添加失败');
				// }
			}

			// $commAttr = [
			// 	'c.commattr_id',
			// 	'c.commattr_attrid',
			// 	'c.commattr_value',
			// 	'a.attr_name',
			// ];
			// $commAttr = 'c.commattr_id,c.commattr_attrid,c.commattr_value,a.attr_name';
			$_attrContent = db('comm_attr') -> alias('c') -> field('c.commattr_id,c.commattr_attrid,c.commattr_value,a.attr_name') -> join('attr a','c.commattr_attrid = a.attr_id') -> where(array('commattr_commid'=>$commodity_id,'a.attr_type'=>1)) -> select();
			$attrContent = array();
			foreach ($_attrContent as $k => $v) {
				$attrContent[$v['attr_name']][] = $v;
			}

			$productRes = db('product') -> where ('product_commodity_id','=',$commodity_id) -> select();

			$this -> assign([
				'attrContent'=>$attrContent,
				'productRes'=>$productRes,
			]);

			// dump($productRes);die;
			return view();
		}


		
		// public function upload(){
		//     // 获取表单上传文件 例如上传了001.jpg
		//     $file = request()->file('commodity_og_thumb');
		    
		//     // 移动到框架应用根目录/public/uploads/ 目录下
		//     if($file){
		//         $info = $file->validate(['ext'=>'jpg,png,gif'])->move(ROOT_PATH . 'public' . DS . 'static'. DS . 'uploadss');
		//         if($info){
		//             // 成功上传后 获取上传信息
		//             // 输出 jpg
		//             // echo $info->getExtension();
		//             // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
		//             return $info->getSaveName();
		//             // 输出 42a79759f284b767dfcb2a0197904287.jpg
		//             // echo $info->getFilename(); 
		//         }else{
		//             // 上传失败获取错误信息
		//             echo $file->getError();
		//         }
		//     }
		// }

		public function ajaxdelphoto($id){
			$photo = db('comm_photo');
			// dump($photo);die;
			$photosId = $photo -> find($id);
			$ogthumb = imgupload.$photosId['comm_photo_og'];
			$smthumb = imgupload.$photosId['comm_photo_sm'];
			$midthumb = imgupload.$photosId['comm_photo_mid'];
			$bigthumb = imgupload.$photosId['comm_photo_big'];
    		@unlink($ogthumb);
    		@unlink($smthumb);
    		@unlink($midthumb);
    		@unlink($bigthumb);

    		$del = $photo -> delete($id);
    		if ($del){
    			echo 1;
    		} else {
    			echo 2;
    		}
		}



	}
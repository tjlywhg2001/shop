<?php
	namespace app\admin\controller;

	use think\Controller;
	use catestree\Catestree;


	class Commodity extends Controller
	{


		public function lst() {

			$join = [
				['cates c','g.cates_id=c.cates_id'],
				['brand b','g.brand_id=b.brand_id','LEFT'],
				['type t','g.type_id=t.type_id','LEFT'],
				['product p','g.commodity_id=p.product_commodity_id','LEFT'],
			];

			$commRes = db('commodity') -> alias('g') -> field('g.*,c.cates_name, b.brand_name, t.type_name, SUM(p.product_commodity_number) produ') -> join($join) -> group('g.commodity_id') -> order('g.commodity_id DESC') -> paginate(10);
			// dump($commRes);die;
			$this -> assign( [
				'commRes' => $commRes,
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
								'attrlists' => $attrlists
							]);






			return view();

		}


		public function edit(){

			if (request()->isPost()){
				$data=input('post.');
				

				if ($data['config_formtype'] =='radio' || $data['config_formtype'] =='select' || $data['config_formtype'] =='checked' ) {
				 	# code...
				 } {
					$data['config_values'] = str_replace('，', ',', $data['config_values']);
					$data['config_default'] = str_replace('，', ',', $data['config_default']);
				}
			
				

				// $validate = validate('config');
				// if (!$validate -> check($data)){
				// 	$this -> error( $validate -> getError());
				// }



				$save=db('config')->update($data);
				// dump($_FILES);
				// dump($data);die;
				if($save){
					$this->success('修改成功','lst');
				}else{
					$this->error('修改失败');
				}

				return;
			}



			$config_id=input('config_id');
			$config = db('config')->find($config_id);
			$this->assign('config',$config);
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




	}
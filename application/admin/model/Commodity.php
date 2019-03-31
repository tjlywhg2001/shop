<?php
namespace app\admin\model;
use think\Model;

class Commodity extends Model
{

	public $field = true;

	// public 表示全局，类内部外部子类都可以访问；
	// private表示私有的，只有本类内部可以使用；
	// protected表示受保护的，只有本类或子类或父类中可以访问；
	protected static function init()
	{
		//生成商品主图的三张缩略图
        Commodity::beforeInsert(function ($commodity) {
        	// 添加图片
        	if ($_FILES['commodity_ogthumb']['tmp_name']) {
	        	$thumbs=$commodity->upload('commodity_ogthumb');
	        	$ogthumb=date("Ymd").DS.$thumbs;
	        	$bigthumb=date("Ymd").DS.'big_'.$thumbs;
	        	$midthumb=date("Ymd").DS.'mid_'.$thumbs;
	        	$smthumb=date("Ymd").DS.'sm_'.$thumbs;
	        	$image = \think\Image::open(imgupload.$ogthumb);
	        	$image->thumb(500, 500)->save(imgupload.$bigthumb);
	        	$image->thumb(200, 200)->save(imgupload.$midthumb);
	        	$image->thumb(80, 80)->save(imgupload.$smthumb);

	        	$commodity->commodity_ogthumb = $ogthumb;
	        	$commodity->commodity_bigthumb = $bigthumb;
	        	$commodity->commodity_midthumb = $midthumb;
	        	$commodity->commodity_smthumb = $smthumb;

        	}
        	// dump($smthumb);die;
        	$commodity->commodity_code = time().rand(111111,999999);

        });


        Commodity::beforeUpdate(function ($commodity) {
	        // 定义商品Id
	     	$commodityid = $commodity -> commodity_id;
	     	// 处理商品属性
        	$goodsData = input('post.');
        	// dump($goodsData);die;
        	// 新增商品属性
        	if ( isset( $goodsData['comm_attr'] ) ) {
	        	$i=0;
        		foreach ($goodsData['comm_attr'] as $k => $v) {
        			if ( is_array($v) ) {

        				if ( !empty($v) ){
	        				foreach ( $v as $k1 => $v1 ) {
	        					if ( !$v1 ) {
	        						$i++;
	        						continue;
	        					}
		        				db('comm_attr') -> insert( ['commattr_attrid' => $k, 'commattr_value' => $v1, 'commattr_attrprice' =>$goodsData['commattr_attrprice'][$i], 'commattr_commid' => $commodityid ] );
		        				$i++;
		        				
	        				}
        				}
        			} else {
    					if ( !empty($v) ) {
	        				db('comm_attr') -> insert(['commattr_attrid' => $k, 'commattr_value' => $v, 'commattr_commid' => $commodityid ] );
    					}
        			}
        		}

        	}

        	// 修改商品属性
        	if ( isset( $goodsData['old_comm_attr'] ) ) {
	        	$oldcommPrice = $goodsData['old_commattr_attrprice'];
	        	$oldattrIdKeys = array_keys($oldcommPrice);
	        	$oldattrValues = array_values($oldcommPrice);
	        	// dump($oldattrKeys);
	        	// dump($oldattrValues);die;
	        	$i=0;
        		foreach ($goodsData['old_comm_attr'] as $k => $v) {
        			if ( is_array($v) ) {

        				if ( !empty($v) ){
	        				foreach ( $v as $k1 => $v1 ) {
	        					if ( !$v1 ) {
	        						$i++;
	        						continue;
	        					}
		        				db('comm_attr') -> where( 'commattr_id', '=', $oldattrIdKeys[$i] ) -> update( ['commattr_value' => $v1, 'commattr_attrprice' =>$oldattrValues[$i] ] );
		        				$i++;
		        				
	        				}
        				}
        			} else {
    					if ( !empty($v) ) {
	        				db('comm_attr') -> where( 'commattr_id', '=', $oldattrIdKeys[$i] ) -> update( [ 'commattr_value' => $v, 'commattr_attrprice' => $oldattrValues[$i] ] );
	        				$i++;
    					}
        			}
        		}

        	}


	       	// 商品相册处理
        	// dump($_FILES);die;
        	if($commodity -> _hasimgs($_FILES['comm_photo']['tmp_name'])){

    			$files = request()->file('comm_photo');
			    foreach($files as $file){
			        // 移动到框架应用根目录/public/uploads/ 目录下
			        $info = $file-> validate( ['ext' => 'jpg,png,gif'] ) -> move( ROOT_PATH . 'public' . DS . 'static'. DS . 'uploadss');
			        if($info){
			            // 成功上传后 获取上传信息
			            // 输出 jpg
			            $photos = $info -> getFilename();
			        	$ogphoto=date("Ymd").DS.$photos;
			        	$bigphoto=date("Ymd").DS.'big_'.$photos;
			        	$midphoto=date("Ymd").DS.'mid_'.$photos;
			        	$smphoto=date("Ymd").DS.'sm_'.$photos;
			        	$photon = \think\Image::open(imgupload.$ogphoto);
			        	$photon->thumb(500, 500)->save(imgupload.$bigphoto);
			        	$photon->thumb(200, 200)->save(imgupload.$midphoto);
			        	$photon->thumb(80, 80)->save(imgupload.$smphoto);
			        	@unlink(imgupload.$ogphoto);
	       				db('comm_photo') -> insert(['comm_commodity_id' => $commodityid,'comm_photo_og' => $ogphoto, 'comm_photo_big' => $bigphoto, 'comm_photo_mid' => $midphoto, 'comm_photo_sm' => $smphoto]);
			        }else{
			            // 上传失败获取错误信息
			            echo $file->getError();
			        }    
			    }
        	}
 
        	// 处理会员价格
        	$mblevelarr = $commodity -> mls;
        	$mbprice = db('member_price');
        	// 删除会员价格
        	$mbprice -> where('commoditys_id', '=', $commodityid) -> delete();
         	// 批量写入会员价格
        	if($mblevelarr){

        		foreach ($mblevelarr as $k => $v) {

        			if (trim($v) == '') {
        				continue;
        			} else {
	       				$mbprice -> insert(['price_mlevel_id' => $k, 'price_mpprice' => $v, 'commoditys_id' => $commodityid]);
        			}
        		}
        	}
       	// 修改图片
        	if ($_FILES['commodity_ogthumb']['tmp_name']) {
        		// 图片存在那删除图片
        		@unlink(imgupload.$commodity -> commodity_ogthumb);
        		@unlink(imgupload.$commodity -> commodity_smthumb);
        		@unlink(imgupload.$commodity -> commodity_midthumb);
        		@unlink(imgupload.$commodity -> commodity_bigthumb);
        		// 添加图片
	        	$thumbs=$commodity->upload('commodity_ogthumb');
	        	$ogthumb=date("Ymd").DS.$thumbs;
	        	$bigthumb=date("Ymd").DS.'big_'.$thumbs;
	        	$midthumb=date("Ymd").DS.'mid_'.$thumbs;
	        	$smthumb=date("Ymd").DS.'sm_'.$thumbs;
	        	$image = \think\Image::open(imgupload.$ogthumb);
	        	$image->thumb(500, 500)->save(imgupload.$bigthumb);
	        	$image->thumb(200, 200)->save(imgupload.$midthumb);
	        	$image->thumb(80, 80)->save(imgupload.$smthumb);

	        	$commodity->commodity_ogthumb = $ogthumb;
	        	$commodity->commodity_bigthumb = $bigthumb;
	        	$commodity->commodity_midthumb = $midthumb;
	        	$commodity->commodity_smthumb = $smthumb;

        	}
        	// // dump($smthumb);die;
        	// $commodity->commodity_code = time().rand(111111,999999);

        });


        Commodity::afterInsert(function($commodity){
        	// 批量写入会员价格
        	$mblevelarr = $commodity -> mls;

        	$commodityid = $commodity -> commodity_id;
        	if($mblevelarr){

        		foreach ($mblevelarr as $k => $v) {

        			if (trim($v) == '') {
        				continue;
        			} else {
	       				db('member_price') -> insert(['price_mlevel_id' => $k, 'price_mpprice' => $v, 'commoditys_id' => $commodityid]);
        			}
        		}
        	}


        	// 处理商品属性
        	// $commodityAttr = $commodity -> comm_attr;
        	// $commodityPrice = $commodity -> comm_price;
        	$goodsData = input('post.');
        	$i=0;
        	if ( isset( $goodsData['comm_attr'] ) ) {
        		foreach ($goodsData['comm_attr'] as $k => $v) {
        			if ( is_array($v) ) {

        				if ( !empty($v) ){
	        				foreach ( $v as $k1 => $v1 ) {
	        					if ( !$v1 ) {
	        						$i++;
	        						continue;
	        					}
		        				db('comm_attr') -> insert( ['commattr_attrid' => $k, 'commattr_value' => $v1, 'commattr_attrprice' =>$goodsData['commattr_attrprice'][$i], 'commattr_commid' => $commodityid ] );
		        				$i++;
		        				
	        				}
        				}
        			} else {
    					if ( !empty($v) ) {
	        				db('comm_attr') -> insert(['commattr_attrid' => $k, 'commattr_value' => $v, 'commattr_commid' => $commodityid ] );
    					}
        			}
        		}

        	}



        	// 商品相册处理
        	
        	// dump($_FILES);die;
        	if($commodity -> _hasimgs($_FILES['comm_photo']['tmp_name'])){

        			$files = request()->file('comm_photo');
				    foreach($files as $file){
				        // 移动到框架应用根目录/public/uploads/ 目录下
				        $info = $file-> validate( ['ext' => 'jpg,png,gif'] ) -> move( ROOT_PATH . 'public' . DS . 'static'. DS . 'uploadss');
				        if($info){
				            // 成功上传后 获取上传信息
				            // 输出 jpg
				            $photos = $info -> getFilename();
				        	$ogphoto=date("Ymd").DS.$photos;
				        	$bigphoto=date("Ymd").DS.'big_'.$photos;
				        	$midphoto=date("Ymd").DS.'mid_'.$photos;
				        	$smphoto=date("Ymd").DS.'sm_'.$photos;
				        	$photon = \think\Image::open(imgupload.$ogphoto);
				        	$photon->thumb(500, 500)->save(imgupload.$bigphoto);
				        	$photon->thumb(200, 200)->save(imgupload.$midphoto);
				        	$photon->thumb(80, 80)->save(imgupload.$smphoto);
				        	@unlink(imgupload.$ogphoto);
		       				db('comm_photo') -> insert(['comm_commodity_id' => $commodityid,'comm_photo_og' => $ogphoto, 'comm_photo_big' => $bigphoto, 'comm_photo_mid' => $midphoto, 'comm_photo_sm' => $smphoto]);
				        }else{
				            // 上传失败获取错误信息
				            echo $file->getError();
				        }    
				    }

        	}



        });








		commodity::beforeDelete(function($commodity){

			$commodityid = $commodity->commodity_id;
			// 删除相册
			if ( $commodity->commodity_ogthumb ){
				$thumb = [];
				$thumb[] = imgupload.$commodity->commodity_ogthumb;
				$thumb[] = imgupload.$commodity->commodity_bigthumb;
				$thumb[] = imgupload.$commodity->commodity_midthumb;
				$thumb[] = imgupload.$commodity->commodity_smthumb;
				foreach ($thumb as $k => $v) {
					if (file_exists($v)) {
						@unlink( $v );
					}
				}
			};


			// 会员价格
			db('member_price')->where('commoditys_id','=',$commodityid )->delete();

			// 属性			
			db('comm_attr')->where('commattr_commid','=',$commodityid )->delete();

			// 商品相册
			$commodityRes = model('CommPhoto')->where( 'comm_commodity_id','=',$commodityid )->select();
			if (!empty($commodityRes)) {
				foreach ($commodityRes as $k => $v) {
					if ( $v->comm_photo_og ){
						$photos = [];
						$photos[] = imgupload.$v->comm_photo_og;
						$photos[] = imgupload.$v->comm_photo_big;
						$photos[] = imgupload.$v->comm_photo_mid;
						$photos[] = imgupload.$v->comm_photo_sm;
						foreach ($photos as $k1 => $v1) {
							if (file_exists($v1)) {
								@unlink( $v1 );
							}
						}
					}	
				}
			}
			model('commPhoto')->where( 'comm_commodity_id','=',$commodityid )->delete();

			// dump($commodityid);die;

		});


    }













    // 商品相册是否有图片上传判断
    private function _hasimgs($tmparr){

    	foreach ($tmparr as $k => $v) {
    		if ($v) {
    			return true;
    		}
    	}

    	return false;

    }



	public function upload($imgName){
	    // 获取表单上传文件 例如上传了001.jpg
	    $file = request()->file($imgName);
	    
	    // 移动到框架应用根目录/public/uploads/ 目录下
	    if($file){
	        $info = $file->validate(['ext'=>'jpg,png,gif'])->move(ROOT_PATH . 'public' . DS . 'static'. DS . 'uploadss');
	        if($info){
	            // 成功上传后 获取上传信息
	            // 输出 jpg
	            // echo $info->getExtension();
	            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
	             // $info->getSaveName();
	            // 输出 42a79759f284b767dfcb2a0197904287.jpg
	            return $info->getFilename(); 
	        }else{
	            // 上传失败获取错误信息
	            echo $file->getError();
	        }
	    }
	}







}
<?php
namespace app\index\model;

use catestree\Catestree;

use think\Model;
/**
* 
*/
class Commodity extends Model
{

    
    public function HomeShowGoods($recposid,$limit=''){

        $recpos = db('recpos_comm');
        $_recposlist = $recpos -> where(array('recpos_type' => 1,'recpos_id' => $recposid )) -> select();
        $recposlist = array();
        foreach ($_recposlist as $k => $v) {
            $recposlist[] = $v['commodity_id'];
        }
        $map['commodity_id'] = array('IN',$recposlist);
        $recposList = $this -> field('commodity_id,commodity_name,commodity_smthumb') -> where($map) -> limit($limit) -> select();

        // dump($recposList);die;
        
        return $recposList;

    }

    // 首页的推荐商品（新品和精品）
    public function GetCommRecpos( $cateID, $recposID ){

            // 获取顶级栏目的所有子栏目
            $RecposCommTree = new Catestree();
            $RecposCatesId = $RecposCommTree -> childrenids( $cateID , db('cates'));
            $RecposCatesId[] = $cateID;

            // 获取被推荐的所有当前商品id
            $RecposCommId = db('recpos_comm') -> where( array( 'recpos_id' => $recposID, 'recpos_type' => 1 ) ) -> select();
            $RecposCommIds = array();
            foreach ($RecposCommId as $k => $v) {
                $RecposCommIds[] = $v['commodity_id'];
            }

            // 将数组转为字符串
            $map['cates_id'] = array( 'IN', $RecposCatesId );
            $map['commodity_id'] = array( 'IN', $RecposCommIds );

            // 获取被推荐商品的所有信息
            $CommRecposArr = db('commodity') -> where( $map ) -> limit(6) -> order('commodity_id DESC') -> select();
            // dump($CommRecposArr);die;
            
            return $CommRecposArr;

    }


}




?>
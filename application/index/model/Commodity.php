<?php
namespace app\index\model;

use think\Model;
/**
* 
*/
class Commodity extends Model
{

    public function HomeShowGoods($recposid,$limit=''){
    // public function HomeShowGoods(){

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


}




?>
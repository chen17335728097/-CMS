<?php
namespace app\common\controller;
/*
 * 日志操作类，入库
 * */
use app\common\controller\BaseCommon;
class Logs
{   
    //添加日志数据
 public  static  function Log($data){
        $res = db("log")->insert($data);
        if($res){
            return true;
        }else{
            return false;
        }
 }
 /***
  *
  * @param $message 操作描述说明
  * @param $rebate_member_id 会员ID
  * @param $rebate_type 操作类型(10:推荐返利，20：消费返利,30：提现日志)
  *
  ***/
 public static function return_rebate_log($message,$rebate_member_id,$rebate_type=10){
        $insert_data = array(
            'rebate_value'=>$message,
            'rebate_member_id'=>$rebate_member_id,
            'rebate_type'=>$rebate_type
        );
        $res = BaseCommon::insertOne('rebate_log',$insert_data);
        if($res){
            return true;
        }else{
            return false;
        }
 }








}
?>
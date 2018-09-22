<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/12
 * Time: 1:19
 */

namespace app\back\controller;

use app\back\controller\BaseAdmin;
class Reporting extends BaseAdmin 
{
     public function _initialize()
     {
         parent::_initialize();
         $this->assign("active",580);
     }
     //营业报表
    public function index(){
        $days = date("t");
        $month = date("Y-m");
        $recharge = [];//充值
        $consume = [];//消费
        $day = [];//天数
        $average = [];//平均
        for($i=1;$i<=$days;$i++){

            $r = return_total_days($month . '-' . $i);
            $c = return_consume_days($month . '-' . $i);
            $day[] = $i;
            $recharge[] = $r;
            $consume[]  = $c;
            $average[] = $r+$c;
        }

       /* $recharge = [
            'name'=>"会员充值",
            'type'=>"bar",
            'stack'=> '总量',
            'itemStyle'=>[
                'normal'   =>[
                    'barBorderColor'=>'rgba(0,0,0,0)',
                    'color'=> 'rgba(0,0,0,0)'
                ],
                'emphasis'=>[
                    'barBorderColor'=>'rgba(0,0,0,0)',
                    'color'=>'rgba(0,0,0,0)'
                ]
            ]
        ];*/
       $data = array_merge_recursive($recharge,$consume);
        $max = max($data);
        $min = min($data);
        $this->assign("max",$max);
        $this->assign("min",$min);
        $this->assign("day",json_encode($day));
        $this->assign("average",json_encode($average));
        $this->assign("recharge",json_encode($recharge));
        $this->assign("consume",json_encode($consume));
        return $this->fetch("index");
    }
}
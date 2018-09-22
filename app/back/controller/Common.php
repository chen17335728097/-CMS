<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/27 0027
 * Time: 23:57
 */

namespace app\back\controller;

use app\back\controller\BaseAdmin;
use app\common\controller\BaseCommon;

class Common extends BaseAdmin
{
    public function _initialize(){
        parent::_initialize();
    }
    function common(){
        if(\request()->isAjax()){
            $data = \input("id/a");
            $for = array_filter($data);
            $format_data = BaseCommon::findMore('product_format','format_value',['format_id'=>['in',$for]],'','');
            $new_return = [];
            if(!empty($format_data)){
                foreach ($format_data as $val){
                    $new_return[] = unserialize($val['format_value']);
                }
            }
            $new_array = return_goods_attr($new_return);
            return json($new_array);
        }else{
            return json(['code'=>200]);
        }
    }
}
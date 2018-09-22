<?php
/**
 * Created by 多多科技.
 * User: 陈中
 * Date: 2017/12/18
 * Time: 11:30
 */

namespace app\common\wxApi;

use app\common\wxApi\WxPayDataBase;
class WxPayPromotion extends WxPayDataBase
{
    function setMch_appid($value){
        $this->values['mch_appid'] = $value;
    }

}
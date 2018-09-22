<?php

/**
 * @company 至开科技
 * @author 海豚之泪
 * @email 499211940@qq.com
 *
 * *******************************************************************************************/
 
namespace app\back\controller;

class Order extends BaseAdmin{
    /**
     * 
     * 构造函数
     * @param $model 模型
     * **/
    private $model = "";
    public function _initialize(){
        parent::_initialize();
    }
    /**
     * 
     * 订单列表
     * 
     * **/
    public function order(){
        return $this->fetch();
    }
}
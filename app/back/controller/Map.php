<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/17
 * Time: 16:19
 */

namespace app\back\controller;

use app\back\controller\BaseAdmin;
class Map extends BaseAdmin
{
    /**
    *
     * 后台地图
     *
     **/
    public function map(){

        return $this->fetch();
    }
}
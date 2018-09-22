<?php
namespace app\common\controller;

use think\Controller;
class CommonBase extends Controller{
    /**
     * 
     * 构造函数
     * 
     * **/
    public function _initialize(){
        parent::_initialize();
        //重新定义模块、控制器、方法
        if (! defined('MODULE_NAME')) {
            define('MODULE_NAME', $this->request->module());
        }
        if (! defined('CONTROLLER_NAME')) {
            define('CONTROLLER_NAME', $this->request->controller());
        }
        if (! defined('ACTION_NAME')) {
            define('ACTION_NAME', $this->request->action());
        }
        $config = BaseCommon::findOne('config','',['id'=>1]);
        $this->assign('config',$config);
    }
}
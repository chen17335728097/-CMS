<?php

/**
 * @company 至开科技
 * @author 海豚之泪
 * @email 499211940@qq.com
 *
 * *******************************************************************************************/
 
namespace app\back\controller;

use app\common\controller\CommonBase;
use think\Session;
use app\common\controller\BaseCommon;
class BaseAdmin extends CommonBase{
    public function _initialize(){   
        parent::_initialize();
        
        $user_id = \session("user_id");
        $ip = Session::get('IP');
        //判断是否登录
        if(!$user_id){
            showMessages("请登录",'login.html',2);
        }
        //判断权限
        $model = strtolower(MODULE_NAME . '/' . CONTROLLER_NAME . '/' . ACTION_NAME);
       /*  if(!in_array($model,array('back/index/index','back/index/welcome','back/login/login','back/login/login_out'))){
            if(!AuthCheck($model,$user_id)){
                showMessages('对不起，你没有操作权限',url('back/index/welcome'),3);
            }
        } */
        $config = BaseCommon::findOne("config","web_name",['id'=>1]);
        $name = empty($config['web_name']) ? "" : $config['web_name'];
        $this->assign("name",$name);
        $this->assign("username",\session("username"));
    }
    /**
     * 
     * 空操作方法
     * 
     * **/
    public function _empty(){
        showMessages("对不起，你访问的页面未找到",'back_index.html',5);
    }
}

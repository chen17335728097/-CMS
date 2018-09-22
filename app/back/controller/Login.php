<?php

/**
 * @company 至开科技
 * @author 海豚之泪
 * @email 499211940@qq.com
 *
 * *******************************************************************************************/
 
namespace app\back\controller;

use app\common\controller\BaseCommon;
use think\captcha\Captcha;
use think\Controller;
use app\back\model\Admin;
use app\common\controller\Logs;
class Login extends Controller {
   
    /**
     * 
     * 后台登录页面
     * 
     * **/
    public function login(){
        \session(null);
        $config = BaseCommon::findOne("config","web_name",['id'=>1]);
        $name = empty($config['web_name']) ? "河南一百度" : $config['web_name'];
        $this->assign("name",$name);
        return $this->fetch("login/login");
    }
    /**
     * 
     * 后台验证码
     * 
     * **/
    public function verity(){
        $config =    [
            // 验证码字体大小
            'fontSize'    =>    30,
            // 验证码位数
            'length'      =>    3,
            // 关闭验证码杂点
            'useNoise'    =>    false,
        ];
        $c = new Captcha($config);
        return $c->entry();
    }
    /**
     * 
     * 后台登录验证
     * 
     * **/
    public function check_login(){
        $code = \input("captcha");
        $user = \input("name");
        $password = \input("password");
        $captcha = new Captcha();
        //检查验证码是够正确

        if(!$captcha->check($code)){
            exit(json_encode(array('msg'=>"登陆失败,验证码验证错误",'code'=>400)));
        }
        if(Admin::check_pass($user,$password)){
            //登录日志
            $logs = array(
                'log_title'=>\session('username') . "登录系统后台成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );

            Logs::log($logs);
            exit(json_encode(array('msg'=>"登陆成功,欢迎登陆后台管理系统",'code'=>200)));
        }else{
            exit(json_encode(array('msg'=>"登陆失败,登陆密码错误",'code'=>400)));
        }
    }
    /**
     * 
     * 后台退出登录
     * 
     * **/
    public function login_out(){
        session(null);
        showMessages("退出成功",url('back/login/login'),2);
    }
}
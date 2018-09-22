<?php
namespace app\back\model;

/**
 * 
 * 用户管理
 * 
 * ***/
use think\Model;
use think\Db;
use think\Request;
use think\Session;
class Admin extends Model{
    protected $table = "think_auth_user";
    public function __construct(){
        parent::__construct();
    }
    //检测登录账号及密码
    public static function check_pass($name,$pass){
        
        if(empty($name) || empty($pass)){
            return false;
        }
        $result = db("auth_user")->where(array('username'=>$name,'state'=>0,'is_delete'=>0,'password'=>md5($pass)))->find();
       
        //登陆成功
        if($result){
           $data = array(
               'login_num'=>array('exp','login_num+1'),
               'last_login_time'=>time()
           );
           $ip = Request::instance()->ip();
           db("auth_user")->where("id","=",$result['id'])->setInc("login_num",1);
           Session::set("user_id",$result['id']);
           Session::set("username",$result['username']);
           Session::set("login_num",$result['login_num']);
           Session::set("last_login_time",$result['last_login_time']);
           Session::set("IP",$ip);
           return true;
        }else{
            return false;
        }
        
    }
    /**
     * 
     * 根据用户id查询用户信息
     * 
     * **/
    public function memberinfo($id){
        
        return db("auth_user")->where($id)->find();
    }
    /**
     *
     * 查询多条用户信息
     *
     * **/
    public function memberlist($where){
        return db("auth_user")->where($where)->select();
    }
    /**
     * 
     * 添加管理员
     * 
     * **/
    public function addAdmin($data){
        $result = db("auth_user")->insert($data);
        if(empty($result)){
            return false;
        }
        return db("auth_user")->getLastInsID();
    }
    /**
     * 
     * 获取管理员列表
     * 
     * **/
    public function getAdminAll($where,$page,$pagesize){
        return db("auth_user")->where($where)->order('id','desc')->limit(($page-1)*$pagesize,$pagesize)->select();
    }
    /**
     * 
     * 删除管理员记录
     * @param $id 管理员id
     * **/
    public function delAdmin($id){
        $data = ['is_delete'=>1];
        return db('auth_user')->where('id','in',$id)->update($data);
    }
    /**
     *
     * 管理员编辑
     *
     * **/
    public function editAdmin($data,$group){
        //开启事务
        Db::startTrans();
        $statue = false;
        $msg = "操作成功";
        try{
            $re  = Db::table("think_auth_user")->where(['id'=>$data['id']])->update($data);
            $res = Db::table("think_auth_group_access")->where(['uid'=>$group['uid']])->update($group);
            // 提交事务
            Db::commit();
            $statue = ture;
        } catch (\Exception $e) {
            // 回滚事务
            $msg =  $e->getMessage();
            Db::rollback();
        }
        if($statue){
            return true;
        }else{
            showMessages("",'back_admin.html',3);
        }
    }
    /**
     * 
     * 获取用户组
     * 
     * **/
    public function getGroupList(){
        return db("auth_group")->where(['status'=>1])->order("id","asc")->select();
    }
    /**
     * 
     *添加分组
     * 
     * **/
    public function allocateAuth($groupid,$uid){
        $data = ['group_id'=>$groupid,'uid'=>$uid];
        return Db::name("auth_group_access")->insertGetId($data);
    }
}
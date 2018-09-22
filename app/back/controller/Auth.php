<?php

/**
 * @company 至开科技
 * @author 海豚之泪
 * @email 499211940@qq.com
 *
 * *******************************************************************************************/
 
namespace app\back\controller;
/***
 * @ 陈中  499211940@qq.com
 * 
 * 权限管理，管理员管理，角色管理
 * 
 * 
 * ******/
use app\back\controller\BaseAdmin;
use app\back\model\Auth as AuthModel;
use app\back\model\Admin as AdminModel;
use app\common\controller\Logs;
use think\Db;

/**
 *
 * 权限管理控制器
 *
 * **/
class Auth extends BaseAdmin{
    protected $model = "";
    protected $adminModel = "";
    /**
    *
    *构造函数
    *
    **/
    public function _initialize(){
        parent::_initialize();
        $this->model =  new AuthModel;
        $this->adminModel = new AdminModel;
        $this->assign("active",80);
    }
/*******************************************************权限管理****************************************************************************************************************************************/
    /**
     * 
     * 权限列表管理
     * 
     * **/
    public function auth(){
        $list = $this->model->getAuthList();        
        $data = collection($list)->toArray();

        $auth_list = getAuthTree($data);

        //var_dump($auth_list);exit;
        $this->assign("authObj",json_encode($data));
        $this->assign("auth_list",$auth_list);
        return $this->fetch("auth/auth");
    }
    /**
     *
     * 权限规则添加
     *
     * **/
    public function auth_add(){
        $auth_list = $this->model->getAuthList();
        $this->assign("auth_list",getAuthTree($auth_list));
        return $this->fetch("auth/auth_add");
    }
    /**
     *
     * 权限规则保存
     *
     * **/
    public function auth_addSave(){
            $data = \input("post.");
            if(empty($data['status'])){
                $data['status']=0;
            }
            $res = $this->model->add($data);
            if($res){
                //添加权限规则成功
                $logs = array(
                    'log_title'=>\session('username') . "添加权限规则成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                showMessages("添加权限规则成功",'auth.html',3);
            }else{
                showMessages("添加失败",'auth.html',3);
            }
    }
    /**
     *
     * 权限规则删除
     *
     * **/
    public function auth_del(){
        $id = \input("aid/a");
        if(empty($id)){
            echo json_encode(['msg'=>"参数错误",'code'=>404]);exit;
        }else{
            $id = array_filter($id);
        } 
        $rs = $this->model->Authdel($id); 
        if($rs){
            //删除权限成功
            $logs = array(
                'log_title'=>\session('username') . "删除权限成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            echo json_encode(['msg'=>"删除权限成功",'code'=>200]);exit;
        }else{
            echo json_encode(['msg'=>"删除权限失败",'code'=>400]);exit;
        }
    }
    /**
     *
     * 权限规则编辑
     *
     * **/
    public function auth_edit(){
        if(request()->isPost()){
            $data = \input("post.");
            if(empty($data['status'])){
                $data['status']=0;
            }
            $rs = $this->model->saveInfo($data);
           if($rs){
               showMessages("编辑权限规则成功",'auth.html',3);
           }else{
               showMessages("编辑权限规则失败",'auth.html',3);
           }
        }else{
            $id = \input("aid");
            $rs = $this->model->selectInfoById($id);
            $auth_list = $this->model->getAuthList();
            $this->assign("auth_list",getAuthTree($auth_list));
            $this->assign("info",$rs);
            return $this->fetch("auth/auth_edit");
        }
        
    }
    /**
     * 
     * 权限规则编辑--操作
     * 
     * **/
    public function auth_editSave(){
        $id = \input("id");
        $data = \input("post.");
        if(empty($data['status'])){
            $data['status']=0;
        }
        $validate = validate('AuthRule');
        if(!$validate->check($data)){
            exit($validate->getError());
        }
        $re = $this->model->saveInfo($data);
        if($re){
            //编辑权限规则成功
            $logs = array(
                'log_title'=>\session('username') . "编辑权限规则成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            showMessages("编辑权限规则成功",'auth.html',5);
        }else{
            showMessages("编辑权限规则失败",'auth.html',3);
        }
        
    }
/*********************************************************角色管理******************************************************************************************/
    /**
     * 
     * 角色列表管理
     * 
     * **/
    public function role(){
        $role_list = $this->model->selectAll();
        $adminModel = new AdminModel;
        $authModel = new \think\Auth();
        $roleuser = array();
        //查询角色下所有用户信息
        if($role_list){
            foreach($role_list as $k=>$val){
                $role_list[$k]['userlist'] = $authModel->getRoleUserInfo($val['id']);
            }
        }
        $auth_list = $this->model->getAuthList();
        
        $this->assign("auth_rule",getAuthTree($auth_list));
        //var_dump($role_list);exit;
        $this->assign("role_list",$role_list);
        return $this->fetch("auth/group");
    }
   
    /**
     *
     * 角色添加
     *
     * **/
    public function roleadd(){
        //权限规则列表
        $auth_list = $this->model->getAuthList();
        $this->assign("auth_rule",getAuthTree($auth_list));
        return $this->fetch();
    }
    /**
     * 
     * 角色添加--保存数据
     * 
     * **/
    public function rolesave(){
        $data = \input("post.");
        if(!empty($data['rules'])){
            $data['rules'] = implode(',', $data['rules']);
        }
        $re = $this->model->roleadd($data);
        if($re){
            //添加角色成功
            $logs = array(
                'log_title'=>\session('username') . "添加角色成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            showMessages("添加角色成功",'group.html',5);
        }else{
            showMessages("添加角色失败",'group.html',3);
        }
    }
    /**
     *
     * 角色编辑
     *
     * **/
    public function roleedit(){
        $id = \input("id");
        
        $info = $this->model->getRoleInfoById($id);
        $auth_list = $this->model->getAuthList();
        //var_dump(getAuthTree($auth_list));exit;
        $this->assign("info",$info);
        $this->assign("auth_rule",getAuthTree($auth_list));
        return $this->fetch("auth/jurisdiction");
    }
    /**
     *
     * 角色编辑--保存数据
     *
     * **/
    public function roleEditSave(){
        $data = [
            'id'=>\input("id"),
            'title'=>\input("rolename"),
            'rules'=>implode(",", \input("rules/a"))
        ];
        $re = $this->model->roleEdit($data);
        if($re){
            //添加角色成功
            $logs = array(
                'log_title'=>\session('username') . "编辑角色成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            showMessages("角色编辑成功","group.html",5);
        }else{
            showMessages("角色编辑失败",'role',5);
        }
    }
    /**
     *
     * 角色删除
     *
     * **/
    public function roledel(){
        $rid = \input("rid/a");
        if(empty($rid)){
            echo json_encode(array("msg"=>"参数错误","code"=>404));
        }else{
            $rid = array_filter($rid);//去除空值
        }
        $res = $this->model->delRole($rid);
        if($res){
            //添加角色成功
            $logs = array(
                'log_title'=>\session('username') . "删除角色成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            echo json_encode(array('msg'=>"删除角色成功",'code'=>200));
        }else{
            echo json_encode(array('msg'=>"删除角色失败",'code'=>404));
        }
    }
/**********************************************************管理员管理*****************************************************************************************/
    /**
     *
     * 管理员列表
     *
     * **/
    public function admin(){
        $page = \input('page',1,'intval');
        $pageSize = empty(config("PAGESIZE")) ? 20 : config("PAGESIZE");
        $admin_list = $this->adminModel->getAdminAll(['is_delete'=>0],$page,$pageSize);
        //用户组    
        //var_dump(json_encode($admin_list));
        $this->assign("menuObj",json_encode($admin_list));
        $group = $this->adminModel->getGroupList();
        $this->assign("group_list",$group);
        $this->assign("admin_list",$admin_list);
        $this->assign("page","");
        return $this->fetch("auth/admin-list");
    }
    /**
     *
     * 添加管理员
     *
     * **/
    public function admin_add(){
        //获取角色列表
        $roleModel = new AuthModel;
        $role_list = $roleModel->selectAll();
        $this->assign("role_list",$role_list);
        return $this->fetch("auth/admin-add");
    }
    /**
     *
     * 添加管理员--保存数据
     *
     * **/
    public function admin_save(){
        $array = array(
            'username'=>\input('username'),
            'mobile'=>\input('mobile'),
            'password'=>md5(\input('password')),
            'email'=>\input('email'),
            'content'=>\input('content'),
            'addtime'=>time(),
            'true_name'=>\input('true_name'),
            'state'=>0,
            'is_delete'=>0,
            'login_num'=>0
        );
        Db::startTrans();
        $return_id = 0;
        try{
            //添加管理员
            $return_id = Db::table("think_auth_user")->insertGetId($array);
            //添加管理员权限分组
            Db::table("think_auth_group_access")->insertGetId(['uid'=>$return_id,'group_id'=>\input('group_id')]);
            //提交事物
            Db::commit();
        }catch(\Exception $e){
            //事务回滚
            Db::rollback();
            showMessages($e->getMessage(),'admin.html',3);
        }
        if($return_id){
            //新增管理员成功
            $logs = array(
                'log_title'=>\session('username') . "添加管理员成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            showMessages("添加管理员成功",'admin.html',3);
        }
    }
    /**
     *
     * 管理员编辑
     *
     * **/
    public function admin_edit(){
        $id = \input("aid");
        if(empty($id)){
            $this->error("参数错误");
        }
        $info = $this->adminModel->memberinfo(['id'=>$id]);
        //该会员所属角色信息
        $auth = new \think\Auth;
        $role_info = $auth->getGroupInfoById($id);
        
        $roleModel = new AuthModel;
        $role_list = $roleModel->selectAll();
        $this->assign("info",$info);
        $this->assign("group_info",$role_info);
        $this->assign("role_list",$role_list);
        return $this->fetch("auth/admin-edit");
    
    }
    /**
     *
     * 管理员编辑---保存数据
     *
     * **/
    public function adminSave(){
        $id = \input("aid");
        if(empty($id)){
            showMessages("参数错误",'admin.html',3);
        }
        $update = [
            'username'=>\input('username'),
            'mobile'=>\input('mobile'),
            'email'=>\input('email'),
            'content'=>\input('content'),
            'true_name'=>\input('true_name'),
        ];
        if(!empty(\input('password'))){
            $update['password'] = md5(\input('password'));
        }
        Db::startTrans();
        $return_id = 0;
        try{
            //编辑管理员
            Db::table("think_auth_user")->where(['id'=>$id])->update($update);
            //编辑管理员权限分组
            if(\input("group_id",'','intval')){
                Db::table("think_auth_group_access")->where(['uid'=>$id])->update(['group_id'=>\input("group_id")]);
            }
            //提交事物
            Db::commit();
            showMessages("操作成功",'back_admin.html',2);
        }catch(\Exception $e){
            //事务回滚
            Db::rollback();
            showMessages($e->getMessage(),'admin.html',3);
        }
    }
    /**
     *
     * 管理员删除
     *
     * **/
    public function admin_del(){
        $id = \input('aid/a');
        $aid = array_filter($id);//去空值
        $result = $this->adminModel->delAdmin($aid);
        if($result){
            //删除管理员成功
            $logs = array(
                'log_title'=>\session('username') . "删除管理员成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            echo json_encode(array('msg'=>"删除管理员成功",'code'=>200));
        }else{
            echo json_encode(array('msg'=>"删除管理员失败",'code'=>400));
        }
    }
    /**管理个人中心**/
    public function profile(){
        $info = $this->adminModel->memberinfo(session('user_id'));
        $this->assign("info",$info);
        return $this->fetch();
    }
}
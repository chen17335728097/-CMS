<?php
namespace app\back\model;

use think\Model;


class Auth extends Model{
    protected $table = "think_auth_rule";
    /**
     * 
     * 权限规则列表
     * 
     * **/
    public function getAuthList(){
        return db("auth_rule")->order('order','asc')->select();
    }
    /**
     *
     * 单条添加记录
     *
     * **/
    public function add($data){
        
        return $this->validate("AuthRule")->allowField(true)->save($data);
    }
    /**
     * 
     * 根据剧主键id删除记录
     * 
     * **/
    public function del($id){
        $data = ['status'=>0];
        return $this->save($data,['id'=>$id]);
    }
    /**
     *
     * 根据条件删除多条记录
     *
     * **/
    public function Authdel($id){
        $data = array('status'=>0);
        return db("auth_rule")->where('id','in',$id)->update($data);
    }
    /**
     *
     * 单条编辑保存记录
     *
     * **/
    public function saveInfo($data){
        return db("auth_rule")->update($data);
    }
    /**
     *
     * 根据主键ID查询记录
     *
     * **/
    public function selectInfoById($id){
        return $this->where('id',$id)->find();
    }
    /**
     *
     * 根据条件查询多条记录
     *
     * **/
    public function selectBywhere($where,$field,$limit,$page){
        $page = empty($page) ? 1 : intval($page);
        $limit = empty($limit) ? config("limit") : intval($limit);
        $page_size = config("paginate.list_rows");
        return db("product")->field($field)->where($where)->limit(($page-1)*$page_size,$limit)->select();
    }
    /********************************************角色管理***************************************************************
    /**
     * 
     * 查询记录
     * 
     * 
     * **/
    public function selectAll($where=""){
        return db("auth_group")->where($where)->where('status','=',1)->select();
    }
    /**
     * 
     * 角色删除(单个，批量)
     * 
     * **/
    public function delRole($id){
        $data['status'] = 0;
        return db("auth_group")->where('id','in',$id)->update($data);
    }
    /**
     * 
     * 角色新增
     * 
     * **/
    public function roleadd($data){
        return db("auth_group")->insert($data);
    }
    /**
     * 
     * 根据id查询角色详细信息
     * 
     * **/
    public function getRoleInfoById($id){
        return db("auth_group")->where('id','=',$id)->find();
    }
    /**
     * 
     * 角色编辑
     * 
     * **/
    public function roleEdit($data){
        return db("auth_group")->update($data);
    }
}
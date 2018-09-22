<?php
namespace app\back\model;
/**
 * 
 * 系统设置模型
 * 
 * **/
use think\Model;
class System extends Model{
    protected $table = "think_config";
    /**
     * 
     * 保存系统设置
     * 
     * **/
    public function saveConfig($data){
        if(empty($data['id'])){
            return $this->allowField(true)->save($data);
        }else{
            return $this->allowField(true)->update($data);
        }
    }
    /**
     * 
     * 获取系统设置
     * 
     * **/
    public function findInfo(){
        return db("config")->find(1);
    }
    /**
     * 
     * 系统日志列表
     * 
     * **/
    public function selectAllLog(){
        return db("log")->where('log_state','=',0)->order('log_id','desc')->paginate();
    }
    /**
     * 
     * 日志删除
     * 
     * **/
    public function deleteLog($id){
        return db("log")->where('log_id','in',$id)->update(['log_state'=>1]);
    }
}
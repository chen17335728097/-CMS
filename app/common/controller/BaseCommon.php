<?php
/**
 * Created by 多多科技.
 * User: 陈中
 * Date: 2017/11/16
 * Time: 14:06
 */

namespace app\common\controller;


use think\Db;
use think\Session;
/**
 *
 *   数据库操作基类
 *
 **/
header("Content-type:text/html;charset=utf-8");
class BaseCommon
{
    /**
     *
     * 检查登陆账号及密码是否正确
     * @param $user 登陆账号
     * @param $pass 登陆密码
     *
     **/
    public static function check_pass($user,$pass){
        $fields = 'agent_name,agent_time,agent_class,agent_count,agent_all_account,agent_account_bank,agent_money_account,agent_all_recharge,agent_phone,agent_id,agent_email,agent_truename,agent_address,agent_qq';
        $result = Db::name("agent")->field($fields)->where(['agent_name'=>['eq',$user],'agent_password'=>['eq',makePasswordDecode($pass)]])->find();
        return $result;
    }
    /**
     *
     * 从数据库中获取一条记录
     * @param $table  数据表
     * @param $fields 数据字段
     * @param $where 查询条件
     *
     **/
    public static function findOne($table,$fields="*",$where=""){
        $info =Db::name($table)->field($fields)->where($where)->find();
        return $info;
    }
    /**
     *
     * 从数据库中获取多条记录(无分页)
     * @param $table  数据表
     * @param $fields 数据字段
     * @param $where 查询条件
     * @param $limit 记录条数
     * @param $order 记录排序
     *
     **/
    public static function findMore($table,$fields="*",$where="",$order,$limit){
        $info =Db::name($table)->field($fields)->where($where)->order($order)->limit($limit)->select();
        return $info;
    }
    /**
     *
     * 从数据库中获取多条记录（有分页）
     * @param $table  数据表
     * @param $fields 数据字段
     * @param $where 查询条件
     * @param $limit 记录条数
     * @param $order 记录排序
     *
     **/
    public static function findMoreAndPages($table,$fields="*",$where="",$order,$limit,$list_rows){
        $config = [
            'list_rows'=>empty($list_rows) ? 20 : $list_rows,
            'type'     => 'bootstrap',
            'var_page' => 'page',
        ];
        $info =Db::name($table)->field($fields)->where($where)->order($order)->limit($limit)->paginate($config);
        $pages = $info->render();
        return ['rows'=>$info,'page'=>$pages];
    }
    /***
     *
     *  删除一条数据记录
     * @param $where 删除条件
     *
     */
    public static function deleteOne($table,$where){
        return Db::name($table)->where($where)->delete();
    }
    /***
     *
     *  删除多条数据记录
     * @param $where 删除条件
     *
     */
    public static function deleteMore($table,$where){
        return Db::name($table)->where($where)->delete();
    }
    /***
     *
     *  添加一条数据记录,返回添加记录主键ID
     * @param $data 新增数据
     * @param $table 数据表
     *
     */
    public static function insertOne($table,$data){
        return Db::name($table)->insertGetId($data);
    }
    /***
     *
     *  添加多条数据记录
     * @param $data 新增数据
     * @param $table 数据表
     *
     */
    public static function insertMore($table,$data){
        return Db::name($table)->insertAll($data);
    }
    /**
     * 编辑保存数据
     * @param $where 保存数据条件
     * @param $data  保存数据
     * @param $table 数据表
     *
     **/
    public static function editSave($table,$where,$data){
        return Db::name($table)->where($where)->update($data);
    }
    /**
     *
     * 关联查询数据表信息
     * @param $table  数据表1及表别名1
     * @param $alias1 表1别名
     * @param $table2 关联数据表
     * @param $alias2 表2别名
     * @param $correlation 关联条件
     * @param $fields 数据字段
     * @param $where 查询条件
     * @param $limit 记录条数
     * @param $order 记录排序
     * $param $return 返回数据
     *
     **/
    public static function selectInfoJoinTables($table,$alias1,$table2,$alias2,$correlation,$fields,$where,$order,$limit){
        //拼接操作
        $prefix = \config("database.prefix");
        $return = Db::name($table)->alias($alias1)->field($fields)->join("$table2 $alias2","$correlation")->where($where)->order($order)->limit($limit)->select();
        return $return;
    }
    /**
     *
     * 保存数据
     * @param $table 数据表
     * @param $data 变更的数据数组
     * @param $where 更新条件
     *
     *
    ***/
    public static function edit_save($table,$where,$data){
        $result = Db::name($table)->where($where)->update($data);
        return $result;
    }
    /**
     *
     * 更新字段的值加
     * @param $table 数据表
     * @param $data 变更的数据数组
     * @param $where 更新条件
     * @param $field 更新字段
     *
     *
     ***/
    public static function setInc($table,$where,$field,$data){
        $result = Db::name($table)->where($where)->setInc($field,$data);
        return $result;
    }
    /**
     *
     * 更新字段的值减
     * @param $table 数据表
     * @param $data 变更的数据
     * @param $where 更新条件
     * @param $field 更新字段
     *
     *
     ***/
    public static function setDec($table,$where,$field,$data){
        $result = Db::name($table)->where($where)->setDec($field,$data);
        return $result;
    }
    /**
     *
     * 更新字段的值
     * @param $table 数据表
     * @param $data 变更的数据数组
     * @param $where 更新条件
     * @param $field 更新字段
     *
     *
     ***/
    public static function setFields($table,$where,$field,$data){
        $result = Db::name($table)->where($where)->setField($field,$data);
        return $result;
    }
    /**
     *
     * 记录统计
     * @param $table 数据表
     * @param $where 统计条件
     *
     ***/
    public static function count($table,$where){
        $result = Db::name($table)->where($where)->count();
        return $result;
    }






















}
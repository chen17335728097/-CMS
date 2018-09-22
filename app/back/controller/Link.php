<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/17
 * Time: 19:35
 */

namespace app\back\controller;

use app\back\controller\BaseAdmin;
use app\back\model\Link as LinkModel;
use app\common\controller\Logs;
use think\Request;
class Link extends BaseAdmin
{
    private $model = "";
    public function _initialize(){
        parent::_initialize();
        $this->model = new LinkModel;
        $this->assign("active",268);
    }
    /**
     *
     * 友情链接
     *
     * **/
    public function link(){
        //$link_list = db("link")->alias("l")->join("think_link_class lc","l.link_classid=lc.c_id")->order('l.link_order','asc')->paginate();
        $link_list = db('link')->paginate();
        $page = $link_list->render();
        $this->assign("page",$page);
        $this->assign("link_list",$link_list);
        return  $this->fetch("friendslink");
    }
    /**
     *
     * 添加友情链接
     *
     * **/
    public function add_link(){
        if(\request()->isPost()){
            $data = \input("post.");
            $res = db("link")->insert($data);
            if($res){
                $logs = array(
                    'log_title'=>\session('username') . "添加友情链接成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                showMessages("添加友情链接成功",'link.html',3);
            }else{
                showMessages("添加友情链接失败",'link.html',3);
            }
        }

    }
    /**
     *
     * 删除友情链接
     *
     * **/
    public function del_link(){
        $type = \input("type");

        if($type=='stop'){
            $id = \input("id");
            $data = ['link_status'=>0];
            $res = db("link")->where('id','=',$id)->update($data);
            if($res){
                echo json_encode(array('msg'=>"停用友情链接成功",'code'=>200));exit;
            }else{
                echo json_encode(array('msg'=>"停用友情链接失败",'code'=>400));exit;
            }
        }elseif ($type=='start'){
            $id = \input("id");
            $data = ['link_status'=>1];
            $res = db("link")->where('id','=',$id)->update($data);
            if($res){
                echo json_encode(array('msg'=>"开启友情链接成功",'code'=>200));exit;
            }else{
                echo json_encode(array('msg'=>"开启友情链接失败",'code'=>400));exit;
            }

        }elseif ($type == 'del'){
            $id = \input("id");
            $res = db("link")->where('link_id','eq',$id)->delete();
            if($res){
                $logs = array(
                    'log_title'=>\session('username') . "删除友情链接成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                echo json_encode(array('msg'=>"删除友情链接成功",'code'=>200));exit;
            }else{
                echo json_encode(array('msg'=>"删除友情链接失败",'code'=>400));exit;
            }
        }
    }
    /**
     *
     * 编辑友情链接
     *
     * **/
    public function edit_link(){
        if(request()->post()){
            $data = \input("post.");
            $res = db("link")->update($data);
            if($res){
                $logs = array(
                    'log_title'=>\session('username') . "编辑友情链接成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                showMessages("编辑友情链接成功",url('system/link'),3);
            }else{
                showMessages("编辑友情链接失败",url('system/link'),3);
            }
        }

    }
    /**
     *
     * 链接分类
     *
     * **/
    public function link_class(){
        $link_list = db("link_class")->order('class_order','asc')->select();
        $this->assign("link_list",$link_list);
        return $this->fetch("sys/link_class");
    }
    /**
     *
     * 添加链接分类
     *
     * **/
    public function add_link_class(){
        if(request()->post()){
            $data = \input("post.");
            $data['class_time'] = time();
            $res = db("link_class")->insert($data);
            if($res){
                $logs = array(
                    'log_title'=>\session('username') . "添加友情链接分类成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                showMessages("添加友情链接分类成功",url('system/link_class'),3);
            }else{
                showMessages("添加友情链接分类失败",url('system/add_link_class'),3);
            }
        }else{
            return $this->fetch('sys/add_link_class');
        }
    }
    /**
     *
     * 删除链接分类
     *
     * **/
    public function del_link_class(){
        $type = \input("type");
        if($type=='stop'){
            $id = \input("id");
            $data = ['class_status'=>0];
            $res = db("link_class")->where('c_id','=',$id)->update($data);
            if($res){
                echo json_encode(array('msg'=>"停用友情链接分类成功",'code'=>200));exit;
            }else{
                echo json_encode(array('msg'=>"停用友情链接分类失败",'code'=>400));exit;
            }
        }elseif ($type=='start'){
            $id = \input("id");
            $data = ['class_status'=>1];
            $res = db("link_class")->where('c_id','=',$id)->update($data);
            if($res){
                echo json_encode(array('msg'=>"开启友情链接分类成功",'code'=>200));exit;
            }else{
                echo json_encode(array('msg'=>"开启友情链接分类失败",'code'=>400));exit;
            }

        }elseif ($type == 'del'){
            $id = \input("id/a");
            $id = array_filter($id);
            $res = db("link_class")->where('c_id','in',$id)->delete();
            if($res){
                $logs = array(
                    'log_title'=>\session('username') . "删除友情链接分类成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                echo json_encode(array('msg'=>"删除友情链接分类成功",'code'=>200));exit;
            }else{
                echo json_encode(array('msg'=>"删除友情链接分类失败",'code'=>400));exit;
            }
        }
    }
    /**
     *
     * 编辑链接分类
     *
     * **/
    public function edit_link_class(){
        if(request()->post()){
            $data = \input("post.");
            $res = db("link_class")->update($data);
            if($res){
                $logs = array(
                    'log_title'=>\session('username') . "编辑友情链接分类成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                showMessages("编辑友情链接分类成功",url('system/link_class'),3);
            }else{
                showMessages("编辑友情链接分类失败",url('system/link_class'),3);
            }
        }else{
            $id = \input("id");
            $info = db('link_class')->where('c_id','=',$id)->find();
            $this->assign("info",$info);
            return $this->fetch('sys/edit_link_class');
        }

    }
}
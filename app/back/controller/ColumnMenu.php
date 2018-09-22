<?php
namespace app\back\controller;

use app\back\controller\BaseAdmin;
use app\back\model\News as NewsModel;
use app\common\controller\Logs;
class columnMenu extends BaseAdmin{
    private $model = "";
    public function _initialize(){
        parent::_initialize();
        $this->model = new NewsModel;
    }
    /**
     * 
     * 导航菜单
     * 
     * **/
    public function menu(){
        //新闻分类数
        $list = $this->model->selectColumnList();
        $menu_list = ColumnTree($list);
        $this->assign("menuobj",json_encode($list));
        //var_dump($menu_list);exit;
        $this->assign("column_list",$menu_list);
        return $this->fetch("column/menu");
    }
    /**
     * 
     * 菜单添加
     * 
     * **/
    public function addMenu(){
        $data = \input("post.");
        $file = \request()->file('column_img');

        if(!empty($file)){
            $info = image_upload($file,false,'');//缩略图
            $data['column_img'] = $info['return_img'];
        }
        $res = $this->model->addClass($data);
        if($res){
            $logs = array(
                'log_title'=>\session('username') . "添加栏目成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            showMessages("添加栏目成功",'menu.html',5);
        }else{
            showMessages("添加栏目失败",'menu.html',5);
        }
    }
    /**
     * 
     * 文件上传
     * 
     * **/
    public function uploadFile(){
        $file = \input('post.file');
        echo var_dump($file);exit;
        /* if(!file_exists($file)){
            echo json_encode(array('msg'=>"上传文件不存在",'code'=>400));exit;
        } */
        $time = date('Y-m-d',time());
        $path = str_replace("\\","/",ROOT_PATH) . 'public/uploads/' . $time;
        if(!file_exists($path)){
           $re = mkdir($path,0777,true);
        }
        $newname = md5(rand(123,999).time()) . '.jpg';
        $destination = $path . '/' . $newname;
        echo var_dump($file,$destination);exit;
        $files = move_uploaded_file($file,$destination);
        $filename = 'uploads/' . $time . '/' . $newname;
        echo var_dump($files);exit;
    }
 /**
     * 
     * 删除导航菜单
     * 
     * **/
    public function deleteMenu(){
        $id = \input('post.id/a');
        $res = $this->model->deleteAllClass(array_filter($id));
        if($res){
            $logs = array(
                'log_title'=>\session('username') . "删除导航菜单成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            echo json_encode(array('msg'=>"删除导航菜单成功",'code'=>200));
        }else{
            echo json_encode(array('msg'=>"删除导航菜单失败",'code'=>400));
        }
    }
    /**
     * 
     * 编辑导航菜单
     * 
     * **/
    public function editMenu(){
            $data = \input("post.");
            $file = \request()->file('column_img');
            if(!empty($file)){
                $info = image_upload($file,false,'');//缩略图
                $data['column_img'] = $info['return_img'];
            }
            if(empty($data['column_open'])){
                $data['column_open'] = 10;
            }
            $res = $this->model->editClass($data);
            if($res){
                $logs = array(
                    'log_title'=>\session('username') . "编辑导航分类成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                showMessages("编辑导航菜单成功",'menu.html',5);
            }elsE{
                showMessages("编辑导航分类失败",'menu.html',3);
            }
    }
}
<?php

/**
 * @company 至开科技
 * @author 海豚之泪
 * @email 499211940@qq.com
 *
 * *******************************************************************************************/


namespace app\back\controller;

use app\back\controller\BaseAdmin;
use app\back\model\Brand as BrandModel;
use app\common\controller\Logs;
class Brand extends BaseAdmin{
    /**
     * 
     * 构造函数
     * 
     * **/
    private $model = "";
    public function _initialize(){
        parent::_initialize();
        $this->model = new BrandModel;
    }
    /**
     *
     * 品牌列表
     *
     * **/
    public function brand(){
        $brand = $this->model->selectBrand();
        $this->assign("brand_list",$brand);
        return $this->fetch();
    }
    /**
     *
     * 添加品牌
     *
     * **/
    public function addBrand(){
        $data = \input('post.');
        //单图片
        $file = \request()->file("brand_logo");
        if(!empty($file)){
            $info = image_upload($file,'brand_logo');//缩略图
            $data['brand_logo'] = $info['return_img'];
        }
        $res = $this->model->addBrand($data);
        if($res){
            showMessages("添加品牌成功", url('brand/brand'), 5);
        }else{
            showMessages("添加品牌成功", url('brand/brand'), 5);
        }
    }
    /**
     *
     * 编辑品牌
     *
     * **/
    public function editBrand(){
        if(\request()->post()){
            $data = \input("post.");
            $file = \request()->file("pic"); 
            if(!empty($file)){
                $info = image_upload($file);//缩略图
                $data['brand_logo'] = $info['return_img'];
            }
            $res = $this->model->update($data);
            if($res){
                showMessages("编辑商品品牌成功",url('brand/brand'),5);
            }else{
                showMessages("编辑商品品牌失败",url('brand/brand'),5);
            }
        }else{
            $id = \input("id");
            $info = $this->model->getInfoByID($id);
            $this->assign("info",$info[0]);
            return $this->fetch("brand/edit_brand");
        }
        
    }
    /**
     *
     * 删除品牌
     *
     * **/
    public function delBrand(){
        $id = \input("id/a");
        if(empty($id)){
            showMessages("参数错误",url('brand/brand'),5);
        }
        $info = $this->model->delBrand(array_filter($id));
        if($info){
            //操作商品成功
            $logs = array(
                'log_title'=>\session('username') . "删除商品品牌成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            exit(json_encode(array('msg'=>"删除商品品牌成功",'code'=>200)));
        }else{
            exit(json_encode(array('msg'=>"删除商品品牌失败",'code'=>400)));
        }
    }
    /**
     * 
     * 
     * 
     * **/
}
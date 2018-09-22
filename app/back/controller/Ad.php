<?php

/**
 * @company 至开科技
 * @author 海豚之泪
 * @email 499211940@qq.com
 *
 * *******************************************************************************************/

namespace app\back\controller;
use app\back\controller\BaseAdmin;
class Ad extends BaseAdmin{
    
    public function _initialize(){
        parent::_initialize();
    }
    /**
     * 
     * 广告位置列表
     * 
     * **/
    public function ad_position(){
        $list = db("ad_position")->order("ad_porder","asc")->select();
        $this->assign("ad_list",$list);
        $this->assign("ad_obj",json_encode($list));
        return  $this->fetch("ad/ad_position");    
    }
    /**
     * 
     * 添加广告位置
     * 
     * **/
    public function add_ad_position(){
            $data = \input("post.");
            $data['ad_ptime'] = time();
            if(empty($data['ad_popen'])){
                $data['ad_popen']=20;
            }
            $res = db("ad_position")->insert($data);
            if($res){
                showMessages("添加广告位置成功",'ad_position.html',3);
            }elsE{
                showMessages("添加广告位置失败",'ad_position.html',3);
            }        
    }
    /**
     * 
     * 广告位置删除
     * 
     * **/
    public function del_ad_position(){
        $type = \input("type");
        if($type=='stop'){
            $id = \input("id");
            $data = ['ad_popen'=>10];
            $res = db("ad_position")->where('ad_pid','=',$id)->update($data);
            if($res){
                echo json_encode(array('msg'=>"停用广告位置成功",'code'=>200));exit;
            }else{
                echo json_encode(array('msg'=>"停用广告位置失败",'code'=>400));exit;
            }
        }elseif ($type=='start'){
            $id = \input("id");
            $data = ['ad_popen'=>20];
            $res = db("ad_position")->where('ad_pid','=',$id)->update($data);
            if($res){
                echo json_encode(array('msg'=>"开启广告位置成功",'code'=>200));exit;
            }else{
                echo json_encode(array('msg'=>"开启广告位置失败",'code'=>400));exit;
            }
            
        }elseif ($type == 'del'){
            $id = \input("id/a");
            $id = array_filter($id);
            $res = db("ad_position")->where('ad_pid','in',$id)->delete();
            if($res){
                echo json_encode(array('msg'=>"删除广告位置成功",'code'=>200));exit;
            }else{
                echo json_encode(array('msg'=>"删除广告位置失败",'code'=>400));exit;
            }
        }
        
    }
    /**
     * 
     * 广告位置编辑
     * 
     * **/
    public function edit_ad_position(){
            $data = \input("post.");
            $data['ad_ptime'] = time();
            if(empty($data['ad_popen'])){
                $data['ad_popen'] = 20;
            }
            $res = db("ad_position")->update($data);
            if($res){
                showMessages("编辑广告位置成功",'ad_position.html',3);
            }elsE{
                showMessages("编辑广告位置失败",'ad_position.html',3);
            } 
    }
    /**
     * 
     * 广告管理
     * 
     * **/
    public function ad(){
        $list = db('ad')->alias("a")->join("think_ad_position ap","a.ad_pid=ap.ad_pid")->select();
        $this->assign("ad_list",$list);
        $this->assign("adMenu",json_encode($list));
        $ap_position = db("ad_position")->where('ad_popen','=',20)->select();
        $this->assign("ad_position",$ap_position);
        return $this->fetch("ad/ad");
    }
    /**
     * 
     * 添加广告
     * 
     * **/
    public function add_ad(){
            $data = \input("post.");
            unset($data['file']);
            if(!empty($data['img']) && is_array($data['img'])){
                $data['img'] = implode('|', $data['img']);
            }
            $file = \request()->file("pic");
            if(!empty($file)){
                $info = image_upload($file,false,'');//缩略图
                $data['ad_pic'] = $info['return_img'];
            }
            if(empty($data['ad_open'])){
                $data['ad_open'] = 20;
            }
            $res = db("ad")->insert($data);
            if($res){
                showMessages("发布广告成功",'ad.html',3);
            }elsE{
                showMessages("发布广告失败",'ad.html',3);
            }
       
    }
    /**
     *
     * 编辑广告
     *
     * **/
    public function edit_ad(){
        if(\request()->post()){
            $data = \input("post.");
            $file = \request()->file("pic"); 
            if(!empty($file)){
                $info = image_upload($file,false,'');//缩略图
                $data['ad_pic'] = $info['return_img'];
            }
            if(empty($data['ad_open'])){
                $data['ad_open'] = 20;
            }
            $res = db("ad")->update($data);
            if($res){
                showMessages("编辑广告成功",'ad.html',3);
            }elsE{
                showMessages("编辑广告失败",'ad.html',3);
            }
        }else{
            $id = \input("id");
            $info = db("ad")->where(['ad_id'=>$id])->find();
            $this->assign("info",$info);
            $ap_list = db("ad_position")->where('ad_popen','=',20)->select();
            $this->assign("ap_list",$ap_list);
            return $this->fetch("ad/edit_ad");
        }
    }
    /**
     *
     * 删除广告
     *
     * **/
    public function del_ad(){
                $type = \input("type");
                if($type=='stop'){
                    $id = \input("delId");
                    $data = ['ad_open'=>10];
                    $res = db("ad")->where('ad_id','=',$id)->update($data);
                    if($res){
                        echo json_encode(array('msg'=>"停用广告成功",'code'=>200));exit;
                    }else{
                        echo json_encode(array('msg'=>"停用广告失败",'code'=>400));exit;
                    }
                }elseif ($type=='start'){
                    $id = \input("delId");
                    $data = ['ad_open'=>20];
                    $res = db("ad")->where('ad_id','=',$id)->update($data);
                    if($res){
                        echo json_encode(array('msg'=>"开启广告成功",'code'=>200));exit;
                    }else{
                        echo json_encode(array('msg'=>"开启广告失败",'code'=>400));exit;
                    }
                    
                }elseif ($type == 'del'){
                    $id = \input("delId/a");
                    $id = array_filter($id);
                    $res = db("ad")->where('ad_id','in',$id)->delete();
                    if($res){
                        echo json_encode(array('msg'=>"删除广告成功",'code'=>200));exit;
                    }else{
                        echo json_encode(array('msg'=>"删除广告失败",'code'=>400));exit;
                    }
                }
    }
}
<?php
/**
 * Created by 陈中.
 * User: 陈中
 * Date: 2017/11/10
 * Time: 9:41
 */

namespace app\back\controller;

use app\back\controller\BaseAdmin;
use app\back\model\News as NewsModel;
use app\back\model\Video as VideoModel;
use app\common\controller\BaseCommon;
use app\common\controller\Logs;
class Video extends BaseAdmin
{
    public function _initialize()
    {
        parent::_initialize();
        $this->assign("active",129);
    }
    /**
     *
     * 视频列表
     *
     */
    public function video(){
        //分类
        $list = (new VideoModel)->selectVideo();
        $this->assign("video_list",$list);
        $this->assign("videoMenu",json_encode($list));
        return $this->fetch();
    }
    /**
     *
     * 添加视频
     *
     */
    public function addVideo(){
        if(\request()->isPost()){
                $data = \input("post.");
                $file = \request()->file("video_pic");
                if(!empty($file)){
                    $info = image_upload($file,false,'');//缩略图
                    $data['video_img'] = $info['return_img'];
                }

                $video_file = \request()->file("video");
                if(!empty($video_file)){
                    $info = video_upload($video_file,"video");//缩略图
                    $data['video'] = $info['video'];
                }
                $res = (new VideoModel)->addVideo($data);
                if($res){
                    showMessages("添加视频成功",'video.html',3);
                }else{
                    showMessages("添加视频成功",'video.html',3);
                }
        }else{
            $column_list = (new NewsModel())->selectColumnList(['column_type'=>['eq',30]]);
            $this->assign("column_list",ColumnTree($column_list));
            $this->assign("qg_list","");
            return $this->fetch("video_add");
        }
    }
    /**
     *
     * 删除视频
     *
     * **/
    public function del_video(){
        $type = \input("type");
        if($type=='stop'){
            $id = \input("delId");
            $data = ['video_open'=>20];
            $res = (new VideoModel)->where('video_id','=',$id)->update($data);
            if($res){
                echo json_encode(array('msg'=>"停用视频成功",'code'=>200));exit;
            }else{
                echo json_encode(array('msg'=>"停用视频失败",'code'=>400));exit;
            }
        }elseif ($type=='start'){
            $id = \input("delId");
            $data = ['video_open'=>10];
            $res = (new VideoModel)->where('video_id','=',$id)->update($data);
            if($res){
                echo json_encode(array('msg'=>"开启视频成功",'code'=>200));exit;
            }else{
                echo json_encode(array('msg'=>"开启视频失败",'code'=>400));exit;
            }

        }elseif ($type == 'del'){
            $id = \input("delId/a");
            $id = array_filter($id);
            $res = (new VideoModel)->where('video_id','in',$id)->delete();
            if($res){
                echo json_encode(array('msg'=>"删除视频成功",'code'=>200));exit;
            }else{
                echo json_encode(array('msg'=>"删除视频失败",'code'=>400));exit;
            }
        }
    }
    /**
     *
     * 编辑视频
     *
     * **/
    public function edit_video(){
        if(\request()->isPost()){
            $data = \input("post.");
            $file = \request()->file("video_pic");
            if(!empty($file)){
                $info = image_upload($file,false,'');//缩略图
                $data['video_img'] = $info['return_img'];
            }
            if(empty($data['video_open'])){
                $data['video_open'] = 10;
            }
            $video_file = \request()->file("video");
            if(!empty($video_file)){
                $info = video_upload($video_file,"video");//缩略图
                $data['video'] = $info['video'];
            }
            $res = db("video")->where(['video_id'=>$data['video_id']])->update($data);
            if($res){
                showMessages("编辑视频成功",'video.html',3);
            }elsE{
                showMessages("编辑视频失败",'video.html',3);
            }
        }else{
            $id = \input("id");
            $info = db("video")->where(['video_id'=>$id])->find();
            $this->assign("info",$info);
            $column_list = (new NewsModel())->selectColumnList(['column_type'=>['eq',30]]);
            $this->assign("column_list",ColumnTree($column_list));
            //$qg_list = BaseCommon::findMore('question_grade','*',"","qg_order asc","");
            $this->assign("qg_list","");
            return $this->fetch("video_edit");
        }
    }
}
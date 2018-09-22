<?php
namespace app\api\controller;

use app\api\common\ApiBase;
use app\common\controller\BaseCommon;
use app\api\model\Ad AS AdModel;
use app\api\model\Goods AS GoodsModel;
class Index extends ApiBase
{
    public function __construct()
    {
        parent::__construct();
    }
    //首页信息
    public function index()
    {
        //配置信息
        $web_config = BaseCommon::findOne('config','',['id'=>1]);
        //轮播图信息
        $ad_list = AdModel::getAdMenu('index');
        //底部信息
        $info = BaseCommon::findOne("config","*",['id'=>1]);
        return json(["ad"=>$ad_list,"info"=>$info]);

    }

    //公司简介
    public function company_profile(){
        $info = BaseCommon::findOne("news",'*',['news_classid|news_class1|news_class2|news_class3'=>25,'news_delete'=>10]);
        return json($info);
    }

    //1F、2F楼层
    public function column_floor(){
        $list = BaseCommon::findMore("column","c_id,column_img,column_outlink,column_pid,column_name,column_order",['c_id'=>['in',"26,27"]],"column_order asc","");
        return json($list);
    }

    //首页3楼教育机构列表
    public function floor_shop(){
        $fields= "c_id,column_img,column_controller,column_outlink,column_pid,column_name,column_order,n.news_xinzi";
        $where = ['c.column_open'=>10];
        $column = BaseCommon::selectInfoJoinTables("column","c","news","n","c.c_id=n.news_classid",$fields,$where,"c.column_order asc","100");
        //$column = BaseCommon::findMore("column","",['column_open'=>10],"column_order asc","");
        $tw_f = getColumnTree1($column,28);
        $th_f = getColumnTree1($column,29);
        $f_f  = array_merge_recursive($tw_f,$th_f);
        ksort($f_f);
        return json(['one'=>$f_f,"two"=>$tw_f,"three"=>$th_f]);
    }

    //店铺预约（按时未使用）
    public function yuyue_list(){
        $session_id = \input("post.session_id");
        $session_info = BaseCommon::findOne("session","*",['session_id'=>$session_id]);
        $insert = [
            'message_title'=>'客户预约',
            'message_name'=>\input("post.name"),
            'message_phone'=>\input("post.phone"),
            'n_id'=>\input("post.c_id"),
            'session_id'=>$session_id
        ];
        $result = BaseCommon::insertOne('message',$insert);
        if($result){
            return ['code'=>200,'message'=>'预约成功'];
        }else{
            return ['code'=>500,'message'=>'预约失败，请稍后再试'];
        }
    }

    //教育机构详细信息
    public function shop_detail(){
        $nid = \input("shop_id");
        if(empty($nid)){
            return ['code'=>'500','message'=>'加载数据失败，请稍后再试'];
        }
        $column_info = BaseCommon::findOne("column","*",['c_id'=>$nid]);
        $info = BaseCommon::findOne('news','*',['news_classid'=>$nid,'news_delete'=>'10']);
        if(!empty($info['news_moreImg'])){
            $info['image_list'] = explode('|',$info['news_moreImg']);
        }else{
            $info['image_list'] = [];
        }
        $array = array_merge_recursive($info,$column_info);
        return json(['info'=>$array]);
    }

    //预约信息提交
    public function Feedback(){
        if(\request()->post()){
            $data = \input('post.');
            $session_id = \input("session_id");
            $session_info = BaseCommon::findOne("session","*",['session_id'=>$session_id]);
            $insert = [
                'message_title'=>'客户预约',
                'message_name'=>$data['name'],
                'message_phone'=>$data['phone'],
                'n_id'=>\input("c_id"),
                'session_id'=>$session_info['openid']
            ];
            $result = BaseCommon::insertOne('message',$insert);
            if($result){
                return ['code'=>200,'message'=>'预约成功'];
            }else{
                return ['code'=>500,'message'=>'预约失败，请稍后再试'];
            }
        }else{
            return ['code'=>500,'message'=>'参数错误，获取数据失败'];
        }
    }
    //获取网站配置
    public function getComConfig(){
        $web_config = BaseCommon::findOne('config','',['id'=>1]);
        $about_us = BaseCommon::findOne('column','*',['column_name'=>"关于我们"]);
        $info = BaseCommon::findOne('news','*',['news_classid'=>$about_us['c_id']]);
        return ['config'=>$web_config,'about'=>$info];
    }
    //个人中心我的预约
    public function yy_list(){
        $session_id = \input("session_id");
        $session_info = BaseCommon::findOne("session","*",['session_id'=>$session_id]);
        $list = BaseCommon::findMore("message","*",['session_id'=>$session_info['openid']],"message_time desc","");
        $data = [];
        foreach($list as $key=>$val){
            $info = BaseCommon::findOne("news","*",['news_classid'=>$val['n_id']]);
            $data[] = $info;
        }
        return json(['code'=>200,'list'=>$data]);
    }
    //楼层详情信息
    public function floor_info(){
        $id = \input("c_id");
        $info = BaseCommon::findOne("news","*",['news_classid'=>$id]);
        $column_info = BaseCommon::findOne("column","*",['c_id'=>$id]);
        $array = array_merge_recursive($info,$column_info);
        return json(['info'=>$array]);
    }
    //视频接口
    public function video_info(){
        $info = db("video")->order("video_order asc")->find();
        return json(['code'=>200,'video_info'=>$info]);
    }
}

<?php
/**
 * Created by 多多科技.
 * User: 陈中
 * Date: 2017/10/23
 * Time: 10:57
 */

namespace app\back\controller;

use app\back\controller\BaseAdmin;
use app\back\model\Article as ArticleModel;
use app\common\controller\Logs;
class Article extends BaseAdmin
{
    private $model;
    public function _initialize()
    {
        parent::_initialize(); //
        $this->model = new ArticleModel;
        $this->assign("active",10);
    }
    /**
     *
     *   文章回收站
     *
     **/
    public function ar_recycle(){
        $where = ['news_delete'=>20];
        $list = $this->model->selectAllByWhere($where);
        $this->assign("page",$list->render());
        $this->assign("article_list",$list);
        return $this->fetch('article/ar_recycle');
    }
    /**
     *
     * 新闻回收站还原
     *
     * **/
    public function article_restore(){
        $id = \input("id");
        $resturn = db("news")->where("n_id","=",$id)->update(['news_delete'=>10]);
        if($resturn){
            $logs = array(
                'log_title'=>\session('username') . "新闻还原成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            echo json_encode(array('msg'=>"新闻还原成功",'code'=>200));
        }else{
            echo json_encode(array('msg'=>"新闻还原失败",'code'=>400));
        }
    }
    /***
     *
     *  清空回收站
     *
     *
    ***/
    public function del_recycle(){
        if(\request()->isAjax()){
            $id = input('id/a');
            $res = db("news")->where('n_id','in',array_filter($id))->delete();
            if($res){
                $logs = array(
                    'log_title'=>\session('username') . "清空新闻回收站成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                echo json_encode(array('msg'=>"清空新闻回收站成功",'code'=>200));
            }else{
                echo json_encode(array('msg'=>"清空新闻回收站失败",'code'=>400));
            }
        }else{
            echo json_encode(array('msg'=>"系统繁忙，请稍后再试",'code'=>400));
        }
    }
}
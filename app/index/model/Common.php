<?php
/**
 * Created by 多多科技.
 * User: 陈中
 * Date: 2017/10/31
 * Time: 15:16
 */

namespace app\index\model;


use think\Cache;
use think\Model;
use think\Db;
class Common extends Model
{
    /**
     *
     * 网站轮播图广告
     * param $position 轮播图位置
     *
     **/
    public static function getWebConfig(){

        if(empty(Cache::get('web_config'))){
            $config = Db::name('config')->where(['id'=>['eq',1]])->find();
            cache_info("web_config",$config,7200,'config');
        }
        return Cache::get("web_config");
    }
    /**
     *
     * 网站轮播图广告
     * param $position 轮播图位置标签
     *
     **/
    public static function getAdMenu($position="index"){
        $ad_list = db("ad_position")->alias("ap")->join("think_ad a","ap.ad_pid=a.ad_pid")->where(['ap.ad_tag'=>"$position",'a.ad_open'=>['eq','20']])->select();
        return $ad_list;
    }
    /**
     *
     * 获取首页推荐新闻
     *
     * **/
    public static function getRecommendInfo(){
        return Db::name('news')->field('n_id,news_title,news_content,news_img,news_scontent')->where(['news_show'=>10])->find();
    }
    /**
     *
     * 获取首页产品
     * @param $where 查询条件
     * @param $fields 查询字段
     * @param $order 查询排序
     * @param $limit 查询返回结果数量
     *
     * **/
    public static function getIndexGoods($where=[],$fields=[],$order="product_id",$limit=8){
        if(empty($where)){
            $where['product_state'] = ['eq',20];
        }
        if(empty($fields)){
            $fields = ['product_id','product_name','product_image','product_scontent'];
        }
        return Db::name('product')->where($where)->order($order,"desc")->limit($limit)->select();
    }
    /**
     *
     * 获取商品详细信息
     * @param $id 查询ID
     *
     * **/
    public static function getGoodsInfoById($id){
        if(empty($id)){
            return false;
        }
        if(empty(Cache::get("goods_".$id))){
            $info = Db::name('product')->where(['product_id'=>['eq',$id],'product_state'=>['eq',20]])->find();
            self::cache_info("goods_".$id,$info,3600,"Goods");
        }else{
            $info = Cache::get("goods_".$id);
        }
        return $info;
    }
    /**
     *
     * 获取餐饮知识
     * @param $where 查询条件
     * @param $fields 查询字段
     * @param $limit 查询返回结果数量
     *
     * **/
    public static function getKnowledge($where=[],$fields=[],$limit=3){
        if(empty($where)){
            $where['news_delete']=['eq',10];
        }
        return Db::name('news')->field("n_id,news_title,news_time,news_img,news_scontent")->where($where)->order("n_id","desc")->limit($limit)->select();
    }
    /**
     *
     * 获取新闻文章详细信息
     * @param $id 查询ID
     *
     * **/
    public static function getNewsOrArticleInfoById($id){
        if(empty($id)){
            return false;
        }
        if(empty(Cache::get("news_".$id))){
            $info = Db::name('product')->where(['product_id'=>['eq',$id],'product_state'=>['eq',20]])->find();
            self::cache_info("news_".$id,$info,3600,"News");
        }else{
            $info = Cache::get("news_".$id);
        }
        return $info;
    }
}
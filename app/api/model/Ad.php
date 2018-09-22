<?php
/**
 * Created by 多多科技.
 * User: 陈中
 * Date: 2017/12/26
 * Time: 18:51
 */

namespace app\api\model;


use think\Model;
use think\Db;
class Ad extends Model
{
    /**
     *
     * 网站轮播图广告
     * param $position 轮播图位置标签
     *
     **/
    public static function getAdMenu($position="index"){
        $ad_list = Db::name("ad_position")->alias("ap")->field("a.ad_id,a.ad_name,a.ad_url,a.ad_pic")->join("think_ad a","ap.ad_pid=a.ad_pid")->where(['ap.ad_tag'=>"$position",'a.ad_open'=>['eq','20']])->select();
        return $ad_list;
    }
}
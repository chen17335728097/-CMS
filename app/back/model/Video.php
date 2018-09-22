<?php
/**
 * Created by 陈中.
 * User: 陈中
 * Date: 2017/11/10
 * Time: 12:11
 */

namespace app\back\model;


use think\Model;
use think\DB;

class Video extends Model
{
    public function __construct(){
        parent::__construct();
    }
    public function addVideo($data){
        return Db::name('video')->insert($data);
    }
    public function selectVideo($where=""){
        //return Db::name('video')->alias('v')->field('v.*,c.column_name,c.c_id')->join("think_column c","c.c_id=v.video_pid")->where($where)->order('video_id','desc')->select();
        return Db::name('video')->where($where)->order('video_id','desc')->paginate();
    }
}
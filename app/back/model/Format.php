<?php
/**
 * Created by 多多科技.
 * User: 陈中
 * Date: 2017/10/26
 * Time: 9:47
 */

namespace app\back\model;

use app\back\model\Common;
class Format extends Common
{
    public function __construct()
    {
        parent::__construct();
    }
    public function selectAllFormat(){
        $format = db('product_format')->order("format_order","asc")->paginate();
        if(empty($format)){
            return false;
        }
        return $format;
    }
    public function insertFormat($data){
        return db('product_format')->insert($data);
    }
    public function getInfoByID($id){
        return db('product_format')->where('format_id','=',$id)->find();
    }
    public function editFormat($data){
        return db('product_format')->update($data);
    }
    public function delFormat($id){
        return db('product_format')->where('format_id','in',$id)->delete();
    }

}
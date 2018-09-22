<?php
namespace app\back\model;

use think\Model;
class Brand extends Model{
    public function __construct(){
        parent::__construct();
    }
    /**
     * 
     * 添加品牌
     * @param $data mixed
     * 
     * **/
    public function addBrand($data){
        return db('brand')->insert($data);
    }
    /**
     * 
     * 删除品牌
     * @param $id array
     * 
     * **/
    public function delBrand($id){
        return db('brand')->where('brand_id','in',$id)->delete();
    }
    /**
     * 
     * 条件查询品牌
     * @param $where mixed
     * 
     * **/
    public function selectBrand($where=""){
        return db("brand")->where($where)->select();
    }
    /**
     * 
     * 根据ID查询品牌
     * @param $id array&string 
     * **/
    public function getInfoByID($id){
        return db("brand")->where('brand_id','in',$id)->select();
    }
    /**
     * 
     * 编辑商品品牌
     * 
     * **/
    public function editBrand($data){
        if(empty($data['brand_id'])){
            return false;
        }
        return db("brand")->update($data);
    }
}
<?php
namespace app\back\model;

use think\Model;
class Product extends Model{
    /**
     * 
     * 添加单条记录
     * 
     * **/
    public function insertOne($data){
        return  db("product")->insertGetId($data);
    }
    /**
     *
     * 添加多条记录
     *
     * **/
    public function insertAll($data){
        return db("product")->insertAll($data);
    }
    /**
     *
     * 编辑记录
     *
     * **/
    public function editOne($data,$where=""){
        return db("product")->where($where)->update($data);
    }
    /**
     *
     * 删除单条记录
     *
     * **/
    public function deleteOne($where){
        return db("product")->where($where)->delete();
    }
    /**
     *
     * 彻底删除单/多条记录
     *
     * **/
    public function deleteTrue($where){
        return db("product")->where($where)->delete();
    }
    /**
     *
     * 软删除记录
     *
     * **/
    public function deleteAll($id,$type){
        $data['product_state'] = $type;
        return db("product")->where('product_id','in',$id)->update($data);
    }
    /**
     *
     * 查询单条记录
     *
     * **/
    public function findOne($where,$field="*"){
        return db("product")->field($field)->where('product_id','=',$where)->find();
    }
    /**
     *
     * 条件查询记录
     *
     * **/
    public function getProductByWhere($where){
            $product = db("product")->where($where)->order('product_id','desc')->paginate();
            return $product;
    }
    /**
     * 
     * 根据产品ID查询多条记录
     * 
     * **/
    public function getProductMore($id){
        $id = implode(",", $id);
        $where['product_id'] = ['in',$id];
        $where['product_state'] = ['eq',1];
        return db("product")->where($where)->select();
    }
    /**
     *
     * 添加多条二维码记录
     *
     * **/
    public function insertQrcodeAll($data){
        return db("product_qrcode")->insertAll($data);
    }
    /**
     * 
     * 查询商品分类列表
     * 
     * **/
    public function getProductClass(){
        return db("product_class")->order("pc_order","asc")->select();
    }
    /**
     * 
     * 编辑商品分类
     * 
     * **/
    public function editProductClassInfo($data){
        return db("product_class")->update($data);
    }
    /**
     * 
     * 删除商品分类
     * 
     * **/
    public function delProductClass($id){
        return db("product_class")->where("pc_id","in",$id)->delete();
    }
    /**
     *
     *
     * 根据条件查询数据
     *
     **/
    function selectBywhere($where){
        return db("product")->where($where)->paginate();
    }
}
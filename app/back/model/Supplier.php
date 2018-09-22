<?php
/**
 * Created by 多多科技.
 * User: 陈中
 * Date: 2017/10/25
 * Time: 18:28
 */

namespace app\back\model;

use app\back\model\Common;
class Supplier extends Common
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     *
     * 添加供货商
     *
     * **/
    public function addSupplier($data){
        return db("supplier")->insert($data);
    }
    /**
     *
     * 查询供货商
     *
     * **/
    public function selectAllSupplier($where=""){
        return db('supplier')->order('supplier_order','asc')->paginate();
    }
    /**
     *
     * 删除供货商
     *
     * **/
    public function delSupplier($whereId=""){
        return db('supplier')->where('supplier_id','in',$whereId)->delete();
    }
    /**
     *
     * 编辑供货商
     *
     * **/
    public function editSupplier($data){
        return db('supplier')->update($data);
    }
}
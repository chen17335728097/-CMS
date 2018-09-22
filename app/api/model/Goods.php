<?php
/**
 * Created by 多多科技.
 * User: 陈中
 * Date: 2017/12/29
 * Time: 18:40
 */

namespace app\api\model;


use think\Model;
use think\Db;
class Goods extends  Model
{
    protected $name = "product";
    public function goods($where){
        return $this->hasMany('attr','product_id','product_id')->hasWhere($where);
    }
    /***
     *
     * 查询商品规格属性信息
     * @param $where 查询条件
     *
     ***/
    public function getMoreGoodsAttr($where=[]){
        if(empty($where)){
            $where['p.product_state'] = ['eq','20'];
        }
        $fields = "p.product_name,p.product_image,p.product_sale_price,p.product_market_price,pa.attr_sale_price,pa.attr_market_price,pa.product_id,pa.attr_value";
        return Db::name("product")->alias('p')->field($fields)->join('product_attr pa','pa.product_id=p.product_id','left')->where($where)->select();
    }
}
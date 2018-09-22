<?php
/**
 * Created by 多多科技.
 * User: 陈中
 * Date: 2017/10/23
 * Time: 17:20
 */

namespace app\back\model;

use app\back\model\Common;
class Article extends Common
{
    public function __construct()
    {
        parent::__construct();
    }
    public function selectAllByWhere($where){
        return db("news")->alias('n')->join("think_column c","c.c_id=n.news_classid")->where($where)->paginate();
    }
}
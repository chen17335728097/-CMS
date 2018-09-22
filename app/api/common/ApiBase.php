<?php
/**
 * Created by 多多科技.
 * User: 陈中
 * Date: 2017/12/19
 * Time: 14:21
 */

namespace app\api\common;


use app\common\controller\BaseCommon;
use think\Controller;
use think\Exception;
use think\Db;
class ApiBase extends Controller
{
        public $config = "";

        public function __construct(){
            parent::__construct();
            $this->config = BaseCommon::findOne("config","*",['id'=>1]);
        }
        /***
         *
         * 验证token
         * @param $param
         * @param $sign 过滤字段
         *
         ***/
        public static function check_token($param,$sign){
            ksort($param);
            $sign = $param['sign'];
            if(empty($param['token'])){
                return ['code'=>10000,'msg'=>'系统繁忙，请稍后再试~~请见谅~~~'];
            }else{
                return ['code'=>20000];
            }
        }

}
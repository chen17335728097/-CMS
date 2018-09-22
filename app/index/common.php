<?php
/**
 * Created by 多多科技.
 * User: 陈中
 * Date: 2017/11/3
 * Time: 10:09
 *
 */
use app\common\controller\BaseCommon;
use app\common\wxApi\WxAPI;
use app\common\wxApi\WxPayUnifiedOrder;
use app\common\wxApi\WxPayApi;
use app\common\wxApi\WxPayJsApiPay;
/**
 *
 * 获取广告图url
 *
 *
***/
function return_image_url($tag){

    $url = BaseCommon::findInfoJoinTables('ad','a','ad_position','ap','a.ad_pid=ap.ad_pid','a.ad_pic',['ap.ad_tag'=>['eq',$tag]]);
    return $url['ad_pic'];
}
/**
 *
 * http发送请求
 *
 ***/
function http_post($url,$data){
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_HEADER,0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    //设置是通过post还是get方法
    curl_setopt($ch,CURLOPT_POST,1);
    //传递的变量
    curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
    //设置请求时间限制
    curl_setopt($ch,CURLOPT_TIMEOUT,60);
    $return_data = curl_exec($ch);
    curl_close($ch);
    return $return_data;
}
/**
 *
 * 生成微信头像二维码
 * @param $url 图片内容 url地址或者文本内容
 * @param $logo_img 微信头像图片
 *
 * **/
function makeMemberWxCode($url,$logo){
    ob_clean();
    /**二维码保存路径**/
    $code_path = "";
    $file_path = str_replace("\\","/",ROOT_PATH) . 'public/qrcode/' . date('Y-m-d',time());
    if(!file_exists($file_path)){
        mkdir($file_path,0777,1);
    }
    $errorCorrectionLevel ='H';//容错级别
    $matrixPointSize = intval(7);//生成图片大小
    //生成二维码图片
    Vendor('phpqrcode.phpqrcode');
    $object = new \QRcode();
    $file_name = date('YmdHis',time()) . mt_rand(123456,989898);
    $ad = $file_path . '/' . $file_name . '.png';
    $object->png($url, $ad, $errorCorrectionLevel, $matrixPointSize, 2);
    $logo = str_replace("\\","/",ROOT_PATH) . 'public/wx_code/wx_code.jpg';//准备好的logo图片
    $QR =  $file_path . '/' . $file_name . '.png';//已经生成的原始二维码图
    $QR = imagecreatefromstring(file_get_contents($QR));
    $logo = imagecreatefromstring(file_get_contents($logo));
    $QR_width = imagesx($QR);//二维码图片宽度
    $QR_height = imagesy($QR);//二维码图片高度
    $logo_width = imagesx($logo);//logo图片宽度
    $logo_height = imagesy($logo);//logo图片高度
    $logo_qr_width = $QR_width / 8;
    $scale = $logo_width/$logo_qr_width;
    $logo_qr_height = $logo_height/$scale;
    $from_width = ($QR_width - $logo_qr_width) / 2;
    //重新组合图片并调整大小
    imagecopyresampled($QR, $logo, $from_width, $from_width, 0, 0, $logo_qr_width,
        $logo_qr_height, $logo_width, $logo_height);
    //输出图片  带logo图片
    try {
        $new_img = 'public/qrcode/' . date('Y-m-d',time()) . '/' . $file_name . '.png';
        imagepng($QR,$new_img);
    }catch(\Exception $e){
        unlink($new_img);
        exit($e->getMessage());
    }
    return $new_img;
}
/***
 *
 * 微信支付
 *
 *
 ***/
function Api_Pay($config,$order_sn,$open_id,$price,$goods_name){
    $input = new WxPayUnifiedOrder();
    $tool = new WxPayJsApiPay();
    $price = $price*100;
    $input->SetAppid($config['web_APPID']);//公众账号ID
    $input->SetMch_id($config['web_MECHID']);//商户号
    $input->SetBody("河南万门分校");
    $input->SetAttach("$goods_name");
    $input->SetOut_trade_no("$order_sn");
    $input->SetTotal_fee("$price");
    $input->SetTime_start(date("YmdHis"));
    $input->SetTime_expire(date("YmdHis", time() + 600));
    $input->SetGoods_tag("test");
    $input->SetNotify_url("http://www.wanmen.org.cn/pay_notify.html");
    $input->SetTrade_type("JSAPI");
    $input->SetOpenid($open_id);
    $order = WxPayApi::unifiedOrder($input);
    $param = $tool->GetJsApiParameters($order);
    return $param;
}
/***
 *
 * 微信支付2
 *
 *
 ***/
function Api_Pay2($config,$order_sn,$open_id,$price,$goods_name){
    $input = new WxPayUnifiedOrder();
    $tool = new WxPayJsApiPay();
    $price = $price*100;
    $input->SetAppid($config['web_APPID']);//公众账号ID
    $input->SetMch_id($config['web_MECHID']);//商户号
    $input->SetBody("河南万门分校");
    $input->SetAttach("$goods_name");
    $input->SetOut_trade_no("$order_sn");
    $input->SetTotal_fee("$price");
    $input->SetTime_start(date("YmdHis"));
    $input->SetTime_expire(date("YmdHis", time() + 600));
    $input->SetGoods_tag("test");
    $input->SetNotify_url("http://www.wanmen.org.cn/member_pay_notify.html");
    $input->SetTrade_type("JSAPI");
    $input->SetOpenid($open_id);
    $order = WxPayApi::unifiedOrder($input);
    $param = $tool->GetJsApiParameters($order);

    return $param;
}
/***
 *
 * 根据用户各种币返回可提现余额
 *
 *
 ***/
function return_rebate_money($id){
    $member_info = BaseCommon::findOne('member','',['member_id'=>$id]);
    $rebate_value = return_member_grade($member_info['member_value']);
    $total = intval(($member_info['member_study_currency'] + $member_info['member_recommend_currency'] + $member_info['member_sign_currency'])*$rebate_value['grade_rebate']);
    return $total;
}
/***
 *
 * 创建文件
 *
 *
 ***/
function setFiles($data,$name){
    $files = './public/notify/'.$name.'.php';
    if(file_exists($files)){
        @unlink($files);
    }
    $fp = @fopen($files,"w");
    @fwrite($fp,$data);
    @fclose($fp);
}
/*
 * 手机判断
 *
 * @param unknown $array*/
function isMobile()
{
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $mobile_browser = Array (
        "mqqbrowser", // 手机QQ浏览器
        "opera mobi", // 手机opera
        "juc",
        "iuc", // uc浏览器
        "fennec",
        "ios",
        "applewebKit/420",
        "applewebkit/525",
        "applewebkit/532",
        "ipad",
        "iphone",
        "ipaq",
        "ipod",
        "iemobile",
        "windows ce", // windows phone
        "240×320",
        "480×640",
        "acer",
        "android",
        "anywhereyougo.com",
        "asus",
        "audio",
        "blackberry",
        "blazer",
        "coolpad",
        "dopod",
        "etouch",
        "hitachi",
        "htc",
        "huawei",
        "jbrowser",
        "lenovo",
        "lg",
        "lg-",
        "lge-",
        "lge",
        "mobi",
        "moto",
        "nokia",
        "phone",
        "samsung",
        "sony",
        "symbian",
        "tablet",
        "tianyu",
        "wap",
        "xda",
        "xde",
        "zte"
    );
    $is_mobile = false;
    foreach ( $mobile_browser as $device ) {
        if (stristr ( $user_agent, $device )) {
            $is_mobile = true;
            break;
        }
    }
    return $is_mobile;
}

//获取地理坐标
function returnLongitudeAndLatitude($param)
{
    $geocode = file_get_contents('http://api.map.baidu.com/geocoder/v2/?address=' . $param . '&output=json&ak=abq9R42aY2DF4Mbd3XlQnzeNDm4yWal8');
    $data = json_decode($geocode, true);
    if (empty($data['status'])) {
        return $data['result']['location'];
    } else {
        return false;
    }
}
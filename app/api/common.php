<?php
/**
 *
 * 分类树
 *
 * **/
function getColumnTree1($data,$pid){
    $tree_array = array();
    foreach($data as $key=>$value){
        if($value['column_pid']==$pid){
            $value['child'] = getColumnTree1($data,$value['c_id']);
            $tree_array[] = $value;
        }
    }
    return $tree_array;
}

/**
 * curl请求
 * @param $url
 * @param int $send
 * @return mixed
 */
function sendCurl($url,$type=CURLOPT_POST,$data=[],$second = 30)
{
    $ch = curl_init();
    //设置超时
    curl_setopt($ch, CURLOPT_TIMEOUT, $second);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);//严格校验
    //设置header
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    //设置获取的信息以文件流的形式返回，而不是直接输出。
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    if($type == 47)
    {
        curl_setopt($ch, $type, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    }
    //运行curl
    $data = curl_exec($ch);
    //返回结果
    if(!$data){
        $error = curl_error($ch);
        $res['code']    =   201;
        $res['msg']     =   'curl错误码：'.$error;
    }else{
        $res['code']    =   200;
        $res['data']    =   json_decode($data,true);
    }
    curl_close($ch);
    return $res;
}

/**
 * 取出随机字符串函数
 * @param $length 取出字符串长度
 * @param $str  指定字符串集合
 * @param $lower 是否转为大写（true 大写  false 小写） 默认小写
 */
function randstr($length,$str='',$lower=false){
    if(empty($str)){
        $str = "abcdefghijklmnopqrstuvwxyz0123456789";
    }
    $result = '';
    for ( $i = 0; $i < $length; $i++ )  {
        $result .= substr($str, mt_rand(0, strlen($str)-1), 1);
    }
    if($lower){
        $result = strtoupper($result);
    }
    return $result;
}
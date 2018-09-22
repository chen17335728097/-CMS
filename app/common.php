<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

use app\common\controller\BaseCommon;

// 应用公共文件
/**
 *
* 打印数据
* @param $data 数据
*
* **/
function p($data){ 
   var_dump($data);exit;
}
/**
 *
 * 分页
 * @param $info
 * @param $page_size 每页显示信息条数
 * @param $count 总记录数
 *
 * **/
function page($info){
     
}
/**
 *
 * 生成缩略图
 * @param $image_file 图片路径
 *
 * **/
function thumb_img($image_file,$filename,$type){
    if(!file_exists($image_file)){
        die("文件不存在");
    }
    //如果$type为空，则等比例缩放
    if(empty($type)){
        $type = 0.5;
    }
    //打开图片
    $img = \think\Image::open($image_file);
    $width = $img->width();//获取图片宽度
    $height= $img->height();//获取图片高度
    $end_height = $height*$type;
    $end_width = $width*$type;
    $im = $img->thumb($end_width,$end_height,$img::THUMB_SCALING);
    $save_path = str_replace("\\", "/", ROOT_PATH) . 'public/static/thumb/' . $filename;//缩略图文件
    $img->save($save_path);//保存缩略图
    if(!file_exists($save_path)){
        return false;
    }else{
        return true;
    }
}
/**
 *
 * 获取产品缩略图
 * @param $imgname 缩略图文件名
 * #param $type 缩略图类型
 *
 * **/
function thumb_path($imgname,$type=""){
    if(empty($type)){
        $thumb_path = str_replace("\\", "/", ROOT_PATH) . 'public/static/thumb/' . $imgname;
    }else{
        $thumb_path = str_replace("\\", "/", ROOT_PATH) . 'public/static/thumb/' . $type . '_' . $imgname;
    }
    return $thumb_path;
}
/**
 *
 * 文件上传
 * @param $files 上传文件信息数组
 * **/
function file_upload($files){
    if(empty($files)){
        $files = request()->file();
    }
    if(empty($files)){
        \exception('上传文件不存在', 100006);
    }
    //上传文件
    $file_info = $files->move(str_replace("\\", "/", ROOT_PATH) . 'public/uploads');
    if($file_info){
        return array('msg'=>"文件上传成功",'code'=>400);
    }else{
        return array('msg'=>"文件上传失败",'code'=>400);
    }
}
/**
 *
 * 图片上传
 * @param $files 上传文件信息数组
 * @param $img_type 是否生成缩略图
 * @param $type 缩略图类型
 *
 * **/
function image_upload($files,$img_type=true,$type='0.5'){
    if(empty($files)){
        $files = request()->file();
    }
    
    if(empty($files)){
        \exception('上传图片不存在',400);
    }
    //上传图片路径
    $count = count($files);
    $error = array();//错误信息数组
    if ($count>1){//判断是否是多图片上传
        //多图片上传
        foreach($files as $key=>$file){
            $file_info = $file->move(str_replace("\\", "/", ROOT_PATH) . 'public/uploads');
            if($file_info){
                //产生缩略图
                $save_path = 'uploads/' . str_replace("\\", "/", $file_info->getSaveName());
                if($img_type){
                    //缩略图路径
                    $img_path =  ROOT_PATH . 'public/' . $save_path;
                    $thumb_info = \thumb_img($img_path,$file_info->getFileName(),$type);  
                }
                $return_img[$key] = $save_path;
            }else{
                //图片上传失败
               $error[$key] = array('msg'=>$file->getError(),'code'=>400);
            }
        }
        return array('msg'=>$error,'code'=>200,'return_img'=>$return_img);
    }else{ 
        //单图片上传
        $file_info = $files->move(str_replace("\\", "/", ROOT_PATH) . 'public/uploads');
        if($file_info){
            $save_path = 'uploads/' . str_replace("\\", "/", $file_info->getSaveName());
            if($img_type){
                //缩略图
                $img_path =  ROOT_PATH . 'public/' . $save_path;
                $thumb_info = \thumb_img($img_path,$file_info->getFileName(),$type);
            }
            return array('msg'=>"图片文件上传成功",'code'=>200,'return_img'=>$save_path);
        }else{
            $error[] = array('msg'=>$files->getError(),'code'=>400);
        }
    }

}

/*
 * Auth权限验证 - 控制器
 * $ruleName 验证规则
 * $userId  验证用户id
 * $relation 默认为'or' 表示满足任一条规则即通过验证; 'and'则表示需满足所有规则才能通过验证
 * */
function AuthCheck($ruleName,$userId,$relation='or'){
    //实例化权限类
    $Auth = new think\Auth();
    //用户ID判断，没有就取当前登录的用户ID
    if(empty($userId)){
        $userId = $_SESSION['user_id'];
    }
    $type=1; //分类-实时验证，默认为:1为实时验证2为登录验证
    $mode='url'; //执行check的模式,默认为:url
    return $Auth->check($ruleName,$userId,$type,$mode,$relation);
}


/**
 * 
 * 生成二维码
 * @param $id 产品id
 * @param $url 图片内容 url地址或者文本内容
 * @param $rand 随机数与时间戳
 * **/
 function makeCode($id,$url,$rand,$qrfile,$type=true){
     /**二维码保存路径**/
         //保存相对路径
         $code_path = "";
         $filename = str_replace("\\","/",ROOT_PATH) . 'public/qrcode/' . date('Y-m-d',time());
         if(!file_exists($filename)){
             mkdir($filename);
         }
         
         $file = $filename . '/' . $id;
         if(!file_exists($file)){
             mkdir($file);
         }
         if($type){
             $dir = 'logo';
         }else{
             $dir = 'unlogo';
         }
         $file_path = $file . '/' . $dir;
         if(!file_exists($file_path)){
             mkdir($file_path);
         }
     //带LOGO
     if($type){
         $errorCorrectionLevel ='L';//容错级别
         $matrixPointSize = intval(6);//生成图片大小
         //生成二维码图片
         Vendor('phpqrcode.phpqrcode');
         $object = new \QRcode();
         $ad = $file_path . '/' . $rand . '.png';
         $object->png($url, $ad, $errorCorrectionLevel, $matrixPointSize, 2);
         $logo = str_replace("\\","/",ROOT_PATH) . 'public/wx_open.jpg';//准备好的logo图片
         $QR =  $file_path . '/'.$rand.'.png';//已经生成的原始二维码图
         $QR = imagecreatefromstring(file_get_contents($QR));
         $logo = imagecreatefromstring(file_get_contents($logo));
         $QR_width = imagesx($QR);//二维码图片宽度
         $QR_height = imagesy($QR);//二维码图片高度
         $logo_width = imagesx($logo);//logo图片宽度
         $logo_height = imagesy($logo);//logo图片高度
         $logo_qr_width = $QR_width / 5;
         $scale = $logo_width/$logo_qr_width;
         $logo_qr_height = $logo_height/$scale;
         $from_width = ($QR_width - $logo_qr_width) / 2;
         //重新组合图片并调整大小
         imagecopyresampled($QR, $logo, $from_width, $from_width, 0, 0, $logo_qr_width,
         $logo_qr_height, $logo_width, $logo_height);
         //输出图片  带logo图片
         try {
             $new_img = $file_path . '/' . $rand . '.png';
             imagepng($QR,$new_img);
         }catch(\Exception $e){
             unlink($new_img);
             exit($e->getMessage());
         }
         
         return $new_img;
     }else{
         //不带LOGO
         Vendor('phpqrcode.phpqrcode');
         //生成二维码图片
         $object = new \QRcode();
         $level=3;
         $size=4;
         
         $ad = $file_path . '/' . $rand . '.jpg';
         $code_path = "/public/qrcode/" . $qrfile . '/' . $id . '/' . $dir . '/' . $rand . '.jpg';
         $errorCorrectionLevel =intval($level);//容错级别
         $matrixPointSize = intval($size);//生成图片大小
         $qrimg = $object->png($url,  $ad, $errorCorrectionLevel, $matrixPointSize, 2);
         return $code_path;
     }     
 }

/**
 * 
 * 分类树
 * 
 * **/
 function getColumnTree($data){
     $tree_array = array();
     foreach($data as $key=>$value){
         if($value['pid']==0){
             $tree_array[$value['acid']] = array(
                 'acname'=>$value['acname'],
                 'acid'  =>$value['acid']
             );
             foreach($data as $ke=>$val){
                 if($val['acpid'] != 0 && !empty($val['acid']) && $val['acpid']==$value['acid']){
                     $tree_array[$value['acid']]['two'][$val['acid']] = array(
                         'acid'=>$val['acid'],
                         'acname'=>$val['acname']
                     );
                     foreach ($data as $k=>$v){
                         if($v['acpid'] !=0 && !empty($v['acpid']) && $v['acpid'] == $val['acid']){
                             $tree_array[$value['acid']]['two'][$val['acid']]['three'][$v['acid']] = array(
                                 'acid'=>$v['acid'],
                                 'acname'=>$v['acname']
                             );
                         }
                     }
                 }
 
             }
         }
     }
     return $tree_array;
 }

/**
 * 
 * 数据导入表格
 * 
 * **/
 function excel(){
     Loader::import('PHPOffice.PHPExcel');
     Loader::import("PHPOffice.PHPExcel.Reader.Excel5");
     error_reporting(E_ALL);
     date_default_timezone_set('Asia/ShangHai');
     $objPHPExcel = new \PHPExcel();
     //第一行数据
     $objPHPExcel->setActiveSheetIndex(0)
     ->setCellValue('A1', '序号')
     ->setCellValue('B1', '部门')
     ->setCellValue('C1', '出单人')
     ->setCellValue('D1', '签单日期');
     
     // 设置数据
     $n = 1;
     foreach($data as $k => $v){
         $k= $k + $n;
         $num=$k + $n;//数据从第二行开始录入
         $objPHPExcel->setActiveSheetIndex(0)
         //Excel的第A列，uid是你查出数组的键值，下面以此类推
         ->setCellValue('A'.$num, $k)//序号
         ->setCellValue('B'.$num, $v['auth_group_title'])//部门
         ->setCellValue('C'.$num, $v['issuer'])//出单人
         ->setCellValue('D'.$num, $v['bill_time']);//签单时间
     }
     $objPHPExcel->getActiveSheet()->setTitle($table);
     $objPHPExcel->setActiveSheetIndex(0);
     ob_end_clean();
     header('Content-Type: application/vnd.ms-excel','charset=utf-8');
     header('Content-Disposition: attachment;filename="' . time() . '.xls"');
     header('Cache-Control: max-age=0');
     $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
     $objWriter->save('php://output');
     return true;
 }

 /**
  * 发送邮箱
  * @param type $data 邮箱队列数据 包含邮箱地址 内容
  */
 function sendEmail($data = []) {
     $mail = new \think\MySendMail();
     $mail->setServer("XXXXX", "XXXXX@XXXXX", "XXXXX");
     $mail->setFrom("XXXXX@XXXXX");
     $mail->setReceiver("XXXXX@XXXXX");
     //$mail->setReceiver("XXXXX@XXXXX");
     $mail->setCc("XXXXX@XXXXX");
     $mail->setCc("XXXXX@XXXXX");
     $mail->setBcc("XXXXX@XXXXX");
     $mail->setBcc("XXXXX@XXXXX");
     $mail->setBcc("XXXXX@XXXXX");
     $mail->setMailInfo("test", "<b>test</b>", "sms.zip");
     $mail->sendMail();
 }
/**
 *
 * 栏目分类树
 *
 * **/
function ColumnTree($data){
    $tree_array = array();
    foreach($data as $key=>$value){
        if($value['column_pid']==0){
            $tree_array[$value['c_id']] = array(
                'column_name'=>$value['column_name'],
                'column_order'=>$value['column_order'],
                'column_pid'=>$value['column_pid'],
                'column_show'=>$value['column_show'],
                'column_open'=>$value['column_open'],
                'column_controller'=>$value['column_controller'],
                'c_id'  =>$value['c_id']
            );
            foreach($data as $ke=>$val){
                if($val['column_pid'] != 0 && !empty($val['c_id']) && $val['column_pid']==$value['c_id']){
                    $tree_array[$value['c_id']]['two'][$val['c_id']] = array(
                        'c_id'=>$val['c_id'],
                        'column_order'=>$val['column_order'],
                        'column_pid'=>$val['column_pid'],
                        'column_open'=>$val['column_open'],
                        'column_show'=>$val['column_show'],
                        'column_controller'=>$val['column_controller'],
                        'column_name'=>$val['column_name']
                    );
                    foreach ($data as $k=>$v){
                        if($v['column_pid'] !=0 && !empty($v['column_pid']) && $v['column_pid'] == $val['c_id']){
                            $tree_array[$value['c_id']]['two'][$val['c_id']]['three'][$v['c_id']] = array(
                                'c_id'=>$v['c_id'],
                                'column_order'=>$v['column_order'],
                                'column_pid'=>$v['column_pid'],
                                'column_open'=>$v['column_open'],
                                'column_show'=>$v['column_show'],
                                'column_controller'=>$v['column_controller'],
                                'column_name'=>$v['column_name']
                            );
                        }
                    }
                }
            }
        }
    }
    return $tree_array;
}


/***
 *
 *  返回会员等级
 * @param $value 会员经验值
 *
 ***/
function return_member_grade($value){
    $grade_list = "";
    if(empty(\cache('grade_data'))){
        $grade_list = BaseCommon::findMore('member_grade','',[],'grade_order asc','');
        if(empty($grade_list)){
            return false;
        }
        \cache('grade_data',$grade_list,'');
    }else{
        $grade_list = \cache('grade_data');
    }
    foreach ($grade_list as $key=>$val){
        if($value>=floatval($val['grade_min']) && floatval($val['grade_max'])>=$value){
            return $val;
        }
    }
    $end = end($grade_list);
    return $end;
}
/****/
function return_goods_attr($data)
{
    $return = "";
    switch (count($data)) {
        case 0:
            return $return;
            break;
        case 1:
            $return = $data[0];
            return $return;
            break;
        case 2:
            foreach ($data[0] as $val) {
                foreach ($data[1] as $v) {
                    $return[] = $val . "*" . $v;
                }
            }
            return $return;
            break;
        case 3:
            foreach ($data[0] as $val) {
                foreach ($data[1] as $v) {
                    foreach ($data[2] as $v1) {
                        $return[] = $val . "*" . $v . "*" . $v1;
                    }
                }
            }
            return $return;
            break;

    }
}



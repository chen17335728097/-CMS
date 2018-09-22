<?php
/**
 * 
 * 公共函数/(ㄒoㄒ)/~~
 * 
 * **/

/*
 * 权限树
 * */
function getAuthTree($data){
    $tree_array = array();
    foreach($data as $key=>$value){
        if($value['pid']==0){
            $tree_array[$value['id']] = array(
                'name'=>$value['name'],
                'title'=>$value['title'],
                'status'=>$value['status'],
                'order'=>$value['order'],
                'pid'=>$value['pid'],
                'id'  =>$value['id']
            );
            foreach($data as $ke=>$val){
                if($val['pid'] != 0 && !empty($val['id']) && $val['pid']==$value['id']){
                    $tree_array[$value['id']]['two'][$val['id']] = array(
                        'id'=>$val['id'],
                        'name'=>$val['name'],
                        'status'=>$val['status'],
                        'order'=>$val['order'],
                        'pid'=>$val['pid'],
                        'title'=>$val['title']
                    );
                    foreach ($data as $k=>$v){
                        if($v['pid'] !=0 && !empty($v['pid']) && $v['pid'] == $val['id']){
                            $tree_array[$value['id']]['two'][$val['id']]['three'][$v['id']] = array(
                                'id'=>$v['id'],
                                'name'=>$v['name'],
                                'status'=>$v['status'],
                                'pid'=>$v['pid'],
                                'order'=>$v['order'],
                                'title'=>$v['title']
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
 * 提示信息
 * 
 * **/
function showMessages($message,$url,$time){
       $time = 1;
       $strotime = intval($time * 1000);
       $str = "";
       $str  = "<!DOCTYPE html><html><head>
		<meta charset='UTF-8'>
		<title></title>
		<link rel='stylesheet' type='text/css' href='/public/static/admin/css/layer.css' />
		<script src='http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js' type='text/javascript' charset='utf-8'></script>
        <script src='/public/static/admin/js/layer.js' type='text/javascript' charset='utf-8'></script>
        <style type='text/css'>
			.yourclass {
				height: 240px;
				background-color: #e6e6e6;
				box-shadow: none;
				color: #5a98de;
                font-size:25px;
                font-family:'微软雅黑';
				width: 360px;
				top: 334px;
				left: 418px;
                text-align:center;
			}
           .layui-layer-content{
                padding-top:50px;
            }
           .h1{
                text-align:center;
                padding-top:15px;
            }
		</style>
	    </head>
        <body>";
       $str .="<script type='text/javascript'>
			layer.ready(function() {
					layer.open({
					type: 1,
					title: false,
					closeBtn: 0,
                    shadeClose: true,
                    skin: 'yourclass',
                    time:'{$strotime}',
                    content:'{$message}',
                    success:function(){
                                var a = {$time};
                                $('.layui-layer-content').append('<h1>'+ a +'</h1>');
                                setInterval(function(){a--;$('.layui-layer-content h1').text(a);},1000);
                            },
                    end:function(){
                                url = '{$url}';
                                if(url == '' || url==null || url=='undefined'){
                                    url = 'back/index/index';
                                }
                                window.location.href = url;
                            }
				});
           });
		</script>";
       $str .="</body></html>";
       echo $str;exit;
}
/**
 * 
 * 商品分类树
 * 
 * **/
 function product_class_tree($data){
     if(empty($data)){
         return false;
     }
     $tree_array = array();
     foreach($data as $key=>$value){
        if($value['pcid']==0){
            $tree_array[$value['pc_id']] = array(
                'pc_name'=>$value['pc_name'],
                'pc_order'=>$value['pc_order'],
                'pcid'=>$value['pcid'],
                'pc_time'=>$value['pc_time'],
                'pc_url'=>$value['pc_url'],
                'pc_img'=>$value['pc_img'],
                'pc_open'=>$value['pc_open'],
                'pc_id'=>$value['pc_id']
            );
            foreach($data as $ke=>$val){
                if($val['pcid'] != 0 && !empty($val['pc_id']) && $val['pcid']==$value['pc_id']){
                    $tree_array[$value['pc_id']]['two'][$val['pc_id']] = array(
                        'pc_id'=>$val['pc_id'],
                        'pc_order'=>$val['pc_order'],
                        'pcid'=>$val['pcid'],
                        'pc_url'=>$val['pc_url'],
                        'pc_img'=>$val['pc_img'],
                        'pc_time'=>$val['pc_time'],
                        'pc_open'=>$val['pc_open'],
                        'pc_name'=>$val['pc_name']
                    );
                    foreach ($data as $k=>$v){
                        if($v['pcid'] !=0 && !empty($v['pcid']) && $v['pcid'] == $val['pc_id']){
                            $tree_array[$value['pc_id']]['two'][$val['pc_id']]['three'][$v['pc_id']] = array(
                                'pc_id'=>$v['pc_id'],
                                'pc_order'=>$v['pc_order'],
                                'pcid'=>$v['pcid'],
                                'pc_url'=>$v['pc_url'],
                                'pc_img'=>$v['pc_img'],
                                'pc_open'=>$v['pc_open'],
                                'pc_time'=>$v['pc_time'],
                                'pc_name'=>$v['pc_name']
                            );
                        }
                    }
                }
            }
        }
    }
    return $tree_array;
 }
 /*
  * 读取文件夹下的所有文件
  *
  * */
 function showdir($path){
     $dh = opendir($path);//打开目录
     while(($d = readdir($dh)) != false){
         //逐个文件读取，添加!=false条件，是为避免有文件或目录的名称为0
         if($d=='.' || $d == '..'){//判断是否为.或..，默认都会有
             continue;
         }
         $array[] = $d;
         if(is_dir($path.'/'.$d)){//如果为目录
             showdir($path.'/'.$d);//继续读取该目录下的目录或文件
         }
     }
     return $array;
 }
 /**
  *
 *  数组、对象转换
  *
  **/
 function TArray($data){
     $new_array = array();
     $array = $data->toArray();
     if(!empty($array['data'])){
         $new_array  = $array['data'];
     }
     foreach ($new_array as $key=>$value){
         $new_array[$key]['format_value'] = unserialize($value['format_value']);
     }
     return $new_array;
}

function return_columnName($id){

    if(empty($id)){
        return "";
    }
    $info = db("product_class")->where(['pc_id'=>$id])->find();
    if(empty($info)){
        return "";
    }
    return $info['pc_name'];
}

//返回试题等级名称
function return_qgName($id){
    if(empty($id)){
        return "";
    }
    $info = db("question_grade")->where(['qg_id'=>$id])->find();
    if(empty($info)){
        return "";
    }
    return $info['qg_name'];
}

//返回试题类型名称
function return_qtName($id){
    if(empty($id)){
        return "";
    }
    $info = db("question_type")->where(['qt_id'=>$id])->find();
    if(empty($info)){
        return "";
    }
    return $info['qt_name'];
}

function return_atname($id){
    if(empty($id)){
        return "";
    }
    $info = db("articletype")->where(['atid'=>$id])->find();
    if(empty($info)){
        return "";
    }
    return $info['atname'];
}
/**
 *
 * 多图片上传
 * @param $files 上传文件信息数组
 * @param $img_type 是否生成缩略图
 * @param $type 比例
 *
 * **/
function image_uploadMoreFiles($files,$img_type=false,$type='0.5'){
    if(empty($files)){
        $files = \request()->file('news_moreImg');
    }
    if(empty($files)){
        \exception('上传图片不存在',400);
    }

    $count = count($files);
    $return_img = array();
    $error = array();//错误信息数组
    if ($count>=1){//判断是否是多图片上传
        //多图片上传
        foreach($files as $key=>$file){
            $file_info = $file->move(str_replace("\\", "/", ROOT_PATH) . 'public'.DS.'uploads');
            if($file_info){
                //产生缩略图
                $save_path = 'uploads' . DS . str_replace("\\", "/", $file_info->getSaveName());
                if($img_type){
                    //缩略图路径
                    $img_path =  ROOT_PATH . 'public' . DS . $save_path;
                    $thumb_info = \thumb_img($img_path,$file_info->getFileName(),$type);
                }
                $return_img[] = $save_path;
            }else{
                //图片上传失败
                $error[] = $files->getError();
            }
        }
        return array('msg'=>$error,'code'=>200,'return_img'=>$return_img);
    }else{
        $file_info = $files->move(str_replace("\\", "/", ROOT_PATH) . 'public'.DS.'uploads');
        if($file_info){
            $save_path = 'uploads' . DS . str_replace("\\", "/", $file_info->getSaveName());
            if($img_type){
                //缩略图
                $img_path =  ROOT_PATH . 'public' . DS . $save_path;
                $thumb_info = \thumb_img($img_path,$file_info->getFileName(),$type);
            }
            $return_img[] = $save_path;
        }else{
            $error[] = $files->getError();
        }
        return array('msg'=>$error,'code'=>200,'return_img'=>$return_img);
    }

}

/**
 *
 * 视频文件上传
 * @param $files 上传文件信息数组
 * **/

function video_upload($files,$file_name){
    if(empty($files)){
        $files = request()->file();
    }
    if(empty($files)){
        \exception('上传文件不存在', 100006);
    }
    //上传文件
    $file_info = $files->move(str_replace("\\", "/", ROOT_PATH) . 'public/'.$file_name);
    if($file_info){
        $save_file = $file_name . '/' . str_replace("\\", "/", $file_info->getSaveName());
        return array('msg'=>"文件上传成功",'code'=>400,'video'=>$save_file);
    }else{
        return array('msg'=>"文件上传失败",'code'=>400);
    }
}
//

function return_member_info($mid){
    $info = db("member")->field("member_nickname,member_id,member_phone")->where(['member_id'=>$mid])->find();
    return $info;
}

function return_total_days($time){
    $start = $time . " 00:00:00";
    $end = $time . " 23:59:59";
    $count = db("member_recharge")->where(['recharge_time'=>['between',"$start,$end"],'recharge_type'=>10])->sum("recharge_count");
    return empty($count) ? 0.00 : $count;
}
function return_consume_days($time){
    $start = $time . " 00:00:00";
    $end = $time . " 23:59:59";
    $count = db("member_recharge")->where(['recharge_time'=>['between',"$start,$end"],'recharge_type'=>20])->sum("recharge_count");
    return empty($count) ? 0.00 : $count;
}
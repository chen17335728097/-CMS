<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
//配置文件
use think\Request;

$root_path = Request::instance()->root();

if (pathinfo($root_path, PATHINFO_EXTENSION) == 'php') {
    $root_path = dirname($root_path);
}
return [
    
    'view_replace_str'=>[
        
        '__ADMIN__'         => $root_path.'/public/static/admin',
        // 缩略图路径
        '__THUMB__'  => $root_path.'/public/static/thumb',
        //静态文件路径
        '__STATIC__' => $root_path.'/public/static/back',
        //public文件路径
        '__PUBLIC__' => $root_path.'/public',
        //第三方类路径
        '__EXTEND__'   => str_replace("\\", "/", EXTEND_PATH),
    ]
    
];
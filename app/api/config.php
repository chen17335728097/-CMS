<?php
//配置文件
return [
    // 默认输出类型
    'default_return_type'    => 'json',
    // 是否开启路由
    'url_route_on'           => true,
    // 路由使用完整匹配
    'route_complete_match'   => true,
    // 路由配置文件（支持配置多个）
    'route_config_file'      => ['route','backRoute'],
    // 是否强制使用路由
    'url_route_must'         => true,
];
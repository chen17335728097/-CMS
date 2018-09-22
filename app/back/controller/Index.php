<?php

/**
 * @company 至开科技
 * @author 海豚之泪
 * @email 499211940@qq.com
 *
 * *******************************************************************************************/
 
namespace app\back\controller;
use \app\back\controller\BaseAdmin;
use \app\common\controller\BaseCommon;
use think\Db;
class Index extends BaseAdmin
{
    public function _initialize(){
        parent::_initialize();
    }
    public function index()
    {
        $news = BaseCommon::findMore('product','*',"","product_id desc","");
        $this->assign("hot_list",$news);
        $version = Db::query('SELECT VERSION() AS ver');
        $config  = [
            'url'             => $_SERVER['HTTP_HOST'],
            'document_root'   => $_SERVER['DOCUMENT_ROOT'],
            'server_os'       => PHP_OS,
            'server_port'     => $_SERVER['SERVER_PORT'],
            'server_ip'       => $_SERVER['SERVER_ADDR'],
            'server_soft'     => $_SERVER['SERVER_SOFTWARE'],
            'php_version'     => PHP_VERSION,
            'mysql_version'   => $version[0]['ver'],
            'max_upload_size' => ini_get('upload_max_filesize')
        ];
        $this->assign('con', $config);

        return $this->fetch("index/index");
    }
    public function welcome(){
        return $this->fetch("index/welcome");
    }
   
}

<?php

/**
 * @company 至开科技
 * @author 海豚之泪
 * @email 499211940@qq.com
 *
 * *******************************************************************************************/
 
namespace app\back\controller;

use app\back\controller\BaseAdmin;
use app\common\controller\Logs;
use app\back\model\System as SystemModel;
use think\Config;
class System extends BaseAdmin{
    
    
    protected $model = "";
    public $config = '';                                                        //相关配置                                                         //实例化一个model
    public $content;                                                            //内容
    public $dbName = '';                                                        //数据库名
    public $dir_sep = '/';                                                      //路径符号
    var $db; // 数据库连接
    var $database; // 所用数据库
    var $sqldir; // 数据库备份文件夹
    public $msg = "";
    // 换行符
    private $ds = "\n";
    // 存储SQL的变量
    public $sqlContent = "";
    // 每条sql语句的结尾符
    public $sqlEnd = ";";
    public $sqlPath = './sqlback/';
    /**
     *
     * 构造函数
     *
     * **/
    public function _initialize(){
        
        parent::_initialize();
        $this->host = Config::get('database.hostname');
        $this->username = Config::get('database.username');
        $this->password = Config::get('database.password');
        $this->database = Config::get('database.database');
        $this->charset = Config::get('database.charset');
        //set_time_limit(0);//无时间限制
        @ob_end_flush();
        // 连接数据库
        /*$this->db = @mysql_connect ( $this->host, $this->username, $this->password ) or die( '<p class="dbDebug"><span class="err">Mysql Connect Error : </span>'.mysql_error().'</p>');
        // 选择使用哪个数据库
        @mysql_select_db ( $this->database, $this->db ) or die('<p class="dbDebug"><span class="err">Mysql Connect Error:</span>'.mysql_error().'</p>');
        // 数据库编码方式
        @mysql_query ( 'SET NAMES ' . $this->charset, $this->db );*/
        $this->model = new SystemModel;
    }
    /**
     * 
     * 系统设置
     * 
     * **/
    public function system_base(){
        if(\request()->isPost()){
            $data = \input("post.");
            $file = \request()->file("logo");

            if(!empty($file)){
                $info = image_upload($file,false,'');//缩略图
                $data['web_logo'] = $info['return_img'];
            }
            $files = \request()->file("wx_logo");

            if(!empty($files)){
                $wx_info = image_upload($files,false,'');//缩略图
                $data['web_wx_logo'] = $wx_info['return_img'];
            }
            $res = $this->model->saveConfig($data);
            if($res){
                //保存系统设置成功
                $logs = array(
                    'log_title'=>\session('username') . "保存系统设置成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                showMessages("保存系统设置成功",'parameter.html',5);
            }else{
                showMessages("保存系统设置失败",'parameter.html',5);
            }
        }else{
            $info = $this->model->findInfo();
            $this->assign("info",$info);
            return $this->fetch("sys/parameter");
        }
        
    }
    /**
     * 创建保存为桌面代码
     * @param String $filename 保存的文件名
     * @param String $url   访问的连接
     * @param String $icon   图标路径
     */
     public function desktop2(){
                 $url = "http://" . $_SERVER['HTTP_HOST'];
                 $Shortcut = "[InternetShortcut] 
                            URL=$url 
                            IconFile=$url/favicon.ico
                            IconIndex=0 
                            HotKey=1613 
                            IDList=[{000214A0-0000-0000-C000-000000000046}] 
                            Prop3=19,2";
                 header("Content-Type: application/octet-stream");
                 header("Content-Disposition: attachment; filename=阳光教育集团.url");
                 echo $Shortcut;
     }
    /**
     * 
     * 保存系统设置
     * 
     * **/
    public function systemSave(){
        $data = \input("post.");
        $res = $this->model->saveConfig($data);
        if($res){
            //保存系统设置成功
            $logs = array(
                'log_title'=>\session('username') . "保存系统设置成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            showMessages("保存系统设置成功",url('system/system_base'),5);
        }else{
            showMessages("保存系统设置失败",url('system/system_base'),5);
        }
    }
    /**
     * 
     * 微信配置
     * 
     * 
     * **/
    public function wechatConfig(){
        $info = $this->model->findInfo();
        $this->assign("info",$info);
        return $this->fetch("sys/wechat");
    }
    /**
     *
     * 邮件配置
     *
     *
     * **/
    public function emailConfig(){
        $info = $this->model->findInfo();
        $this->assign("info",$info);
        return $this->fetch("sys/email");
    }
    /**
     *
     * 邮件配置
     *
     *
     * **/
    public function payConfig(){
        $info = $this->model->findInfo();
        $this->assign("info",$info);
        return $this->fetch("sys/pay");
    }
    /**
     * 
     * 清楚缓存
     * 
     * **/
    public function clearCache(){
        //清楚文件缓存
        $file_path = str_replace("\\", "/", RUNTIME_PATH);
        $this->rmFile($file_path,'temp');
        $this->rmFile($file_path,'cache');
        showMessages("更新缓存成功",'back_index.html',5);
    }
    /**
     * 
     * 系统日志
     * 
     * **/
    public function log(){
        $log = $this->model->selectAllLog();
        $page = $log->render();
        $this->assign("log",$log);
        $this->assign("page",$page);
        return $this->fetch("sys/admin_log");
    }
    /**
     *
     * 删除系统日志
     *
     * **/
    public function log_del(){
        $id = \input("id/a");
        $id = array_filter($id);
        $result = $this->model->deleteLog($id);
        if($result){
            //上传产品成功
            $logs = array(
                'log_title'=>\session('username') . "删除日志成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            exit(json_encode(array('msg'=>'日志删除成功','code'=>200)));
        }else{
            exit(json_encode(array('msg'=>'日志删除失败','code'=>400)));
        }
    }


    

/************************************************自定义控制器方法************************************************************************************************/
    /**
     * 
     * 删除文件及文件夹
     *
     * */
    private function rmFile($path, $fileName)
    {//删除执行的方法
    //去除空格
    $path = preg_replace('/(\/){2,}|{\\\}{1,}/', '/', $path);
    //得到完整目录
    $path.= $fileName;
    //判断此文件是否为一个文件目录
        if (is_dir($path))
        {
            //打开文件
            if ($dh = opendir($path))
            {
                //遍历文件目录名称
                while (($file = readdir($dh)) != false)
                {
                    $sub_file_path = $path . "/" . $file;
                    if ("." == $file || ".." == $file)
                    {
                        continue;
                    }
                    if (is_dir($sub_file_path))
                    {
                        $this->rmFile($sub_file_path, "");
                        if(file_exists($sub_file_path)){
                            rmdir($sub_file_path);
                        }
                    }
                    //逐一进行删除
                    if(file_exists($sub_file_path)){
                        unlink($sub_file_path);
                    }
                }
                //关闭文件
                closedir($dh);
            }
            rmdir($path);//删除当前目录
        }
    }
    
    
    
    
    
    
    
/******************************************数  据  备  份*************************************************************************************************************************/
    
    /*
     *
     * 备份数据库所有表
     *
     * */
    public function sql_copy(){        
        if(\request()->isPost()){
            $result = $this->backup('','','');//备份所有表;
            if($result){
                $logs = array(
                    'log_title'=>session('username') . "备份数据{}成功",
                    'log_time'=>time(),
                    'u_name'=>session("username"),
                    'uid'=>session('user_id')
                );
                Logs::log($logs);
                showMessages("恭喜您! 备份数据库成功",'database.html',3);
            }else{
                showMessages("备份数据库失败",'database.html',3);
            }
        }else{
            //获取所有数据表
            $tables = $this->getTables();
            $this->assign("table_list",$tables);
            return $this->fetch("sys/tables");
        }
    }
    /*
     * 
     * 数据备份列表
     * 
     * */
    public function sql_read(){
        $sql_list = $this->sqlPath;
        $sql_list = showdir($sql_list);
        $sql_data = [];
        if(!empty($sql_list)){
            foreach($sql_list as $value){
                $filesize = filesize($this->sqlPath . '/' .$value);
                $time = filemtime($this->sqlPath . '/' .$value);
                
                $sql_data[] = array(
                    'file'=>$value,
                    'time'=>date('Y-m-d H:i:s',$time),
                    'size'=>round($filesize/(1024*1024)) . "M"
                );
            }
        }
        
        $this->assign("sql_list",$sql_data);
        return $this->fetch("sys/database");
    }
    /*
     * 恢复数据备份
     * 
     * */
    public function sql_reRead(){
        $sql_data = \input("post.tables");
        if(!empty($sql_data)){
               /* foreach($sql_data as $val){
                    $file_path[] = $this->sqlPath . $val;
                }*/
                $res = $this->restore($sql_data);
                if($res){
                    $logs = array(
                        'log_title'=>session('username') . "恢复备份数据成功",
                        'log_time'=>time(),
                        'u_name'=>session("username"),
                        'uid'=>session('user_id')
                    );
                    Logs::log($logs);
                    showMessages("恢复备份数据还成功",'read.html',2);
                }else{
                    showMessages("恢复数据库备份失败",'read.html',2);
                }
        }else{
            showMessages("读取数据失败",'read.html',3);
        }


    }
    /*
     * 删除备份文件
     *
     * */
    public function sql_del(){
        $file = input("file");
        $file_path = $this->sqlPath . $file;
    
        if(!file_exists($file_path)){
            $this->error("{$file}文件不存在");
        }
        if(unlink($file_path)){
            $this->success("删除{$file}文件成功",url("Home/Setting/sql_read"),2);
        }else{
            $this->error("删除文件{$file}失败");
        }
    }
    
    
    /*
     *
     * ------------------------------------------数据库备份start----------------------------------------------------------
     */
    
    /*
     * 新增查询数据库表
     */
    function getTables() {
        $res = mysql_query ( "SHOW TABLES" );
        $tables = array ();
        while ( $row = mysql_fetch_array ( $res ) ) {
            $tables [] = $row [0];
        }
        return $tables;
    }
    /**
     * 数据库备份
     * 参数：备份哪个表(可选),备份目录(可选，默认为backup),分卷大小(可选,默认2000，即2M)
     *
     * @param $string $dir
     * @param int $size
     * @param $string $tablename
     */
    
    function backup($tablename = '', $dir, $size) {
        
        $dir = $dir ? $dir : $this->sqlPath;
        
        // 创建目录
        if (! is_dir ( $dir )) {
            mkdir ( $dir, 0777, true ) or die ( '创建文件夹失败' );
        }
        $size = $size ? $size : 2048;
        $sql = '';
        // 只备份某个表
         
        if (! empty ( $tablename )) {
            // 只备份某个表
            if(@mysql_num_rows(mysql_query("SHOW TABLES LIKE '".$tablename."'")) == 1) {
                
            } else {
                $this->_showMsg('表-<b>' . $tablename .'</b>-不存在，请检查！',true);
                die();
            }
            $this->_showMsg('正在备份表 <span class="imp">' . $tablename.'</span>');
            // 插入dump信息
            $sql = $this->_retrieve ();
            // 插入表结构信息
            $sql .= $this->_insert_table_structure ( $tablename );
            // 插入数据
            $data = mysql_query ( "select * from " . $tablename );
            // 文件名前面部分
            $filename = date ( 'YmdHis' ) . "_" . $tablename;
            // 字段数量
            $num_fields = mysql_num_fields ( $data );
            // 第几分卷
            $p = 1;
            // 循环每条记录
            while ( $record = mysql_fetch_array ( $data ) ) {
                // 单条记录
                $sql .= $this->_insert_record ( $tablename, $num_fields, $record );
                // 如果大于分卷大小，则写入文件
                if (strlen ( $sql ) >= $size * 1024) {
                    $file = $filename . "_v" . $p . ".sql";
                    if ($this->_write_file ( $sql, $file, $dir )) {
                        $this->_showMsg("表-<b>" . $tablename . "</b>-卷-<b>" . $p . "</b>-数据备份完成,备份文件 [ <span class='imp'>" .$dir . $file ."</span> ]");
                        $logs = array(
                            'log_title'=>session('username') . "表-<b>" . $tablename . "</b>-卷-<b>" . $p . "</b>-数据备份完成,备份文件 [ <span class='imp'>" .$dir . $file ."</span> ]",
                            'log_time'=>time(),
                            'u_name'=>session("username"),
                            'uid'=>session('user_id')
                        );
                        Logs::log($logs);
                    } else {
                        $logs = array(
                            'log_title'=>session('username') . "备份表 -<b>" . $tablename . "</b>- 失败",
                            'log_time'=>time(),
                            'u_name'=>session("username"),
                            'uid'=>session('user_id')
                        );
                        Logs::log($logs);
                        return false;
                    }
                    // 下一个分卷
                    $p ++;
                    // 重置$sql变量为空，重新计算该变量大小
                    $sql = "";
                }
            }
            // 及时清除数据
            unset($data,$record);
            // sql大小不够分卷大小
            if ($sql != "") {
                $filename .= "_v" . $p . ".sql";
                if ($this->_write_file ( $sql, $filename, $dir )) {
                    $logs = array(
                        'log_title'=>session('username') . "表-<b>" . $tablename . "</b>-卷-<b>" . $p . "</b>-数据备份完成,备份文件 [ <span class='imp'>" .$dir . $filename ."</span> ]",
                        'log_time'=>time(),
                        'u_name'=>session("username"),
                        'uid'=>session('user_id')
                    );
                    Logs::log($logs);
                } else {
                    $logs = array(
                        'log_title'=>session('username') . "备份卷-<b>" . $p . "</b>-失败<br />",
                        'log_time'=>time(),
                        'u_name'=>session("username"),
                        'uid'=>session('user_id')
                    );
                    Logs::log($logs);
                    $this->error("备份卷-<b>" . $p . "</b>-失败<br />");
                    return false;
                }
            }
            $logs = array(
                'log_title'=>session('username') . "恭喜您!备份成功",
                'log_time'=>time(),
                'u_name'=>session("username"),
                'uid'=>session('user_id')
            );
            Logs::log($logs);
            showMessages("恭喜您!备份成功");
        } else {
            // 查出所有表
            $tables = mysql_query ( 'SHOW TABLES' );
            if(empty($tables)){
                showMessages("获取表结构失败", 'back_index.html', 3);
            }
            // 插入dump信息
            $sql .= $this->_retrieve ();
            // 文件名前面部分
            $filename = date ( 'YmdHis' ) . "_all";
            // 第几分卷
            $p = 1;
            // 循环所有表
            while ( $table = mysql_fetch_array ( $tables ) ) {
                // 获取表名
                $tablename = $table [0];
                // 获取表结构
                $sql .= $this->_insert_table_structure ( $tablename );
                $data = mysql_query ( "select * from " . $tablename );
                $num_fields = mysql_num_fields ( $data );
    
                // 循环每条记录
                while ( $record = mysql_fetch_array ( $data ) ) {
                    // 单条记录
                    $sql .= $this->_insert_record ( $tablename, $num_fields, $record );
                    // 如果大于分卷大小，则写入文件
                    if (strlen ( $sql ) >= $size * 1000) {
                        $file = $filename . "_v" . $p . ".sql";
                        // 写入文件
                        $r = $this->_write_file ( $sql, $file, $dir );
                        if (!$r) {
                            $this->_showMsg("备份失败");
                            return false;
                        }
                        // 下一个分卷
                        $p ++;
                        // 重置$sql变量为空，重新计算该变量大小
                        $sql = "";
                    }
                }
            }
            // sql大小不够分卷大小
            if ($sql != "") {
                $filename .= "_v" . $p . ".sql";
                $res = $this->_write_file ( $sql, $filename, $dir );
                
                if (!$res) {
                    $this->_showMsg("备份数据库失败，卷-<b>" . $p . "</b>-备份失败",true);
                    return false;
                }
            }
            return true;
        }
    }
    
    //  及时输出信息
    private function _showMsg($msg,$err=false){
        $err = $err ? "<span class='err'>ERROR:</span>" : '' ;
        echo "<p class='dbDebug'>".$err . $msg."</p>";
        flush();
    
    }
    
    /**
     * 插入数据库备份基础信息
     *
     * @return string
     */
    private function _retrieve() {
        $value = '';
        $value .= '--' . $this->ds;
        $value .= '-- MySQL database dump' . $this->ds;
        $value .= '-- Created by DbManage class, Power By yanue. ' . $this->ds;
        $value .= '-- http://yanue.net ' . $this->ds;
        $value .= '--' . $this->ds;
        $value .= '-- 主机: ' . $this->host . $this->ds;
        $value .= '-- 生成日期: ' . date ( 'Y' ) . ' 年  ' . date ( 'm' ) . ' 月 ' . date ( 'd' ) . ' 日 ' . date ( 'H:i' ) . $this->ds;
        $value .= '-- MySQL版本: ' . mysql_get_server_info () . $this->ds;
        $value .= '-- PHP 版本: ' . phpversion () . $this->ds;
        $value .= $this->ds;
        $value .= '--' . $this->ds;
        $value .= '-- 数据库: `' . $this->database . '`' . $this->ds;
        $value .= '--' . $this->ds . $this->ds;
        $value .= '-- -------------------------------------------------------';
        $value .= $this->ds . $this->ds;
        return $value;
    }
    
    /**
     * 插入表结构
     *
     * @param unknown_type $table
     * @return string
     */
    private function _insert_table_structure($table) {
        $sql = '';
        $sql .= "--" . $this->ds;
        $sql .= "-- 表的结构" . $table . $this->ds;
        $sql .= "--" . $this->ds . $this->ds;
    
        // 如果存在则删除表
        $sql .= "DROP TABLE IF EXISTS `" . $table . '`' . $this->sqlEnd . $this->ds;
        // 获取详细表信息
        $res = mysql_query ( 'SHOW CREATE TABLE `' . $table . '`' );
        $row = mysql_fetch_array ( $res );
        $sql .= $row [1];
        $sql .= $this->sqlEnd . $this->ds;
        // 加上
        $sql .= $this->ds;
        $sql .= "--" . $this->ds;
        $sql .= "-- 转存表中的数据 " . $table . $this->ds;
        $sql .= "--" . $this->ds;
        $sql .= $this->ds;
        return $sql;
    }
    
    /**
     * 插入单条记录
     *
     * @param string $table
     * @param int $num_fields
     * @param array $record
     * @return string
     */
    private function _insert_record($table, $num_fields, $record) {
        // sql字段逗号分割
        $insert = '';
        $comma = "";
        $insert .= "INSERT INTO `" . $table . "` VALUES(";
        // 循环每个子段下面的内容
        for($i = 0; $i < $num_fields; $i ++) {
            $insert .= ($comma . "'" . @mysql_real_escape_string ( $record [$i] ) . "'");
            $comma = ",";
        }
        $insert .= ");" . $this->ds;
        return $insert;
    }
    
    /**
     * 写入文件
     *
     * @param string $sql
     * @param string $filename
     * @param string $dir
     * @return boolean
     */
    private function _write_file($sql, $filename, $dir) {
        $dir = $dir ? $dir : './backup/';
        // 创建目录
        if (! is_dir ( $dir )) {
            mkdir ( $dir, 0777, true );
        }
        $re = true;
        if (! @$fp = fopen ( $dir . $filename, "w+" )) {
            $re = false;
            $this->_showMsg("打开sql文件失败！",true);
        }
        if (! @fwrite ( $fp, $sql )) {
            $re = false;
            $this->_showMsg("写入sql文件失败，请文件是否可写",true);
        }
        if (! @fclose ( $fp )) {
            $re = false;
            $this->_showMsg("关闭sql文件失败！",true);
        }
        return $re;
    }
    
    /*
     *
     * -------------------------------上：数据库导出-----------分割线----------下：数据库导入--------------------------------
     */
    
    /**
     * 导入备份数据
     * 说明：分卷文件格式20120516211738_all_v1.sql
     * 参数：文件路径(必填)
     *
     * @param string $sqlfile
     */
    function restore($sql_file) {
        header("Content-type: text/html; charset=utf-8");
        // 检测文件是否存在

       if (! file_exists ( $this->sqlPath . $sql_file )) {
            $this->_showMsg("sql文件不存在！请检查",true);
            exit ();
        }
        $this->lock ( $this->database );
        // 获取数据库存储位置
        $sql_path = pathinfo ( $sql_file);
        $this->sqldir = $sql_path ['dirname'];
        // 检测是否包含分卷，将类似20120516211738_all_v1.sql从_v分开,有则说明有分卷
        $volume = explode ( "_v", $sql_file );
        
        $volume_path =$this->sqlPath . $volume [0];

        if (empty ( $volume [1] )) {
            $this->_showMsg ( "正在导入sql：<span class='imp'>" . $sql_file . '</span>');
            // 没有分卷
            if ($this->_import ( $sql_file )) {
                $this->_showMsg( "数据库导入成功！");
            } else {
                $this->_showMsg('数据库导入失败！',true);
                exit ();
            }
        } else {
            // 存在分卷，则获取当前是第几分卷，循环执行余下分卷
            $volume_id = explode ( ".sq", $volume [1] );
            //var_dump($volume_id);exit;
            // 当前分卷为$volume_id
            $volume_id = intval ( $volume_id [0] );
            while ( $volume_id ) {
                $tmpfile = $volume_path . "_v" . $volume_id . ".sql";
                // 存在其他分卷，继续执行
                if (file_exists ( $tmpfile )) {
                    // 执行导入方法
                    $this->msg .= "正在导入分卷 $volume_id ：<span style='color:#f00;'>" . $tmpfile . '</span><br />';
                    if (!($this->_import ( $tmpfile ))) {
                        $volume_id = $volume_id ? $volume_id :1;
                        exit ( "导入分卷：<span style='color:#f00;'>" . $tmpfile . '</span>失败！可能是数据库结构已损坏！请尝试从分卷1开始导入' );
                    }
                } else {
                    $this->msg .= "此分卷备份全部导入成功！<br />";
                    return true;
                }
                $volume_id ++;
            }
        }
    }
    
    /**
     * 将sql导入到数据库（普通导入）
     *
     * @param string $sqlfile
     * @return boolean
     */
    private function _import($sqlfile) {
        // sql文件包含的sql语句数组
        $sqls = array ();
        $f = fopen ( $sqlfile, "rb" );
        // 创建表缓冲变量
        $create_table = '';
        while ( ! feof ( $f ) ) {
            // 读取每一行sql
            $line = fgets ( $f );
            // 这一步为了将创建表合成完整的sql语句
            // 如果结尾没有包含';'(即为一个完整的sql语句，这里是插入语句)，并且不包含'ENGINE='(即创建表的最后一句)
            if (! preg_match ( '/;/', $line ) || preg_match ( '/ENGINE=/', $line )) {
                // 将本次sql语句与创建表sql连接存起来
                $create_table .= $line;
                // 如果包含了创建表的最后一句
                if (preg_match ( '/ENGINE=/', $create_table)) {
                    //执行sql语句创建表
                    $this->_insert_into($create_table);
                    // 清空当前，准备下一个表的创建
                    $create_table = '';
                }
                // 跳过本次
                continue;
            }
            //执行sql语句
            $this->_insert_into($line);
        }
        fclose ( $f );
        return true;
    }
    
    //插入单条sql语句
    private function _insert_into($sql){

        if (!@mysql_query(trim($sql))) {
            $this->msg .= @mysql_error ();
            return false;
        }
    }
    
    /*
     * -------------------------------数据库导入end---------------------------------
     */
    
    // 关闭数据库连接
    private function close() {
        mysql_close ( $this->db );
    }
    
    // 锁定数据库，以免备份或导入时出错
    private function lock($tablename, $op = "WRITE") {
        if (mysql_query ( "lock tables " . $tablename . " " . $op ))
            return true;
        else
            return false;
    }
    
    // 析构
    function __destruct() {
        if($this->db){
            mysql_query ( "unlock tables", $this->db );
            mysql_close ( $this->db );
        }
    }
}
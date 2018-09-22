<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/17
 * Time: 13:28
 */

namespace app\index\controller;

use think\Controller;
class Index extends Controller
{
    public function __construct()
    {
        parent::__construct();

    }
    public function index(){
        echo "<script type='text/javascript'>window.location.href='back.html';</script>";exit;
    }

}
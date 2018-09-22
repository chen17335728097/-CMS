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

use think\Route;
//member_rebate
Route::rule('member_rebate','back/member/member_rebate');
Route::rule('/','index/index/index');
Route::rule('admin','back/index/index');
Route::rule('index','index/index/index');
Route::rule('web_index','index/index/index');
//会员中心、个人资料
Route::rule('general/[:id]','index/member/general');
Route::rule('send_message','index/member/send_message');
Route::rule('user_register/[:param]','index/member/user_register');
Route::rule('user_center','index/member/member');
Route::rule('sale','index/member/sale');
Route::rule('poster','index/member/member_poster');

Route::rule('active/[:id]','index/index/activity');
Route::rule('search','index/index/search');
Route::rule('bank','index/index/bank');
Route::rule('credit','index/index/credit');
Route::rule('house','index/index/house');
Route::rule('handle','index/index/handle');
Route::rule('card','index/index/card');
Route::rule('handle-form','index/index/handle_form');

Route::rule('pay','index/pay/pay');
Route::rule('pay_notify','index/pay/pay_notify');//支付回调页面
Route::rule('checkStatus','index/pay/checkStatus');

Route::rule('rebate','index/member/member_rebate');
Route::rule('return_wx_code','index/member/makeMemberWxCode');
//关注微信公众号页面
Route::rule('weixin','index/index/show_wx');
//
Route::rule('pay_wx/[:param]/[:id]','index/pay/pay_wx');
Route::rule('pay_wx/[:param]/[:id]','index/pay/pay_wx');
Route::rule('member_order','index/member/order');
Route::rule('return_handle/[:param]','index/index/return_handle');
Route::rule('return_handle_form/[:param]','index/index/return_handle_form');
Route::rule('member_order','index/member/order');
Route::rule('credit_safe/[:param]','index/index/credit_safe');
Route::rule('credit_house/[:param]','index/index/credit_house');
Route::rule('credit_common/[:param]','index/index/credit_common');
Route::rule('credit_licence/[:param]','index/index/credit_licence');
Route::rule('credit_car/[:param]','index/index/credit_car');



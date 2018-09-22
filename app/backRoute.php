<?php
use think\Route;
                    //后台登录页
                    Route::rule('login','back/login/login');
                    //账号注销
                    Route::rule('login_out','back/login/login_out');
                    //验证码
                    Route::rule('captcha/[:id]','back/login/verity');
                    Route::rule('check_login/[:id]/[:ver]/[:sss]','back/login/check_login');
                    //后台首页
                    Route::rule('back_index','back/index/index');
                    Route::rule('index/[:id]','back/index/index');

                    /**后台地图**/
                    Route::rule('map','back/map/map');
                    Route::rule('other_system','back/system/other_system');

/************************************ 菜 单 管 理 **********************************************/

                    //导航菜单
                    Route::rule('menu/[:id]','back/columnMenu/menu');
                    Route::rule('addmenu/[:id]','back/columnMenu/addMenu');
                    Route::rule('uploadFile/[:id]','back/columnMenu/uploadFile');
                    Route::rule('delmenu/[:id]','back/columnMenu/deleteMenu');
                    Route::rule('editmenu/[:id]','back/columnMenu/editMenu');


/************************************ 广 告 管 理 **********************************************/

                    Route::rule('ad/[:id]','back/ad/ad');
                    Route::rule('addAd/[:name]','back/ad/add_ad');
                    Route::rule('ad_position/[:id]','back/ad/ad_position');
                    Route::rule('addAdPosition/[:id]','back/ad/add_ad_position');
                    Route::rule('del_pad/[:tid]','back/ad/del_ad_position');
                    Route::rule('edit_pad/[:tid]','back/ad/edit_ad_position');
                    Route::rule('del_ad/[:id]','back/ad/del_ad');
                    Route::rule('edit_ad/[:id]','back/ad/edit_ad');


/***************************** 文 章 管 理 *****************************************************/

                    //文章管理
                    Route::rule('news','back/news/news');
                    Route::rule('add-content','back/news/news_add');
                    Route::rule('edit-content/[:name]','back/news/news_edit');
                    Route::rule('edit_save/[:param]','back/news/news_editSave');
                    Route::rule('delnews/[:param]','back/news/news_del');
                    Route::rule('ar_recycle','back/article/ar_recycle');
                    Route::rule('del_recycle/[:param]','back/article/del_recycle');
                    Route::rule('del_restore/[:param]','back/article/article_restore');
                    //栏目分类
                    Route::rule('class/[:id]','back/news/news_class');
                    //source 来源管理
                    Route::rule('source','back/news/news_source');
                    Route::rule('sourcedel','back/news/news_source_del');
                    Route::rule('editSource','back/news/editSource');
                    //source 文章属性管理
                    Route::rule('articalsource','back/news/articleSource');
                    Route::rule('art_source_del/[:name]','back/news/delArticleType');
                    Route::rule('art_source_edit/[:name]','back/news/editArticleSource');

/********************************** 评 论 管 理 ************************************************/

                    Route::rule('message/[:id]','back/message/message');

/************************************* 权 限 管 理 *********************************************/

                    Route::rule('auth/[:id]','back/auth/auth');
                    Route::rule('add_auth','back/auth/auth_addSave');
                    Route::rule('del_auth/[:id]','back/auth/auth_del');
                    Route::rule('edit_Auth','back/auth/auth_editSave');
                    //管理员admin
                    Route::rule('back_admin/[:id]','back/auth/admin');
                    Route::rule('admin_save/[:id]','back/auth/admin_save');
                    Route::rule('adminSave/[:id]','back/auth/adminSave');
                    Route::rule('del_admin/[:name]','back/auth/admin_del');
                    Route::rule('profile','back/auth/profile');
                    //用户组group
                    Route::rule('group/[:id]','back/auth/role');
                    Route::rule('addgroup','back/auth/rolesave');
                    Route::rule('delrole/[:id]','back/auth/roledel');
                    Route::rule('edit-auth/[:sid]','back/auth/roleedit');
                    Route::rule('auth_save','back/auth/roleEditSave');

/************************************** 数 据 库 管 理 ********************************************/

                    //数据备份sql_read
                    Route::rule('database/[:id]','back/system/sql_copy');
                    Route::rule('read/[:id]','back/system/sql_read');
                    Route::rule('resetSql/[:id]','back/system/sql_reRead');


/***************************************系 统 管 理*******************************************/

                    //清楚缓存
                    Route::rule('clear','back/system/clearCache');
                    Route::rule('logs','back/system/log');
                    Route::rule('dellogs','back/system/log_del');
                    //友情链接
                    Route::rule('link','back/link/link');
                    Route::rule('addlink','back/link/add_link');
                    Route::rule('editlink','back/link/edit_link');
                    Route::rule('dellink/[:name]','back/link/del_link');
                    //网站配置parameter
                    Route::rule('parameter/[:id]','back/system/system_base');
                    //微信配置wechat
                    Route::rule('wechat/[:id]','back/system/wechatConfig');
                    //邮件配置email
                    Route::rule('email/[:id]','back/system/emailConfig');
                    //支付配置pay
                    Route::rule('pay/[:id]','back/system/payConfig');
                    //验证码设置
                    Route::rule('verity_config','back/system/verity_config');
                    //物流设置
                    Route::rule('logistics','back/system/logistics');
                    //创建快捷键
                    Route::rule('desktop','back/system/desktop2');

/*************************************** 会 员 管 理 *******************************************/

                    /***会员管理**/
                    Route::rule('memberList','back/member/member');
                    Route::rule('add-member','back/member/member_add');
                    Route::rule('del-member/[:id]','back/member/member_delete');
                    Route::rule('editMember','back/member/member_edit');
                    Route::rule('member-recycle','back/member/member_del');
                    Route::rule('grade','back/member/member_grade');
                    Route::rule('add_grade/[:param]','back/member/member_grade');
                    Route::rule('del_member_grade/[:param]','back/member/member_grade_delete');
                    Route::rule('edit_member_grade/[:param]','back/member/member_grade_edit');
                    Route::rule('member_detail_logs','back/member/member_detail_logs');
                    Route::rule('back_memberRecharge','back/member/memberRecharge');
                    Route::rule('member_recharge_detail','back/member/member_recharge_detail');
                    Route::rule('del_member_recharge','back/member/member_recharge_del');
                    Route::rule('back_member_consume_detail','back/member/member_consume_detail');
                    Route::rule('back_memberConsume','back/member/member_consume');
                    Route::rule('member_consume','back/member/member_consume');
                    Route::rule('consume_reporting','back/reporting/index');




                    //会员卡类型
                    Route::rule('card_type','back/member/card_type');

/*************************************** 商 品 管 理 *******************************************/

                    /**商品管理**/
                    Route::rule('p_center','back/product/product');//商品
                    Route::rule('add_product','back/product/product_add');//新增商品
                    Route::rule('addProduct/[:id]','back/product/productSave');//新增商品保存数据
                    Route::rule('del_product','back/product/product_del');//商品删除
                    Route::rule('edit-product','back/product/product_edit');//商品编辑
                    Route::rule('editProduct/[:name]','back/product/productEditSave');//商品编辑
                    //商品属性
                    Route::rule('p_type','back/product/product');//商品属性
                    //商品规格
                    Route::rule('p_format','back/product/format');
                    Route::rule('add-format','back/product/addFormat');
                    Route::rule('del-format/[:id]','back/product/delFormat');
                    Route::rule('edit-format/[:id]','back/product/editFormat');
                    //商品回收站
                    Route::rule('p_recycle','back/product/product_recycle');//商品回收站
                    //商品品牌
                    Route::rule('p_brand','back/brand/brand');
                    Route::rule('add_brand','back/brand/addBrand');
                    Route::rule('del_brand/[:id]','back/brand/delBrand');
                    Route::rule('edit_brand/[:id]','back/brand/editBrand');
                    //商品供货商
                    Route::rule('p_supplier','back/product/supplier');
                    Route::rule('add_supplier','back/product/addSupplier');
                    Route::rule('del_supplier/[:id]','back/product/delSupplier');
                    //商品分类
                    Route::rule('p_column','back/product/product_class');//商品分类
                    Route::rule('add_PClass','back/product/add_product_class');//添加商品分类
                    Route::rule('del_PClass/[:sid]','back/product/del_product_class');//删除商品分类
                    Route::rule('editProductClass/[:sid]','back/product/edit_product_class');//删除商品分类


/************************************************** 设 置 模 板 **********************************************************************/

Route::rule('templates','back/templates/template');
Route::rule('addTemplates','back/templates/addTemplates');
Route::rule('del_templates','back/templates/del_templates');

/************************************************** 视 频 中 心 **********************************************************************/

Route::rule('video','back/video/video');
Route::rule('delVideo/[:param]','back/video/del_video');
Route::rule('video_edit/[:param]','back/video/edit_video');
Route::rule('video_add/[:param]','back/video/addVideo');


/************************************************** 营 销 管 理 **********************************************************************/
//优惠券
Route::rule('coupon','back/marketing/coupon');
Route::rule('add_coupon','back/marketing/add_coupon');
Route::rule('edit_coupon/[:param]','back/marketing/edit_coupon');
Route::rule('del_coupon/[:param]','back/marketing/del_coupon');
//满额包邮
Route::rule('full_shipping','back/marketing/full_shipping');
Route::rule('add_full_shipping/[:param]','back/marketing/add_full_shipping');
Route::rule('del_full_shipping/[:param]','back/marketing/del_full_shipping');
//限时折扣
Route::rule('discount','back/marketing/discount');
Route::rule('add_discount','back/marketing/add_discount');
Route::rule('edit_discount/[:param]','back/marketing/edit_discount');
Route::rule('del_discount/[:id]','back/marketing/del_discount');
//积分管理
Route::rule('integration','back/marketing/integration');
Route::rule('add_integration','back/marketing/add_integration');
//满减送
Route::rule('full_cut','back/marketing/full_cut');
Route::rule('add_full_cut','back/marketing/add_full_cut');
Route::rule('del_cut/[:param]','back/marketing/del_full_cut');
Route::rule('edit_cut/[:param]','back/marketing/edit_full_cut');
/*******************************************************************************************************************************/

Route::rule('order/[:param]','back/order/order');
Route::rule('del_order/[:param]','back/order/del_order');

Route::rule('common/[:param]','back/common/common');

Route::rule('del_message/[:param]','back/message/del_message');
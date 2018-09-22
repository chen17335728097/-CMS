<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:57:"E:\wamp64\www\fafa/app/back\view\member\member_grade.html";i:1534073174;s:52:"E:\wamp64\www\fafa/app/back\view\public\nav_top.html";i:1534010817;s:49:"E:\wamp64\www\fafa/app/back\view\public\menu.html";i:1535038395;s:51:"E:\wamp64\www\fafa/app/back\view\public\footer.html";i:1534072145;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>用户组列表</title>
    <meta name="Keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="__STATIC__/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="__STATIC__/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="__STATIC__/assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="__STATIC__/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="__STATIC__/assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="__STATIC__/assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="__STATIC__/assets/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="__STATIC__/assets/css/myStyle.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="__STATIC__/assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="__STATIC__/assets/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="__STATIC__/assets/js/html5shiv.min.js"></script>
    <script src="__STATIC__/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
	<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

	<div class="navbar-header pull-left">
		<a href="index.html" class="navbar-brand">
			<small>
							<i class="fa fa-leaf"></i>
				<?php echo $name; ?>CMS后台管理系统
						</small>
		</a>
	</div>

	<div class="navbar-buttons navbar-header pull-right" role="navigation">
		<ul class="nav ace-nav">
			<!--<li class="purple">
				<a href="web_index.html" class="" target="_blank">
					<i class="ace-icon fa fa-refresh"></i> 网站前台首页
				</a>
			</li>-->
			<li class="green">
				<a href="back_index.html">
					<i class="ace-icon fa fa-globe"></i> 网站后台首页
				</a>
			</li>

			<li class="blue">
				<a href="#" class="">
					<i class="ace-icon fa fa-refresh"></i> 清除缓存
				</a>
			</li>

			<li class="light-blue dropdown-modal">
				<a data-toggle="dropdown" href="#" class="dropdown-toggle">
					<img class="nav-user-photo" src="__STATIC__/assets/images/avatars/user.jpg" alt="Jason's Photo" />
					<span class="user-info">
									<small>欢迎,</small>
									管理员
								</span>

					<i class="ace-icon fa fa-caret-down"></i>
				</a>

				<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
					<!--<li>
						<a href="#">
							<i class="ace-icon fa fa-cog"></i> 设置
						</a>
					</li>

					<li>
						<a href="profile.html">
							<i class="ace-icon fa fa-user"></i> 个人资料
						</a>
					</li>

					<li class="divider"></li>-->

					<li>
						<a href="login.html">
							<i class="ace-icon fa fa-power-off"></i> 退出
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</div>
			<!-- /.navbar-container -->
		</div>
<!-- /.navbar-container -->
</div>

<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.loadState('main-container')
        } catch(e) {}
    </script>

    <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
        <script type="text/javascript">
            try {
                ace.settings.loadState('sidebar')
            } catch(e) {}
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                <button class="btn btn-success">
                    <i class="ace-icon fa fa-signal"></i>
                </button>

                <button class="btn btn-info">
                    <i class="ace-icon fa fa-pencil"></i>
                </button>

                <button class="btn btn-warning">
                    <i class="ace-icon fa fa-users"></i>
                </button>

                <button class="btn btn-danger">
                    <i class="ace-icon fa fa-cogs"></i>
                </button>
            </div>

            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <span class="btn btn-success"></span>

                <span class="btn btn-info"></span>

                <span class="btn btn-warning"></span>

                <span class="btn btn-danger"></span>
            </div>
        </div>
        <!-- /.sidebar-shortcuts -->
        <ul class="nav nav-list">
	<li class="active">
		<a href="back_index.html">
			<i class="menu-icon fa fa-tachometer"></i>
			<span class="menu-text"> 控制台 </span>
		</a>
		<b class="arrow"></b>
	</li>

	<!--<li class="">
		<a href="menu.html">
			<i class="menu-icon fa fa-list-ul"></i>
			<span class="menu-text"> 导航菜单 </span>
			<b class="arrow fa fa-angle-down"></b>
		</a>
		<b class="arrow"></b>
	</li>-->
	<!--<li <?php if(isset($active)): if($active == '10'): ?>class="open"<?php else: ?>class=""<?php endif; endif; ?>>
	<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-book"></i>
		<span class="menu-text"> 文章管理 </span>
		<b class="arrow fa fa-angle-down"></b>
	</a>
	<b class="arrow"></b>
	<ul class="submenu">
		<li class="">
			<a href="news.html">
				<i class="menu-icon fa fa-caret-right"></i>文章中心
			</a>
			<b class="arrow"></b>
		</li>
		<li class="">
			<a href="source.html">
				<i class="menu-icon fa fa-caret-right"></i> 文章来源
			</a>
			<b class="arrow"></b>
		</li>
		<li class="">
			<a href="articalsource.html">
				<i class="menu-icon fa fa-caret-right"></i> 文章属性
			</a>
			<b class="arrow"></b>
		</li>
		<li class="">
			<a href="ar_recycle.html">
				<i class="menu-icon fa fa-caret-right"></i> 文章回收站
			</a>
			<b class="arrow"></b>
		</li>
	</ul>
	</li>-->
	<li <?php if(isset($active)): if($active == '20'): ?>class="open"<?php else: ?>class=""<?php endif; endif; ?>>
	<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-book"></i>
		<span class="menu-text"> 经营产品 </span>
		<b class="arrow fa fa-angle-down"></b>
	</a>
	<b class="arrow"></b>
	<ul class="submenu">
		<li class="">
			<a href="p_center.html">
				<i class="menu-icon fa fa-caret-right"></i>产品列表
			</a>
			<b class="arrow"></b>
		</li>
		<li class="">
			<a href="p_column.html">
				<i class="menu-icon fa fa-caret-right"></i> 商品分类
			</a>
			<b class="arrow"></b>
		</li>
		<!--<li class="">
			<a href="p_brand.html">
				<i class="menu-icon fa fa-caret-right"></i> 商品品牌
			</a>
			<b class="arrow"></b>
		</li>-->
		<li class="">
			<a href="p_format.html">
				<i class="menu-icon fa fa-caret-right"></i> 商品规格
			</a>
			<b class="arrow"></b>
		</li>
		<!--<li class="">
			<a href="p_type.html">
				<i class="menu-icon fa fa-caret-right"></i> 商品评价
			</a>
			<b class="arrow"></b>
		</li>-->
		<!--<li class="">
			<a href="p_supplier.html">
				<i class="menu-icon fa fa-caret-right"></i> 商品供货商
			</a>
			<b class="arrow"></b>
		</li>-->
		<li class="">
			<a href="p_recycle.html">
				<i class="menu-icon fa fa-caret-right"></i> 商品回收站
			</a>
			<b class="arrow"></b>
		</li>
	</ul>
	</li>
	<!--<li <?php if(isset($active)): if($active == '159'): ?>class="open"<?php else: ?>class=""<?php endif; endif; ?>>
	<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-book"></i>
		<span class="menu-text"> 营销管理 </span>
		<b class="arrow fa fa-angle-down"></b>
	</a>
	<b class="arrow"></b>
	<ul class="submenu">
		<li class="">
			<a href="coupon.html">
				<i class="menu-icon fa fa-caret-right"></i>优惠券
			</a>
			<b class="arrow"></b>
		</li>
		<li class="">
			<a href="full_cut.html">
				<i class="menu-icon fa fa-caret-right"></i>满减送
			</a>
			<b class="arrow"></b>
		</li>
		&lt;!&ndash;<li class="">
			<a href="integration.html">
				<i class="menu-icon fa fa-caret-right"></i>积分管理
			</a>
			<b class="arrow"></b>
		</li>&ndash;&gt;
		<li class="">
			<a href="discount.html">
				<i class="menu-icon fa fa-caret-right"></i>限时折扣
			</a>
			<b class="arrow"></b>
		</li>
		<li class="">
			<a href="full_shipping.html">
				<i class="menu-icon fa fa-caret-right"></i>满额包邮
			</a>
			<b class="arrow"></b>
		</li>
	</ul>
	</li>-->
<!--	<li <?php if(isset($active)): if($active == '40'): ?>class="open"<?php else: ?>class=""<?php endif; endif; ?>>
	<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-book"></i>
		<span class="menu-text"> 订单管理 </span>
		<b class="arrow fa fa-angle-down"></b>
	</a>
	<b class="arrow"></b>
	<ul class="submenu">
		<li class="">
			<a href="back_order.html">
				<i class="menu-icon fa fa-caret-right"></i>订单列表
			</a>
			<b class="arrow"></b>
		</li>
	</ul>
	</li>-->
	<!--<li <?php if(isset($active)): if($active == '129'): ?>class="open"<?php else: ?>class=""<?php endif; endif; ?>>
	<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-diamond"></i>
		<span class="menu-text"> 视频管理 </span>
		<b class="arrow fa fa-angle-down"></b>
	</a>
	<b class="arrow"></b>
	<ul class="submenu">
		<li class="">
			<a href="video.html">
				<i class="menu-icon fa fa-caret-right"></i> 视频中心
			</a>
			<b class="arrow"></b>
		</li>
		</li>
	</ul>
	</li>-->
	<!--<li <?php if(isset($active)): if($active == '120'): ?>class="open"<?php else: ?>class=""<?php endif; endif; ?>>
	<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-diamond"></i>
		<span class="menu-text"> 广告管理 </span>
		<b class="arrow fa fa-angle-down"></b>
	</a>
	<b class="arrow"></b>
	<ul class="submenu">
		<li class="">
			<a href="ad.html">
				<i class="menu-icon fa fa-caret-right"></i> 广告列表
			</a>
			<b class="arrow"></b>
		</li>
		<li class="">
			<a href="ad_position.html">
				<i class="menu-icon fa fa-caret-right"></i> 广告位设置
			</a>
			<b class="arrow"></b>
		</li>
	</ul>
	</li>
	<li <?php if(isset($active)): if($active == '100'): ?>class="open"<?php else: ?>class=""<?php endif; endif; ?>>
	<a href="#"  class="dropdown-toggle">
		<i class="menu-icon fa fa-heart"></i>
		<span class="menu-text"> 留言管理 </span>
		<b class="arrow fa fa-angle-down">&nbsp;</b>
	</a>
	<b class="arrow"></b>
	<ul class="submenu">
		<li class="">
			<a href="message.html">
				<i class="menu-icon fa fa-caret-right"></i>留言列表
			</a>
			<b class="arrow"></b>
		</li>
	</ul>
	</li>-->

	<li <?php if(isset($active)): if($active == '80'): ?>class="open"<?php else: ?>class=""<?php endif; endif; ?>>
	<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-users"></i>
		<span class="menu-text"> 管理员管理 </span>
		<b class="arrow fa fa-angle-down"></b>
	</a>
	<b class="arrow"></b>

	<ul class="submenu">
		<li class="">
			<a href="back_admin.html">
				<i class="menu-icon fa fa-caret-right"></i> 管理员
			</a>
			<b class="arrow"></b>
		</li>
		<li class="">
			<a href="group.html">
				<i class="menu-icon fa fa-caret-right"></i> 用户组
			</a>
			<b class="arrow"></b>
		</li>
		<li class="">
			<a href="auth.html">
				<i class="menu-icon fa fa-caret-right"></i> 权限列表
			</a>

			<b class="arrow"></b>
		</li>
	</ul>
	</li>
	<!--<li <?php if(isset($active)): if($active == '130'): ?>class="open"<?php else: ?>class=""<?php endif; endif; ?>>
	<a href="database.html"  class="dropdown-toggle">
		<i class="menu-icon fa fa-database"></i>
		<span class="menu-text"> 数据库管理</span>
		<b class="arrow fa fa-angle-down"></b>
	</a>
	<b class="arrow"></b>
	<ul class="submenu">
		<li class="">
			<a href="database.html">
				<i class="menu-icon fa fa-caret-right"></i> 备份数据库
			</a>

			<b class="arrow"></b>
		</li>
		<li class="">
			<a href="read.html">
				<i class="menu-icon fa fa-caret-right"></i> 恢复数据库
			</a>
			<b class="arrow"></b>
		</li>
	</ul>
	</li>
	<li <?php if(isset($active)): if($active == '199'): ?>class="open"<?php else: ?>class=""<?php endif; endif; ?>>
	<a href="#"  class="dropdown-toggle">
		<i class="menu-icon fa fa-database"></i>
		<span class="menu-text"> 模板管理</span>
		<b class="arrow fa fa-angle-down"></b>
	</a>
	<b class="arrow"></b>
	<ul class="submenu">
		<li class="">
			<a href="templates.html">
				<i class="menu-icon fa fa-caret-right"></i> 设置模板
			</a>

			<b class="arrow"></b>
		</li>
	</ul>
	</li>
	<li class="">
		<a href="map.html">
			<i class="menu-icon fa fa-map-signs"></i>
			<span class="menu-text"> 后台地图 </span>
		</a>
		<b class="arrow"></b>
	</li>-->
	<!--<li <?php if(isset($active)): if($active == '268'): ?>class="open"<?php else: ?>class=""<?php endif; endif; ?>>
	<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-users"></i>
		<span class="menu-text"> 链接管理 </span>
		<b class="arrow fa fa-angle-down"></b>
	</a>
	<b class="arrow"></b>
	<ul class="submenu">
		<li class="">
			<a href="link.html">
				<i class="menu-icon fa fa-caret-right"></i> 友情链接
			</a>
			<b class="arrow"></b>
		</li>
	</ul>
	</li>-->
	<li <?php if(isset($active)): if($active == '110'): ?>class="open"<?php else: ?>class=""<?php endif; endif; ?>>
	<a href="#"  class="dropdown-toggle">
		<i class="menu-icon fa fa-heart"></i>
		<span class="menu-text"> 会员管理 </span>
		<b class="arrow fa fa-angle-down">&nbsp;</b>
	</a>
	<b class="arrow"></b>
	<ul class="submenu">
		<li class="">
			<a href="memberList.html">
				<i class="menu-icon fa fa-caret-right"></i>会员列表
			</a>
			<b class="arrow"></b>
		</li>
		<!--<li class="">
			<a href="card_type.html">
				<i class="menu-icon fa fa-caret-right"></i>会员卡类型
			</a>
			<b class="arrow"></b>
		</li>-->
		<li class="">
			<a href="grade.html">
				<i class="menu-icon fa fa-caret-right"></i>会员等级
			</a>
			<b class="arrow"></b>
		</li>
		<!--<li class="">
			<a href="grade.html">
				<i class="menu-icon fa fa-caret-right"></i>充值卡
			</a>
			<b class="arrow"></b>
		</li>-->
		<!--<li class="">
			<a href="member.html">
				<i class="menu-icon fa fa-caret-right"></i>会员提现
			</a>
			<b class="arrow"></b>
		</li>
		<li class="">
			<a href="member_detail_logs.html">
				<i class="menu-icon fa fa-caret-right"></i>会员明细
			</a>
			<b class="arrow"></b>
		</li>-->
	</ul>
	</li>

	<li <?php if(isset($active)): if($active == '299'): ?>class="open"<?php else: ?>class=""<?php endif; endif; ?>>
	<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-diamond"></i>
		<span class="menu-text"> 消费订单 </span>
		<b class="arrow fa fa-angle-down"></b>
	</a>
	<b class="arrow"></b>
	<ul class="submenu">
		<li class="">
			<a href="member_consume.html">
				<i class="menu-icon fa fa-caret-right"></i> 消费订单
			</a>
			<b class="arrow"></b>
		</li>
		</li>
	</ul>
	</li>
	<!--<li <?php if(isset($active)): if($active == '129'): ?>class="open"<?php else: ?>class=""<?php endif; endif; ?>>
	<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-diamond"></i>
		<span class="menu-text"> 店铺管理 </span>
		<b class="arrow fa fa-angle-down"></b>
	</a>
	<b class="arrow"></b>
	<ul class="submenu">
		<li class="">
			<a href="video.html">
				<i class="menu-icon fa fa-caret-right"></i> 店铺中心
			</a>
			<b class="arrow"></b>
		</li>
		</li>
	</ul>
	</li>-->
	<li <?php if(isset($active)): if($active == '580'): ?>class="open"<?php else: ?>class=""<?php endif; endif; ?>>
	<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-diamond"></i>
		<span class="menu-text"> 营业报表 </span>
		<b class="arrow fa fa-angle-down"></b>
	</a>
	<b class="arrow"></b>
	<ul class="submenu">
		<li class="">
			<a href="consume_reporting.html">
				<i class="menu-icon fa fa-caret-right"></i> 营业报表
			</a>
			<b class="arrow"></b>
		</li>
		</li>
	</ul>
	</li>
	<li <?php if(isset($active)): if($active == '150'): ?>class="open"<?php else: ?>class=""<?php endif; endif; ?>>
	<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">系统配置</span>

		<b class="arrow fa fa-angle-down"></b>
	</a>
	<b class="arrow"></b>
	<ul class="submenu">
		<li class="">
			<a href="parameter.html">
				<i class="menu-icon fa fa-caret-right"></i> 站点设置
			</a>
			<b class="arrow"></b>
		</li>
		<li class="">
			<a href="clear.html">
				<i class="menu-icon fa fa-caret-right"></i> 清除缓存
			</a>
			<b class="arrow"></b>
		</li>
		<!--<li class="">
			<a href="logs.html">
				<i class="menu-icon fa fa-caret-right"></i> 系统日志
			</a>
			<b class="arrow"></b>
		</li>-->
		<li class="">
			<a href="desktop.html">
				<i class="menu-icon fa fa-caret-right"></i> 创建快捷键
			</a>
			<b class="arrow"></b>
		</li>
	</ul>
	</li>
</ul>

        <!-- /.nav-list -->

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </div>

    <div class="main-content">
        <div class="main-content-inner">
            <!--面包屑-->
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="index.html">首页</a>
                    </li>
                    <li>
                        <a href="#">用户管理</a>
                    </li>
                    <li class="active">会员列表</li>
                </ul>
                <!-- /.breadcrumb -->

                <div class="nav-search" id="nav-search">
                    <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="搜索 ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
                    </form>
                </div>
                <!-- /.nav-search -->
            </div>

            <div class="page-content">
                <div class="row">
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#add-ad">
                        <i class="ace-icon fa fa-plus"></i>
                        添加会员等级
                    </button>
                </div>

                <div class="space-4"></div>

                <!-- /.ace-settings-container -->
                <!-- /.ace-settings-container -->

                <div class="row">
                    <!-- PAGE CONTENT BEGINS -->
                    <table class="table table-bordered table-hover" border="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>会员等级名称</th>
                            <th>会员等级值</th>
                            <th>添加时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($grade_list) || $grade_list instanceof \think\Collection || $grade_list instanceof \think\Paginator): if( count($grade_list)==0 ) : echo "" ;else: foreach($grade_list as $m=>$grade): ?>
                        <tr <?php if($m%2 == 0): ?>style="background-color:#e4f2ff;"<?php endif; ?>>
                        <td align="center">
                            <span class="badge badge-success"><?php echo $grade['grade_id']; ?></span>
                        </td>
                        <td align="center"><span class="badge badge-success"><?php echo $grade['grade_name']; ?></span></td>
                        <td align="center"><?php echo $grade['grade_min']; ?>~~~<?php echo $grade['grade_max']; ?></td>
                        <td align="center">
                            <span class="badge badge-success"><?php echo $grade['grade_time']; ?></span>
                        </td>

                        <td align="center">

                            <button class="btn btn-xs btn-info" data-toggle="modal" data-id="<?php echo $grade['grade_id']; ?>" data-target="#edit-ad">
                                <i class="ace-icon fa fa-pencil bigger-120"></i>
                            </button>
                            <button class="btn btn-xs btn-danger bootbox-del" data-id="<?php echo $grade['grade_id']; ?>">
                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                            </button>
                        </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>

                    <!-- PAGE CONTENT ENDS -->
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <ul class="pagination no-margin">

                    </ul>
                </div>
            </div>
            <!-- /.page-content -->
        </div>
    </div>
    <!-- /.main-content -->

    <div class="footer">
    <div class="footer-inner">
        <div class="footer-content">
			<span class="bigger-120">
							<span class="blue bolder">技术支持：</span>
			<a href="<?php echo $config['web_tech_url']; ?>" target="_blank"><?php echo $config['web_technology']; ?></a> &copy; 2017-2019
			</span>

            &nbsp; &nbsp;
            <!--<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-weibo red bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-qq text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-weixin green bigger-150"></i>
							</a>
						</span>-->
        </div>
    </div>
</div>
</div>

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
    <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
</div>
<!-- 添加会员模态框（Modal） -->
<!-- 显示模态框（Modal） -->
<div class="modal fade" id="add-ad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form class="form-horizontal ajaxForm2" name="plug_ad_add" method="post" action="grade.html" enctype="multipart/form-data">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        添加会员等级
                    </h4>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 会员等级名称：  </label>
                                <div class="col-sm-8">
                                    <input type="text" name="grade_name" id="grade_name" placeholder="输入会员等级名称" class="col-xs-12 col-sm-8" required/>
                                </div>
                            </div>
                            <div class="space-4"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 会员等级值：  </label>
                                <div class="col-sm-8">
                                    <input type="text" name="grade_min" id="grade_min" style="width:70px;" placeholder="min值" class="col-xs-12 col-sm-8" required/>
                                    <input type="text" readonly style="width:40px;margin: 0px 10px;color:red;" placeholder="~~~~" class="col-xs-12 col-sm-8"/>
                                    <input type="text" name="grade_max" id="grade_max" style="width:70px;" placeholder="max值" class="col-xs-12 col-sm-8" required/>
                                </div>
                            </div>
                            <div class="space-4"></div>
                            <!--<div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 赠送次数：  </label>
                                <div class="col-sm-8">
                                    <input type="text" name="hair_number" id="number" placeholder="赠送次数" class="col-xs-12 col-sm-8" required/>
                                </div>
                            </div>
                            <div class="space-4"></div>-->
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 会员折扣：  </label>
                                <div class="col-sm-8">
                                    <input type="text" name="grade_goods_discount" id="discount" placeholder="会员折扣" class="col-xs-12 col-sm-8" required/>
                                </div>
                            </div>
                            <div class="space-4"></div>
                            <!-- <div class="form-group">
                                 <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 会员卡金额：  </label>
                                 <div class="col-sm-8">
                                     <input type="text" name="card_total" id="card_total" placeholder="会员卡金额" class="col-xs-12 col-sm-8" required/>
                                 </div>
                             </div>
                             <div class="space-4"></div>-->
                            <!--<div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 积分提现比例：  </label>
                                <div class="col-sm-8">
                                    <input type="text" name="grade_rebate" id="grade_rebate" placeholder="积分提现比例" class="col-xs-12 col-sm-8" required/>
                                </div>
                            </div>
                            <div class="space-4"></div>-->
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 排序：  </label>
                                <div class="col-sm-8">
                                    <input type="number" name="grade_order" id="grade_order" placeholder="默认255" class="col-xs-12 col-sm-8" />
                                </div>
                            </div>
                            <div class="space-4"></div>
                            <div class="alert alert-warning">
                                <button type="button" class="close" data-dismiss="alert">
                                    <i class="ace-icon fa fa-times"></i>
                                </button>
                                <i class="ace-icon fa fa-warning"></i>会员等级（会员等级越高、消费折扣率越高）
                                <br>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">
                        <i class="ace-icon fa fa-save"></i>
                        提交保存
                    </button>
                    <button class="btn btn-info" type="reset">
                        <i class="ace-icon fa fa-refresh"></i>
                        重置
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        <i class="ace-icon fa fa-close"></i>
                        关闭
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </form>
</div>
<!-- /.modal -->
<!-- 修改广告模态框（Modal） -->
<div class="modal fade" id="edit-ad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form class="form-horizontal ajaxForm2" name="plug_ad_add" method="post" action="edit_member_grade.html">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        编辑会员信息
                    </h4>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 会员等级名称：  </label>
                                <div class="col-sm-8">
                                    <input type="text" name="grade_name" id="edit_grade_name" placeholder="输入会员等级名称" class="col-xs-12 col-sm-8" required/>
                                </div>
                            </div>
                            <div class="space-4"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 会员等级值：  </label>
                                <div class="col-sm-8">
                                    <input type="text" name="grade_min" id="edit_grade_min" style="width:70px;" placeholder="min值" class="col-xs-12 col-sm-8" required/>
                                    <input type="text" readonly style="width:40px;margin: 0px 10px;color:red;" placeholder="~~~~" class="col-xs-12 col-sm-8"/>
                                    <input type="text" name="grade_max" id="edit_grade_max" style="width:70px;" placeholder="max值" class="col-xs-12 col-sm-8" required/>
                                </div>
                            </div>
                            <div class="space-4"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 会员折扣：  </label>
                                <div class="col-sm-8">
                                    <input type="text" name="grade_goods_discount" id="edit_grade_goods_discount" value="" placeholder="会员折扣" class="col-xs-12 col-sm-8" />
                                </div>
                            </div>
                            <div class="space-4"></div>
                            <!--<div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 赠送次数：  </label>
                                <div class="col-sm-8">
                                    <input type="text" name="hair_number" id="edit_hair_number" placeholder="赠送次数" class="col-xs-12 col-sm-8" required/>
                                </div>
                            </div>
                            <div class="space-4"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 会员卡金额：  </label>
                                <div class="col-sm-8">
                                    <input type="text" name="card_total" id="edit_card_total" placeholder="会员卡金额" class="col-xs-12 col-sm-8" required/>
                                </div>
                            </div>
                            <div class="space-4"></div>-->
                            <!--<div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 积分提现比例：  </label>
                                <div class="col-sm-8">
                                    <input type="text" name="grade_rebate" id="edit_grade_rebate" placeholder="积分提现比例" class="col-xs-12 col-sm-8" required/>
                                </div>
                            </div>
                            <div class="space-4"></div>-->
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 排序：  </label>
                                <div class="col-sm-8">
                                    <input type="number" name="grade_order" id="edit_grade_order" placeholder="默认255" class="col-xs-12 col-sm-8" />
                                </div>
                            </div>
                            <input type="hidden" name="grade_id" value="" id="edit_grade_id" />
                            <div class="space-4"></div>
                            <div class="alert alert-warning">
                                <button type="button" class="close" data-dismiss="alert">
                                    <i class="ace-icon fa fa-times"></i>
                                </button>
                                <i class="ace-icon fa fa-warning"></i>会员等级（会员等级越高、消费折扣率越高）
                                <br>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">
                        <i class="ace-icon fa fa-save"></i>
                        提交保存
                    </button>
                    <button class="btn btn-info" type="reset">
                        <i class="ace-icon fa fa-refresh"></i>
                        重置
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        <i class="ace-icon fa fa-close"></i>
                        关闭
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </form>
</div>
<!-- /.modal -->
<!-- /.main-container -->
<!-- basic scripts -->

<!--[if !IE]> -->
<script src="__STATIC__/assets/js/jquery-2.1.4.min.js"></script>
<!-- <![endif]-->

<!--[if IE]>
<script src="__STATIC__/assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='__STATIC__/assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>
<script src="__STATIC__/assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src="__STATIC__/assets/js/excanvas.min.js"></script>
<![endif]-->
<script src="__STATIC__/assets/js/jquery-ui.custom.min.js"></script>
<script src="__STATIC__/assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="__STATIC__/assets/js/bootbox.js"></script>
<script src="__STATIC__/assets/js/jquery.easypiechart.min.js"></script>
<script src="__STATIC__/assets/js/jquery.gritter.min.js"></script>
<script src="__STATIC__/assets/js/spin.js"></script>

<!-- ace scripts -->
<script src="__STATIC__/assets/js/ace-elements.min.js"></script>
<script src="__STATIC__/assets/js/ace.min.js"></script>
<script src="__STATIC__/assets/js/main.js"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function($) {
        //编辑按钮
        var editObj = new Object(<?php echo $gradeMenu; ?>);
        $(".btn-info").on(ace.click_event,function(){
            var editid = $(this).attr('data-id');
            if(editObj !=""){
                for(var info in editObj){
                    var mid = editObj[info].grade_id;
                    if(mid==editid){
                        $("#edit_grade_id").val(editid);
                        $("#edit_grade_name").val(editObj[info].grade_name);
                        $("#edit_grade_value").val(editObj[info].grade_value);
                        $("#edit_grade_order").val(editObj[info].grade_order);
                        $("#edit_grade_rebate").val(editObj[info].grade_rebate);
                        $("#edit_grade_min").val(editObj[info].grade_min);
                        $("#edit_grade_max").val(editObj[info].grade_max);
                        $("#edit_card_total").val(editObj[info].card_total);
                        $("#edit_hair_number").val(editObj[info].hair_number);
                        $("#edit_grade_goods_discount").val(editObj[info].grade_goods_discount);
                    }
                }
            }
        });
        //删除按钮
        $(".bootbox-del").on(ace.click_event, function() {
            var obj = $(this).parent('td').parent('tr');
            var delId = $(this).attr("data-id");
            bootbox.confirm({
                message: "是否删除该会员？",
                size: 'small',
                buttons: {
                    confirm:{label:"确认删除"},
                    cancel:{label:"取消删除"}
                },
                callback: function(result) {
                    if(result) {
                        //确定后执行
                        $.ajax({
                            url:"del_member_grade.html",
                            type:"post",
                            data:{delId:delId,type:'delete'},
                            dataType:"json",
                            success:function(re){
                                if(re.code==200){
                                    window.alert(re.msg);
                                    $(obj).remove();
                                }else{
                                    window.alert(re.msg);
                                    return false;
                                }
                            }
                        });
                    }
                }
            });
        });
    });
</script>
</body>

</html>
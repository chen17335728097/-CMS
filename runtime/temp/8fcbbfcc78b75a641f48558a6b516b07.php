<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:47:"E:\wamp64\www\fafa/app/back\view\auth\auth.html";i:1534073030;s:52:"E:\wamp64\www\fafa/app/back\view\public\nav_top.html";i:1534010817;s:49:"E:\wamp64\www\fafa/app/back\view\public\menu.html";i:1535038395;s:51:"E:\wamp64\www\fafa/app/back\view\public\footer.html";i:1534072145;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>导航菜单</title>
	<meta name="Keywords" content="" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<link rel="stylesheet" href="__STATIC__/css/default.css" />
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
<!-- top -->
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
<!-- top -->
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
		<!-- top -->
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

		<!-- top -->
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

					<li class="active">导航菜单</li>
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
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal">
						<i class="ace-icon fa fa-plus"></i>
						添加规则节点
					</button>
				</div>

				<div class="space-4"></div>

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="ace-icon fa fa-cog bigger-130"></i>
					</div>
					<div class="ace-settings-box clearfix" id="ace-settings-box">
						<div class="pull-left width-50">
							<div class="ace-settings-item">
								<div class="pull-left">
									<select id="skin-colorpicker" class="hide">
										<option data-skin="no-skin" value="#438EB9">#438EB9</option>
										<option data-skin="skin-1" value="#222A2D">#222A2D</option>
										<option data-skin="skin-2" value="#C6487E">#C6487E</option>
										<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
									</select>
								</div>
								<span>&nbsp; 换肤</span>
							</div>
							<div class="ace-settings-item">
								<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
								<label class="lbl" for="ace-settings-navbar"> 固定导航栏</label>
							</div>
							<div class="ace-settings-item">
								<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
								<label class="lbl" for="ace-settings-sidebar"> 固定侧边栏</label>
							</div>

							<div class="ace-settings-item">
								<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
								<label class="lbl" for="ace-settings-breadcrumbs"> 固定面包屑导航</label>
							</div>

							<div class="ace-settings-item">
								<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
								<label class="lbl" for="ace-settings-rtl"> 左右互换</label>
							</div>

							<div class="ace-settings-item">
								<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
								<label class="lbl" for="ace-settings-add-container">
									内部
									<b>.container</b>
								</label>
							</div>
						</div>
						<!-- /.pull-left -->

						<div class="pull-left width-50">
							<div class="ace-settings-item">
								<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
								<label class="lbl" for="ace-settings-hover"> 子菜单悬停</label>
							</div>

							<div class="ace-settings-item">
								<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
								<label class="lbl" for="ace-settings-compact"> 紧凑的侧边栏</label>
							</div>

							<div class="ace-settings-item">
								<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
								<label class="lbl" for="ace-settings-highlight"> Alt. Active 项目</label>
							</div>
						</div>
						<!-- /.pull-left -->
					</div>
					<!-- /.ace-settings-box -->
				</div>
				<!-- /.ace-settings-container -->
				<!-- /.ace-settings-container -->

				<div class="row">
					<!-- PAGE CONTENT BEGINS -->
					<!--<form class="ajaxForm2">-->
					<table class="table table-bordered table-hover">
						<thead>
						<tr>
							<th style="width:5%;" class="hidden-480 text-center">ID</th>
							<th style="width:38.5%;">权限名称</th>
							<th style="width:38.5%;">权限规则</th>
							<!-- <th class="hidden-480">状态</th> -->
							<!-- <th class="hidden-480">排序<button class="btn btn-white btn-yellow btn-sm pull-right">排序</button></th>	 -->
							<th style="border-right:#CCC solid 1px;width:20%;text-align:center;">操作</th>
						</tr>
						</thead>
						<tbody>
						<?php if(is_array($auth_list) || $auth_list instanceof \think\Collection || $auth_list instanceof \think\Paginator): if( count($auth_list)==0 ) : echo "" ;else: foreach($auth_list as $key=>$auth): ?>
						<tr class="back-color-tr">
							<td class="hidden-480 text-center">
								<span class="badge badge-grey"><?php echo $auth['id']; ?></span>
							</td>
							<td class="back-color-one">
								├├<?php echo $auth['title']; ?>
							</td>
							<td class="back-color-one">
								<?php echo $auth['name']; ?>
							</td>
							<!-- <td class="hidden-480">
                                                            <?php if($auth['status'] == '0'): ?>
                                                                        <button class="status btn btn-minier btn-danger">禁用</button>
                                                            <?php else: ?>
                                                                        <button class="status btn btn-minier btn-success" onclick="">开启</button>
                                                            <?php endif; ?>
                            </td>
                            <td class="hidden-480">
                                <input type="number" class="input-small" value="<$auth.order>"/>
                            </td> -->

							<td align="center">
								<button class="btn btn-xs btn-info" data-toggle="modal" data-target="#myModaledit" tid="<?php echo $auth['id']; ?>" tpid="<?php echo $auth['pid']; ?>">
									<i class="ace-icon fa fa-pencil bigger-120"></i>
								</button>
								<button class="btn btn-xs btn-danger bootbox-del" id="<?php echo $auth['id']; ?>">
									<i class="ace-icon fa fa-trash-o bigger-120"></i>
								</button>

							</td>
						</tr>
						<?php if(isset($auth['two'])): if(is_array($auth['two']) || $auth['two'] instanceof \think\Collection || $auth['two'] instanceof \think\Paginator): if( count($auth['two'])==0 ) : echo "" ;else: foreach($auth['two'] as $key=>$two): ?>
						<tr class="back-color-tr">
							<td class="hidden-480 text-center">
								<span class="badge badge-grey"><?php echo $two['id']; ?></span>
							</td>
							<td class="back-color-two">
								├├├├<?php echo $two['title']; ?>
							</td>
							<td class="back-color-two">
								<?php echo $two['name']; ?>
							</td>
							<!-- <td class="hidden-480">
                                <?php if($two['status'] == '0'): ?>
                                                    <button class="status btn btn-minier btn-danger">禁用</button>
                                        <?php else: ?>
                                                    <button class="status btn btn-minier btn-success" onclick="">开启</button>
                                        <?php endif; ?>
                            </td>
                            <td class="hidden-480">
                                <input type="number" class="input-small" value="<?php echo $two['order']; ?>"/>
                            </td> -->

							<td align="center">
								<button class="btn btn-xs btn-info" data-toggle="modal" data-target="#myModaledit" tid="<?php echo $two['id']; ?>" tpid="<?php echo $two['pid']; ?>">
									<i class="ace-icon fa fa-pencil bigger-120"></i>
								</button>
								<button class="btn btn-xs btn-danger bootbox-del" id="<?php echo $two['id']; ?>">
									<i class="ace-icon fa fa-trash-o bigger-120"></i>
								</button>

							</td>
						</tr>
						<?php if(isset($two['three'])): if(is_array($two['three']) || $two['three'] instanceof \think\Collection || $two['three'] instanceof \think\Paginator): if( count($two['three'])==0 ) : echo "" ;else: foreach($two['three'] as $key=>$three): ?>
						<tr class="back-color-tr">
							<td class="hidden-480 text-center">
								<span class="badge badge-grey"><?php echo $three['id']; ?></span>
							</td>
							<td class="back-color-three">
								├├├├├├├├<?php echo $three['title']; ?>
							</td>
							<td class="back-color-three">
								<?php echo $three['name']; ?>
							</td>
							<!-- <td class="hidden-480">
                            <?php if($three['status'] == '10'): ?>
                                        <button class="status btn btn-minier btn-danger">禁用</button>
                            <?php else: ?>
                                        <button class="status btn btn-minier btn-success" onclick="">开启</button>
                            <?php endif; ?>
                            </td>

                            <td class="hidden-480">
                                <input type="number" class="input-small" value="<?php echo $three['order']; ?>"/>
                            </td> -->

							<td align="center">
								<button class="btn btn-xs btn-info" data-toggle="modal" data-target="#myModaledit"  tid="<?php echo $three['id']; ?>" tpid="<?php echo $three['pid']; ?>">
									<i class="ace-icon fa fa-pencil bigger-120"></i>
								</button>
								<button class="btn btn-xs btn-danger bootbox-del" id="<?php echo $three['id']; ?>">
									<i class="ace-icon fa fa-trash-o bigger-120"></i>
								</button>

							</td>
						</tr>
						<?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>
					</form>
					<!-- PAGE CONTENT ENDS -->
					<!-- /.col -->
				</div>
				<!-- /.row -->
				<div class="row">
					<ul class="pagination no-margin">
						<!-- <li class="disabled">
                            <a href="#">
                                <i class="ace-icon fa fa-angle-double-left"></i>
                            </a>
                        </li> -->

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
<!-- /.main-container -->

<!-- 添加菜单模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<form class="form-horizontal" method="post" action="addauth.html" id="form_column" name="form_column" enctype="multipart/form-data">
		<div class="modal-dialog">
			<div class="modal-content" style="min-width:999px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">添加导航菜单</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 规则名称：  </label>
								<div class="col-sm-10">
									<input type="text" name="title" id="title" placeholder="请输入规则名称(必填)" class="col-xs-12 col-sm-8" />
								</div>
							</div>
							<div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 英文名称：  </label>
								<div class="col-sm-10">
									<input type="text" name="name" id="plug_link_name" placeholder="请输入英文名称" class="col-xs-12 col-sm-8" />
								</div>
							</div>
							<div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 上级栏目：  </label>
								<div class="col-sm-10">
									<select name="pid" class="col-xs-12 col-sm-8" style="height:37px;">
										<option value="0">顶级菜单</option>
										<?php if(is_array($auth_list) || $auth_list instanceof \think\Collection || $auth_list instanceof \think\Paginator): if( count($auth_list)==0 ) : echo "" ;else: foreach($auth_list as $key=>$auth): ?>
										<option value="<?php echo $auth['id']; ?>">├├<?php echo $auth['title']; ?></option>
										<?php if(!(empty($auth['two']) || (($auth['two'] instanceof \think\Collection || $auth['two'] instanceof \think\Paginator ) && $auth['two']->isEmpty()))): if(is_array($auth['two']) || $auth['two'] instanceof \think\Collection || $auth['two'] instanceof \think\Paginator): if( count($auth['two'])==0 ) : echo "" ;else: foreach($auth['two'] as $key=>$au): ?>
										<option value="<?php echo $au['id']; ?>">├├├├<?php echo $au['title']; ?></option>
										<?php if(!(empty($au['three']) || (($au['three'] instanceof \think\Collection || $au['three'] instanceof \think\Paginator ) && $au['three']->isEmpty()))): if(is_array($au['three']) || $au['three'] instanceof \think\Collection || $au['three'] instanceof \think\Paginator): if( count($au['three'])==0 ) : echo "" ;else: foreach($au['three'] as $key=>$a): ?>
										<option value="<?php echo $a['id']; ?>">├├├├├├<?php echo $a['title']; ?></option>
										<?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
									</select>
								</div>
							</div>
							<div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 是否开启： </label>
								<div class="col-sm-10" style="padding-top:5px;">
									<input name="column_open" id="plug_link_open" value="1" class="ace ace-switch ace-switch-4 btn-empty" type="checkbox" />
									<span class="lbl">&nbsp;&nbsp;默认关闭</span>
								</div>
							</div>
							<div class="space-4"></div>

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
<!-- 修改链接模态框（Modal） -->
<div class="modal fade" id="myModaledit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<form class="form-horizontal" method="post" action="editAuth.html" name="edit-form" id="edit-form" enctype="multipart/form-data">
		<div class="modal-dialog">
			<div class="modal-content" style="min-width:999px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">编辑导航菜单</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 规则名称：  </label>
								<div class="col-sm-10">
									<input type="text" name="title" id="edit_title" placeholder="请输入规则名称(必填)" class="col-xs-12 col-sm-8" />
								</div>
							</div>
							<input type="hidden" name="id" id="edit_id" value="" />
							<div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 英文名称：  </label>
								<div class="col-sm-10">
									<input type="text" name="name" id="edit_name" placeholder="请输入英文名称" class="col-xs-12 col-sm-8" />
								</div>
							</div>
							<div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 上级栏目：  </label>
								<div class="col-sm-10">
									<select name="pid" id="edit_pid" class="col-xs-12 col-sm-8" style="height:37px;">
										<option value="0">顶级菜单</option>
										<?php if(is_array($auth_list) || $auth_list instanceof \think\Collection || $auth_list instanceof \think\Paginator): if( count($auth_list)==0 ) : echo "" ;else: foreach($auth_list as $key=>$auth): ?>
										<option value="<?php echo $auth['id']; ?>">├├<?php echo $auth['title']; ?></option>
										<?php if(!(empty($auth['two']) || (($auth['two'] instanceof \think\Collection || $auth['two'] instanceof \think\Paginator ) && $auth['two']->isEmpty()))): if(is_array($auth['two']) || $auth['two'] instanceof \think\Collection || $auth['two'] instanceof \think\Paginator): if( count($auth['two'])==0 ) : echo "" ;else: foreach($auth['two'] as $key=>$au): ?>
										<option value="<?php echo $au['id']; ?>">├├├├<?php echo $au['title']; ?></option>
										<?php if(!(empty($au['three']) || (($au['three'] instanceof \think\Collection || $au['three'] instanceof \think\Paginator ) && $au['three']->isEmpty()))): if(is_array($au['three']) || $au['three'] instanceof \think\Collection || $au['three'] instanceof \think\Paginator): if( count($au['three'])==0 ) : echo "" ;else: foreach($au['three'] as $key=>$a): ?>
										<option value="<?php echo $a['id']; ?>">├├├├├├<?php echo $a['title']; ?></option>
										<?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
									</select>
								</div>
							</div>
							<div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 是否开启： </label>
								<div class="col-sm-10" style="padding-top:5px;">
									<input name="status" id="plug_link_open" value="1" class="ace ace-switch ace-switch-4 btn-empty" type="checkbox" />
									<span class="lbl">&nbsp;&nbsp;默认关闭</span>
								</div>
							</div>
							<div class="space-4"></div>

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
<script src="__STATIC__/js/jquery.validate.js"></script>
<script type="text/javascript">
	$(function(){
		//新增表单验证
		$("#form_column").validate({
			rules:{
				column_name:{
					required:true
				},
			},
			messages:{
				column_name:"请输入菜单名称",
			},
			onkeyup:false,
			focusCleanup:true,
			success:"valid",
			submitHandler:function(form){
				form.submit();
			}
		});
		$("#edit-form").validate({
			rules:{
				column_name:{
					required:true
				},
			},
			messages:{
				column_name:"请输入菜单名称",
			},
			onkeyup:false,
			focusCleanup:true,
			success:"valid",
			submitHandler:function(form){
				form.submit();
			}
		});
	});
</script>
<script type="text/javascript">

	jQuery(function($) {
		/**编辑导航菜单**/
		var editObj = new Object(<?php echo $authObj; ?>);

		$(".btn-info").on(ace.click_event,function(){
			var editid = $(this).attr('tid');
			var pid = $(this).attr('tpid');
			if(editObj !=""){
				for(var info in editObj){
					var mid = editObj[info].id;
					if(mid==editid){
						$("#edit_id").val(mid);
						$("#edit_name").val(editObj[info].name);
						$("#edit_title").val(editObj[info].title);
						$("#edit_pid>option").each(function(index,value){

							var spid = $("#edit_pid>option").eq(index).val();

							if(pid==spid) {
								$("#edit_pid>option").eq(index).prop("selected", true);
							}
						});
					}
				}
			}
		});
		/**删除导航菜单**/
		$(".bootbox-del").on(ace.click_event,function(){
			var id = $(this).attr('id');
			bootbox.confirm({
				message: "是否删除本条广告？",
				size: 'small',
				buttons: {
					confirm:{
						label: "确认删除",
					},
					cancel:{
						label: "取消删除",
					},
				},
				callback: function(result) {
					if(result){
						$.ajax({
							url:"delauth.html",
							type:"post",
							data:{aid:id},
							dataType:"json",
							success:function(re){
								//alert(re);return false;
								if(re.code==200){
									window.alert(re.msg);
									window.location.href="auth.html";
								}else{
									window.alert(re.msg);
									return false;
								}
							},
							error:function (result){
								alert("请求失败");
							}
						});
					}
				}
			});
		});
		/**删除导航菜单结束**/
		$('#id-input-file-2,#id-input-file-3').ace_file_input({
			no_file: '未选择 ...',
			btn_choose: '选择',
			btn_change: '更改',
			droppable: false,
			onchange: null,
			thumbnail: false, //| true | large
			whitelist: ["jpeg", "jpg", "png", "gif", "bmp"]
			//blacklist:'exe|php'
			//onchange:''
			//
		});
		//开启上传文件类型白名单，过滤非图片格式
		var whitelist_ext = ["jpeg", "jpg", "png", "gif", "bmp"];
		var whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
		var file_input = $('#id-input-file-2');
		var file_input2 = $('#id-input-file-3');
		file_input
				.ace_file_input('update_settings', {
					'allowExt': whitelist_ext,
					'allowMime': whitelist_mime
				});
		file_input2.ace_file_input('update_settings', {
			'allowExt': whitelist_ext,
			'allowMime': whitelist_mime
		});
	});
</script>
</body>
</html>
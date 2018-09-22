<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:51:"E:\wamp64\www\fafa/app/back\view\member\member.html";i:1534073140;s:52:"E:\wamp64\www\fafa/app/back\view\public\nav_top.html";i:1534010817;s:49:"E:\wamp64\www\fafa/app/back\view\public\menu.html";i:1535637691;s:51:"E:\wamp64\www\fafa/app/back\view\public\footer.html";i:1534072145;}*/ ?>
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
		<!--<li class="">
			<a href="p_format.html">
				<i class="menu-icon fa fa-caret-right"></i> 商品规格
			</a>
			<b class="arrow"></b>
		</li>-->
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
		<!--<li class="">
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
		</li>-->
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

				<div class="nav-search" id="nav-search"></div>
				<!-- /.nav-search -->
			</div>

			<div class="page-content">

				<div class="row">
					<form action="memberList.html" method="POST">
						<div class="col-xs-12 col-sm-4" style="width: 45%;">
							<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#add-ad">
								<i class="ace-icon fa fa-plus"></i>
								添加新会员
							</button>
						</div>
						<div class="col-xs-12 col-sm-3 btn-sespan hidden-480">
							<div class="input-group" style="width: 400px;">
											<span class="input-group-addon">
												<i class="ace-icon fa fa-check"></i>
											</span>
								<input type="text" name="key" id="key" class="form-control search-query" value="<?php echo $key; ?>" placeholder="输入查询手机号">
								<span class="input-group-btn">
												<button type="submit" class="btn btn-info btn-sm ajax-search-form">
													<span class="ace-icon fa fa-search icon-on-right bigger-110"></span> 搜索
											</button>
											</span>
							</div>
						</div>
					</form>
				</div>
				<div class="space-4"></div>

				<div class="row">
					<!-- PAGE CONTENT BEGINS -->
					<table class="table table-bordered table-hover" border="0">
						<thead>
						<tr>
							<!--<th style="width:8%;text-align: left;">ID&nbsp;<input type="button" value="删除"/></th>-->
							<th width="6%">
								<label class="pos-rel">
									<input class="check-all ace" id="chkAll" type="checkbox">
									<span class="lbl"></span>
								</label><button id="delAll" class="btn btn-white btn-danger btn-sm pull-right">删除</button>
							</th>
							<th style="width:10%;text-align: center;" >会员信息</th>
							<th style="width:10%;text-align: center;" >会员等级</th>
							<th style="width:10%;text-align: center;" >会员积分</th>
							<th style="width:8%;text-align: center;" >会员余额</th>
							<th style="width:40%;border-right: 1px solid #ddd;text-align: center;">操作</th>
						</tr>
						</thead>
						<tbody>
						<?php if(is_array($member_list) || $member_list instanceof \think\Collection || $member_list instanceof \think\Paginator): if( count($member_list)==0 ) : echo "" ;else: foreach($member_list as $m=>$member): ?>
						<tr <?php if($m%2 == 0): ?>style="background-color:#e4f2ff;"<?php endif; ?>>

						<td>
							<label class="pos-rel">
								<input class="ids ace" type="checkbox" name="tables[]" value="43">
								<span class="lbl"></span>
							</label>
							<span class="badge badge-grey"><?php echo $member['member_id']; ?></span>
						</td>
						<td align="left">
							<div style="float:left;width:200px;margin:0 20px;">
								<!--<?php if(empty($member['member_logo']) || (($member['member_logo'] instanceof \think\Collection || $member['member_logo'] instanceof \think\Paginator ) && $member['member_logo']->isEmpty())): ?>
                            <img src="__STATIC__/default.jpg" alt="" style="float:left;margin-left:50px;border-radius:50px;width:100px;height:100px;">
                        <?php else: ?>
                            <img src="<?php echo $member['member_logo']; ?>" alt="" style="float:left;margin-left:50px;border-radius:50px;width:100px;height:100px;">
                        <?php endif; ?>-->
								<label>
									用户名：<span><?php echo $member['member_nickname']; ?></span>
								</label>
								<label>手机号;<span><?php echo $member['member_phone']; ?></span></label>
							</div>
						</td>

						<td align="center"><?php $member_grade_info = return_member_grade($member['member_value']); ?>
							<span class="badge badge-success"><?php echo $member_grade_info['grade_name']; ?></span>
						</td>
						<td align="center"><span class="badge badge-success"><?php echo $member['member_point']; ?></span></td>
						<td align="center">￥<strong style="color: red;font-size:16px;"><?php echo floatval($member['member_account']); ?></strong>
							<!--<?php if($member['member_open'] == '10'): ?>
                                <button class="status btn btn-minier btn-success" onclick="">开启</button>
                                &lt;!&ndash;<button class="status btn btn-minier btn-danger" onclick="">禁用</button>&ndash;&gt;
                            <?php endif; if($member['member_open'] == '20'): ?>
                                <button class="status btn btn-minier btn-success" onclick="">关闭</button>
                            <?php endif; if($member['member_open'] == '30'): ?>
                            <button class="status btn btn-minier btn-success" onclick="">黄金会员</button>
                            <?php endif; ?>-->
						</td>
						<td align="center">

							<button class="btn btn-xs btn-info edit" data-toggle="modal" data-target="#edit-ad" data-id="<?php echo $member['member_id']; ?>">
								会员编辑
							</button>
							<button class="btn btn-xs btn-info recharge" data-toggle="modal" data-target="#edit-recharge" data-id="<?php echo $member['member_id']; ?>">
								账户充值
							</button>
							<button class="btn btn-xs btn-info detail" data-toggle="modal" data-id="<?php echo $member['member_id']; ?>">
								账户明细
							</button>
							<button class="btn btn-xs btn-info consume" data-toggle="modal" data-target="#edit-consume"  data-id="<?php echo $member['member_id']; ?>">
								会员消费
							</button>
							<!--<button class="btn btn-xs btn-danger btn_click" data-id="<?php echo $member['member_id']; ?>">
                                <i class="ace-icon fa fa-cogs"></i>
                            </button>-->
							<button type="button" class="btn btn-xs btn-danger bootbox-del" data-id="<?php echo $member['member_id']; ?>">
								会员删除
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
						<?php echo $member_list->render(); ?>
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

<!-- 添加会员模态框（Modal） -->
<div class="modal fade" id="add-ad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<form class="form-horizontal ajaxForm2" name="plug_ad_add" method="post" action="add-member.html" enctype="multipart/form-data">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
					</button>
					<h4 class="modal-title" id="myModalLabel">
						添加新会员
					</h4>
				</div>
				<div class="modal-body">

					<div class="row">
						<div class="col-xs-12">
							<!--<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 会员密码：  </label>
								<div class="col-sm-8">
									<input type="password" name="member_pass" id="member_password" placeholder="输入会员密码" class="col-xs-12 col-sm-8" required/>
								</div>
							</div>
							<div class="space-4"></div>-->
							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 会员昵称：  </label>
								<div class="col-sm-8">
									<input type="text" name="member_nickname" id="nickname" placeholder="输入会员昵称" class="col-xs-12 col-sm-8" required/>
								</div>
							</div>
							<div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 手机号码：  </label>
								<div class="col-sm-8">
									<input type="text" name="member_phone" id="phone" placeholder="输入手机号码" class="col-xs-12 col-sm-8" required/>
								</div>
							</div>
							<div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 会员卡号：  </label>
								<div class="col-sm-8">
									<input type="text" name="member_card" id="card" placeholder="输入会员卡号" class="col-xs-12 col-sm-8" required/>
								</div>
							</div>
							<div class="space-4"></div>
							<!--<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 邮箱地址：  </label>
								<div class="col-sm-8">
									<input type="text" name="member_email" id="email" placeholder="输入邮箱地址" class="col-xs-12 col-sm-8" required/>
								</div>
							</div>
							<div class="space-4"></div>-->
							<!--<div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 会员卡类型：  </label>
                                <div class="col-sm-8">
                                    <select name="news_flag" class="col-xs-12 col-sm-8" required="">
                                        <option value="0">普通会员卡</option>
                                        <option value="10>">100元充值卡</option>
                                    </select>
                                </div>
                            </div>
                            <div class="space-4"></div>-->
							<!--<div class="form-group" id="pic_list">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 会员LOGO： </label>
								<div class="col-sm-8">
									<input type="file" id="id-input-file-2" name="member_logo" />
									<div><img src="__STATIC__/assets/images/no_img.jpg" height="70"  id="member_pic" ></div>
								</div>
							</div>
                            <div class="space-4"></div>-->
							<!--<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 是否启用： </label>
								<div class="col-sm-8">
									<input name="member_open" id="member_open" value="10" class="ace ace-switch ace-switch-4 btn-empty" type="checkbox" />
									<span class="lbl">&nbsp;&nbsp;默认关闭</span>
								</div>
							</div>
							<div class="space-4"></div>-->
							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 会员备注 </label>
								<div class="col-sm-9">
									<textarea name="member_content" rows="3" id="member_content" class="col-xs-12 col-sm-7 limitedone" placeholder="会员备注信息"></textarea>
								</div>
							</div>
							<div class="space-4"></div>
							<div class="alert alert-warning">
								<button type="button" class="close" data-dismiss="alert">
									<i class="ace-icon fa fa-times"></i>
								</button>
								<i class="ace-icon fa fa-warning"></i>
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

<!-- 修改会员信息模态框（Modal） -->
<div class="modal fade" id="edit-ad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<form class="form-horizontal ajaxForm2" name="plug_ad_add" method="post" action="editMember.html">
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
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 会员昵称：  </label>
								<div class="col-sm-8">
									<input type="text" name="member_nickname" id="edit_member_nickname" placeholder="输入用户组名" class="col-xs-12 col-sm-8" required/>
								</div>
							</div>
							<div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 手机号码：  </label>
								<div class="col-sm-8">
									<input type="text" name="member_phone" id="edit_member_phone" placeholder="输入用户组名" class="col-xs-12 col-sm-8" required/>
								</div>
							</div>
							<div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 会员卡号：  </label>
								<div class="col-sm-8">
									<input type="text" name="member_card" id="edit_member_card" placeholder="" class="col-xs-12 col-sm-8" required/>
								</div>
							</div>
							<div class="space-4"></div>
							<!--<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 会员积分：  </label>
								<div class="col-sm-8">
									<input type="text" name="member_point" id="edit_member_point" placeholder="" class="col-xs-12 col-sm-8" required/>
								</div>
							</div>
							<div class="space-4"></div>-->
							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 会员备注 </label>
								<div class="col-sm-9">
									<textarea name="member_content" rows="3" id="edit_member_content" class="col-xs-12 col-sm-7 limitedone" placeholder="会员备注信息"></textarea>
								</div>
							</div>
							<div class="space-4"></div>
							<input type="hidden" name="member_id" value="" />
							<div class="alert alert-warning">
								<button type="button" class="close" data-dismiss="alert">
									<i class="ace-icon fa fa-times"></i>
								</button>
								<i class="ace-icon fa fa-warning"></i> 修改会员用户信息（会员手机号、会员昵称、会员余额、会员卡号）
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
<!-- basic scripts -->
<!-- 会员充值模态框（Modal） -->
<div class="modal fade" id="edit-recharge" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<form class="form-horizontal ajaxForm2" name="plug_ad_add" method="post" action="back_memberRecharge.html">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
					</button>
					<h4 class="modal-title" id="myModalLabel">
						会员消费
					</h4>
				</div>
				<div class="modal-body">

					<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 充值金额：  </label>
								<div class="col-sm-8">
									<input type="text" name="recharge_count"  placeholder="输入用户组名" class="col-xs-12 col-sm-8" required/>
								</div>
							</div>
							<div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 充值赠送金额：  </label>
								<div class="col-sm-8">
									<input type="text" name="give_count"  placeholder="" class="col-xs-12 col-sm-8" required/>
								</div>
							</div>
							<div class="space-4"></div>
							<input type="hidden" name="member_id" id="recharge_id" value="" />
							<div class="alert alert-warning">
								<button type="button" class="close" data-dismiss="alert">
									<i class="ace-icon fa fa-times"></i>
								</button>
								<i class="ace-icon fa fa-warning"></i> 消费信息（会员等级越高、越省钱）
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

<!-- 会员消费模态框（Modal） -->
<div class="modal fade" id="edit-consume" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<form class="form-horizontal ajaxForm2" name="plug_ad_add" method="post" action="back_memberConsume.html">
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
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 消费产品：  </label>
								<div class="col-sm-8">
									<select name="goods_id" class="col-sm-8 goods" style="height:34px;">
										<?php if(!(empty($goods_list) || (($goods_list instanceof \think\Collection || $goods_list instanceof \think\Paginator ) && $goods_list->isEmpty()))): if(is_array($goods_list) || $goods_list instanceof \think\Collection || $goods_list instanceof \think\Paginator): if( count($goods_list)==0 ) : echo "" ;else: foreach($goods_list as $key=>$goods): ?>
										<option value="<?php echo $goods['product_id']; ?>" data-price="<?php echo $goods['product_market_price']; ?>"><?php echo $goods['product_name']; ?></option>
										<?php endforeach; endif; else: echo "" ;endif; endif; ?>
									</select>
								</div>
							</div>
							<div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 消费金额：  </label>
								<div class="col-sm-8">
									<input type="text" name="consume_count"  placeholder="消费金额" class="col-xs-12 col-sm-8" style="color: red"/>
								</div>
							</div>
							<div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 支付方式：  </label>
								<div class="col-sm-8">
									<label class="checkbox inline">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" checked id="inlineCheckbox1" name="consume_type" value="10" style="width:20px;height:20px;"> 现金支付
									</label>&nbsp;
									<label class="checkbox inline">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="inlineCheckbox2" name="consume_type" value="20" style="width:20px;height:20px;"> 余额支付
									</label>

								</div>
							</div>
							<div class="space-4"></div>
							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 消费备注 </label>
								<div class="col-sm-9">
									<textarea name="member_consume_content" rows="3" id="consume_content" class="col-xs-12 col-sm-7 limitedone" placeholder="消费备注"></textarea>
								</div>
							</div>
							<div class="space-4"></div>
							<input type="hidden" name="member_id" id="consume_id" value="" />
							<div class="alert alert-warning">
								<button type="button" class="close" data-dismiss="alert">
									<i class="ace-icon fa fa-times"></i>
								</button>
								<i class="ace-icon fa fa-warning"></i> 会员消费信息（消费服务产品、消费金额）
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
<script src="__STATIC__/layer/layer.js"></script>
<!-- inline scripts related to this page -->
<script type="text/javascript">
	jQuery(function($) {
		//编辑按钮
		var editObj = new Object(<?php echo $memberObj; ?>);
		$(".edit").on(ace.click_event,function(){
			var editid = $(this).attr('data-id');
			if(editObj !=""){
				for(var info in editObj){
					var mid = editObj[info].member_id;
					if(mid==editid){
						$("input[name='member_id']").val(editid);
						$("#edit_member_nickname").val(editObj[info].member_nickname);
						$("#edit_member_point").val(editObj[info].member_point);
						$("#edit_member_phone").val(editObj[info].member_phone);
						$("#edit_member_content").val(editObj[info].member_content);
						$("#edit_member_card").val(editObj[info].member_card);
					}
				}
			}
		});

		//充值按钮
		$(".recharge").on(ace.click_event,function(){
			var editid = $(this).attr('data-id');
			if(editObj !=""){
				for(var info in editObj){
					var mid = editObj[info].member_id;
					if(mid==editid){
						$("#recharge_id").val(editid);
					}
				}
			}
		});
		//会员明细按钮
		$(".detail").on(ace.click_event,function(){
			var editid = $(this).attr('data-id');
			window.location.href = "member_recharge_detail.html?mid="+editid;
		});
		//会员消费
		$(".consume").on(ace.click_event,function(){
			var editid = $(this).attr('data-id');
			$("#consume_id").val(editid);
			var price = $(".goods").find("option:selected").data("price");
			$("input[name='consume_count']").val(price);
		});
		//删除按钮
		$(".bootbox-del").on(ace.click_event, function() {
			var delId = $(this).attr("data-id");
			var check_list = [delId];
			$("input:checkbox").each(function () {
				var attr = $(this).prop("checked");
				var productId = $(this).val();
				if(attr===true){
					//选中
					check_list.push(productId);
				}
			});
			bootbox.confirm({
				message: "确定要删除会员吗？",
				size: 'small',
				buttons: {
					confirm:{label:"确认"},
					cancel:{label:"取消"}
				},
				callback: function(result) {
					if(result) {
						//确定后执行
						$.ajax({
							url:"del-member.html",
							type:"post",
							data:{delId:check_list,type:'delete'},
							dataType:"json",
							success:function(re){

								if(re.code==200){
									layer.confirm('操作成功', {
										btn: ['我知道了'] //按钮
									}, function(index){
										location.reload();
										layer.close(index);
									});
								}else{
									layer.confirm(re.msg, {
										btn: ['我知道了'] //按钮
									}, function(index){
										layer.close(index);
									});
									return false;
								}
							}
						});
					}
				}
			});
		});

		//产品删选
		$(".goods").change(function(){
			var price = $(this).find("option:selected").data("price");
			$("input[name='consume_count']").val(price);
		});
	});
</script>
</body>

</html>
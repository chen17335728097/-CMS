<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:60:"E:\wamp64\www\fafa/app/back\view\product\product_center.html";i:1535036983;s:52:"E:\wamp64\www\fafa/app/back\view\public\nav_top.html";i:1534010817;s:49:"E:\wamp64\www\fafa/app/back\view\public\menu.html";i:1535637691;s:51:"E:\wamp64\www\fafa/app/back\view\public\footer.html";i:1534072145;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>产品列表</title>
	<meta name="Keywords" content="关键词" />
	<meta name="description" content="overview &amp; stats" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="__STATIC__/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="__STATIC__/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

	<!-- page specific plugin styles -->

	<!-- text fonts -->
	<!--<link rel="stylesheet" href="__STATIC__/assets/css/fonts.googleapis.com.css" />-->
	<link rel="stylesheet" href="__STATIC__/assets/css/bootstrap-datepicker3.min.css" />
	<link rel="stylesheet" href="__STATIC__/assets/css/daterangepicker.min.css" />

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
				<a href="parameter.html" class="btn btn-success">
					<i class="ace-icon fa fa-desktop"></i>
				</a>

				<a href="add-content.html" class="btn btn-info">
					<i class="ace-icon fa fa-pencil"></i>
				</a>

				<a href="admin-list.html" class="btn btn-warning">
					<i class="ace-icon fa fa-users"></i>
				</a>

				<a href="ad.html" class="btn btn-danger">
					<i class="ace-icon fa fa-diamond"></i>
				</a>
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
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
				<ul class="breadcrumb">
					<li>
						<i class="ace-icon fa fa-home home-icon"></i>
						<a href="index.html">首页</a>
					</li>
					<li>
						<a href="#">内容管理</a>
					</li>
					<li class="active">产品列表</li>
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
				<!--设置按钮-->
				<!-- /.ace-settings-container -->

				<!-- /.page-header -->
				<div class="row">
					<form action="p_center.html" method="POST">
							<div class="col-xs-12 col-sm-4" style="width: 45%;">
								<a href="add_product.html" class="btn btn-success btn-sm"><i class="ace-icon fa fa-plus"></i>添加产品</a>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<select name="pc_id" class="hidden-480">
									<option >商品分类</option>
									<?php if(isset($pc_class)): if(is_array($pc_class) || $pc_class instanceof \think\Collection || $pc_class instanceof \think\Paginator): if( count($pc_class)==0 ) : echo "" ;else: foreach($pc_class as $key=>$class): ?>
											<option value="<?php echo $class['pc_id']; ?>">├├<?php echo $class['pc_name']; ?></option>
											<?php if(isset($class['two'])): if(is_array($class['two']) || $class['two'] instanceof \think\Collection || $class['two'] instanceof \think\Paginator): if( count($class['two'])==0 ) : echo "" ;else: foreach($class['two'] as $key=>$two): ?>
													<option value="<?php echo $two['pc_id']; ?>">├├├├<?php echo $two['pc_name']; ?></option>
													<?php if(isset($two['three'])): if(is_array($two['three']) || $two['three'] instanceof \think\Collection || $two['three'] instanceof \think\Paginator): if( count($two['three'])==0 ) : echo "" ;else: foreach($two['three'] as $key=>$three): ?>
															<option value="<?php echo $three['pc_id']; ?>">├├├├├├<?php echo $three['pc_name']; ?></option>
														<?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; endif; ?>
								</select>
								<!--<select name="brand_id" class="ajax_change hidden-480">
									<option value="">商品品牌</option>
									<?php if(is_array($brand_list) || $brand_list instanceof \think\Collection || $brand_list instanceof \think\Paginator): if( count($brand_list)==0 ) : echo "" ;else: foreach($brand_list as $key=>$brand): ?>
										<option value="<?php echo $brand['brand_id']; ?>"><?php echo $brand['brand_name']; ?></option>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</select>-->

								<!--<select name="diyflag" class="ajax_change hidden-480">
									<option >供货商</option>
									<?php if(is_array($suppliers_list) || $suppliers_list instanceof \think\Collection || $suppliers_list instanceof \think\Paginator): if( count($suppliers_list)==0 ) : echo "" ;else: foreach($suppliers_list as $key=>$supplier): ?>
										<option value="<?php echo $supplier['supplier_id']; ?>"><?php echo $supplier['supplier_name']; ?></option>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</select>-->

								<!--<select name="product_state" class="ajax_change hidden-480">
									<option value>全部</option>
									<option value="20">上架</option>
									<option value="30">下架</option>
								</select>-->
							</div>
							<div class="col-xs-12 col-sm-3 btn-sespan hidden-480">
								<div class="input-group" style="width: 400px;">
											<span class="input-group-addon">
												<i class="ace-icon fa fa-check"></i>
											</span>
									<input type="text" name="key" id="key" class="form-control search-query" value="" placeholder="输入需查询的关键字、商品名称">
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
					<button id="delAll" class="btn btn-white btn-danger btn-sm" data-type="del">删除</button>
					<button class="btn btn-white btn-success btn-sm btn_type" data-type="start">上架</button>
					<button class="btn btn-white btn-danger btn-sm btn_type" data-type="stop">下架</button>
					<!--<button class="btn btn-white btn-warning btn-sm btn_type" data-type="wx_code">更新二维码</button>-->
				</div>

				<div class="space-4"></div>

				<div class="row">
					<!--<form id="export-form" method="post" class="form-horizontal" action="">-->
					<table width="100%" class="table table-striped table-bordered table-hover" id="dynamic-table">
						<thead>
						<tr>
							<th width="6%">
								<label class="pos-rel">
									<input class="check-all ace" id="chkAll" type="checkbox" value="" />
									<span class="lbl"></span>
								</label>
							</th>
							<th>产品标题</th>
							<th>产品分类</th>
							<th  width="15%" class="hidden-480">价格</th>
							<!--<th  width="10%" class="hidden-480">库存</th>-->
							<th  width="10%" class="hidden-480">时间</th>
							<th  width="10%" class="hidden-480">上下架</th>
							<th style="border-right:#ddd solid 1px;">操作</th>
						</tr>
						</thead>
						<tbody>
						<?php if(is_array($plist) || $plist instanceof \think\Collection || $plist instanceof \think\Paginator): if( count($plist)==0 ) : echo "" ;else: foreach($plist as $key=>$product): ?>
								<tr>
									<td>
										<label class="pos-rel">
											<input class="ids ace" type="checkbox" name="tables[]" value="<?php echo $product['product_id']; ?>">
											<span class="lbl">&nbsp;&nbsp;&nbsp;<?php echo $product['product_id']; ?></span>
										</label>
									</td>

									<td>
										<a href="javascript:(0);" style="margin:5px;float: left;">
											<img class="media-object hidden-480" data-src="__PUBLIC__/<?php echo $product['product_image']; ?>" alt="<?php echo $product['product_name']; ?>" src="__PUBLIC__/<?php echo $product['product_image']; ?>" style="width: 72px; height: 72px;">
										</a>
										<h4 style="float: left;margin:5px;">
											商品名称:<span class="blue"><?php echo $product['product_name']; ?></span>
										</h4>


									</td>
									<td class="hidden-480"><?php echo return_columnName($product['pc_id']); ?></td>
									<td class="hidden-480">
										价格：￥<?php echo $product['product_market_price']; ?>
										<!--销售价：￥<?php echo $product['product_sale_price']; ?><br/>
										会员价：￥<?php echo $product['product_member_price']; ?><br/>
										成本价：￥<?php echo $product['product_base_price']; ?>-->
									</td>
									<!--<td class="hidden-480"><?php echo $product['product_account']; ?></td>-->
									<td class="hidden-480"><?php echo $product['product_start_time']; ?></td>
									<td class="hidden-480">
										<?php if($product['product_state'] == '20'): ?>
												<button class="status btn btn-minier btn-success" type="button" onClick="under('<?php echo $product['product_id']; ?>',20)">
													<i class="ace-icon fa fa-level-up"></i>
													已上架
												</button>
										<?php endif; if($product['product_state'] == '30'): ?>
												<button class="status btn btn-minier btn-danger" type="button"  onClick="under('<?php echo $product['product_id']; ?>',10)">
													<i class="ace-icon fa fa-level-down"></i>
													已下架
												</button>
										<?php endif; ?>

									</td>
									<td>
										<a href="edit-product.html?param=<?php echo $product['product_id']; ?>" class="btn btn-xs btn-info" data-id="<?php echo $product['product_id']; ?>">
											<i class="ace-icon fa fa-pencil bigger-120"></i>
										</a>
										<button class="btn btn-xs btn-danger bootbox-del"  data-type="del" data-id="<?php echo $product['product_id']; ?>">
											<i class="ace-icon fa fa-trash-o bigger-120"></i>
										</button>
										<button class="btn btn-xs btn-warning bootbox-wx" data-type="wx_code" data-id="<?php echo $product['product_id']; ?>">
											<i class="ace-icon fa fa-qrcode bigger-120"></i>
										</button>
									</td>
								</tr>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>
					</form>
				</div>
				<!-- /.row -->
			</div>
			<?php echo $page_info; ?>
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
<script src="__STATIC__/assets/js/jquery.easypiechart.min.js"></script>
<script src="__STATIC__/assets/js/jquery.sparkline.index.min.js"></script>
<script src="__STATIC__/assets/js/jquery.flot.min.js"></script>
<script src="__STATIC__/assets/js/jquery.flot.pie.min.js"></script>
<script src="__STATIC__/assets/js/jquery.flot.resize.min.js"></script>
<!---->

<script src="__STATIC__/assets/js/bootstrap-datepicker.min.js"></script>
<script src="__STATIC__/assets/js/moment.min.js"></script>
<script src="__STATIC__/assets/js/daterangepicker.min.js"></script>

<!-- page specific plugin scripts -->
<script src="__STATIC__/assets/js/wizard.min.js"></script>
<script src="__STATIC__/assets/js/jquery-additional-methods.min.js"></script>
<script src="__STATIC__/assets/js/bootbox.js"></script>
<script src="__STATIC__/assets/js/jquery.maskedinput.min.js"></script>
<script src="__STATIC__/assets/js/select2.min.js"></script>
<!-- ace scripts -->
<script src="__STATIC__/assets/js/ace-elements.min.js"></script>
<script src="__STATIC__/assets/js/ace.min.js"></script>
<script src="__STATIC__/assets/js/main.js"></script>
<!-- inline scripts related to this page -->
<script type="text/javascript">

	jQuery(function($) {
		//删除按钮
		var alert_msg = "";
		$(".bootbox-del,#delAll,.btn_type,.bootbox-wx").on(ace.click_event, function() {
			var btn_type = $(this).attr("data-type");
			//选中按钮或者单个删除
			var attrData = $(this).attr('data-id');
			var check_list = [];
			if(attrData){
				//单个删除
				check_list.push(attrData);
			}else{
				//全部删除
				$("#dynamic-table input:checkbox").each(function(){
					var attr = $(this).prop("checked");
					var productId = $(this).val();
					if(attr===true && productId>0){
						//选中
						check_list.push(productId);
					}
				});
			}
			if(check_list.length <=0){
				alert("请选中要删除的商品");
				return false;
			}
			if(btn_type=="del"){
				alert_msg = "是否删除此产品到产品回收站？";
			}
			if(btn_type=="stop"){
				alert_msg = "是否要下架选中产品？";
			}
			if(btn_type=="start"){
				alert_msg = "是否要上架选中产品？";
			}
			if(btn_type=="wx_code"){
				alert_msg = "是否要更新选种产品二维码？";
			}
			bootbox.confirm({
				message: alert_msg,
				size: 'small',
				buttons: {
					confirm:{label:"确认操作"},
					cancel:{label:"取消操作"}
				},
				callback: function(result) {
					if(result) {
						//确定后执行
                        delProduct(check_list,btn_type);
					}
				}
			});
		});
		//排序按钮
		$("#sort").on(ace.click_event, function() {
			bootbox.alert({
				message: "已更新排序",
				size: 'small',
				callback: function(result) {
					if(result) {
						//确定后执行
					}
				}
			});
		});
		$('input[name=date-range-picker]').daterangepicker({
			'applyClass': 'btn-sm btn-success',
			'cancelClass': 'btn-sm btn-default',
			locale: {
				applyLabel: '确定',
				cancelLabel: '取消',
			}
		})
				.prev().on(ace.click_event, function() {
			$(this).next().focus();
		});
	});

	//商品删除
	function delProduct(data,type){
		if(!data){
			alert("参数错误");
			return false;
		}
		$.ajax({
			url:"del_product.html",
			type:"post",
			dataType:"json",
			data:{delId:data,type:type},
			success:function(result){
				alert(result.msg);
				if(result.code==200){
					window.location.href="p_center.html";
				}
			}
		});
	}
</script>
</body>
</html>
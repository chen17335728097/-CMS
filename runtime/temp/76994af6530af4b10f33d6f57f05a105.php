<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:57:"E:\wamp64\www\fafa/app/back\view\product\add-product.html";i:1534072533;s:52:"E:\wamp64\www\fafa/app/back\view\public\nav_top.html";i:1534010817;s:49:"E:\wamp64\www\fafa/app/back\view\public\menu.html";i:1535637653;s:51:"E:\wamp64\www\fafa/app/back\view\public\footer.html";i:1534072145;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>添加产品</title>
		<meta name="Keywords" content="关键词" />
		<meta name="description" content="overview &amp; stats" />
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
		<style>
			.ace-file-name large img{
				width:50%;
				height:50%;
			}
		</style>
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
								<a href="#">商品管理</a>
							</li>
							<li class="active">添加产品</li>
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
						<div class="alert alert-info">
							<i class="ace-icon fa fa-hand-o-right"></i> 请您填写商品信息
							<button class="close" data-dismiss="alert">
								<i class="ace-icon fa fa-times"></i>
							</button>
						</div>

						<div class="row">
							<div class="col-xs-12">
								<form class="form-horizontal ajaxForm2" action="addProduct.html" method="post" enctype="multipart/form-data" name="form-product" id="form-product">
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 商品分类： </label>
										<div class="col-sm-10">
											<select name="pc_id" class="col-sm-6 selector">
												<option value="">请选择商品分类</option>
												<?php if(is_array($class) || $class instanceof \think\Collection || $class instanceof \think\Paginator): if( count($class)==0 ) : echo "" ;else: foreach($class as $key=>$p_class): ?>
													<option value="<?php echo $p_class['pc_id']; ?>">├├<?php echo $p_class['pc_name']; ?></option>
													<?php if(isset($p_class['two'])): if(is_array($p_class['two']) || $p_class['two'] instanceof \think\Collection || $p_class['two'] instanceof \think\Paginator): if( count($p_class['two'])==0 ) : echo "" ;else: foreach($p_class['two'] as $key=>$pc2): ?>
															<option value="<?php echo $pc2['pc_id']; ?>">├├├├<?php echo $pc2['pc_name']; ?></option>
																<?php if(isset($p_class['three'])): if(is_array($pc2['three']) || $pc2['three'] instanceof \think\Collection || $pc2['three'] instanceof \think\Paginator): if( count($pc2['three'])==0 ) : echo "" ;else: foreach($pc2['three'] as $key=>$pc3): ?>
																		<option value="<?php echo $pc3['pc_id']; ?>">├├├├├├<?php echo $pc3['pc_name']; ?></option>
																	<?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
											</select>
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 商品名称：  </label>
										<div class="col-sm-10 no-padding">
											<div class="col-xs-10 col-sm-6">
												<input type="text" name="pro_title" id="pro_title" placeholder="请输入商品名称,不能超过30个字" class="form-control" required="">
											</div>
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle" id="resone"></span>
											</span>
										</div>
									</div>
									<div class="space-4"></div>
								<!--	<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 商品促销语：  </label>
										<div class="col-sm-10 no-padding">
											<div class="col-xs-10 col-sm-6">
												<input type="text" name="pro_sale_promotion" id="pro_sale_promotion" placeholder="请输入促销语,不能超过60个字" class="form-control">
											</div>
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle" id="resone"></span>
											</span>
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 关键词：  </label>
										<div class="col-sm-10 no-padding">
											<div class="col-xs-10 col-sm-6">
												<input type="text" name="pro_keywords" id="pro_keywords" placeholder="商品关键词,用于SEO搜索" class="form-control">
											</div>
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle" id="resone"></span>
											</span>
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1">
											商品供货商：
										</label>
										<div class="col-sm-10 no-padding">
											<div class="col-xs-10 col-sm-6">
												<select name="pro_supplier" class="col-sm-6 selector">
													<option value="">请选择商品供货商</option>
													<?php if(is_array($supplier_list) || $supplier_list instanceof \think\Collection || $supplier_list instanceof \think\Paginator): if( count($supplier_list)==0 ) : echo "" ;else: foreach($supplier_list as $key=>$supplier): ?>
														<option value="<?php echo $supplier['supplier_id']; ?>" class="bgc">├├<?php echo $supplier['supplier_name']; ?></option>
													<?php endforeach; endif; else: echo "" ;endif; ?>
												</select>
											</div>
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1">
											商品品牌：
										</label>
										<div class="col-sm-10 no-padding">
											<div class="col-xs-10 col-sm-6">
												<select name="pro_brand" class="col-sm-6 selector">
													<option value="">请选择商品品牌</option>
													<?php if(isset($brand)): if(is_array($brand) || $brand instanceof \think\Collection || $brand instanceof \think\Paginator): if( count($brand)==0 ) : echo "" ;else: foreach($brand as $key=>$b): ?>
																<option value="<?php echo $b['brand_id']; ?>" class="bgc">├├├├<?php echo $b['brand_name']; ?></option>
															<?php endforeach; endif; else: echo "" ;endif; endif; ?>
												</select>
											</div>
										</div>
									</div>
									<div class="space-4"></div>-->
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1">
											商品标签：
										</label>
										<div class="col-sm-10 no-padding">
											<div class="col-xs-10 col-sm-6">
												<select name="product_recommend" class="col-sm-6 selector">
													<option value="">请选择商品标签</option>
													<option value="10">普通商品</option>
													<option value="20">置顶商品</option>
													<option value="30">人气商品</option>
													<option value="40">推荐商品</option>
													<option value="50">积分商品</option>
												</select>
											</div>
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 积分价格：  </label>
										<div class="col-sm-10 no-padding">
											<div class="col-xs-10 col-sm-6">
												<input type="text" name="pro_point" id="pro_point" placeholder="" class="form-control">
											</div>
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle" id="point"></span>
											</span>
										</div>
									</div>
									<div class="space-4"></div>
									<hr />
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1">
											价格：
										</label>

										<div class="col-sm-10 no-padding">
											<div class="col-xs-4 col-sm-2">
												<input type="number" name="market_price" value="" class="input-small" required>元
											</div>
											<!--<div class="col-xs-4 col-sm-2">
												销售价：
												<input type="number" name="sale_price" value=" 50" class="input-small" required>元
											</div>
											<div class="col-xs-4 col-sm-2">
												成本价：
												<input type="number" name="base_price" value=" 50" class="input-small" required>元
											</div>
											<div class="col-xs-4 col-sm-2">
												会员价：
												<input type="number" name="member_price" value=" 50" class="input-small" required>元
											</div>-->
										</div>
									</div>
									<div class="space-4"></div>
									<!--<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1">
											基础数据：
										</label>
										<div class="col-sm-10 no-padding">
											<div class="col-xs-4 col-sm-2">
												基础销量：
												<input type="number" name="base_sale_count" value=" 50" placeholder="默认15246" class="input-small">
											</div>
											<div class="col-xs-4 col-sm-2">
												基础点计量：
												<input type="number" name="base_hits_count" placeholder="默认852" value=" 50" class="input-small">
											</div>
											<div class="col-xs-4 col-sm-2">
												基础分享数：
												<input type="number" name="base_shave_count" placeholder="默认368" value=" 50" class="input-small">
											</div>
											<div class="col-xs-4 col-sm-2">
												总库存：
												<input type="number" name="total_count" placeholder="默认999999999" value=" 50" class="input-small">
											</div>
											<div class="col-xs-4 col-sm-2">
												库存预警：
												<input type="number" name="call_count" placeholder="默认150" value=" 50" class="input-small">
											</div>
										</div>
									</div>
									<div class="space-4"></div>-->
									<hr />
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1">
											商品关联规格：
										</label>
										<div class="col-sm-10 no-padding" style="width:65%;float: left;" id="edit_box">
											<div class="col-sm-4" style="width: 100%;margin: 30px;">
												<?php if(is_array($format_list) || $format_list instanceof \think\Collection || $format_list instanceof \think\Paginator): if( count($format_list)==0 ) : echo "" ;else: foreach($format_list as $key=>$format): ?>
													<input type="checkbox" name="format_id[]" value="<?php echo $format['format_id']; ?>" style="width: 20px;height: 20px;margin-top:10px;"/>
													<label>&nbsp;<?php echo $format['format_name']; ?>&nbsp;&nbsp;&nbsp;</label>
												<?php endforeach; endif; else: echo "" ;endif; ?>
												<input type="button" value="确定" id="confirm_type">
											</div>
										</div>
									</div>
									<hr style="height:0.5px;"/>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 商品封面图片上传： </label>
										<div class="col-sm-10 no-padding">
											<div class="col-sm-4">
												<input type="file" name="file_logo" id="id-input-file-4" required=""/>
											</div>
											<span class="lbl">&nbsp;&nbsp;上传前先用PS处理成等比例图片后上传，最后都统一比例<br></span>
										</div>
									</div>
									<div class="space-4"></div>
									<hr />
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 商品多图片上传： </label>
										<div class="col-sm-10 no-padding">
											<div class="col-sm-4">
												<input type="file" name="file_more[]" id="id-input-file-5" multiple/>
											</div>
											<span class="lbl">&nbsp;&nbsp;上传前先用PS处理成等比例图片后上传，最后都统一比例<br></span>
										</div>
									</div>
									<div class="space-4"></div>
									<hr style="height:0.5px;"/>
									<div class="form-group">
							<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 是否审核： </label>
							<div class="col-sm-10" style="padding-top:5px;">
								<input name="open" id="open" value="1" class="ace ace-switch ace-switch-6" type="checkbox">
								<span class="lbl">&nbsp;&nbsp;默认关闭</span>
							</div>
						</div>
									<div class="space-4"></div>
									<div class="form-group">
							<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 商品简介： </label>
							<div class="col-sm-9">
								<input type="text" name="sContent" class="col-xs-10 col-sm-10" maxlength="100" placeholder="已限制在100个字以内">
							</div>
						</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 商品主内容 </label>
										<div class="col-sm-8">
											<script src="__STATIC__/assets/js/ueditor.config.js" type="text/javascript"></script>
											<script src="__STATIC__/assets/js/ueditor.all.js" type="text/javascript"></script>
											<textarea name="pro_content" style="width:100%;" id="myEditor"></textarea>
											<script type="text/javascript">
												var editor = new UE.ui.Editor({
													initialFrameHeight: 300
												});
												editor.render("myEditor");
											</script>
										</div>
									</div>
									<div class="space-4"></div>
									<div class="clearfix form-actions">
							<div class="col-md-offset-3 col-md-9">
								<button class="btn btn-success" type="submit">
								<i class="ace-icon fa fa-save bigger-110"></i>
								提交保存
							</button> &nbsp; &nbsp; &nbsp;&nbsp;
								<button class="btn" type="reset">
								<i class="ace-icon fa fa-undo bigger-110"></i>
								重置
							</button>
							</div>
						</div>
						</form>
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
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
		<!-- page specific plugin scripts -->
		<script src="__STATIC__/assets/js/wizard.min.js"></script>
		<script src="__STATIC__/assets/js/jquery.validate.min.js"></script>
		<script src="__STATIC__/assets/js/jquery-additional-methods.min.js"></script>
		<script src="__STATIC__/assets/js/bootbox.js"></script>
		<script src="__STATIC__/assets/js/jquery.inputlimiter.min.js"></script>
		<script src="__STATIC__/assets/js/jquery.maskedinput.min.js"></script>
		<script src="__STATIC__/assets/js/select2.min.js"></script>
		<script src="__STATIC__/assets/js/bootstrap-tag.min.js"></script>
		<!-- ace scripts -->
		<script src="__STATIC__/assets/js/ace-elements.min.js"></script>
		<script src="__STATIC__/assets/js/ace.min.js"></script>
		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				var tag_input = $('#form-field-tags');
				try{
					tag_input.tag(
					  {
						placeholder:tag_input.attr('placeholder'),
						//enable typeahead by specifying the source array
						source: ace.vars['US_STATES'],//defined in ace.js >> ace.enable_search_ahead
						/**
						//or fetch data from database, fetch those that match "query"
						source: function(query, process) {
						  $.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
						  .done(function(result_items){
							process(result_items);
						  });
						}
						*/
					  }
					)
					//programmatically add/remove a tag
					var $tag_obj = $('#form-field-tags').data('tag');
					$tag_obj.add('土豪金');
					var index = $tag_obj.inValues('some tag');
					$tag_obj.remove(index);
				}
				catch(e) {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//autosize($('#form-field-tags'));
				}

				$('#id-input-file-2,#id-input-file-3').ace_file_input({
					no_file: '未选择 ...',
					btn_choose: '选择',
					btn_change: '更改',
					droppable: false,
					onchange: null,
					thumbnail: false
				});
				//开启上传文件类型白名单，过滤非图片格式
				var whitelist_ext = ["jpeg", "jpg", "png", "gif", "bmp"];
				var whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
				var file_input = $('#id-input-file-2');
				file_input
					.ace_file_input('update_settings', {
						'allowExt': whitelist_ext,
						'allowMime': whitelist_mime
					});

				var btn_choose = "Drop images here or click to choose";
				var no_icon = "ace-icon fa fa-picture-o";

				//多图设置
				$("#pic_list").hide();
				$("#news_pic_list").click(function() {
					$("#pic_list").hide();
				});
				$("#news_pic_qqlist").click(function() {
					$("#pic_list").show();
				});

				$('#id-input-file-4').ace_file_input({
					style: 'well',
					btn_choose: 'Drop files here or click to choose',
					btn_change: null,
					no_icon: 'ace-icon fa fa-cloud-upload',
					droppable: true,
					thumbnail: 'fit' //large | fit
						,
					preview_error: function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
				}).on('change', function() {
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});

				var file_input2 = $('#id-input-file-4');
				file_input2.ace_file_input('update_settings', {
						'btn_choose': btn_choose,
						'no_icon': no_icon,
						'allowExt': whitelist_ext,
						'allowMime': whitelist_mime
				})
				$('#id-input-file-5').ace_file_input({
					style: 'well',
					btn_choose: 'Drop files here or click to choose',
					btn_change: null,
					no_icon: 'ace-icon fa fa-cloud-upload',
					droppable: true,
					thumbnail: 'fit' //large | fit
					,
					preview_error: function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
				}).on('change', function() {
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				var file_input3 = $('#id-input-file-5');
				file_input2.ace_file_input('update_settings', {
					'btn_choose': btn_choose,
					'no_icon': no_icon,
					'allowExt': whitelist_ext,
					'allowMime': whitelist_mime
				})
			})
		</script>
	<script type="text/javascript">
		$(function () {
			var ob = [];
			$("#confirm_type").on('click',function(){
				ob.length = 0;
				
				$(".col-sm-4 input:checkbox").each(function () {
					var art = $(this).prop("checked");
					var format_id = $(this).val();
					if(art===true){
						ob.push(format_id);
					}
				});
				console.log(ob.length);
				if(ob.length>0){
					$.ajax({
						url:'common.html',
						type:'post',
						data:{id:ob},
						dataType:'json',
						success:function (res) {
						    console.log(res);
							if(res){
								for(var dex in res){

									var input = "<div class='col-sm-4' id='attr_box"+dex+"' style='width:100%;float: left;margin: 30px;'>"+
											"<input type='input' readonly name='format_list_name[]' style='min-width:150px;'  value='" + res[dex] + "' class='input-small' >&nbsp;"+
											"价格：<input type='number' name='format_market_price[]' style='max-width:150px' value='' class='input-small' >"+
											/*"销售价：<input type='number' name='format_sale_price[]' style='max-width:150px'  value='' class='input-small' >"+
											"成本价：<input type='number' name='format_base_price[]' style='max-width:150px'  value='' class='input-small' >"+
											"会员价：<input type='number' name='format_member_price[]'  style='max-width:150px' value='' class='input-small' >"+
											"积分价：<input type='number' name='attr_point[]'  style='max-width:150px' value='' class='input-small' >" +*/
											"</div>";
									$("#edit_box").append(input);
								}
							}
						}
					});
				}
			});

		});
	</script>
	</body>
</html>
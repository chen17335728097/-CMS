<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:49:"E:\wamp64\www\fafa/app/back\view\login\login.html";i:1534010683;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>登录页</title>
		<meta name="Keywords" content="" />
		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="__STATIC__/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="__STATIC__/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="__STATIC__/assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="__STATIC__/assets/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="__STATIC__/assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="__STATIC__/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="__STATIC__/assets/css/myStyle.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="__STATIC__/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="__STATIC__/assets/js/html5shiv.min.js"></script>
		<script src="__STATIC__/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="login-layout blur-login">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="red"><?php echo $name; ?></span>

								</h1>

							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												请填写您的登录信息
											</h4>

											<div class="space-6"></div>

											<form method="post" action="check_login.html" name="login_form" id="login_form">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="用户名" name="name" required/>
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>
													<div class="space"></div>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="密码"  name="password" required/>
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>
													<div class="space"></div>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="验证码"  name="captcha" required/>
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>
													<div class="space"></div>
													<div class="">
														<img src="<?php echo captcha_src(); ?>" width="100%" height="75px" id="captcha" onclick="Javascript:document.getElementById('captcha').src='<?php echo captcha_src(); ?>'"/>
													</div>
													<div class="space"></div>
													<div class="clearfix">
														<label class="inline">
															<span class="lbl"></span>
														</label>
														<button type="button" id="loginbt" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">登录</span>
														</button>
													</div>
													<div class="space-4"></div>
												</fieldset>
											</form>
											</div>
										<!-- /.widget-main -->

									<!--	<div class="toolbar clearfix">
											<div>
												<a href="#" data-target="#forgot-box" class="forgot-password-link">
													<i class="ace-icon fa fa-arrow-left"></i> 密码找回
												</a>
											</div>
										</div>-->
									</div>
									<!-- /.widget-body -->
								</div>
								<!-- /.login-box -->

								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="ace-icon fa fa-key"></i>
												找回密码
											</h4>

											<div class="space-6"></div>
											<p>
												输入您的电子邮件并验证
											</p>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="邮箱" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
															<i class="ace-icon fa fa-lightbulb-o"></i>
															<span class="bigger-110">发送!</span>
														</button>
													</div>
												</fieldset>
											</form>
										</div>
										<!-- /.widget-main -->

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												返回登录
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div>
									<!-- /.widget-body -->
								</div>
							</div>
							<!-- /.position-relative -->s
							</div>
						</div>
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.main-content -->
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
		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$(document).on('click', '.toolbar a[data-target]', function(e) {
					e.preventDefault();
					var target = $(this).data('target');
					$('.widget-box.visible').removeClass('visible'); //hide others
					$(target).addClass('visible'); //show target
				});
			});
			//you don't need this, just used for changing background
			jQuery(function($) {
				$('#btn-login-dark').on('click', function(e) {
					$('body').attr('class', 'login-layout');
					$('#id-text2').attr('class', 'white');
					$('#id-company-text').attr('class', 'blue');
					e.preventDefault();
				});
				$('#btn-login-light').on('click', function(e) {
					$('body').attr('class', 'login-layout light-login');
					$('#id-text2').attr('class', 'grey');
					$('#id-company-text').attr('class', 'blue');
					e.preventDefault();
				});
				$('#btn-login-blur').on('click', function(e) {
					$('body').attr('class', 'login-layout blur-login');
					$('#id-text2').attr('class', 'white');
					$('#id-company-text').attr('class', 'light-blue');
					e.preventDefault();
				});

			});
			
		</script>
		<script src="__STATIC__/js/jquery.validate.js"></script>
		<script type="text/javascript">
			$(function(){

					$("#loginbt").click(function(){
						var name		= $("input[name='name']").val();
						var password	= $("input[name='password']").val();
						var captcha 	= $("input[name='captcha']").val();
						if(!name){
							alert("请输入登录账号");
							return false;
						}
						if(!password){
							alert("请输入登录密码");
							return false;
						}
						if(!captcha){
							alert("请输入验证码");
							return false;
						}
						$.ajax({
							url: "check_login.html",
							type: "post",
							data: {
								name: name,
								password: password,
								captcha: captcha,
							},
							dataType: "json",
							success: function (re) {
										if (re.code == 200) {
											window.alert(re.msg);
											window.location.href = "<?php echo url('back/index/index'); ?>";
										} else {
											window.alert(re.msg);
											window.location.href = "login.html";
											return false;
										}
							}
						});
					});
			});
		</script>
	</body>

</html>
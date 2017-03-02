<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>登录--路雅时尚网</title>
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../css/public.css">
	<link rel="stylesheet" href="../../css/login.css">
	<!--[if lt IE 9]>
		<script src="../../js/lib/html5shiv.js"></script>
		<script src="../../js/lib/respond.min.js"></script>
	<![endif]-->
</head>
<body class="fashion">
	<!--顶部-->
	<?php include "../common/login_top.php"; ?>
	<!--LOGO-->
	<?php include "../common/top_logo.php"; ?>
	<!--导航 -->
	<?php include "../common/nav.php"; ?>

	<!--开始-->
	<div class="block1">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-sm-offset-2">
					<div class="login-page">
						<div class="get-title">会员登录</div>
						<form action="/graduation_design/php/config/login_cfm.php" method="post">
							<div class="ipt-name">用户名：<input type="text" name="username" value=""></div>
							<div class="ipt-pwd">密码：<input class="lo-pwd" type="password" value="" name="pwd"></div>
							<div class="ipt-log">
								<input class="lo-btn" type="submit" name="submit" value="登录">
								<input class="lo-btn" type="button" value="忘记密码">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!--底部-->
	<?php include "../common/footer.php"; ?>
	<script src="../../js/login.js"></script>


</body>
</html>
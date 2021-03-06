<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>个人中心--路雅时尚网</title>
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../css/public.css">
	<link rel="stylesheet" href="../../css/user_index.css">
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
					<div class="hidden-lg hidden-sm hidden-md user-change-wrap">
						<div class="col-xs-12">
							<div class="user-change-wrap">
								<a class="active" href="user_index.php">个人中心</a>
								<a href="user_fav.php">收藏列表</a>
							</div>
						</div>
					</div>
					<div class="login-page">
						<div class="get-title">个人中心</div>
						<?php
							$sql="select * from vog_user where username = '".$_SESSION['name']."' ";
							$query = mysqli_query($con,$sql);
							$result = mysqli_fetch_assoc($query);
							$_SESSION['id'] = $result['id'];
						?>
						<form action="user_update.php" method="post">
							<div>用户名：<input class="reg-1" type="text" name="username" value="<?php echo $result['username'];?>"></div>
							<div>密码：<input class="reg-2" type="password" value="<?php echo $result['password'];?>" name="pwd"></div>
							<div>确认密码：<input class="reg-3" type="password" value="<?php echo $result['password'];?>" ></div>
							<div>昵称：<input class="reg-4" type="text" value="<?php echo $result['name'];?>" name="nickname"></div>
							<div>邮箱：<input class="reg-5" type="email" value="<?php echo $result['email'];?>" name="email"></div>
							<div>
								<input class="reg-6 lo-btn" type="submit" name="submit" value="修改">
								<a class="cancel" href="../../index.php"><input class="reg-7 lo-btn" type="button"  value="取消"></a>
							</div>
						</form><br><br><br><br><br>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!--底部-->
	<?php include "../common/footer.php"; ?>
	<script src="../../js/user_index.js"></script>


</body>
</html>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>时装详情--路雅时尚网</title>
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../css/public.css">
	<link rel="stylesheet" href="../../css/fashion_1.css">
	<!--[if lt IE 9]>
		<script src="../../js/lib/html5shiv.js"></script>
		<script src="../../js/lib/respond.min.js"></script>
	<![endif]-->
</head>
<body class="fashion">
	<!--顶部-->
	<!-- <?php include "../common/login_top.php"; ?> -->
	<div class="login-wrap">
		<div class="hidden-xs">
			<div class="container text-right ">
				<input type="text" placeholder="search" class="top-search">
				<span class="btn-my glyphicon glyphicon-search"></span>
				<a href="/graduation_design/php/config/login.php"><span class="btn btn-sm btn-my-white btn-login">登录</span></a>
				<a href="/graduation_design/php/config/reg_index.php"><span class="btn btn-sm btn-my-white btn-reg">注册</span></a>
			</div>
		</div>
		<div class="hidden-lg hidden-md hidden-sm">
			<div class="container text-left ">
				<a href="/graduation_design/php/config/login.php"><span class="btn btn-sm btn-default btn-login">登录</span></a>
				<a href="/graduation_design/php/config/reg_index.php"><span class="btn btn-sm btn-default btn-reg">注册</span></a>
				<span class="search-mobile">
					<input type="text" placeholder="search" class="top-search-sm">
					<span class="btn-my glyphicon glyphicon-search"></span>
				</span>
			</div>
		</div>
	</div>
	<!--LOGO-->
	<!-- <?php include "../common/top_logo.php"; ?> -->
	<div class="hidden-lg hidden-md hidden-sm">
		<div class="container margin-5">
			<div class="row">
				<div class="col-xs-12" >
					<img class="logo-small" src="../../images/lua1.png" alt="">
				</div>
			</div>
		</div>
	</div>
	<div class="hidden-xs">
		<div class="container margin-15">	
			<div class="row">
				<div class="col-xs-12" >
					<img class="logo-big" src="../../images/lua2.png" alt="">
				</div>
			</div>
		</div>
	</div>
	<!--导航 -->
	<!-- <?php include "../common/nav.php"; ?> -->
	<div class="hidden-xs">
		<div class="container" id="nav-fixed">
			<div class="col-xs-12 padding-noh">
				<div class="navbar navbar-my">
					<div class="collapse navbar-collapse navbar-responsive-cpllapse collapse-my">
						<ul class="nav navbar-nav">
							<li>
								<a href="../../index.php" type="1">首页</a>
							</li>
							<li>
								<a href="../fashion/fashion_index.php" type="2">时装</a>
								<div class="sec-menu fashion">
									<a href="../fashion/fashion_tideway.php">潮流</a>
									<a href="../fashion/fashion_collocation.php">搭配</a>
									<a href="../fashion/fashion_newon.php">新品</a>
								</div>
							</li>
							<li>
								<a href="../beauty/beauty_index.php" type="3">美容</a>
								<div class="sec-menu beauty">
									<a href="../beauty/beauty_skincare.php">护肤</a>
									<a href="../beauty/beauty_makeup.php">彩妆</a>
									<a href="../beauty/beauty_hairdress.php">秀发</a>
								</div>
							</li>
							<li>
								<a href="../men/men_index.php" type="4">男士</a>
								<div class="sec-menu men">
									<a href="../men/men_clothes.php">衣装</a>
									<a href="../men/men_wristwatch.php">腕表</a>
									<a href="../men/men_menlook.php">理容</a>
								</div>
							</li>
							<li>
								<a href="../star/star_index.php" type="5">星姿态</a>
								<div class="sec-menu star">
									<a href="../star/star_style.php">明星风尚</a>
									<a href="../star/star_news.php">娱乐新闻</a>
								</div>
							</li>
							<li>
								<a href="../life/life_index.php" type="6">生活</a>
								<div class="sec-menu life">
									<a href="../life/life_journey.php">旅行</a>
									<a href="../life/life_emotion.php">情感</a>
									<a href="../life/life_food.php">美食</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="hidden-lg hidden-md hidden-sm">
		<div class="container remove-padding-x">
			<div class="col-xs-12 remove-padding-x">
				<div class="navbar navbar-my margin-0">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle navbar-toggle-mobile" data-toggle="collapse" data-target=".navbar-responsive-cpllapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button> 
					</div>
					<div class="collapse navbar-collapse navbar-responsive-cpllapse collapse-my-mobile">
						<ul class="nav navbar-nav margin-0">
							<li><a href="../../index.php"><i class="fa fa-home"></i>首页</a></li>
							<li><a href="../fashion/fashion_index.php"><i class="fa fa-user"></i>时装</a></li>
							<li><a href="../beauty/beauty_index.php"><i class="fa fa-paint-brush"></i>美容</a></li>
							<li><a href="../men/men_index.php"><i class="fa fa-male"></i>男士</a></li>
							<li><a href="../star/star_index.php"><i class="fa fa-star"></i>星姿态</a></li>
							<li><a href="../life/life_index.php"><i class="fa fa-pagelines"></i>生活</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--开始-->
	<div class="block1">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 padding-noh">
					<div class="title-anchor">
						<span>当前位置：<a href="../../index.php">首页</a> > <a href="fashion_index.php">时装</a> > 正文</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="block2">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="big-title">
						换季不是买买买 学会“添弃留”才能拥有完美衣橱
					</div>
					<div class="big-title-sub">
						<span class="time">2016-03-10</span><span class="from">路雅时尚网</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="block3">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 gallery-wrap-all remove-padding-x">
					<div class="image-gallery-wrap">
						
						<div class="image-gallery-left-btn"><i class="fa fa-angle-left"></i></div>
						<div class="image-gallery-right-btn"><i class="fa fa-angle-right"></i></div>
						<div class="text-top">
							换季之时也是女人购物欲蠢蠢欲动之时。不过，懒女人只会“买买买”，而聪明女人还懂得“扔扔扔”与“留留留”。想花最少的钱，
							却穿最时髦的衣服，你需要知道“添弃留”法则：添置下一季的流行单品，抛弃烂大街的爆款，留下那些一买能穿一辈子的经典款。
						</div>
						<ul class="image-list">
							<li><img src="../../images/x82.jpg" ></li>
							<li><img src="../../images/x83.jpg" ></li>
							<li><img src="../../images/x84.jpg" ></li>
			
							
						</ul>
						<div class="image-list-thumbs">
							<div class="image-item-wrap">
								<div class="image-item selected" type-text="双色外套外观看似平淡无奇，但领口、内衬或腰带上的“惊喜”色彩可谓别有一番洞天。">
									<img class="micro" src="../../images/x82.jpg" >
								</div>
							</div>
							<div class="image-item-wrap">
								<div class="image-item " type-text="二月底到四月初，你就不要再“换季乱穿衣”了，一件带着小惊喜的基本款外套，不用力过猛也不平淡乏味，足以让你优雅过度。">
									<img class="micro" src="../../images/x83.jpg" >
								</div>
							</div>
							<div class="image-item-wrap">
								<div class="image-item " type-text="说实话，机车夹克本身并不丑也不是过季必扔。只是，它似乎入门门槛过高，或者说能驾驭机车夹克的“酷女人”太少。集高冷、自带酷感和不羁个性的超模们倒是无惧机车夹克的高门槛，但咱们“凡人”难啊。">
									<img class="micro" src="../../images/x84.jpg" >
								</div>
							</div>
				
							
				
						</div>
						<div class="image-text">
							双色外套外观看似平淡无奇，但领口、内衬或腰带上的“惊喜”色彩可谓别有一番洞天。
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="block4">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="comment-wrap">
						<div class="col-xs-12 text-left remove-padding-x">
							<span class="cmt-title">评论</span>
						</div>
						<div class="col-xs-2 remove-padding-x">
							<img class="avatar" src="../../images/ava.png">
						</div>
						<div class="col-xs-10 text-left">
							<textarea name="cmt" id="cmt" ></textarea>
						</div>
						<div class="col-xs-12 text-right" >
							<span class="send">提交评论</span>
						</div>
						<div class="col-xs-12 col-sm-10 col-sm-offset-2" id="cmt-wrap">
							<div class="cmt-item">
								<img class="avatar sub" src="../../images/ava.png">
								<span class="cmt-text">你好吗你好吗你好吗你好吗你好
								吗你好吗你好吗你好吗你好吗你好吗你好吗你好吗你好吗</span>
								<div class="cmt-time">2016-5-10</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="block5">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-left">
					<span class="share">分享</span>
					<i class="fa fa-qq"></i><i class="fa fa-weixin"></i><i class="fa fa-weibo"></i>
				</div>
			</div>
		</div>
	</div>

	<!--底部-->
	<!-- <?php include "../common/footer.php"; ?> -->
	<div class="footer">
		<div class="col-xs-12">
			<div class="hidden-xs">
				<img class="big" src="../../images/lua3.png">
			</div>
			<div class="hidden-lg hidden-sm hidden-md">
				<img class="sm" src="../../images/lua3.png">
			</div>
			<div class="foot-list">
				<a href="../config/contact.php" class="foot-item">关于我们</a>
				<a href="../config/map.php" class="foot-item">网站地图</a>
				<a href="../config/contact.php" class="foot-item">联系我们</a>
				<a href="../config/contact.php" class="foot-item">版权声明</a>
				<div class="brand">版权所有 DM</div>
			</div>
		</div>
		<div class="back-top"><i class="fa fa-arrow-up"></i></div>
	</div>

	<script src='../../js/lib/jquery-1.12.1.min.js'></script>
	<script src='../../bootstrap/js/bootstrap.min.js'></script>
	<script src="../../js/public.js"></script>
	<script src="../../js/fashion_1.js"></script>


</body>
</html>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>时装--路雅时尚网</title>
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../css/public.css">
	<link rel="stylesheet" href="../../css/fashion_index.css">
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

	<!--开始banner-->
	<div class="block1">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 top-banner">
					<div class="hidden-lg hidden-md hidden-sm">
						<div class="sub-title">
							<a class="item" href="fashion_tideway.php">潮流</a>
							<span class="diff"></span>
							<a class="item" href="fashion_collocation.php">搭配</a>
							<span class="diff"></span>
							<a class="item" href="fashion_newon.php">新品</a>
						</div>
					</div>
					<a href="fashion_2.php" class="banner-all">
						<div class="banner-mask"></div>
						<img src="../../images/b_6.jpg">
						<div class="banner-title">
							<div class="banner-text">
								<span class="big">趁没烂大街前赶快get!</span><br><span>16早春欧美最流行这五种搭配</span>
							</div>
						</div>
					</a>
					<div class="top-main">
						<div class="main-nav">
							<span type="1" class="active">潮流动态</span>
							<span type="2">时尚捕手</span>
						</div>
						<a href="#" type="1" class="main-change active">
							<img src="../../images/b7.jpg">
							<div class="text">开启无性别时代今年就是流行耍帅中性风</div>
						</a>
						<a href="#" type="2" class="main-change">
							<img src="../../images/b8.jpg">
							<div class="text">喇叭裤才是撩人新武器 只要穿得好就能有腿又有A4腰</div>
						</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 pd">
					<div class="right-all">
						<a class="right-all-img" href="#"><img src="../../images/r6.jpg"></a>
						<div class="title-all">
							<a href="#" class="title-item">贝嫂的超完美私服比你想象中接地气</a>
							<a href="#" class="title-item">色彩玩趣！Ports 1961 16早春女装</a>
							<a href="#" class="title-item">Fendi 2016春夏Flowerland系列</a>
							<a href="#" class="title-item">真正显腿长又显瘦就是TA</a>
							<div class="hidden-sm">
								<a href="#" class="title-item">今春欧美最hit单品竟然是校服裤</a>
							</div>
							<div class="visible-lg visible-md">
								<a href="#" class="title-item">2016春夏Flowerland系列</a>
							</div>
							<div class="visible-lg">
								<a href="#" class="title-item">贝嫂的超完美私服比你想象中接地气</a>
							</div>
							<div class="visible-lg">
								<a href="#" class="title-item">Ports 1961 16早春女装</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="block2">
		<div class="container">
			<div class="row">
				<div class="subject-top">
					<div class="subject-top-hr"></div>
					<div class="subject-top-title">潮流 TIDEWAY </div>
				</div>
				<div class="hidden-xs">
					<div class="col-xs-12 col-sm-4">
						<a href="fashion_4.php" class="imgall">
							<img src="../../images/b11.jpg">
							<div class="text-wrap"><span>换季学会“添弃留”</span></div>
						</a>
					</div>
					<div class="col-xs-12 col-sm-4">
						<a href="#" class="imgall">
							<img src="../../images/b9.jpg">
							<div class="text-wrap"><span>令人担忧的时装周</span></div>
						</a>
						<a href="#" class="imgall">
							<img src="../../images/b12.jpg">
							<div class="text-wrap"><span>时髦有腔调 一双低跟鞋</span></div>
						</a>
					</div>
					<div class="col-xs-12 col-sm-4">
						<a href="#" class="imgall">
							<img src="../../images/b10.jpg">
							<div class="text-wrap"><span>冬天穿裙子千万别穿这几双鞋</span></div>
						</a>
						<a href="#" class="imgall">
							<img src="../../images/b13.jpg">
							<div class="text-wrap"><span>九分牛仔裤搭配这些鞋</span></div>
						</a>
					</div>
				</div>
				<div class="hidden-lg hidden-md hidden-sm">
					<div class="col-xs-12 col-sm-4">
						<a href="fashion_4.php" class="imgall-m">
							<img src="../../images/b11.jpg">
							<div class="text-wrap"><span>换季学会“添弃留”</span></div>
						</a>
					</div>
					<div class="col-xs-12 col-sm-4">
						<a href="#" class="imgall-m">
							<img src="../../images/b9.jpg">
							<div class="text-wrap"><span>令人担忧的时装周</span></div>
						</a>
						<a href="#" class="imgall-m">
							<img src="../../images/b12.jpg">
							<div class="text-wrap"><span>时髦有腔调 一双低跟鞋</span></div>
						</a>
					</div>
					<div class="col-xs-12 col-sm-4">
						<a href="#" class="imgall-m">
							<img src="../../images/b10.jpg">
							<div class="text-wrap"><span>冬天穿裙子千万别穿这几双鞋</span></div>
						</a>
						<a href="#" class="imgall-m">
							<img src="../../images/b13.jpg">
							<div class="text-wrap"><span>九分牛仔裤搭配这些鞋</span></div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="block3">
		<div class="container">
			<div class="row">
				<div class="subject-top">
					<div class="subject-top-hr"></div>
					<div class="subject-top-title">搭配 COLLOCATION </div>
				</div>
				<div class="hidden-xs">
					<div class="col-xs-12">
						<a href="fashion_5.php" class="title active" type="1">4种明天就能穿的换季穿法</a>
						<a href="#" class="title" type="2">你上学时就穿的那件连帽卫衣原来这么时髦</a>
						<a href="#" class="title" type="3">搞定三月乱穿衣的过渡季 3件外套就够啦</a>
					</div>
					<div class="col-xs-12 col-sm-4">
						<a class="img-a" href="fashion_5.php">
							<img type="1" src="../../images/f6.jpg">
						</a>
					</div>
					<div class="col-xs-12 col-sm-4">
						<a class="img-a" href="#">
							<img type="2" src="../../images/f5.jpg">
						</a>
					</div>
					<div class="col-xs-12 col-sm-4">
						<a class="img-a" href="#">
							<img type="3" src="../../images/f4.jpg">
						</a>
					</div>
				</div>
				<div class="hidden-lg hidden-md hidden-sm">
					<div class="col-xs-12 col-sm-4">
						<a class="img-a" href="fashion_5.php">
							<img type="1" src="../../images/f6.jpg">
							<div class="title-m">4种明天就能穿的换季穿法</div>
						</a>
					</div>
					<div class="col-xs-12 col-sm-4">
						<a class="img-a" href="#">
							<img type="2" src="../../images/f5.jpg">
							<div class="title-m">你上学时就穿的那件连帽卫衣原来这么时髦</div>
						</a>
					</div>
					<div class="col-xs-12 col-sm-4">
						<a class="img-a" href="#">
							<img type="3" src="../../images/f4.jpg">
							<div class="title-m">搞定三月乱穿衣的过渡季</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="block4">
		<div class="container">
			<div class="row">
				<div class="subject-top">
					<div class="subject-top-hr"></div>
					<div class="subject-top-title">新品 NEWON </div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<a href="fashion_6.php" class="item">
						<img src="../../images/b14.jpg">
						<div class="img-text">可以背到老的年轻感手袋 有个性的大牌经典款</div>
					</a>
				</div>
				<div class="col-xs-12 col-sm-4">
					<a href="#" class="item">
						<img src="../../images/b15.jpg">
						<div class="img-text">新年换个钱包犹如换个心情</div>
					</a>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="right-wrap">
						<a href="#">可以搭配所有秋装的10双经典美鞋</a>
						<a href="#">女人一生需要多少包？时髦一辈子的5款包</a>
						<a href="#">大牌鞋履经典款 一生总得有一双</a>
						<div class="hidden-sm">
							<a href="#">新年换个钱包犹如换个心情</a>
							<a href="#">可以背到老的年轻感手袋</a>
						</div>
					</div>
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
	<script src="../../js/fashion_index.js"></script>


</body>
</html>
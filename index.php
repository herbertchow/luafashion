<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>路雅时尚网</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<!--[if lt IE 9]>
		<script src="js/lib/html5shiv.js"></script>
		<script src="js/lib/respond.min.js"></script>
	<![endif]-->
</head>
<body class="index">
	<!--顶部-->
	<!-- <?php include "php/common/login_top1.php"; ?> -->
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
	<div class="hidden-lg hidden-md hidden-sm">
		<div class="container margin-5">
			<div class="row">
				<div class="col-xs-12" >
					<img class="logo-small" src="images/lua1.png" alt="">
				</div>
			</div>
		</div>
	</div>
	<div class="hidden-xs">
		<div class="container margin-15">	 
			<div class="row">
				<div class="col-xs-12" >
					<img class="logo-big" src="images/lua2.png" alt="">
				</div>
			</div>
		</div>
	</div>
	<!--导航 -->
	<div class="hidden-xs">
		<div class="container" id="nav-fixed">
			<div class="col-xs-12 padding-noh">
				<div class="navbar navbar-my">
					<div class="collapse navbar-collapse navbar-responsive-cpllapse collapse-my">
						<ul class="nav navbar-nav">
							<li>
								<a href="index.php" type="1">首页</a>
							</li>
							<li>
								<a href="php/fashion/fashion_index.php" type="2">时装</a>
								<div class="sec-menu fashion">
									<a href="php/fashion/fashion_tideway.php">潮流</a>
									<a href="php/fashion/fashion_collocation.php">搭配</a>
									<a href="php/fashion/fashion_newon.php">新品</a>
								</div>
							</li>
							<li>
								<a href="php/beauty/beauty_index.php" type="3">美容</a>
								<div class="sec-menu beauty">
									<a href="php/beauty/beauty_skincare.php">护肤</a>
									<a href="php/beauty/beauty_makeup.php">彩妆</a>
									<a href="php/beauty/beauty_hairdress.php">秀发</a>
								</div>
							</li>
							<li>
								<a href="php/men/men_index.php" type="4">男士</a>
								<div class="sec-menu men">
									<a href="php/men/men_clothes.php">衣装</a>
									<a href="php/men/men_wristwatch.php">腕表</a>
									<a href="php/men/men_menlook.php">理容</a>
								</div>
							</li>
							<li>
								<a href="php/star/star_index.php" type="5">星姿态</a>
								<div class="sec-menu star">
									<a href="php/star/star_style.php">明星风尚</a>
									<a href="php/star/star_news.php">娱乐新闻</a>
								</div>
							</li>
							<li>
								<a href="php/life/life_index.php" type="6">生活</a>
								<div class="sec-menu life">
									<a href="php/life/life_journey.php">旅行</a>
									<a href="php/life/life_emotion.php">情感</a>
									<a href="php/life/life_food.php">美食</a>
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
							<li><a href="/graduation_design/index.php"><i class="fa fa-home"></i>首页</a></li>
							<li><a href="php/fashion/fashion_index.php"><i class="fa fa-user"></i>时装</a></li>
							<li><a href="php/beauty/beauty_index.php"><i class="fa fa-paint-brush"></i>美容</a></li>
							<li><a href="php/men/men_index.php"><i class="fa fa-male"></i>男士</a></li>
							<li><a href="php/star/star_index.php"><i class="fa fa-star"></i>星姿态</a></li>
							<li><a href="php/life/life_index.php"><i class="fa fa-pagelines"></i>生活</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 轮播-->
	<div class="container">
		<div class="row ">
			<div class="hidden-xs">
				<div class="col-sm-8 block1">
					<div id="myCarousel2" class="carousel slide">
						<ol class="carousel-indicators">
							<li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel2" data-slide-to="1"></li>
							<li data-target="#myCarousel2" data-slide-to="2"></li>
							<li data-target="#myCarousel2" data-slide-to="3"></li>
							<li data-target="#myCarousel2" data-slide-to="4"></li>
						</ol>  
						<div class="carousel-inner">
							<div class="item active">
								<a href="php/fashion/fashion_1.php"><img src="images/b_1.jpg" alt="范冰冰弃驴蹄也要穿的鞋 它才是Louis Vuitton的主角"></a>
								<div class="carousel-caption">范冰冰弃驴蹄也要穿的鞋 它才是Louis Vuitton的主角</div>
							</div>
							<div class="item">
								<a href="php/fashion/fashion_2.php"><img src="images/b_2.jpg" alt="16春夏牛仔裤流行趋势报告 五条必Buy显瘦款你有吗"></a>
								<div class="carousel-caption">16春夏牛仔裤流行趋势报告 五条必Buy显瘦款你有吗</div>
							</div>
							<div class="item">
								<a href="#"><img src="images/b_3.jpg" alt="巴黎时装周 彩色眼线让秋冬不再沉闷"></a>
								<div class="carousel-caption">巴黎时装周 彩色眼线让秋冬不再沉闷</div>
							</div>
							<div class="item">
								<a href="#"><img src="images/b_4.jpg" alt="不戴配饰会死星人 你该像周董这样做点加减法"></a>
								<div class="carousel-caption">不戴配饰会死星人 你该像周董这样做点加减法</div>
							</div>
							<div class="item">
								<a href="#"><img src="images/b_5.jpg" alt="这些成为世界遗产的美食到底有多好吃？"></a>
								<div class="carousel-caption">这些成为世界遗产的美食到底有多好吃?</div>
							</div>
						</div>
						<a class="carousel-control left move" href="#myCarousel2"
						data-slide="prev">&lsaquo;</a>
						<a class="carousel-control right move" href="#myCarousel2"
						data-slide="next">&rsaquo;</a>
					</div>
				</div>
			</div>
			<div class="hidden-sm hidden-md hidden-lg">
				<div class="col-xs-12 padding-no">
					<div id="myCarousel" class="carousel slide">
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
							<li data-target="#myCarousel" data-slide-to="4"></li>
						</ol> 
						<div class="carousel-inner">
							<div class="item active">
								<a href="php/fashion/fashion_1.php"><img src="images/b_1.jpg" alt="范冰冰弃驴蹄也要穿的鞋 它才是Louis Vuitton的主角"></a>
								<div class="carousel-caption">范冰冰弃驴蹄也要穿的鞋 <div class="hidden-xs">它才是Louis Vuitton的主角</div></div>
							</div>
							<div class="item">
								<a href="php/fashion/fashion_2.php"><img src="images/b_2.jpg" alt="16春夏牛仔裤流行趋势报告 五条必Buy显瘦款你有吗"></a>
								<div class="carousel-caption">16春夏牛仔裤流行趋势报告 <div class="hidden-xs">五条必Buy显瘦款你有吗</div></div>
							</div>
							<div class="item">
								<a href="#"><img src="images/b_3.jpg" alt="巴黎时装周 彩色眼线让秋冬不再沉闷"></a>
								<div class="carousel-caption">巴黎时装周 <div class="hidden-xs">彩色眼线让秋冬不再沉闷</div></div>
							</div>
							<div class="item">
								<a href="#"><img src="images/b_4.jpg" alt="不戴配饰会死星人 你该像周董这样做点加减法"></a>
								<div class="carousel-caption">不戴配饰会死星人 <div class="hidden-xs">你该像周董这样做点加减法</div></div>
							</div>
							<div class="item">
								<a href="#"><img src="images/b_5.jpg" alt="这些成为世界遗产的美食到底有多好吃？"></a>
								<div class="carousel-caption"><div class="hidden-xs">这些成为世界遗产的美食到底有多好吃?</div>世界遗产美食有多好吃</div>
							</div>
						</div>
						<a class="carousel-control left move" href="#myCarousel"
						data-slide="prev">&lsaquo;</a>
						<a class="carousel-control right move" href="#myCarousel"
						data-slide="next">&rsaquo;</a>
					</div>
				</div>
			</div>
			<!--今日热点-->  
			<div class="hidden-xs">
				<div class="col-sm-4 block1">
					<div class="hot-today">
						<div class="hot-title">今日热点<i class="fa fa-caret-down"></i></div>
						<div class="hot-body">
							<div><a href="php/fashion/fashion_2.php" class="hot-item">16早春欧美最流行这五种搭配</a></div>
							<div><a href="#" class="hot-item">90%的男人看不懂！女人头顶绑丝巾</a></div>
							<div><a href="php/men/men_3.php" class="hot-item">初冬男人长款西装外套搭配优雅帅气</a></div>
							<div><a href="#" class="hot-item">朱孝天领证，F4就剩言承旭光着了</a></div>
							<div class="hidden-sm">
								<div><a href="#" class="hot-item">你需要买这 11 种婴儿用品</a></div>
								<div><a href="#" class="hot-item">开启无性别时代今年流行耍帅中性风</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hidden-lg hidden-md hidden-sm">
				<div class="col-xs-12 hot-today-m">		
					<div class="hot-title-m">今日热点</div>
					<div class="hot-body-m">
						<a href="php/fashion/fashion_2.php" class="hot-item-m">16早春欧美最流行这五种搭配</a>
						<a href="#" class="hot-item-m">90%的男人看不懂！女人头顶绑丝巾</a>
						<a href="php/men/men_3.php" class="hot-item-m">初冬男人长款西装外套搭配优雅帅气</a>
						<a href="#" class="hot-item-m">朱孝天领证，F4就剩言承旭光着了</a>
						<a href="#" class="hot-item-m">你需要买这 11 种婴儿用品</a>
					</div>
				</div>
			</div>
		</div>	
	</div>
	<!--中间-->
	<div class="block2">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4 js-main">
					<a href="#" class="img-item margin-10">
						<img src="images/m1.jpg">
						<div class="hidden-xs">
							<div class="img-title"><p class="margin-5">明星扎堆儿巴黎周 马漂亮与设计师亲密耳语</p><div class="img-title-mask"></div></div>
						</div>
						<div class="hidden-lg hidden-md hidden-sm">
							<div class="img-title-m">明星扎堆儿巴黎周 马漂亮与设计师亲密耳语</div>
							<div class="clear-hr"></div>
						</div>
					</a>
					<a href="#" class="img-item margin-10">
						<img src="images/m4.jpg">
						<div class="hidden-xs">
							<div class="img-title"><p class="margin-5">海滩度假天堂：去芭提雅玩水赏花吃海鲜</p><div class="img-title-mask"></div></div>
						</div>
						<div class="hidden-lg hidden-md hidden-sm">
							<div class="img-title-m">海滩度假天堂：去芭提雅玩水赏花吃海鲜</div>
							<div class="clear-hr"></div>
						</div>
					</a>
					<a href="#" class="img-item margin-10">
						<img src="images/m3.jpg">
						<div class="hidden-xs">
							<div class="img-title"><p class="margin-5">吉克隽逸上演黑美人的逆袭 春天要美白就学她</p><div class="img-title-mask"></div></div>
						</div>
						<div class="hidden-lg hidden-md hidden-sm">
							<div class="img-title-m">吉克隽逸上演黑美人的逆袭 春天要美白就学她</div>
							<div class="clear-hr"></div>
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-sm-4 js-main">
					<a href="php/fashion/fashion_3.php" class="img-item margin-10">
						<img src="images/m5.png">
						<div class="hidden-xs">
							<div class="a-list">
								<a href="php/fashion/fashion_3.php" class="a-list-item">春一定要穿的针织裙，终于可以闪亮登场了！</a>
								<a href="#" class="a-list-item">盘点横扫时装周的大牌包袋</a>
								<a href="#" class="a-list-item">唐嫣才是真正土豪姐</a>
							</div>
						</div>
						<div class="hidden-lg hidden-md hidden-sm">
							<div class="img-title-m">春一定要穿的针织裙，终于可以闪亮登场了！</div>
							<div class="clear-hr"></div>
						</div>
					</a>
					<a href="#" class="img-item margin-10">
						<img src="images/m2.jpg">
						<div class="hidden-xs">
							<div class="img-title"><p class="margin-5">混血博主的百变型格 早春look看这里</p><div class="img-title-mask"></div></div>
						</div>
						<div class="hidden-lg hidden-md hidden-sm">
							<div class="img-title-m">混血博主的百变型格 早春look看这里</div>
							<div class="clear-hr"></div>
						</div>
					</a>
				</div>

				<div class="col-xs-12 col-sm-4">
					<div class="card-right margin-10">
						<div class="card-title">
							<span class="card-title-l active">热门单品</span>
							<span class="card-title-r">新品评测</span>
						</div>
						<div class="card-l">
							<a href="#" class="card-l-item">
								<img src="images/r1.jpg">
								<p>Jo Malone London茶香珍茗系列香水</p>
							</a>
							<a href="#" class="card-l-item">
								<img src="images/r2.jpg">
								<p>Prada大热的包款：Pionnière和Cahier手袋</p>
							</a>
							<div class="hidden-sm">
								<a href="#" class="card-l-item">
									<img src="images/r3.jpg">
									<p>Gucci2016春夏古典印花运动鞋 古典艺术风</p>
								</a>
							</div>
						</div>
						<div class="card-r">
							<a href="#" class="card-l-item">
								<img class="ra" src="images/r4.jpg">
								<p>有了这瓶保湿水换季敏感不用愁</p>
							</a>
							<a href="#" class="card-l-item">
								<img class="ra" src="images/r5.jpg">
								<p>谁能轻松搞定日常造型烦恼</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--时装-->
	<div class="block3">
		<div class="container">
			<div class="row">
				<div class="subject-top">
					<div class="subject-top-hr"></div>
					<div class="subject-top-title">时装 FASHION </div>
				</div>

				<div class="col-xs-12 col-sm-4">
					<a href="#" class="card-img">
						<img src="images/f1.jpg">
						<div class="card-img-title">Valentino：艺术般的想象力</div>
					</a>
				</div>
				<div class="col-xs-12 col-sm-4">
					<a href="#" class="card-img">
						<img src="images/f2.jpg">
						<div class="card-img-title">4种明天就能穿的换季穿法</div>
					</a>
					<a href="#" class="card-img">
						<img src="images/f3.jpg">
						<div class="card-img-title">你上学时就穿的那件连帽卫衣原来这么时髦</div>
					</a>
				</div>
				<div class="col-xs-12 col-sm-4">
					<a href="#" class="card-img">
						<img src="images/f4.jpg">
						<div class="card-img-title">搞定三月乱穿衣的过渡季 3件外套就够啦</div>
					</a>
					<div class="fashion-right-border">
						<div class="fashion-right">
							<a href="#">16早春欧美最流行这五种搭配<div>趁没烂大街前赶快get!</div></a>
							<a href="#">喇叭裤才是撩人新武器<div>只要穿得好就能有腿又有A4腰</div></a>
							<a href="#">Ports 1961 16早春女装<div>色彩玩趣！</div></a>
							<div class="hidden-sm hidden-md"><a href="#">今春欧美最hit单品<div>竟然是校服裤</div></a></div>      
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!--美容-->
	<div class="block4">
		<div class="container">
			<div class="row">
				<div class="subject-top">
					<div class="subject-top-hr"></div>
					<div class="subject-top-title">美容 BEAUTY </div>
				</div>
				<div class="hidden-xs">
					<div class="col-xs-12 col-sm-4 hid">
						<a href="#" class="beauty-img-bg">
							<img src="images/a1.jpg">
						</a>
						<a href="#?1" class="beauty-img yes">
							<img src="images/a1.jpg"><div class="beauty-img-title"><span>别人的刘海你不配!<br>二八偏分才是你的菜</span></div>
						</a>
						<a href="#?2" class="beauty-img no">
							<img src="images/a2.jpg"><div class="beauty-img-title"><span>有图有真相!换个发型比整容都管用</span></div>
						</a>
					</div>
					<div class="col-xs-12 col-sm-4 hid">
						<a href="#" class="beauty-img-bg">
							<img src="images/a1.jpg">
						</a>
						<a href="php/beauty/beauty_2.php" class="beauty-img yes">
							<img src="images/a3.jpg"><div class="beauty-img-title"><span>女生的脸不能吹?怪你不会打底咯</span></div>
						</a>
						<a href="#?4" class="beauty-img no">
							<img src="images/a4.jpg"><div class="beauty-img-title"><span>看完这篇!我知道你对“它”上瘾了</span></div>
						</a>
					</div>
					<div class="col-xs-12 col-sm-4 hid">
						<a href="#" class="beauty-img-bg">
							<img src="images/a1.jpg">
						</a>
						<a href="php/beauty/beauty_4.php" class="beauty-img yes">
							<img src="images/a5.jpg"><div class="beauty-img-title"><span>长得美叫卧蚕你的叫眼袋</span></div>
						</a>
						<a href="#?6" class="beauty-img no">
							<img src="images/a6.jpg"><div class="beauty-img-title"><span>这样“去黑头” 效果明显100倍!</span></div>
						</a>
					</div>
				</div>

				<div class="hidden-lg hidden-md hidden-sm">
					<div class="col-xs-12 col-sm-4 hid">
						<a href="#" class="beauty-img-bg m">
							<div class="m-table">
							<img src="images/a1.jpg"><div class="beauty-img-title"><span>别人的刘海你不配!<br>二八偏分才是你的菜</span></div>
							</div>
						</a>
					</div>
					<div class="col-xs-12 col-sm-4 hid">
						<a href="php/beauty/beauty_2.php" class="beauty-img-bg m">
							<div class="m-table">
							<img src="images/a3.jpg"><div class="beauty-img-title"><span>女生的脸不能吹?怪你不会打底咯</span></div>
							</div>
						</a>
					</div>
					<div class="col-xs-12 col-sm-4 hid">
						<a href="#" class="beauty-img-bg m">
							<div class="m-table">
							<img src="images/a5.jpg"><div class="beauty-img-title"><span>长得美叫卧蚕你的叫眼袋</span></div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--男士-->
	<div class="block5">
		<div class="container">
			<div class="row">
				<div class="subject-top">
					<div class="subject-top-hr"></div>
					<div class="subject-top-title">男士 MEN </div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<a href="php/men/men_2.php" class="men-item">
						<div class="m-table">
							<img src="images/n1.jpg">
							<div class="mask">
							衰老不可避免那就请它慢慢出现
							</div>
						</div>
					</a>
					<a href="php/men/men_3.php" class="men-item">
						<div class="m-table">
							<img src="images/n5.jpg">
							<div class="mask">
							初冬男人长款西装外套搭配优雅帅气
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-sm-4">
					<a href="#" class="men-item">
						<div class="m-table">
							<img src="images/n3.jpg">
							<div class="mask">
							谦谦君子 品鉴万国柏涛菲诺系列腕表
							</div>
						</div>
						<div class="m-table-all">
							<a class="men-a" href="php/men/men_4.php">戴表前必须知道的腕表搭配知识</a>
							<a class="men-a" href="#">十款宝石表盘腕表抒写至美时光</a>
							<a class="men-a" href="#">请扔掉肥皂，捡起洁面皂</a>
							<a class="men-a" href="#">年底度假，世界时腕表当道</a>
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-sm-4">
					<a href="#" class="men-item">
						<div class="m-table">
							<img src="images/n4.jpg">
							<div class="mask">
							酒保到王子，从着装识别英国的阶级划分
							</div>
						</div>
					</a>
					<a href="#" class="men-item">
						<div class="m-table">
							<img src="images/n2.jpg">
							<div class="mask">
							连达人都容易出错的5个护肤误区
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

<!--底部-->
<div class="footer">
	<div class="col-xs-12">
		<div class="hidden-xs">
			<img class="big" src="images/lua3.png">
		</div>
		<div class="hidden-lg hidden-sm hidden-md">
			<img class="sm" src="images/lua3.png">
		</div>
		<div class="foot-list">
			<a href="php/config/contact.php" class="foot-item">关于我们</a>
			<a href="php/config/map.php" class="foot-item">网站地图</a>
			<a href="php/config/contact.php" class="foot-item">联系我们</a>
			<a href="php/config/contact.php" class="foot-item">版权声明</a>
			<div class="brand">版权所有 周浩鹏</div>
		</div>
	</div>
	<div class="back-top"><i class="fa fa-arrow-up"></i></div>
</div>

<script src='js/lib/jquery-1.12.1.min.js'></script>
<script src='bootstrap/js/bootstrap.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>


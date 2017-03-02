<?php
	header("content-Type: text/html; charset=utf-8");
	session_start();
	include '../config/conn.php';
?>
<?php if(isset($_SESSION['name'])) { ?>
<div class="login-wrap">
	<div class="hidden-xs">
		<div class="container text-right ">
			<input type="text" placeholder="search" class="top-search">
			<span class="btn-my glyphicon glyphicon-search"></span>
			<span class="btn btn-sm btn-my-white btn-login user-fir">
				<span class="user-name-btn">
				<?php
					$sql="select * from vog_user where username = '".$_SESSION['name']."' ";
					$query = mysqli_query($con,$sql);
					$result = mysqli_fetch_assoc($query);
					echo $result['name'];
				?>
				</span>
				<span class="user-sub-all">
					<a class="user-center" href="/graduation_design/php/config/user_index.php"><i class="fa fa-user"></i> 个人中心</a>
					<a class="user-fav" href="/graduation_design/php/config/user_fav.php"><i class="fa fa-heart"></i> 收藏列表</a>
					<a class="user-clo"><i class="fa fa-close"></i> 取消</a>
				</span>
			</span>
			<a href="../config/logout.php"><span class="btn btn-sm btn-my-white btn-reg">退出</span></a>
		</div>
	</div>
	<div class="hidden-lg hidden-md hidden-sm">
		<div class="container text-left ">
			<a href="/graduation_design/php/config/user_index.php"><span class="setname btn-login">
			<?php
				$sql="select * from vog_user where username = '".$_SESSION['name']."' ";
				$query = mysqli_query($con,$sql);
				$result = mysqli_fetch_assoc($query);
				echo $result['name'];
			?>
			</span></a>
			<a href="../config/logout.php"><span class="btn btn-sm btn-default btn-reg">退出</span></a>
			<span class="search-mobile">
				<input type="text" placeholder="search" class="top-search-sm">
				<span class="btn-my glyphicon glyphicon-search"></span>
			</span>
		</div>
	</div>
</div>
<?php } ?>

<?php if(!isset($_SESSION['name']) ) { ?>
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
<?php } ?>
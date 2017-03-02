<?php
	header("content-Type: text/html; charset=utf-8");
	session_start();
	$_SESSION= array();
	require 'conn.php';

	$name = $_POST['username'];
	$pwd = $_POST['pwd'];
	$sql="select * from vog_user where username = '".$name."' and password = '".$pwd."' ";
	$query = mysqli_query($con,$sql);
	$result = mysqli_fetch_array($query);
	if($result != ""){
		$_SESSION['name'] = $name;
		$_SESSION['nickname'] = $nickname;
		$_SESSION['email'] = $email ;
		header("Location:../../index.php");
	}
	else {
		// echo "账号或密码错误!3秒后回到登录页面";
		header("Location:error.php");
		// header('refresh: 3;url=login.php');
	}
?>

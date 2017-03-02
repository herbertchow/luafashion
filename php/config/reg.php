<?php
	header("content-Type: text/html; charset=utf-8");
	session_start();
	$_SESSION= array();
	require 'conn.php';


	$name = $_POST['username'];
	$pwd = $_POST['pwd'];
	$nickname = $_POST['nickname'];
	$email = $_POST['email'];
	
	if($name&&$pwd&&$nickname&&$email){
		$sql="insert into vog_user (username,password,name,email) value ('$name','$pwd','$nickname','$email')";
	
		$query = mysqli_query($con,$sql);
		if ($query) {
			$_SESSION['name'] = $name;
			$_SESSION['nickname'] = $nickname;
			$_SESSION['email'] = $email ;
			header("Location:../../index.php");
		}
		else {
			// echo "输入错误!3秒后回到注册页面";
			header("Location:error.php");
			// header('refresh: 3;url=reg_index.php');
		}
	}
	else {
		// echo "输入不能为空!3秒后回到注册页面";
		header("Location:error.php");
		// header('refresh: 3;url=reg_index.php');
	}
?>

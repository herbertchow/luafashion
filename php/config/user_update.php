<?php
	header("content-Type: text/html; charset=utf-8");
	session_start();

	require 'conn.php';


	$name = $_POST['username'];
	$pwd = $_POST['pwd'];
	$nickname = $_POST['nickname'];
	$email = $_POST['email'];
	$id_get = $_SESSION['id'];

	if($name&&$pwd&&$nickname&&$email){
		$sql="UPDATE vog_user SET username='$name',password='$pwd',email='$email',name='$nickname' where id='$id_get'";
		$query = mysqli_query($con,$sql);
		if ($query) {
			$_SESSION['name'] = $name;
			$_SESSION['nickname'] = $nickname;
			$_SESSION['email'] = $email ;
			header("Location:../../index.php");
			// var_dump($query);
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

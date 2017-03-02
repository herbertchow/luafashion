<?php
define("un","root");
define("pw","");
$con = mysqli_connect("127.0.0.1",un,pw);           //配置服务器地址
if (!$con)
  {
  die('连接数据库失败: ' . mysqli_error());
  }
 
mysqli_select_db($con,"vog");            //选择数据库
mysqli_query($con,"SET NAMES 'UTF8'"); 
mysqli_query($con,"SET CHARACTER SET UTF8"); 
mysqli_query($con,"SET CHARACTER_SET_RESULTS=UTF8'");
?>



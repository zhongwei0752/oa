<?php
 /**
 * Example Application

 * @package Example-application
 */
include("config.php");
include("encrypt.php");
if($_COOKIE['uid']){
		$url = "vip.php";
		echo "<script language='javascript' type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>";
}
$login=$_POST['login'];
if($login){
	$username=trim($_POST['username']);
	$password=trim($_POST['password']);
	$query=mysql_query("SELECT * FROM space where username='$username' and password='$password'");
	$value=mysql_fetch_array($query);
	if($value['uid']){
		$uid=encrypt("$value[uid]");
		setcookie("uid","$uid",time()+3600);
		echo '1';//登陆成功
	}else{
		echo '-1';//登陆失败
	}
}else{
include("template.php");
$smarty->display('login.html');
}
<?php
include("template.php");
include("config.php");
include("encrypt.php");
if(empty($_COOKIE['uid'])){
      $url = "login.php";
      echo "<script language='javascript' type='text/javascript'>";
      echo "window.location.href='$url'";
      echo "</script>";
    }
if($_POST){
	$username=$_POST['username'];
	$num=$_POST['num'];
	$experience=$_POST['experience'];
	$linkmana=$_POST['linkmana'];
	$linkmanb=$_POST['linkmanb'];
	$linkmanc=$_POST['linkmanc'];
	$linkmand=$_POST['linkmand'];
	$qianyue=$_POST['qianyue'];
	$qianyueren=$_POST['qianyueren'];
	$dateline=strtotime($_POST['dateline']);
	$time=time();
	$uid=decrypt("$_COOKIE[uid]");
	if(empty($username)||empty($num)){
	echo "<script language='javascript' type='text/javascript'>";
	echo "alert('客户名称或项目数量不能为空');";
	echo "</script>";	
	}else{
	$sql = "INSERT INTO custom (username,num,experience,linkmana,linkmanb,linkmanc,linkmand,qianyue,qianyueren,dateline,uid,time)VALUES('$username','$num','$experience','$linkmana','$linkmanb','$linkmanc','$linkmand','$qianyue','$qianyueren','$dateline','$uid','$time')";
	mysql_query($sql);
	$url = "custom.php";
	echo "<script language='javascript' type='text/javascript'>";
	echo "alert('发布成功');";
	echo "window.location.href='$url'";
	echo "</script>";
	}
}
$smarty->display('newcustom.html');	

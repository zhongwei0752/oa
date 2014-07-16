<?php
$registsubmit=$_POST['registsubmit'];
$login=$_POST['login'];
$submit=$_POST['submit'];
$reply=$_POST['reply'];
if($registsubmit){
$username=$_POST['username'];
$pwd=$_POST['pwd'];
$tel=$_POST['tel'];
$mail=$_POST['mail'];
$idcard=$_POST['idcard'];
include("config.php");
$check_query = mysql_query("select username from space where username='$username'");
if(mysql_fetch_array($check_query)){
    echo '错误：用户名 ',$username,' 已存在。';
    exit;
}
$regdate = time();
$sql = "INSERT INTO space (username,pwd,tel,mail,idcard,regdate)VALUES('$username','$pwd','$tel','$mail','$idcard','$regdate')";
if(mysql_query($sql)){
	$check_query1 = mysql_query("select * from space where username='$username'");
	$value1=mysql_fetch_array($check_query1);
	setcookie("uid","$value1[uid]");
	echo "1";
} else {
    echo '用户注册失败';

}
}
if($login){
	$username=$_POST['username'];
	$password=$_POST['password'];
	include("config.php");
	$query = mysql_query("select * from space where username='$username' and pwd='$password'");
	$value=mysql_fetch_array($query);
	if($value){
		setcookie("uid","$value[uid]");
		echo "1";
	}else{
		echo "用户或密码不正确";
	}
}
if($submit){
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	$update=$_POST['update'];
	$op=$_POST['op'];
	$id=$_POST['id'];
	$dateline = time();
	include("config.php");
	if($update){
	$sql = "UPDATE $op SET subject='$subject',message='$message' WHERE id = '$id'";
	}else{
	$sql = "INSERT INTO $op (subject,message,dateline)VALUES('$subject','$message','$dateline')";
		}
	mysql_query($sql);
}
if($reply){
	$subject=$_POST['subject'];
	$tel=$_POST['tel'];
	$name=$_POST['name'];
	$qclass=$_POST['qclass'];
	$content=$_POST['content'];
	$dateline = time();
	include("config.php");
	$sql = "INSERT INTO reply (subject,tel,name,qclass,content,dateline)VALUES('$subject','$tel','$name','$qclass','$content','$dateline')";
	mysql_query($sql);
}
?>
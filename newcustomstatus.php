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
	$id=$_POST['id'];
	$uid=decrypt("$_COOKIE[uid]");
	$dateline=strtotime($_POST['dateline']);
	$time=time();
	$message=$_POST['message'];
	$customstatus=$_POST['customstatus'];
	//1为电话，2为当面拜访，3为喝茶，4为请客
	$talk=$_POST['talk'];
	//1为初次拜访，2为走流程，3为签约完毕，4为暂时放弃
	$update=$_POST['update'];
	//1为迫切，2为热情，3为冷淡
	$attitude=$_POST['attitude'];//态度
	$chenggong=$_POST['chenggong'];//成功概率
	$date=$_POST['date'];//时间
	$parter=$_POST['parter'];//同事
	$jiaotong=$_POST['jiaotong'];//交通
	$canfei=$_POST['canfei'];//餐费
	$zhusu=$_POST['zhusu'];//住宿
	$qita=$_POST['qita'];//其他
	if($customstatus){
	$sql = "UPDATE customstatus SET message='$message',time='$time',talk='$talk',update1='$update',attitude='$attitude',chenggong='$chenggong',date1='$date',parter='$parter',jiaotong='$jiaotong',canfei='$canfei',zhusu='$zhusu',qita='$qita' WHERE id = '$customstatus'";
	}else{
	$sql = "INSERT INTO customstatus(customid,time,uid,dateline,message,talk,update1,attitude,chenggong,date1,parter,jiaotong,canfei,zhusu,qita)VALUES('$id','$time','$uid','$dateline','$message','$talk','$update','$attitude','$chenggong','$date','$parter','$jiaotong','$canfei','$zhusu','$qita')";
	}
	mysql_query($sql);
	$url = "custom.php";
	echo "<script language='javascript' type='text/javascript'>";
	echo "alert('发布成功');";
	echo "window.location.href='$url'";
	echo "</script>";

}
$query = mysql_query("select * from space");
while($value=  mysql_fetch_array($query)){
	$list[]=$value;
}
$customstatus=$_GET['customstatus'];
if($customstatus){
	$query3 = mysql_query("select * from customstatus WHERE id='$customstatus'");
	$value3 = mysql_fetch_array($query3);
	$query4 = mysql_query("select * from space WHERE uid='$value3[parter]'");
	$value4 = mysql_fetch_array($query4);
	$value3['name']=$value4['username'];
	$smarty->assign('dateline',$value3['dateline']);
	$smarty->assign('message',$value3['message']);
	$smarty->assign('talk',$value3['talk']);
	$smarty->assign('update1',$value3['update1']);
	$smarty->assign('attitude',$value3['attitude']);
	$smarty->assign('chenggong',$value3['chenggong']);
	$smarty->assign('date1',$value3['date1']);
	$smarty->assign('parter',$value3['parter']);
	$smarty->assign('name',$value3['name']);
	$smarty->assign('chenggong',$value3['chenggong']);
	$smarty->assign('jiaotong',$value3['jiaotong']);
	$smarty->assign('canfei',$value3['canfei']);
	$smarty->assign('zhusu',$value3['zhusu']);
	$smarty->assign('qita',$value3['qita']);
	$loginuid=decrypt("$_COOKIE[uid]");
	$query5 = mysql_query("select * from space WHERE uid='$loginuid'");
	$value5 = mysql_fetch_array($query5);
	$smarty->assign('allowctc',$value5['allowctc']);
	if($loginuid==$value3['uid']){
		$smarty->assign('loginuid','1');
	}else{
		$smarty->assign('loginuid','0');
	}
}
$smarty->assign('customstatus',$customstatus);
$smarty->assign('list',$list);
$smarty->assign('id',$_GET['id']);

$smarty->display('newcustomstatus.html');	

<?php
 /**
 * Example Application

 * @package Example-application
 */
include("config.php");
include("encrypt.php");
include("template.php");
if(empty($_COOKIE['uid'])){
      $url = "login.php";
      echo "<script language='javascript' type='text/javascript'>";
      echo "window.location.href='$url'";
      echo "</script>";
    }
if($_POST){
	$username = $_POST['username'];//用户名
	   $injob = $_POST['injob'];//在职
	  $branch = $_POST['branch'];//部门
	$position = $_POST['position'];//职位
	$allowcts = $_POST['allowcts'];//查看本人创建
	$allowctc = $_POST['allowctc'];//编辑本人创建
 $allowsearch = $_POST['allowsearch'];//搜索
 $allowyunying= $_POST['allowyunying'];//运营管理
  $allowusers = $_POST['allowusers'];//查看本人
  $allowuserc = $_POST['allowuserc'];//编辑本人
    $password = $_POST['password'];
       $wxkey = $_POST['wxkey'];//wxkey
    if($_POST['uid']){
    if(empty($username)||empty($password)){
    	$url = "staff.php?uid=$_POST[uid]";
    	echo "<script language='javascript' type='text/javascript'>";
	    echo "alert('不能有空值')";
	    echo "window.location.href='$url'";
	    echo "</script>";	
    }else{
    	$sql = "UPDATE space SET username='$username',password='$password',branch='$branch',position='$position',injob='$injob',allowcts='$allowcts',allowsearch='$allowsearch',allowyunying='$allowyunying',allowusers='$allowusers',allowctc='$allowctc',allowuserc='$allowuserc' WHERE uid = '$_POST[uid]'";
    	mysql_query($sql);
    	$url = "staff.php?uid=$_POST[uid]";
    	echo "<script language='javascript' type='text/javascript'>";
	    echo "alert('更新成功');";
	    echo "window.location.href='$url'";
	    echo "</script>";	
    }
	}else{
    if(empty($username)||empty($injob)||empty($branch)||empty($position)||empty($allowcts)||empty($allowctc)||empty($allowsearch)||empty($allowyunying)||empty($allowusers)||empty($allowuserc)||empty($password)){
    	echo "<script language='javascript' type='text/javascript'>";
	    echo "alert('不能有空值')";
	    echo "</script>";
    }else{
    	$query=mysql_query("SELECT * FROM space where username='$username'");
		$value=mysql_fetch_array($query);
		if($value){
		echo "<script language='javascript' type='text/javascript'>";
	    echo "alert('已存在此用户')";
	    echo "</script>";	
		}else{
		$sql = "INSERT INTO space (username,password,branch,position,injob,wxkey,allowcts,allowsearch,allowyunying,allowusers,allowctc,allowuserc)VALUES('$username','$password','$branch','$position','$injob','$wxkey','$allowcts','$allowsearch','$allowyunying','$allowusers','$allowctc','$allowuserc')";
		mysql_query($sql);	
		$url = "power.php";
		echo "<script language='javascript' type='text/javascript'>";
      	echo "window.location.href='$url'";
      	echo "</script>";
			}	
    	}
	}
}
/*$uid=decrypt("$_COOKIE[uid]");*/
$uid=$_GET['uid'];
if($uid){
	$query=mysql_query("SELECT * FROM space where uid='$uid'");
	$value=mysql_fetch_array($query);
	$smarty->assign('username',$value['username']);
	$smarty->assign('injob',$value['injob']);
	$smarty->assign('branch',$value['branch']);
	$smarty->assign('allowcts',$value['allowcts']);	
	$smarty->assign('allowctc',$value['allowctc']);
	$smarty->assign('allowsearch',$value['allowsearch']);
	$smarty->assign('allowyunying',$value['allowyunying']);
	$smarty->assign('allowusers',$value['allowusers']);
	$smarty->assign('allowuserc',$value['allowuserc']);
	$smarty->assign('password',$value['password']);
	if($allowuserc){

	}
	if($value['branch']=='1'){
		$branchname="技术部";
	}elseif($value['branch']=='2'){
		$branchname="市场部";
	}elseif($value['branch']=='3'){
		$branchname="运营部";
	}elseif($value['branch']=='4'){
		$branchname="行政部";
	}
	if($branchname){
		$smarty->assign('branchname',$branchname);	
	}
	if($value['position']=='1'){
		$positionname="经理";
	}elseif($value['position']=='2'){
		$positionname="副经理";
	}elseif($value['position']=='3'){
		$positionname="总监";
	}elseif($value['position']=='4'){
		$positionname="副总监";
	}
	if($positionname){
		$smarty->assign('positionname',$positionname);	
	}
	
}
$loginuid=decrypt("$_COOKIE[uid]");
$smarty->assign('wxkey',$_GET['wxkey']);
$smarty->assign('uid',$_GET['uid']);
if($loginuid==$_GET['uid']){
	$smarty->assign('loginuid','1');
}else{
	$smarty->assign('loginuid','0');
}
$smarty->display("staff.html");

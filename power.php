<?php
 /**
 * Example Application

 * @package Example-application
 */
include("config.php");
include("encrypt.php");
if(empty($_COOKIE['uid'])){
      $url = "login.php";
      echo "<script language='javascript' type='text/javascript'>";
      echo "window.location.href='$url'";
      echo "</script>";
    }

//$smarty->force_compile = true;
//$smarty->debugging = true;
//$smarty->caching = true;
$uid=decrypt("$_COOKIE[uid]");
$query=mysql_query("SELECT * FROM space where uid='$uid'");
$value=mysql_fetch_array($query);
$status=$_GET['status'];
$search=$_GET['search'];
    if($search){
    	if($_GET['status']=='lizhi'){
		$query1 = mysql_query("SELECT * FROM space where groupid!='1' and injob='1' and username like '%$search%'");
		}else{
		$query1 = mysql_query("SELECT * FROM space where groupid!='1' and username like '%$search%'");
		}
    }else{
    	if($status=='lizhi'){
		$query1=mysql_query("SELECT * FROM space where groupid!='1' and injob='1'");
		}else{
      if($value['allowusers']){
        $query1=mysql_query("SELECT * FROM space where uid='$uid'");
      }else{
        $query1=mysql_query("SELECT * FROM space where groupid!='1'");
      }
		
		}
    }

while($value1=mysql_fetch_array($query1)){
	$list[]=$value1;
}
include("template.php");
$smarty->assign('list',$list);
if($status=='lizhi'){
$smarty->assign('lizhi',$status);
}
$smarty->assign('username',$value['username']);
$smarty->assign('groupid',$value['groupid']);
$smarty->assign('search',$_GET['search']);
$smarty->display("power.html");

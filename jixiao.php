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
include("template.php");
//$smarty->force_compile = true;
//$smarty->debugging = true;
//$smarty->caching = true;
$uid=decrypt("$_COOKIE[uid]");
$query=mysql_query("SELECT * FROM space where groupid!='1'");
while($value=mysql_fetch_array($query)){
	$list[]=$value;
}

$smarty->assign('jixiao',$list);
$smarty->display("jixiao.html");

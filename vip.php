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
include("template.php");
//本月客户量
	$countquery= mysql_query("SELECT count(*) as num FROM custom where uid='$uid'");
	$count= mysql_fetch_array($countquery);
	$query = mysql_query("SELECT * FROM custom where uid='$uid'"); 
	while ($value = mysql_fetch_array($query)) {
		if(date("Y-m",$value['time'])==$date){
			$list[]=$value;
		}	
	}
	$newcustom=count($list);
//本月签约数
	$countquery1= mysql_query("SELECT count(*) as num FROM customstatus where uid='$uid' and update1='3'");
	$count1= mysql_fetch_array($countquery1);
	$query1 = mysql_query("SELECT * FROM customstatus where uid='$uid' and update1='3'"); 
	while ($value1 = mysql_fetch_array($query1)) {
		if(date("Y-m",$value1['dateline'])==$date){
			$list1[]=$value1;
		}	
	}
//本月新增小区
	$query2 = mysql_query("SELECT c.* FROM custom c LEFT JOIN customstatus cs on c.id=cs.customid where c.uid='$uid' and cs.update1='3'"); 
	while ($value2 = mysql_fetch_array($query2)) {
		if(date("Y-m",$value2['time'])==$date){
			$list2[]=$value2['num'];
		}	
	}
	$query3 = mysql_query("SELECT c.* FROM custom c LEFT JOIN customstatus cs on c.id=cs.customid where c.uid='$uid' and cs.update1='3'"); 
	while ($value3 = mysql_fetch_array($query3)) {
			$list3[]=$value3['num'];
	}
	$newxiaoqu=array_sum($list2);
	$count2=array_sum($list3);
	if(empty($newxiaoqu)){
		$newxiaoqu='0';
	}
	if(empty($count2)){
		$count2='0';
	}
//本月拜访用户数
	$query4= mysql_query("SELECT count(*) as num FROM customstatus where uid='$uid'");
	$count4= mysql_fetch_array($query4);
	$newqianyue=count($list1);
	$smarty->assign('count',$count['num']);
	$smarty->assign('count1',$count1['num']);
	$smarty->assign('newqianyue',$newqianyue);
	$smarty->assign('newcustom',$newcustom);
	$smarty->assign('count2',$count2);
	$smarty->assign('count4',$count4['num']);
	$smarty->assign('newxiaoqu',$newxiaoqu);
	$smarty->assign('username',$value['username']);
	$smarty->display("vip.html");

<?php
 /**
 * Example Application

 * @package Example-application
 */

require './class/Smarty.class.php';

$smarty = new Smarty;

//$smarty->force_compile = true;
//$smarty->debugging = true;
/*$smarty->caching = true;
$smarty->cache_lifetime = 120;*/
$smarty->template_dir = "./templates/";
$smarty->compile_dir = "./templates_c/";
$smarty->config_dir = "./configs/";
$smarty->cache_dir = "./cache/";
$smarty->left_delimiter = '<{';
$smarty->right_delimiter = '}>';
$op=$_GET['op'];
if($op=='delete'){
	setcookie("uid","");
	header("location:index.php");
}
include("config.php");
$query = mysql_query("select * from space where uid='$_COOKIE[uid]'");
$value=  mysql_fetch_array($query);
$smarty->assign("username",$value['username'],true);
$smarty->assign("cookie",$_COOKIE['uid'],true);
$sql_list="SELECT * FROM `product` order by id DESC LIMIT 0,20 ";        //由此控制数据显示数量部分
$db_list_list=mysql_query($sql_list);
while($row=mysql_fetch_array($db_list_list)){

	$row['dateline']=date("Y-m-d",$row['dateline']);
	$list[]=$row;      //将数据库中查询内容重新赋值
 
 
}
$sql_list1="SELECT * FROM `message` order by id DESC LIMIT 0,10 ";        //由此控制数据显示数量部分
$db_list_list1=mysql_query($sql_list1);
while($row1=mysql_fetch_array($db_list_list1)){

	$row1['dateline']=date("Y-m-d",$row1['dateline']);
	if(mb_strlen("$row1[subject]")>'15'){
		$row1['subject']=mb_substr("$row1[subject]", 0, 15)."...";
	}
	$list1[]=$row1;      //将数据库中查询内容重新赋值
 
 
}
$sql_list2="SELECT * FROM `news` order by id DESC LIMIT 0,10 ";        //由此控制数据显示数量部分
$db_list_list2=mysql_query($sql_list2);
while($row2=mysql_fetch_array($db_list_list2)){

	$row2['dateline']=date("Y-m-d",$row2['dateline']);
	
	$list2[]=$row2;      //将数据库中查询内容重新赋值
 
 
}
$smarty->assign("list",$list);
$smarty->assign("list1",$list1);
$smarty->assign("list2",$list2);
$smarty->display('new.html');

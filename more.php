<?php
 /**
 * Example Application

 * @package Example-application
 */

require './class/Smarty.class.php';

$smarty = new Smarty;

//$smarty->force_compile = true;
//$smarty->debugging = true;
$smarty->cache_lifetime = 120;
$smarty->template_dir = "./templates/";
$smarty->compile_dir = "./templates_c/";
$smarty->config_dir = "./configs/";
$smarty->cache_dir = "./cache/";
$smarty->left_delimiter = '<{';
$smarty->right_delimiter = '}>';
$id=$_GET['id'];
$op=$_GET['op'];
if($op=='product'){
	$name='理财产品';
	$status='1';
}elseif($op=='invest'){
	$name='项目投资';
	$status='1';
}elseif($op=='pay'){
	$name='第三方支付';
	$status='1';
}elseif($op=='good'){
	$name='公益信托';
	$status='1';
}elseif($op=='message'){
	$name='通知公告';
	$status='2';
}elseif($op=='show'){
	$name='信息披露';
	$op='showm';
	$status='2';
}elseif($op=='news'){
	$name='业内新闻';
	$status='3';
}elseif($op=='focus'){
	$name='财经聚焦';
	$status='3';
}elseif($op=='company'){
	$name='公司新闻';
	$status='3';
}elseif($op=='people'){
	$name='人员招聘';
	$status='4';
}elseif($op=='activity'){
	$name='公司活动';
	$status='4';
}elseif($op=='instroduce'){
	$name='企业背景';
	$status='5';
}elseif($op=='culture'){
	$name='企业文化';
	$status='5';
}elseif($op=='say'){
	$name='董事长致辞';
	$status='5';
}elseif($op=='net'){
	$name='分公司网络';
	$status='5';
}elseif($op=='fa'){
	$name='发展历程';
	$status='5';
}elseif($op=='class'){
	$name='信托知识';
	$status='6';
}elseif($op=='class'){
	$name='理财知识';
	$status='6';
}
include("config.php");
$query = mysql_query("select * from $op where id='$id'");
mysql_query("UPDATE $op SET viewnum = viewnum+1 WHERE id = '$id'");
$value=  mysql_fetch_array($query);
$smarty->assign("subject",$value['subject']);
$smarty->assign("viewnum",$value['viewnum']);
$smarty->assign("message",$value['message']);
$smarty->assign("name",$name);
if($_COOKIE['uid']=='1'){
	$smarty->assign("cookie",true);
}
$url="cp.php?op=$op&id=$id";
$url1="cp.php?op=$op&id=$id&action=delete";
$smarty->assign("status",$status);
$smarty->assign("url",$url);
$smarty->assign("url1",$url1);
$smarty->display('more.html');

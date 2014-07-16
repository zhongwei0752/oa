<?php
 /**
 * Example Application

 * @package Example-application
 */

require './class/Smarty.class.php';

$smarty = new Smarty;

//$smarty->force_compile = true;
//$smarty->debugging = true;
//$smarty->caching = true;
//$smarty->cache_lifetime = 120;
$smarty->template_dir = "./templates/";
$smarty->compile_dir = "./templates_c/";
$smarty->config_dir = "./configs/";
$smarty->cache_dir = "./cache/";
$smarty->left_delimiter = '<{';
$smarty->right_delimiter = '}>';
$op=$_GET['op'];
$id=$_GET['id'];
$action=$_GET['action'];
if($id){
	include("config.php");
if($action=='delete'){
	$query = mysql_query("DELETE FROM $op WHERE id = '$id'");
	header("location:list.php?op=$op");
	
}else{
	$query = mysql_query("select * from $op where id='$id'");
	$value=  mysql_fetch_array($query);
	$smarty->assign("subject",$value['subject']);
	$smarty->assign("message",$value['message']);
	$smarty->assign("id",$value['id']);
	$smarty->assign("update","1");
}
}

$smarty->assign("op",$op);


$smarty->display('cp.html');

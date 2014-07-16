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

include("config.php");
$query = mysql_query("select * from product where id='$id'");
$value=  mysql_fetch_array($query);
$smarty->assign("subject",$value['subject']);
$smarty->assign("message",$value['message']);


$smarty->display('productmore.html');

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
$smarty->cache_lifetime = 120;
$smarty->template_dir = "./templates/";
$smarty->compile_dir = "./templates_c/";
$smarty->config_dir = "./configs/";
$smarty->cache_dir = "./cache/";
$smarty->left_delimiter = '<{';
$smarty->right_delimiter = '}>';

include("config.php");





$pagesize=10;        //设置每页数据显示数量
 
$url=$_SERVER['REQUEST_URI'];
$url=parse_url($url);
$url=$url['path'];
 
 
$sql="SELECT * FROM `product` order by id DESC";
$db_list=mysql_query($sql);
 
$num=mysql_num_rows($db_list);    //统计数据总数
$pages=$num/$pagesize;
$pages=ceil($pages);           //求出一共需要多少页进行显示
 if(empty($_GET['page'])){
 	$_GET['page']='1';
 }
 
if ($_GET['page']){
	$pageval=$_GET['page'];
	$page=($pageval-1)*$pagesize;
	}
if($num>$pagesize){
	if (!isset($pageval)) $pageval=1;
}
 
 
if ($pages==1){                  //如果总页面只有一页的话，将“上一页”“下一页”的标签替换为空。
	$pageup="";
	$pagedown="";
 
}else{
switch($pageval){
	case 1 :{
		$pageup="首页";
		$pagedown="<a href=$url?page=".($pageval+1).">下一页</a>";
		break;
	}
	default :{
		$pageup="<a href=$url?page=".($pageval-1).">上一页</a>";
		$pagedown="<a href=$url?page=".($pageval+1).">下一页</a>";
	    break;
	}
	case $pages :{
		$pageup="<a href=$url?page=".($pageval-1).">上一页</a>";
		$pagedown="末页";
		break;
    }
 
}
 
}$smarty->assign("pageconfig",$pageconfig);
//==================================================
$sql_list="SELECT * FROM `product` order by id DESC LIMIT $page,$pagesize ";        //由此控制数据显示数量部分
$db_list_list=mysql_query($sql_list);
while($row=mysql_fetch_array($db_list_list)){

	$row['dateline']=date("Y-m-d",$row['dateline']);
	$list[]=$row;      //将数据库中查询内容重新赋值
 
 
}
 
$pageconfig="当前第 $pageval 页,共 $pages 页";
 
 
$smarty->assign("pageconfig",$pageconfig);
$smarty->assign("pageup",$pageup);
$smarty->assign("pagedown",$pagedown);
$smarty->assign("list",$list);
$smarty->display('product.html');

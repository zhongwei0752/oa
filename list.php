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

$op=$_GET['op'];
if($op=='show'){
	$op='showm';
}


$pagesize=10;        //设置每页数据显示数量
 
$url=$_SERVER['REQUEST_URI'];
$url=parse_url($url);
$url=$url['path'];
 
$sql="SELECT * FROM `$op` order by id DESC";
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

 

$sql_list="SELECT * FROM `$op` order by id DESC LIMIT $page,$pagesize ";        //由此控制数据显示数量部分
$db_list_list=mysql_query($sql_list);
while($row=mysql_fetch_array($db_list_list)){

	$row['dateline']=date("Y-m-d",$row['dateline']);
	$list[]=$row;      //将数据库中查询内容重新赋值
 
 
}
include('function.php');
$page = new page($num,10);
$str=$page->getPage();

$pageconfig="当前第 $pageval 页,共 $pages 页";
 
$smarty->assign("page",$str);

$smarty->assign("list",$list);
if($_COOKIE['uid']=='1'){
	$smarty->assign("cookie",true);
}
if($op=='showm'){
	$smarty->display("show.html");
}else{
	$smarty->display("$op.html");
}


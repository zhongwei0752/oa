<?php
include("template.php");
include("encrypt.php");
include("config.php");
if(empty($_COOKIE['uid'])){
      $url = "login.php";
      echo "<script language='javascript' type='text/javascript'>";
      echo "window.location.href='$url'";
      echo "</script>";
    }
    $page=$_GET['page'];
    if(empty($page)){
    	$page='1';
    }
    $perpage='10';
    $start=($page-1)*$perpage;
    $search=$_GET['search'];
    $uid=decrypt("$_COOKIE[uid]");
	$query=mysql_query("SELECT * FROM space where uid='$uid'");
	$space=mysql_fetch_array($query);
    if($search){
    	if($_GET['status']=='qianyue'){
    		if($space['allowsearch']){
    			$query = mysql_query("select * from custom where qianyue!='1' and uid='$uid' and username like '%$search%' order by dateline DESC LIMIT $start,$perpage");
    		}else{
    			$query = mysql_query("select * from custom where qianyue!='1' and username like '%$search%' order by dateline DESC LIMIT $start,$perpage");
    		}
		}else{
			if($space['allowsearch']){
				$query = mysql_query("select * from custom where username like '%$search%' and uid='$uid' order by dateline DESC LIMIT $start,$perpage");
			}else{
				$query = mysql_query("select * from custom where username like '%$search%' order by dateline DESC LIMIT $start,$perpage");
			}
			//$query = mysql_query("select * from custom where username like '%$search%' order by dateline DESC LIMIT $start,$perpage");
		}
    }else{
    	if($_GET['status']=='qianyue'){
    		if($space['allowcts']){
    			$query = mysql_query("select * from custom where qianyue!='1' and uid='$uid' order by dateline DESC LIMIT $start,$perpage");
    		}else{
    			$query = mysql_query("select * from custom where qianyue!='1' order by dateline DESC LIMIT $start,$perpage");
    		}
		}else{
			if($space['allowcts']){
				$query = mysql_query("select * from custom where uid='$uid' order by dateline DESC LIMIT $start,$perpage");
			}else{
				$query = mysql_query("select * from custom order by dateline DESC LIMIT $start,$perpage");
			}
		}
    }

while($value=  mysql_fetch_array($query)){
	$value['dateline']=date("Y-m-d",$value['dateline']);
	$query1 = mysql_query("select * from space WHERE uid='$value[uid]'");
	$value1=  mysql_fetch_array($query1);
	$value['name']=$value1['username'];
	$query2 = mysql_query("select * from customstatus WHERE customid='$value[id]' order by dateline DESC");
	while($value2 = mysql_fetch_array($query2)){
		$query3 = mysql_query("select * from space WHERE uid='$value2[uid]'");
		$value3=  mysql_fetch_array($query3);
		$value2['name']=$value3['username'];
		$value2['dateline']=date("Y-m-d",$value2['dateline']);
		//1为初次拜访，2为走流程，3为签约完毕，4为暂时放弃
		if($value2['update1']=='1'){
			$value2['talkstatus']='初次拜访';
		}elseif($value2['update1']=='2'){
			$value2['talkstatus']='走流程';
		}elseif($value2['update1']=='3'){
			$value2['talkstatus']='签约完毕';
		}elseif($value2['update1']=='4'){
			$value2['talkstatus']='暂时放弃';
		}
		$value['customstatus'][]=$value2;
	}
	$list[]=$value;
}
$count=count($list);
if($count=='10'){
	$count='1';
}else{
	$count='0';
}
$smarty->assign('count',$count);
if($_GET['status']=='qianyue'){
$smarty->assign('qianyue','1');
}
$page=$page+1;

$smarty->assign('page',$page);
$smarty->assign('search',$_GET['search']);
$smarty->assign('list',$list);
$smarty->display('custom.html');

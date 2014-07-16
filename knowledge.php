<?php
 /**
 * Example Application

 * @package Example-application
 */
include("template.php");
include("config.php");
include("encrypt.php");
if(empty($_COOKIE['uid'])){
      $url = "login.php";
      echo "<script language='javascript' type='text/javascript'>";
      echo "window.location.href='$url'";
      echo "</script>";
    }

    //分页
	$page=$_GET['page'];
	if (empty($page)) {
		$page="1";
	}
	$perpage="10";
	$start=($page-1)*$perpage;
	$uid=decrypt("$_COOKIE[uid]");
	$search=$_GET['search'];
	$space_query=mysql_query("SELECT * FROM space WHERE uid='$uid'");
	$space_value=mysql_fetch_array($query);

	if ($search) {
		if ($space_value['allowsearch']) {
			$knowl_query=mysql_query("SELECT * FROM knowledge WHERE question LIKE '%$search%' OR q_tag LIKE '%$search%' AND uid='$uid' ORDER BY q_id DESC LIMIT $start,$perpage  ");
		}
		else{
			$knowl_query=mysql_query("SELECT * FROM knowledge WHERE question LIKE '%$search%' OR q_tag LIKE '%$search%'  ORDER BY q_id DESC LIMIT $start,$perpage  ");
		}
		
	}
	else {
		$knowl_query=mysql_query("SELECT * FROM knowledge WHERE uid = '$uid' ORDER BY q_id DESC LIMIT $start,$perpage ");
	}
	

	//获取问题提问者的姓名和问题相关信息
	
	while ( $knowl_value=mysql_fetch_array($knowl_query)) {
		$select_name_query=mysql_query("SELECT * FROM space WHERE uid='$knowl_value[uid]'");
		$select_name_value=mysql_fetch_array($select_name_query);
		$knowl_value['name']=$select_name_value['username'];
		//echo $knowl_value['q_id'];
		//获取回答者和答案信息
		$answer_query=mysql_query("SELECT * FROM answers WHERE q_id='$knowl_value[q_id]' ORDER BY a_time DESC ");
		while ( $answer_value=mysql_fetch_array($answer_query)) {
		 		$select_ans_name_query=mysql_query("SELECT * FROM space WHERE uid='$answer_value[uid]'");
				$select_ans_name_value=mysql_fetch_array($select_ans_name_query);
				$answer_value['name']=$select_ans_name_value['username'];
				$knowl_value['answer'][]=$answer_value;
		 } 
		 $list[]=$knowl_value;
		
	}
	$page=$page+1;
	$smarty->assign('list',$list);
	$smarty->assign('page',$page);
	$smarty->display("knowledge.html");

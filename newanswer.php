<?php
include("template.php");
include("config.php");
include("encrypt.php");
if (empty($_COOKIE['uid'])) {
		$url = "login.php";
		echo "<script language='javascript' type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>";
	}
	
	$get_q_id=$_GET['q_id'];
	//echo $q_id;
	$uid=decrypt("$_COOKIE[uid]");
	$sel_space_sql="SELECT * FROM space WHERE uid='$uid'";
	$value1=mysql_fetch_array(mysql_query($sel_space_sql));
	//echo $value1['username'];
	$sel_knowl_sql="SELECT * FROM knowledge WHERE q_id='$get_q_id'";
	$value2=mysql_fetch_array(mysql_query($sel_knowl_sql));
	//echo $value2['question'];

	$q_tag=$value2['q_tag'];
	//echo $q_tag;
	//echo $q_id;
	
	if ($_POST) {
		
		$my_answer=$_POST['my_answer'];
		$a_time=$_POST['a_time'];
		$q_tag=$_POST['q_tag'];
		$q_id=$_POST['q_id'];
		$insert_answ_sql="INSERT INTO answers (q_id,uid,q_tag,answer,a_time ) VALUES ('$q_id','$uid','$q_tag','$my_answer','$a_time')";
		mysql_query($insert_answ_sql); 
		$url="knowledge.php";
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('回答成功...');";
		echo "window.location.href='$url'";
		echo "</script>";
	}
	$smarty->assign('q_id',$get_q_id);
	$smarty->assign('who_answer',$value1['username']);
	$smarty->assign('question',$value2['question']);
	$smarty->assign('q_tag',$q_tag);
	$smarty->display('newanswer.html');
	
?>


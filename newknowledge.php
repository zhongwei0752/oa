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
	
	if ($_POST){
		$q_creator=$_POST['q_creator'];
		$question=$_POST['question'];
		$answer=$_POST['answer'];
		$q_tag=$_POST['q_tag'];
		$q_time=$_POST['q_time'];
		$uid=decrypt("$_COOKIE[uid]");
		if (empty($q_creator)||empty($question)) {
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('问题创建者或问题不能为空');";
			echo "</script>";
		}else{
			$ins_to_knowl_sql = "INSERT INTO knowledge (q_creator,question,q_tag,q_time,uid) VALUES ('$q_creator','$question','$q_tag','$q_time','$uid')";
			mysql_query($ins_to_knowl_sql);
			
			
	
		$sel_knowl_id_sql="SELECT * FROM knowledge WHERE q_id=(SELECT max(q_id) FROM knowledge)";
		$value=mysql_fetch_array(mysql_query($sel_knowl_id_sql));
		//var_dump($value);
			if ($answer!=="") {
				$ins_to_ans_sql="INSERT INTO answers (q_id,uid,answer,q_tag,a_time) VALUES ('$value[q_id]','$uid','$answer','$q_tag','$q_time')";
				mysql_query($ins_to_ans_sql);
			}
			$url="knowledge.php";
				echo "<script language='javascript' type='text/javascript'>";
				echo "alert('提问成功...');";
				echo "window.location.href='$url'";
				echo "</script>";
				
		}
	}
	
$smarty->display('newknowledge.html');	


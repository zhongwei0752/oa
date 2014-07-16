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
	$a_id=$_GET['a_id'];

	//获取答案信息
	$sel_ans_sql="SELECT * FROM answers WHERE a_id='$a_id'";
	$answer_value=mysql_fetch_array(mysql_query($sel_ans_sql));

	//获取回答者名字
	$sel_name_sql="SELECT * FROM space WHERE uid='$answer_value[uid]'";
	$sel_name_value=mysql_fetch_array(mysql_query($sel_name_sql));

	//获取问题
	$sel_knowl_sql="SELECT * FROM knowledge WHERE q_id='$answer_value[q_id]'";
	$sel_knowl_value=mysql_fetch_array(mysql_query($sel_knowl_sql));

	if ($_POST) {
		$my_answer=$_POST['my_answer'];
		$a_id=$_POST['a_id'];
		if ($my_answer!==$answer_value['answer']) {
			$upd_answer_sql="UPDATE answers SET answer='$my_answer' WHERE a_id='$a_id'";
			mysql_query($upd_answer_sql);
			$url="knowledge.php";
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('修改回答成功...');";
			echo "window.location.href='$url'";
			echo "</script>";
		}
		
	}
	$smarty->assign('a_id',$a_id);
	$smarty->assign('who_answer',$sel_name_value['username']);
	$smarty->assign('question',$sel_knowl_value['question']);
	$smarty->assign('my_answer',$answer_value['answer']);
	$smarty->assign('q_tag',$answer_value['q_tag']);

	
	$smarty->display('changeanswer.html');
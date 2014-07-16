<?php
	define(HOST, 'localhost');  
  	define(USER, 'root');  
  	define(PW, '2316663');  
  	define(DB, 'oa');
    $connect = mysql_connect(HOST, USER, PW)  
  	or die('Could not connect to mysql server');  
  
  	mysql_select_db(DB,$connect)  
  	or die('Could not select database.');  
  //设置查询编码，不设查询时易出现乱码  
  	mysql_query('set names utf8;');
    //未登录跳转到登陆页
    date_default_timezone_set(PRC);

<?php /* Smarty version Smarty-3.1.16, created on 2014-06-19 03:50:30
         compiled from ".\templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:2615553a24d28787a58-27763501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05b143acdc50731311b48d7001385e844715105d' => 
    array (
      0 => '.\\templates\\login.html',
      1 => 1403149829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2615553a24d28787a58-27763501',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53a24d28828289_06217893',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a24d28828289_06217893')) {function content_53a24d28828289_06217893($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"  />
    <meta content="telephone=no" name="format-detection" />
    <meta charset="UTF-8">
    <title>OA登陆</title>
    <link rel="stylesheet" href="./templates/css/oa_base.css">
    <link rel="stylesheet" href="./templates/css/oa_main.css">
</head>
<body>
    <div class="mainbody">
       <div class="login_pic">
           <img src="./templates/img/logo.png">
       </div>
        <div class="input_box">
           <input type="text" id="username" placeholder="请输入用户名" >
        </div>
        <div class="input_box" style="margin-top: 20px">
            <input type="password" id="password" placeholder="请输入密码">
        </div>
        <br>
        <div class="input_box submin_box">
            <input type="button" id="submit" value="提&nbsp;&nbsp;&nbsp;&nbsp;交" >
        </div>
    </div>
</body>
<script src="./templates/js/jquery.js"></script>
<script>
$("#submit").click(function(){
    var username=$("#username").val();
    var password=$("#password").val();
    if(!username||!password){
        alert("用户名或密码存在空值");
    }else{
        $.ajax({
            //dataType:"jsonp",
            url:"login.php",
            type: "POST",
            data:{
                "username":username,
                "password":password,
                'login':'1'
            },
            success:function(data){
                if(data=='1'){
                  window.location.href="vip.php";   
              }else{
                  alert("登陆失败");
              }
              },
            });
    }
})
</script>
</html><?php }} ?>

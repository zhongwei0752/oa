<?php /* Smarty version Smarty-3.1.16, created on 2014-07-16 14:17:48
         compiled from ".\templates\newknowledge.html" */ ?>
<?php /*%%SmartyHeaderCode:1453953c6190ca90986-50107905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd46215edd960847061cf9c900b4c0e169981749a' => 
    array (
      0 => '.\\templates\\newknowledge.html',
      1 => 1405474304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1453953c6190ca90986-50107905',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53c6190cad6800_32539825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c6190cad6800_32539825')) {function content_53c6190cad6800_32539825($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"  />
    <meta content="telephone=no" name="format-detection" />
    <meta charset="UTF-8">
    <title>新建问题</title>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="./templates/css/oa_base.css">
    <link rel="stylesheet" href="./templates/css/oa_main.css">
    <style>
        ::-webkit-input-placeholder { color: #CDCDCD;}
        input:-moz-placeholder { color: #CDCDCD;}
    </style>
</head>
<body>
<form action="newknowledge.php" name="newknowledge" method="POST">
    <div class="mainbody">
        <div class="welcome">
            <span class="w_s1">新建问题</span>
        </div>
        <div class="nfu_detail_box">
            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="position: relative;top: 5px;text-align: right">创建人：&nbsp;</div>
                <div class="nfu_d_d_r"><input class="nfu_in1" type="text" name="q_creator" placeholder="请输入您的名字..."></div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="text-align: right">问题描述：&nbsp;</div>
                <div class="nfu_d_d_r">
                    <textarea class="nfu_d_d_textarea" name="question" placeholder="客户问..."></textarea>
                </div>
                <div class="clear"></div>
            </div>



            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="text-align: right">我的回答：&nbsp;</div>
                <div class="nfu_d_d_r">
                    <textarea class="nfu_d_d_textarea" name="answer" placeholder="可以这样理解..."></textarea>
                </div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="position: relative;top: 5px;text-align: right">标签分类：&nbsp;</div>
                <div class="nfu_d_d_r"><input class="nfu_in1" type="text" name="q_tag" placeholder="请输入标签..."></div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="position: relative;top: 5px;text-align: right">创建日期：&nbsp;</div>
                <div class="nfu_d_d_r"><input class="nfu_in1" type="date" name="q_time"></div>
                <div class="clear"></div>
            </div>

            <div class="input_box submin_box">
                <input type="submit" name="submit" value="提&nbsp;&nbsp;&nbsp;&nbsp;交" >
            </div>
            <br>
        </div>

    </div>
    </form>
</body>


</html><?php }} ?>

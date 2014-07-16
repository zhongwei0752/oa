<?php /* Smarty version Smarty-3.1.16, created on 2014-07-16 14:19:13
         compiled from ".\templates\changeanswer.html" */ ?>
<?php /*%%SmartyHeaderCode:3270553c619619c6c92-00763626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98d5bc7e6012ae5e61309358ffc0e997598ab7e2' => 
    array (
      0 => '.\\templates\\changeanswer.html',
      1 => 1405474102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3270553c619619c6c92-00763626',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'a_id' => 0,
    'who_answer' => 0,
    'question' => 0,
    'my_answer' => 0,
    'q_tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53c61961a35d01_36407657',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c61961a35d01_36407657')) {function content_53c61961a35d01_36407657($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"  />
    <meta content="telephone=no" name="format-detection" />
    <meta charset="UTF-8">
    <title>修改回答</title>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="./templates/css/oa_base.css">
    <link rel="stylesheet" href="./templates/css/oa_main.css">
    <style>
        ::-webkit-input-placeholder { color: #CDCDCD;}
        input:-moz-placeholder { color: #CDCDCD;}
    </style>
</head>
<body>
<form action="changeanswer.php" name="changeanswer" method="POST">
    <div class="mainbody">
        <div class="welcome">
            <span class="w_s1">修改回答</span>
        </div>
        
        <div class="nfu_detail_box">
            <div class="nfu_d_d">
            <input class="nfu_in1" type="hidden" name="a_id" value="<?php echo $_smarty_tpl->tpl_vars['a_id']->value;?>
" >
                <div class="nfu_d_d_l" style="position: relative;top: 5px;text-align: right">修改者：&nbsp;</div>
                <div class="nfu_d_d_r"><input class="nfu_in1" type="text" name="q_creator" value="<?php echo $_smarty_tpl->tpl_vars['who_answer']->value;?>
" placeholder="请输入您的名字..."></div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="text-align: right">问题描述：&nbsp;</div>
                <div class="nfu_d_d_r">
                    <textarea class="nfu_d_d_textarea" name="question" placeholder="客户问..."><?php echo $_smarty_tpl->tpl_vars['question']->value;?>
</textarea>
                </div>
                <div class="clear"></div>
            </div>



            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="text-align: right">我的回答：&nbsp;</div>
                <div class="nfu_d_d_r">
                    <textarea class="nfu_d_d_textarea" name="my_answer" placeholder="可以这样理解..."><?php echo $_smarty_tpl->tpl_vars['my_answer']->value;?>
</textarea>
                </div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="position: relative;top: 5px;text-align: right">标签分类：&nbsp;</div>
                <div class="nfu_d_d_r"><input class="nfu_in1" type="text" name="q_tag" value="<?php echo $_smarty_tpl->tpl_vars['q_tag']->value;?>
" placeholder="请输入标签..."></div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="position: relative;top: 5px;text-align: right">创建日期：&nbsp;</div>
                <div class="nfu_d_d_r"><input class="nfu_in1" type="date" name="a_time"></div>
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

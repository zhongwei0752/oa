<?php /* Smarty version Smarty-3.1.16, created on 2014-07-16 13:58:13
         compiled from ".\templates\vip.html" */ ?>
<?php /*%%SmartyHeaderCode:61553a26024343159-83830882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf6b747bc8d6354256a473094d3573414f07d1a1' => 
    array (
      0 => '.\\templates\\vip.html',
      1 => 1405490291,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61553a26024343159-83830882',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53a260243a2b21_29554112',
  'variables' => 
  array (
    'username' => 0,
    'newcustom' => 0,
    'count' => 0,
    'newqianyue' => 0,
    'count1' => 0,
    'newxiaoqu' => 0,
    'count2' => 0,
    'count4' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a260243a2b21_29554112')) {function content_53a260243a2b21_29554112($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"  />
    <meta content="telephone=no" name="format-detection" />
    <meta charset="UTF-8">
    <title>用户首页</title>
    <link rel="stylesheet" href="./templates/css/oa_base.css">
    <link rel="stylesheet" href="./templates/css/oa_main.css">
</head>
<body>
    <div class="mainbody">
       <div class="welcome">
           <span class="w_s1">欢迎您：</span><span class="w_s2"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span>
       </div>
        <div class="userwork_ul">
            <ul>
                <li style="text-align: center">
                    <span class="uu_s3">（本月/总计）</span>
                </li>
                <li>
                    <span class="uu_s1">新客户数：</span><span class="uu_s2"><?php echo $_smarty_tpl->tpl_vars['newcustom']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>
                </li>
                <li>
                    <span class="uu_s1">本月签约客户数：</span><span class="uu_s2"><?php echo $_smarty_tpl->tpl_vars['newqianyue']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['count1']->value;?>
</span>
                </li>
                <li>
                    <span class="uu_s1">本月开通小区数：</span><span class="uu_s2"><?php echo $_smarty_tpl->tpl_vars['newxiaoqu']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['count2']->value;?>
</span>
                </li>
                <li>
                    <span class="uu_s1">本月拜访客户：</span><span class="uu_s2"><?php echo $_smarty_tpl->tpl_vars['count4']->value;?>
</span>
                </li>
            </ul>
        </div>
        <a href="custom.php">
            <div class="input_box submin_box submin_box_s1">
            <input type="button" value="客户管理" >
            </div>
        </a>
        <a href="knowledge.php">
        <div class="input_box submin_box submin_box_s2">
            <input type="button" value="知识库" >
        </div>
        </a>
        <a href="jixiao.php">
        <div class="input_box submin_box submin_box_s3">
            <input type="button" value="绩效统计" >
        </div>
        </a>
        <a href="power.php">
        <div class="input_box submin_box submin_box_s4">
            <input type="button" value="权限管理" >
        </div>
        </a>
        <br>
    </div>

</body>
</html><?php }} ?>

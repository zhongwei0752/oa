<?php /* Smarty version Smarty-3.1.16, created on 2014-07-11 04:17:01
         compiled from ".\templates\staff.html" */ ?>
<?php /*%%SmartyHeaderCode:2103153bcb7f7e1a1b1-91750370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4967ceb23a62af298345a4959b4a70d8d8bf171e' => 
    array (
      0 => '.\\templates\\staff.html',
      1 => 1405052220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2103153bcb7f7e1a1b1-91750370',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53bcb7f7e8c9c6_62473739',
  'variables' => 
  array (
    'username' => 0,
    'injob' => 0,
    'branchname' => 0,
    'branch' => 0,
    'positionname' => 0,
    'position' => 0,
    'allowcts' => 0,
    'allowctc' => 0,
    'allowsearch' => 0,
    'allowyunying' => 0,
    'allowusers' => 0,
    'allowuserc' => 0,
    'password' => 0,
    'loginuid' => 0,
    'wxkey' => 0,
    'uid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bcb7f7e8c9c6_62473739')) {function content_53bcb7f7e8c9c6_62473739($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"  />
    <meta content="telephone=no" name="format-detection" />
    <meta charset="UTF-8">
    <title>权限管理</title>
    <script src="./templates/js/jquery.js"></script>
    <link rel="stylesheet" href="./templates/css/oa_base.css">
    <link rel="stylesheet" href="./templates/css/oa_main.css">
    <style>
        ::-webkit-input-placeholder { color: #CDCDCD;}
        input:-moz-placeholder { color: #CDCDCD;}
    </style>
</head>
<body>
    <div class="mainbody">
        <form action="staff.php" name="staff" method="POST">
        <div class="welcome">
            <span class="w_s1">权限管理</span>
        </div>
        <div class="nfu_detail_box">
            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="position: relative;top: 5px;text-align: right">职员名称：&nbsp;</div>
                <div class="nfu_d_d_r"><input class="nfu_in1" type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['username']->value) {?>placeholder="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
"<?php } else { ?>placeholder="请输入..."<?php }?>></div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="text-align: right">在职：&nbsp;</div>
                <div class="nfu_d_d_r">
                    <div class="checkbox">
                        <input type="checkbox" name="injob" <?php if ($_smarty_tpl->tpl_vars['injob']->value) {?>checked<?php }?> style=" -webkit-appearance:checkbox" value="1">
                        <span class="nfu_in2">在职</span>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="position: relative;top: 5px;text-align: right">部门：&nbsp;</div>
                <div class="nfu_d_d_r">
                    <select class="nfu_sel" name="branch">
                        <?php if ($_smarty_tpl->tpl_vars['branchname']->value) {?>
                        <option value='<?php echo $_smarty_tpl->tpl_vars['branch']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['branchname']->value;?>
</option>
                        <?php }?>
                        <option value='1'>技术部</option>
                        <option value='2'>市场部</option>
                        <option value='3'>运营部</option>
                        <option value='4'>行政部</option>
                    </select>
                </div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="position: relative;top: 5px;text-align: right">职位：&nbsp;</div>
                <div class="nfu_d_d_r">
                    <select class="nfu_sel" name="position">
                        <?php if ($_smarty_tpl->tpl_vars['positionname']->value) {?>
                        <option value='<?php echo $_smarty_tpl->tpl_vars['position']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['positionname']->value;?>
</option>
                        <?php }?>
                        <option value='1'>经理</option>
                        <option value='2'>副经理</option>
                        <option value='3'>总监</option>
                        <option value='4'>副总监</option>
                    </select>
                </div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="text-align: right">客户管理：&nbsp;</div>
                <div class="nfu_d_d_r">
                    <div class="checkbox" style="width: 90%">
                        <input type="checkbox" style=" -webkit-appearance:checkbox" <?php if ($_smarty_tpl->tpl_vars['allowcts']->value) {?>checked<?php }?> value="1" name="allowcts">
                        <span class="nfu_in2">仅能查看本人创建</span>
                    </div>
                    <br>
                    <div class="clear"></div>
                    <div class="checkbox" style="width: 90%">
                        <input type="checkbox" style=" -webkit-appearance:checkbox" <?php if ($_smarty_tpl->tpl_vars['allowctc']->value) {?>checked<?php }?> value="1" name="allowctc">
                        <span class="nfu_in2">仅能编辑本人创建</span>
                    </div>

                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="text-align: right">搜索功能：&nbsp;</div>
                <div class="nfu_d_d_r">
                    <div class="checkbox" style="width: 90%">
                        <input type="checkbox" style=" -webkit-appearance:checkbox" <?php if ($_smarty_tpl->tpl_vars['allowsearch']->value) {?>checked<?php }?> value="1" name="allowsearch">
                        <span class="nfu_in2">仅能搜到本人创建</span>
                    </div>
                    <br>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="text-align: right">运营管理：&nbsp;</div>
                <div class="nfu_d_d_r">
                    <div class="checkbox" style="width: 90%">
                        <input type="checkbox" style=" -webkit-appearance:checkbox" <?php if ($_smarty_tpl->tpl_vars['allowyunying']->value) {?>checked<?php }?> value="1" name="allowyunying">
                        <span class="nfu_in2">允许进行管理</span>
                    </div>
                    <br>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="text-align: right">员工管理：&nbsp;</div>
                <div class="nfu_d_d_r">
                    <div class="checkbox" style="width: 90%">
                        <input type="checkbox" style=" -webkit-appearance:checkbox" <?php if ($_smarty_tpl->tpl_vars['allowusers']->value) {?>checked<?php }?> value="1" name="allowusers">
                        <span class="nfu_in2">仅能查看本人</span>
                    </div>
                    <br>
                    <div class="clear"></div>
                    <div class="checkbox" style="width: 90%">
                        <input type="checkbox" style=" -webkit-appearance:checkbox" <?php if ($_smarty_tpl->tpl_vars['allowuserc']->value) {?>checked<?php }?> value="1" name="allowuserc">
                        <span class="nfu_in2">仅能编辑本人</span>
                    </div>

                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>


            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="position: relative;top: 5px;text-align: right">密码：&nbsp;</div>
                <div class="nfu_d_d_r"><input class="nfu_in1" type="password" <?php if ($_smarty_tpl->tpl_vars['password']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
"<?php }?> name="password" <?php if ($_smarty_tpl->tpl_vars['password']->value) {?>placeholder="$password"<?php } else { ?>placeholder="请输入密码..."<?php }?>></div>
                <div class="clear"></div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['allowuserc']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['loginuid']->value) {?>
            <div class="input_box submin_box">
                <input type="hidden" name="wxkey" value="<?php echo $_smarty_tpl->tpl_vars['wxkey']->value;?>
">
                <input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">
                <input type="submit" value="提&nbsp;&nbsp;&nbsp;&nbsp;交" >
            </div>
            <?php }?>
            <?php } else { ?>
            <div class="input_box submin_box">
                <input type="hidden" name="wxkey" value="<?php echo $_smarty_tpl->tpl_vars['wxkey']->value;?>
">
                <input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">
                <input type="submit" value="提&nbsp;&nbsp;&nbsp;&nbsp;交" >
            </div>
            <?php }?>
            <br>
        </div>

    </div>
</form>
</body>
</html><?php }} ?>

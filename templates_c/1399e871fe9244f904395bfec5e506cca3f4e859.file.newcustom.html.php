<?php /* Smarty version Smarty-3.1.16, created on 2014-07-03 02:21:16
         compiled from ".\templates\newcustom.html" */ ?>
<?php /*%%SmartyHeaderCode:752753a7e974860a06-14963103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1399e871fe9244f904395bfec5e506cca3f4e859' => 
    array (
      0 => '.\\templates\\newcustom.html',
      1 => 1404353982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '752753a7e974860a06-14963103',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53a7e9748c1d68_46597116',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a7e9748c1d68_46597116')) {function content_53a7e9748c1d68_46597116($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"  />
    <meta content="telephone=no" name="format-detection" />
    <meta charset="UTF-8">
    <title>新增客户</title>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="./templates/css/oa_base.css">
    <link rel="stylesheet" href="./templates/css/oa_main.css">
    <style>
        ::-webkit-input-placeholder { color: #CDCDCD;}
        input:-moz-placeholder { color: #CDCDCD;}
    </style>
</head>
<body>
    <form action="newcustom.php" name="newcustom" method="POST">
    <div class="mainbody">
        <div class="welcome">
            <span class="w_s1">新建客户</span>
        </div>
        <div class="nfu_detail_box">
            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="position: relative;top: 5px;text-align: right">客户名称：&nbsp;</div>
                <div class="nfu_d_d_r"><input class="nfu_in1" type="text" name="username" placeholder="请输入..."></div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="position: relative;top: 5px;text-align: right">项目数量：&nbsp;</div>
                <div class="nfu_d_d_r"><input class="nfu_in1" type="text" name="num" placeholder="请输入..."></div>
                <div class="clear"></div>
            </div>



            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="position: relative;top: 5px;text-align: right">物业资质：&nbsp;</div>
                <div class="nfu_d_d_r">
                   <select class="nfu_sel" name="experience">
                       <option>一级物业</option>
                       <option>二级物业</option>
                       <option>三级物业</option>
                       <option>四级物业</option>
                   </select>
                </div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="position: relative;top: 5px;text-align: right">联系人A：&nbsp;</div>
                <div class="nfu_d_d_r"><input class="nfu_in1" type="text" name="linkmana" placeholder="请输入简要..."></div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l"  style="position: relative;top: 5px;text-align: right">联系人B：&nbsp;</div>
                <div class="nfu_d_d_r"><input class="nfu_in1" type="text" name="linkmanb" placeholder="请输入简要..."></div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="position: relative;top: 5px;text-align: right">联系人C：&nbsp;</div>
                <div class="nfu_d_d_r"><input class="nfu_in1" type="text" name="linkmanc" placeholder="请输入简要..."></div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="position: relative;top: 5px;text-align: right">联系人D：&nbsp;</div>
                <div class="nfu_d_d_r"><input class="nfu_in1" type="text" name="linkmand" placeholder="请输入简要..."></div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="text-align: right">签约：&nbsp;</div>
                <div class="nfu_d_d_r">
                    <div class="checkbox">
                        <input type="checkbox" style=" -webkit-appearance:checkbox" value="1" name="qianyue" >
                        <span class="nfu_in2">已签约</span>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="position: relative;top: 5px;text-align: right">签约人：&nbsp;</div>
                <div class="nfu_d_d_r"><input class="nfu_in1" type="text" name="qianyueren" placeholder="请输入签约人姓名..."></div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="position: relative;top: 5px;text-align: right">签约日期：&nbsp;</div>
                <div class="nfu_d_d_r"><input class="nfu_in1" type="date" name="dateline"></div>
                <div class="clear"></div>
            </div>

            <div class="input_box submin_box">
                <input type="submit" value="提&nbsp;&nbsp;&nbsp;&nbsp;交" >
            </div>
            <br>
        </div>

    </div>
</form>
</body>

</html><?php }} ?>

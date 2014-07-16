<?php /* Smarty version Smarty-3.1.16, created on 2014-07-15 16:53:06
         compiled from ".\templates\jixiaocontent.html" */ ?>
<?php /*%%SmartyHeaderCode:1987753c490d0a1e237-10738567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0088435128566512a8d2228ecaea3be5ee586736' => 
    array (
      0 => '.\\templates\\jixiaocontent.html',
      1 => 1405414384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1987753c490d0a1e237-10738567',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53c490d0a5c9b0_62684620',
  'variables' => 
  array (
    'newcustom' => 0,
    'count' => 0,
    'newqianyue' => 0,
    'count1' => 0,
    'newxiaoqu' => 0,
    'count2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c490d0a5c9b0_62684620')) {function content_53c490d0a5c9b0_62684620($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"  />
    <meta content="telephone=no" name="format-detection" />
    <meta charset="UTF-8">
    <title>绩效统计</title>
    <script src="./templates/js/jquery.js"></script>
    <link rel="stylesheet" href="./templates/css/oa_base.css">
    <link rel="stylesheet" href="./templates/css/oa_main.css">
    <style>
        .em1,.em2,.em3,.em4,.em5,.em6{font-style: normal}
    </style>
</head>
<body>
    <div class="mainbody">
       <div class="welcome">
           <span class="w_s1">绩效统计：</span><span class="w_s2">朱丽叶</span>
       </div>
        <div class="userwork_ul">
            <ul>
                <li style="text-align: center">
                    <span class="uu_s3">（本月/总计）</span>
                </li>
                <li>
                    <span class="uu_s1">新客户数：</span><span class="uu_s2"><em class="em1"><?php echo $_smarty_tpl->tpl_vars['newcustom']->value;?>
</em>/<em class="em2"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</em></span>
                    <div class="stat_box">
                        <div class="stat_d1"></div>
                    </div>
                </li>
                <li>
                    <span class="uu_s1">本月签约客户数：</span><span class="uu_s2"><em class="em3"><?php echo $_smarty_tpl->tpl_vars['newqianyue']->value;?>
</em>/<em class="em4"><?php echo $_smarty_tpl->tpl_vars['count1']->value;?>
</em></span>
                    <div class="stat_box">
                        <div class="stat_d2"></div>
                    </div>
                </li>
                <li>
                    <span class="uu_s1">本月开通小区数：</span><span class="uu_s2"><em class="em5"><?php echo $_smarty_tpl->tpl_vars['newxiaoqu']->value;?>
</em>/<em class="em6"><?php echo $_smarty_tpl->tpl_vars['count2']->value;?>
</em></span>
                    <div class="stat_box">
                        <div class="stat_d3"></div>
                    </div>
                </li>

            </ul>
        </div>

        <br>
    </div>

</body>
<script>
    window.onload=function(){
        //计算百分百的函数
        var fNum1 = parseFloat($('.em1').html());
        var fNum2 = parseFloat($('.em2').html());
        var fNum3 = parseFloat($('.em3').html());
        var fNum4 = parseFloat($('.em4').html());
        var fNum5 = parseFloat($('.em5').html());
        var fNum6 = parseFloat($('.em6').html());

        var fNum1_2 = (fNum1/fNum2)*100;
        var fNum3_4 = (fNum3/fNum4)*100;
        var fNum5_6 = (fNum5/fNum6)*100;


        $('.stat_d1').css({width:fNum1_2.toFixed(0)+'%'}) ;
        $('.stat_d2').css({width:fNum3_4.toFixed(0)+'%'}) ;
        $('.stat_d3').css({width:fNum5_6.toFixed(0)+'%'}) ;
    }

</script>
</html><?php }} ?>

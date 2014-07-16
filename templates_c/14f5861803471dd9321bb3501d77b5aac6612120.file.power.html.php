<?php /* Smarty version Smarty-3.1.16, created on 2014-07-11 02:58:02
         compiled from ".\templates\power.html" */ ?>
<?php /*%%SmartyHeaderCode:2586653bcaa9a3c5137-19243150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14f5861803471dd9321bb3501d77b5aac6612120' => 
    array (
      0 => '.\\templates\\power.html',
      1 => 1405047296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2586653bcaa9a3c5137-19243150',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53bcaa9a425905_28091228',
  'variables' => 
  array (
    'groupid' => 0,
    'lizhi' => 0,
    'search' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bcaa9a425905_28091228')) {function content_53bcaa9a425905_28091228($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"  />
    <meta content="telephone=no" name="format-detection" />
    <meta charset="UTF-8">
    <title>权限管理</title>
    <script src="./templates/js/jquery.js"></script>
    <link rel="stylesheet" href="./templates/css/oa_base.css">
    <link rel="stylesheet" href="./templates/css/oa_main.css">
</head>
<body>
    <div class="mainbody">
        <div class="welcome">
            <span class="w_s1">权限管理</span>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['groupid']->value=='1') {?>
        <div class="input_box">
            <input type="text" id="search" placeholder="请输入搜索内容" >
            <div id="searchsubmit" style="margin-top: -40px;position: relative;z-index: 2"><img src="./templates/img/searchbuttom.png" class="searchpic"></div>
        </div>
       <div style="height: 40px;width: 100%"></div>
       <div class="newcomtus_box">
        <?php if ($_smarty_tpl->tpl_vars['lizhi']->value) {?>
          <?php if ($_smarty_tpl->tpl_vars['search']->value) {?>
           <a href="power.php?search=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
">
           <?php } else { ?>
           <a href="power.php">
           <?php }?>
            <div class="nb_d1">
               <img src="./templates/img/ok.png">
           </div>
         </a>
         <?php } else { ?>
         <?php if ($_smarty_tpl->tpl_vars['search']->value) {?>
         <a href="power.php?status=lizhi&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
">
         <?php } else { ?>
         <a href="power.php?status=lizhi">
         <?php }?>
            <div class="nb_d1">
               <img src="./templates/img/notok.png">
           </div>
         </a>
          <?php }?>
           <div class="nb_d2">
               不显示已离职
           </div>
           <div class="nb_d3">
               <a href="staff.php"><input type="button" value="新建员工"></a>
           </div>
           <div class="clear"></div>

       </div>
       <?php }?>
        <div class="achi_ul">
            <ul>
              <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['name'] = 'sec1';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total']);
?>
              <a href="staff.php?uid=<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['uid'];?>
">
                <li>
                    <div class="achi_name">
                        <?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['username'];?>

                    </div>
                </li>
              </a>
              <?php endfor; endif; ?>
            </ul>
        </div>
        <br>
    </div>
</body>
<script>
    //选择显示签约和不签约客户按钮
    var n = 0;
   $('.nb_d1 img').click(function(){
     //  alert('dee') ;
      if(n%2==0)
      {
          $('.nb_d1 img').attr('src','./templates/img/ok.png');
          n = n+1;
      }
       else
      {
          $('.nb_d1 img').attr('src','./templates/img/notok.png');
          n = n-1;
      }
   })
    //打开列表
    $('.user_a').click(function(){
        var t = parseInt($(this).attr('data-name'));
       // alert(t);
        if(t==0)
        {
            $(this).css({backgroundImage:"url('./templates/img/select2.png')"});
            $(this).next('.user_work_ul').fadeIn();
            t=1;
            $(this).attr("data-name",function(){
                var a=t;
                return a;
            } )
        }
         else
        {
            $(this).css({backgroundImage:"url('./templates/img/select.png')"});
            $(this).next('.user_work_ul').fadeOut();
            t=0;
            $(this).attr("data-name",function(){
                var a=t;
                return a;
            } )
        }
    })
    //搜索
    $('#searchsubmit').click(function(){
      var search=$("#search").val();
      window.location.href="power.php?search="+search+"";
    })
</script>
</html><?php }} ?>

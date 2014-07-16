<?php /* Smarty version Smarty-3.1.16, created on 2014-07-11 02:57:58
         compiled from ".\templates\custom.html" */ ?>
<?php /*%%SmartyHeaderCode:1839453a7e1ae832863-30406608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb9522d78e2ed7aa1e657983d143c06738073e6a' => 
    array (
      0 => '.\\templates\\custom.html',
      1 => 1404989504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1839453a7e1ae832863-30406608',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53a7e1ae8a4386_51462789',
  'variables' => 
  array (
    'qianyue' => 0,
    'search' => 0,
    'list' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a7e1ae8a4386_51462789')) {function content_53a7e1ae8a4386_51462789($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"  />
    <meta content="telephone=no" name="format-detection" />
    <meta charset="UTF-8">
    <title>客户跟进情况</title>
    <script src="./templates/js/jquery.js"></script>
    <link rel="stylesheet" href="./templates/css/oa_base.css">
    <link rel="stylesheet" href="./templates/css/oa_main.css">
</head>
<body>
    <div class="mainbody">
        <div class="welcome">
            <span class="w_s1">客户跟进情况</span>
        </div>
        <div class="input_box">
            <input type="text" id="search" placeholder="请输入搜索内容" >
            <div id="searchsubmit" style="margin-top: -40px;position: relative;z-index: 2"><img src="./templates/img/searchbuttom.png" class="searchpic"></div>
        </div>
       <div style="height: 40px;width: 100%"></div>
       <div class="newcomtus_box">
          <?php if ($_smarty_tpl->tpl_vars['qianyue']->value) {?>
          <?php if ($_smarty_tpl->tpl_vars['search']->value) {?>
           <a href="custom.php?search=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
">
           <?php } else { ?>
           <a href="custom.php">
           <?php }?>
            <div class="nb_d1">
               <img src="./templates/img/ok.png">
           </div>
         </a>
         <?php } else { ?>
         <?php if ($_smarty_tpl->tpl_vars['search']->value) {?>
         <a href="custom.php?status=qianyue&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
">
         <?php } else { ?>
         <a href="custom.php?status=qianyue">
         <?php }?>
            <div class="nb_d1">
               <img src="./templates/img/notok.png">
           </div>
         </a>
          <?php }?>
           <div class="nb_d2">
               不显示已签约或者放弃客户
           </div>
           <a href="newcustom.php">
            <div class="nb_d3">
               <input type="button" value="新建客户">
           </div>
           </a>
           <div class="clear"></div>

       </div>
        <div class="userwork_box">
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
           <div class="user_a" data-name="0">
               <div class="kp_li_d2">  <span ><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['username'];?>
</span>&nbsp;&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['name'];?>
</span>&nbsp;&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['dateline'];?>
</span> </div>
           </div>
            <div class="user_work_ul">
                <ul>
                  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec2'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['name'] = 'sec2';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['customstatus']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sec2']['total']);
?>
                  <a href="newcustomstatus.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['id'];?>
&customstatus=<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['customstatus'][$_smarty_tpl->getVariable('smarty')->value['section']['sec2']['index']]['id'];?>
">
                  <?php if ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['customstatus'][$_smarty_tpl->getVariable('smarty')->value['section']['sec2']['index']]['update1']=='1') {?>
                  <li class="l_ok">
                  <?php } elseif ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['customstatus'][$_smarty_tpl->getVariable('smarty')->value['section']['sec2']['index']]['update1']=='2') {?>
                  <li class="l_notok">
                  <?php } elseif ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['customstatus'][$_smarty_tpl->getVariable('smarty')->value['section']['sec2']['index']]['update1']=='3') {?>
                  <li class="l_doing">
                  <?php } else { ?>
                  <li class="l_giveup">
                  <?php }?>
                  
                       <div class="kp_li_d">
                        <?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['customstatus'][$_smarty_tpl->getVariable('smarty')->value['section']['sec2']['index']]['name'];?>
说<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['customstatus'][$_smarty_tpl->getVariable('smarty')->value['section']['sec2']['index']]['talkstatus'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['customstatus'][$_smarty_tpl->getVariable('smarty')->value['section']['sec2']['index']]['dateline'];?>
<!-- 陈晓娟说可以签约&nbsp;14-3-12 --></div>
                    </li>
                  </a>
                  <?php endfor; endif; ?>
                    <a href="newcustomstatus.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['id'];?>
">
                      <li>
                        <div class="nb_d4">
                            <input type="button" value="新增跟进情况">
                        </div>
                      </li>
                    </a>
                </ul>
            </div>
            <?php endfor; endif; ?>
           <!--  <div class="user_a" data-name="0">

                <div class="kp_li_d2"> <span >万科物业</span>&nbsp;&nbsp;<span>熊黛林</span>&nbsp;&nbsp;<span>2分钟前</span></div>
            </div>
            <div class="user_work_ul">
                <ul>
                    <li class="l_ok">
                        <div class="kp_li_d">陈晓娟说可以签约&nbsp;14-3-12</div>
                    </li>
                    <li class="l_notok">
                        <div class="kp_li_d">陈晓娟说等下签约&nbsp;14-3-12</div>
                    </li>
                    <li class="l_doing">
                        <div class="kp_li_d">陈晓娟说走流程&nbsp;14-3-12</div>
                    </li>
                    <li class="l_giveup">
                        <div class="kp_li_d">陈晓娟说放弃签约&nbsp;14-3-12</div>
                    </li>
                    <li>
                        <div class="nb_d4">
                            <input type="button" value="新增跟进情况">
                        </div>
                    </li>
                </ul>
            </div>

            <div class="user_a" data-name="0">
                <div class="kp_li_d2"><span >奥园物业</span>&nbsp;&nbsp;<span>刘德华</span>&nbsp;&nbsp;<span>2分钟前</span></div>

            </div>
            <div class="user_work_ul">
                <ul>
                    <li class="l_ok">
                         <div class="kp_li_d">陈晓娟说可以签约&nbsp;14-3-12</div>
                    </li>
                    <li class="l_notok">
                        <div class="kp_li_d">陈晓娟说等下签约&nbsp;14-3-12</div>
                    </li>
                    <li class="l_doing">
                        <div class="kp_li_d">陈晓娟说走流程&nbsp;14-3-12</div>
                    </li>
                    <li class="l_giveup">
                        <div class="kp_li_d">陈晓娟说放弃签约&nbsp;14-3-12</div>
                    </li>
                    <li>
                        <div class="nb_d4">
                            <input type="button" value="新增跟进情况">
                        </div>
                    </li>
                </ul>
            </div> -->

        </div>
        <br>
        <div class="input_box submin_box">
            <a href="custom.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><input type="button" value="更&nbsp;&nbsp;&nbsp;&nbsp;多" ></a>
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
      window.location.href="custom.php?search="+search+"";
    })
</script>
</html><?php }} ?>

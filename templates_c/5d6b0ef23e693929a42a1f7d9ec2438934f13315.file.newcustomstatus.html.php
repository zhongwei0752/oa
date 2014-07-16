<?php /* Smarty version Smarty-3.1.16, created on 2014-07-11 09:00:32
         compiled from ".\templates\newcustomstatus.html" */ ?>
<?php /*%%SmartyHeaderCode:1263753b4dab10feb28-38013348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d6b0ef23e693929a42a1f7d9ec2438934f13315' => 
    array (
      0 => '.\\templates\\newcustomstatus.html',
      1 => 1405069228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1263753b4dab10feb28-38013348',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53b4dab116f699_42255355',
  'variables' => 
  array (
    'dateline' => 0,
    'message' => 0,
    'talk' => 0,
    'update1' => 0,
    'attitude' => 0,
    'chenggong' => 0,
    'date1' => 0,
    'parter' => 0,
    'name' => 0,
    'list' => 0,
    'jiaotong' => 0,
    'canfei' => 0,
    'zhusu' => 0,
    'qita' => 0,
    'id' => 0,
    'customstatus' => 0,
    'allowctc' => 0,
    'loginuid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b4dab116f699_42255355')) {function content_53b4dab116f699_42255355($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"  />
    <meta content="telephone=no" name="format-detection" />
    <meta charset="UTF-8">
    <title>添加客户跟进情况</title>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="./templates/css/oa_base.css">
    <link rel="stylesheet" href="./templates/css/oa_main.css">
    <style>
        ::-webkit-input-placeholder { color: #CDCDCD;}
        input:-moz-placeholder { color: #CDCDCD;}
    </style>
</head>
<body>
  <form action="newcustomstatus.php" name="newcustomstatus" method="POST">
    <div class="mainbody">
        <div class="welcome">
            <span class="w_s1">添加客户跟进情况</span>
        </div>
        <div class="nfu_detail_box">
            <div class="nfu_d_d">
                <span>日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;期：<input type="date" name="dateline" class="nfu_d_t2" value="<?php echo $_smarty_tpl->tpl_vars['dateline']->value;?>
"></span>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="position: relative;top: 5px">简报描述：</div>
                <div class="nfu_d_d_r"><input class="nfu_in1" type="text" name="message" value="<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
" placeholder="情况描述..."></div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l">交流方式：</div>
                <!--1为电话，2为当面拜访，3为喝茶，4为请客 -->
                <div class="nfu_d_d_r">
                    <div class="checkbox">
                        <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['talk']->value=='1') {?>checked<?php }?> style=" -webkit-appearance:checkbox" value="1" name="talk" onclick="chooseOne_s1(this)">
                        <span class="nfu_in2">电话</span>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['talk']->value=='2') {?>checked<?php }?> style=" -webkit-appearance:checkbox" value="2" name="talk" onclick="chooseOne_s1(this)">
                        <span class="nfu_in2">当面拜访</span>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['talk']->value=='3') {?>checked<?php }?> style=" -webkit-appearance:checkbox" value="3" name="talk" onclick="chooseOne_s1(this)">
                        <span class="nfu_in2">喝茶</span>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['talk']->value=='4') {?>checked<?php }?> style=" -webkit-appearance:checkbox" value="4" name="talk" onclick="chooseOne_s1(this)">
                        <span class="nfu_in2">请客</span>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l">状态更新：</div>
                <!--1为初次拜访，2为走流程，3为签约完毕，4为暂时放弃 -->
                <div class="nfu_d_d_r">
                    <div class="checkbox">
                        <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['update1']->value=='1') {?>checked<?php }?> style=" -webkit-appearance:checkbox" value="1" name="update" onclick="chooseOne_s2(this)">
                        <span class="nfu_in2">初次拜访</span>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['update1']->value=='2') {?>checked<?php }?> style=" -webkit-appearance:checkbox" value="2" name="update" onclick="chooseOne_s2(this)">
                        <span class="nfu_in2">走流程</span>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['update1']->value=='3') {?>checked<?php }?> style=" -webkit-appearance:checkbox" value="3" name="update" onclick="chooseOne_s2(this)">
                        <span class="nfu_in2">签约完毕</span>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['update1']->value=='4') {?>checked<?php }?> style=" -webkit-appearance:checkbox" value="4" name="update" onclick="chooseOne_s2(this)">
                        <span class="nfu_in2">暂时放弃</span>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l">客户态度：</div>
                <!--1为迫切，2为热情，3为冷淡 -->
                <div class="nfu_d_d_r">
                    <div class="checkbox">
                        <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['attitude']->value=='1') {?>checked<?php }?> style=" -webkit-appearance:checkbox" value="1" name="attitude" onclick="chooseOne_s3(this)">
                        <span class="nfu_in2">迫切</span>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['attitude']->value=='2') {?>checked<?php }?> style=" -webkit-appearance:checkbox" value="2" name="attitude" onclick="chooseOne_s3(this)">
                        <span class="nfu_in2">热情</span>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['attitude']->value=='3') {?>checked<?php }?> style=" -webkit-appearance:checkbox" value="3" name="attitude" onclick="chooseOne_s3(this)">
                        <span class="nfu_in2">冷淡</span>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="position: relative;top: 5px">成功希望：</div>
                <div class="nfu_d_d_r" ><input class="nfu_      in1 nfu_in3" type="text" name="chenggong" placeholder="请输入数值" value="<?php echo $_smarty_tpl->tpl_vars['chenggong']->value;?>
"><span>&nbsp;%</span></div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l" >下次计划：<br>跟进时间</div>
                <div class="nfu_d_d_r" style="position: relative;top: 5px"><input class="nfu_in1 nfu_in3" type="text" placeholder="请输入天数" name="date" value="<?php echo $_smarty_tpl->tpl_vars['date1']->value;?>
"><span>&nbsp;天后</span></div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="position: relative;top: 5px">同行同事：</div>
                <div class="nfu_d_d_r">
                   <select class="nfu_sel" name="parter">
                       <?php if ($_smarty_tpl->tpl_vars['parter']->value) {?>
                       <option value="<?php echo $_smarty_tpl->tpl_vars['parter']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</option>
                       <?php }?>
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
                       <option value="<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['username'];?>
</option>
                        <?php endfor; endif; ?>
                   </select>
                </div>
                <div class="clear"></div>
            </div>

            <div class="nfu_d_d nfu_d_d2">
                 可报销费用
            </div>

            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="position: relative;top: 5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;交通：</div>
                <div class="nfu_d_d_r" ><input class="nfu_in1 nfu_in3" type="text" name="jiaotong" placeholder="请输入数值" value="<?php echo $_smarty_tpl->tpl_vars['jiaotong']->value;?>
"><span>&nbsp;元</span></div>
                <div class="clear"></div>
            </div>
            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="position: relative;top: 5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;餐费：</div>
                <div class="nfu_d_d_r" ><input class="nfu_in1 nfu_in3" type="text" name="canfei" placeholder="请输入数值" value="<?php echo $_smarty_tpl->tpl_vars['canfei']->value;?>
"><span>&nbsp;元</span></div>
                <div class="clear"></div>
            </div>
            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="position: relative;top: 5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;住宿：</div>
                <div class="nfu_d_d_r" ><input class="nfu_in1 nfu_in3" type="text" name="zhusu" placeholder="请输入数值" value="<?php echo $_smarty_tpl->tpl_vars['zhusu']->value;?>
"><span>&nbsp;元</span></div>
                <div class="clear"></div>
            </div>
            <div class="nfu_d_d">
                <div class="nfu_d_d_l" style="position: relative;top: 5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其他：</div>
                <div class="nfu_d_d_r" ><input class="nfu_in1 nfu_in3" name="qita" type="text" placeholder="请输入数值" value="<?php echo $_smarty_tpl->tpl_vars['qita']->value;?>
"><span>&nbsp;元</span></div>
                <div class="clear"></div>
            </div>

            <div class="input_box submin_box">
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                <?php if ($_smarty_tpl->tpl_vars['customstatus']->value) {?>
                <input type="hidden" name="customstatus" value="<?php echo $_smarty_tpl->tpl_vars['customstatus']->value;?>
">
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['allowctc']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['loginuid']->value) {?>
                <input type="submit" value="提&nbsp;&nbsp;&nbsp;&nbsp;交" >
                <?php }?>
                <?php } else { ?>
                <input type="submit" value="提&nbsp;&nbsp;&nbsp;&nbsp;交" >
                <?php }?>
            </div>
            <br>
        </div>

    </div>
  </form>
</body>
<script>
  // alert($(window).width())
  //交流方式按钮选择
  function chooseOne_s1(cb){
      //先取得同name的chekcBox的集合物件
      var obj = document.getElementsByName("talk");
      for (i=0; i<obj.length; i++){
          //判斷obj集合中的i元素是否為cb，若否則表示未被點選
          if (obj[i]!=cb) obj[i].checked = false;
          //若是 但原先未被勾選 則變成勾選；反之 則變為未勾選
          //else  obj[i].checked = cb.checked;
          //若要至少勾選一個的話，則把上面那行else拿掉，換用下面那行
          else obj[i].checked = true;
      }
  }
  //状态更新按钮选择
  function chooseOne_s2(cb){
      //先取得同name的chekcBox的集合物件
      var obj = document.getElementsByName("update");
      for (i=0; i<obj.length; i++){
          //判斷obj集合中的i元素是否為cb，若否則表示未被點選
          if (obj[i]!=cb) obj[i].checked = false;
          //若是 但原先未被勾選 則變成勾選；反之 則變為未勾選
          //else  obj[i].checked = cb.checked;
          //若要至少勾選一個的話，則把上面那行else拿掉，換用下面那行
          else obj[i].checked = true;
      }
  }
  //客户态度按钮选择
  function chooseOne_s3(cb){
      //先取得同name的chekcBox的集合物件
      var obj = document.getElementsByName("attitude");
      for (i=0; i<obj.length; i++){
          //判斷obj集合中的i元素是否為cb，若否則表示未被點選
          if (obj[i]!=cb) obj[i].checked = false;
          //若是 但原先未被勾選 則變成勾選；反之 則變為未勾選
          //else  obj[i].checked = cb.checked;
          //若要至少勾選一個的話，則把上面那行else拿掉，換用下面那行
          else obj[i].checked = true;
      }
  }
</script>
</html><?php }} ?>

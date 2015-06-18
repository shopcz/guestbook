<?php /* Smarty version Smarty-3.1.19, created on 2014-08-12 20:43:56
         compiled from "D:\phpStudy\WWW\a.com\theme\default\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1836553ea0c0ccb3c72-51505726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb62edf5f5a70dafcaf24881e8d5e705c4f40855' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\a.com\\theme\\default\\index.html',
      1 => 1407049474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1836553ea0c0ccb3c72-51505726',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'book_list' => 0,
    'img' => 0,
    'pageBar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ea0c0d201316_16213285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea0c0d201316_16213285')) {function content_53ea0c0d201316_16213285($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\phpStudy\\WWW\\a.com\\include\\smarty\\plugins\\modifier.date_format.php';
?> <?php echo $_smarty_tpl->getSubTemplate ("layout/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


  <div id="box">
  <?php if ($_smarty_tpl->tpl_vars['book_list']->value=='') {?>
  <center> <font color=red>很抱歉，面板暂无留言!</font> </center>
  <?php } else { ?>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['book'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['book']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['name'] = 'book';
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['book_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['book']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['book']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['book']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['book']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['book']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['book']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['total']);
?>
    <div class="box_list">
      <p><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
online.gif" alt="留言者" /> <strong><?php echo $_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['nickname'];?>
</strong></p>
      <div class="list_time">
        Time:<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['add_date'],'%Y-%m-%d');?>
 / IP:<?php echo $_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['add_ip'];?>
 / QQ:<?php if ($_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['yc_qq']==1) {?>
***
<?php } else { ?>
<img src='<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
30x30.png' title=<?php echo $_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['qq'];?>
>
<?php }?>/  Email:<?php if ($_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['yc_email']==1) {?>
***
<?php } else { ?>
<a href=mailto:<?php echo $_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['email'];?>
><img src='<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
email.png' title=<?php echo $_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['email'];?>
></a>
<?php }?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="STYLE2">[带&quot;<span class="STYLE3">*</span>&quot;号为隐藏内容]</span></div>
      <div class="list_t">
        <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
ico_1.gif" alt="问题标题" /> <?php echo $_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['title'];?>

      </div>
      <div class="list_dc">
         <?php echo $_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['content'];?>

      </div>

	  <div class="list_d">
        <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
ico_2.gif" alt="回答" /> <span>回复：</span> <?php if ($_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['reply']==null) {?>
此留言暂未回复
<?php } else { ?>
<?php echo $_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['reply'];?>

<?php }?>
      </div>
      <div class="list_time">
        Response Time:2014-8-1 15:53:08

      </div>

    </div>
    <div class="line"></div>
	 <?php endfor; endif; ?>
<?php }?>
	<table width=100% border=0 cellpadding=0 cellspacing=0 ><TR >
<TD align=right  class=hui>
<p align='center'>
<?php echo $_smarty_tpl->tpl_vars['pageBar']->value;?>
</TD>
</TR>
</table>

  </div>
 <?php echo $_smarty_tpl->getSubTemplate ("layout/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>

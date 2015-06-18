<?php /* Smarty version Smarty-3.1.19, created on 2014-08-13 14:58:00
         compiled from "D:\phpStudy\WWW\a.com\install\template\check.htm" */ ?>
<?php /*%%SmartyHeaderCode:540353ea081d7cc8b4-44655946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '731b4d8fe7a0d1fa4120200f923c15a290888d25' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\a.com\\install\\template\\check.htm',
      1 => 1407913079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '540353ea081d7cc8b4-44655946',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ea081d820768_36763893',
  'variables' => 
  array (
    'title' => 0,
    'lang' => 0,
    'sys_info' => 0,
    'writeable' => 0,
    'no_write' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea081d820768_36763893')) {function content_53ea081d820768_36763893($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link href="template/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
 <div class="logo"><a href="http://www.douco.com" target="_blank"><img src="template/logo.gif" alt="DouPHP" title="DouPHP" /></a></div>
 <div class="check">
  <h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['check_system'];?>
</h3>
  <ul>
   <li><?php echo $_smarty_tpl->tpl_vars['lang']->value['os'];?>
..................................................................<?php echo $_smarty_tpl->tpl_vars['sys_info']->value['os'];?>
</li>
   <li><?php echo $_smarty_tpl->tpl_vars['lang']->value['web_server'];?>
................................<?php echo $_smarty_tpl->tpl_vars['sys_info']->value['web_server'];?>
</li>
   <li><?php echo $_smarty_tpl->tpl_vars['lang']->value['php_version'];?>
..................................................................<?php echo $_smarty_tpl->tpl_vars['sys_info']->value['php_ver'];?>
</li>
   <li><?php echo $_smarty_tpl->tpl_vars['lang']->value['mysql_version'];?>
..................................................................<?php echo $_smarty_tpl->tpl_vars['sys_info']->value['mysql_ver'];?>
</li>
   <li><?php echo $_smarty_tpl->tpl_vars['lang']->value['socket'];?>
..................................................................<?php echo $_smarty_tpl->tpl_vars['sys_info']->value['socket'];?>
</li>
   <li><?php echo $_smarty_tpl->tpl_vars['lang']->value['timezone'];?>
..................................................................<?php echo $_smarty_tpl->tpl_vars['sys_info']->value['timezone'];?>
</li>
   <li><?php echo $_smarty_tpl->tpl_vars['lang']->value['gd_version'];?>
..................................................................<?php echo $_smarty_tpl->tpl_vars['sys_info']->value['gd'];?>
</li>
   <li><?php echo $_smarty_tpl->tpl_vars['lang']->value['zlib'];?>
..................................................................<?php echo $_smarty_tpl->tpl_vars['sys_info']->value['zlib'];?>
</li>
  </ul>
  <h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['check_dir'];?>
</h3>
  <ul>
  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['writeable'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['writeable']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['name'] = 'writeable';
$_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['writeable']['total']);
?>
   <li><?php echo $_smarty_tpl->tpl_vars['writeable']->value[$_smarty_tpl->getVariable('smarty')->value['section']['writeable']['index']]['dir'];?>
..................................................................<?php echo $_smarty_tpl->tpl_vars['writeable']->value[$_smarty_tpl->getVariable('smarty')->value['section']['writeable']['index']]['if_write'];?>
</li>
 <?php endfor; endif; ?>
  </ul>
  <p class="action">
  <input type="button" class="btnGray" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['back'];?>
" onclick="location.href='index.php?step=welcome'"/>
<!-- <?php if ($_smarty_tpl->tpl_vars['no_write']->value) {?> -->
  <input type="submit" class="btnGray" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['next'];?>
" onclick="location.href='index.php?step=setting'" disabled="true"/>
<!-- <?php } else { ?> -->
  <input type="submit" class="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['next'];?>
" onclick="location.href='index.php?step=setting'"/>
 <!-- <?php }?> -->
  </p>
 </div>
</div>
</body>
</html><?php }} ?>

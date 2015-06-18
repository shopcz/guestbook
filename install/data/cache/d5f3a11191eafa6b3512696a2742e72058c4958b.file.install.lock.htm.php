<?php /* Smarty version Smarty-3.1.19, created on 2014-08-12 20:44:53
         compiled from "D:\phpStudy\WWW\a.com\install\template\install.lock.htm" */ ?>
<?php /*%%SmartyHeaderCode:1270553ea0c1f8a4dd6-98769519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5f3a11191eafa6b3512696a2742e72058c4958b' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\a.com\\install\\template\\install.lock.htm',
      1 => 1407847492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1270553ea0c1f8a4dd6-98769519',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ea0c1f917892_94423082',
  'variables' => 
  array (
    'title' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea0c1f917892_94423082')) {function content_53ea0c1f917892_94423082($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
 <div class="installLock">
  <h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['lock'];?>
</h3>
  <ul><?php echo $_smarty_tpl->tpl_vars['lang']->value['lock_content'];?>
</ul>
 </div>
</div>
</body>
</html><?php }} ?>

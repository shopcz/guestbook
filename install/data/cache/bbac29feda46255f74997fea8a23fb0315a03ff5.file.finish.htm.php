<?php /* Smarty version Smarty-3.1.19, created on 2014-08-13 00:35:24
         compiled from "D:\phpStudy\WWW\a.com\install\template\finish.htm" */ ?>
<?php /*%%SmartyHeaderCode:2126653ea0bb158d271-45806072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbac29feda46255f74997fea8a23fb0315a03ff5' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\a.com\\install\\template\\finish.htm',
      1 => 1407861273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2126653ea0bb158d271-45806072',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ea0bb1614762_64220438',
  'variables' => 
  array (
    'title' => 0,
    'lang' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea0bb1614762_64220438')) {function content_53ea0bb1614762_64220438($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
 <div class="finish">
  <h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['finish_title'];?>
</h3>
  <p class="success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['finish'];?>
</p>
  <ul>
   <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
     <td width="120"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['setting_username'];?>
：</strong></td>
     <td>
      <?php echo $_smarty_tpl->tpl_vars['username']->value;?>

     </td>
    </tr>
    <tr>
     <td><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['setting_password'];?>
：</strong></td>
     <td>
      <?php echo $_smarty_tpl->tpl_vars['lang']->value['finish_password'];?>

     </td>
    </tr>
   </table>
  </ul>
  <p class="action">
   <a href="../system" class="btn"><?php echo $_smarty_tpl->tpl_vars['lang']->value['load'];?>
</a>
  </p>
 </div>
</div>
</body>
</html><?php }} ?>

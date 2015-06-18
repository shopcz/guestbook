<?php /* Smarty version Smarty-3.1.19, created on 2014-08-12 20:43:57
         compiled from "D:\phpStudy\WWW\a.com\theme\default\layout\head.html" */ ?>
<?php /*%%SmartyHeaderCode:2091453ea0c0d215591-63580917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e035fdc22de0eee14646d6f96034e4e18da6833b' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\a.com\\theme\\default\\layout\\head.html',
      1 => 1407251856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2091453ea0c0d215591-63580917',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cf' => 0,
    'css' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ea0c0d25cdd7_37596882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea0c0d25cdd7_37596882')) {function content_53ea0c0d25cdd7_37596882($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="keywords" content="<?php echo $_smarty_tpl->tpl_vars['cf']->value['keyword'];?>
"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
css.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
pager.css" type="text/css" rel="stylesheet" />
<title><?php echo $_smarty_tpl->tpl_vars['cf']->value['wzname'];?>
</title>
<style type="text/css">
<!--
.STYLE2 {color:#C2C2C2;}
.STYLE3 {color: #FF0000}
-->
</style>
</head>
<body>
<div id="contain">
  <div id="header">
    <div class="header_pic">
  <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
top.png" width="900" height="170" />
</div>
<div class="header_menu">
  <ul>
    <li><a href="index.php" target="_self">首页</a></li>
    <li><a href="add_book.php" target="_self">发表留言</a></li>
    <li><a href="system/" target="_blank">留言管理</a></li>
  </ul>
  <div class="clear"></div>
</div>
<div class="header_search">
  <div class="search">
    <form name="search" method="get" action="search.php">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="192" style=" padding:3px 0px;"><input type="text" name="keys" class="s_c" /></td>
        <td width="10%" style=" line-height:30px;"><input type="image" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
s.gif"></td>
        <td>&nbsp;</td>
      </tr>
    </table>
    </form>
  </div>
</div>  
  </div><?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2014-08-13 00:48:30
         compiled from "D:\phpStudy\WWW\a.com\install\template\setting.htm" */ ?>
<?php /*%%SmartyHeaderCode:2698353ea0aebded274-86605999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b8c306436a456edbdf237c4deaa0738519ab04f' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\a.com\\install\\template\\setting.htm',
      1 => 1407862109,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2698353ea0aebded274-86605999',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ea0aebe4b4f9_05069518',
  'variables' => 
  array (
    'title' => 0,
    'cue' => 0,
    'lang' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea0aebe4b4f9_05069518')) {function content_53ea0aebe4b4f9_05069518($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
 <div class="setting">
  <!-- <?php if ($_smarty_tpl->tpl_vars['cue']->value) {?> -->
  <p class="cue"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['wrong'];?>
：</strong><?php echo $_smarty_tpl->tpl_vars['cue']->value;?>
</p>
  <!-- <?php }?> -->
  <form action="index.php?step=setting" method="POST">
   <ul>
    <h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['setting_mysql'];?>
</h3>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
     <tr>
      <td width="120"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['setting_host'];?>
：</strong></td>
      <td width="225">
       <input type="text" name="dbhost" class="textInput" value="<?php if ($_smarty_tpl->tpl_vars['post']->value['dbhost']) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['dbhost'];?>
<?php } else { ?>localhost<?php }?>"/>
      </td>
      <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['setting_host_cue'];?>
</td>
     </tr>
     <tr>
      <td><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['setting_dbuser'];?>
：</strong></td>
      <td>
       <input name="dbuser" type="text" class="textInput" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['dbuser'];?>
"/>
      </td>
      <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['setting_dbuser_cue'];?>
</td>
     </tr>
     <tr>
      <td><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['setting_dbpass'];?>
：</strong></td>
      <td>
       <input type="password" name="dbpass" class="textInput"/>
      </td>
      <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['setting_dbpass_cue'];?>
</td>
     </tr>
     <tr>
      <td><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['setting_dbname'];?>
：</strong></td>
      <td>
       <input name="dbname" type="text" class="textInput" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['dbname'];?>
"/>
      </td>
      <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['setting_dbname_cue'];?>
</td>
     </tr>
    </table>
    <h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['setting_manager'];?>
</h3>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
     <tr>
      <td width="120"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['setting_username'];?>
：</strong></td>
      <td width="225">
       <input name="username" type="text" class="textInput" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['username'];?>
"/>
      </td>
      <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['setting_username_cue'];?>
</td>
     </tr>
     <tr>
      <td><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['setting_password'];?>
：</strong></td>
      <td>
       <input type="password" name="password" class="textInput"/>
      </td>
      <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['setting_password_cue'];?>
</td>
     </tr>
     <tr>
      <td><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['setting_password_confirm'];?>
：</strong></td>
      <td>
       <input type="password" name="password_confirm" class="textInput"/>
      </td>
      <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['setting_password_confirm_cue'];?>
</td>
     </tr>
    </table>
   </ul>
   <p class="action">
    <input type="button" class="btnGray" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['back'];?>
" onclick="location.href='index.php?step=check'"/>
    <input type="submit" class="btn" name="install" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['setting_submit'];?>
">
   </p>
  </form>
 </div>
</div>
</body>
</html><?php }} ?>

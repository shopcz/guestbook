<?php /* Smarty version Smarty-3.1.19, created on 2014-08-13 00:15:59
         compiled from "D:\phpStudy\WWW\a.com\system\templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1330953ea3dbfe0e2c4-14739529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55f9f58889f0be42178864f93c17d6ce24593ea2' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\a.com\\system\\templates\\login.html',
      1 => 1407073912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1330953ea3dbfe0e2c4-14739529',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ea3dbff21fe2_16927732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea3dbff21fe2_16927732')) {function content_53ea3dbff21fe2_16927732($_smarty_tpl) {?>

<html>
<head>
<title>后台登陆-TTASP在线留言薄</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
<!--
body {
	background-image: url(<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
log_bj.png);
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style><body><div style=" margin-top:162px;">
<table width="745" height="344" border="0" align="center" background="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
log.png" cellpadding="0" cellspacing="0">
  <tr>
    <td height="307" align="center" valign="middle"><table width="745" height="126" border="0" align="center" cellpadding="0" cellspacing="0">
    <form  name="add" method="post" action="?action=login">
      <tr>
        <td width="305">&nbsp;</td>
        <td width="156" height="25" valign="middle">
          <input name="username" type="text" id="name" size="18" maxlength="20" style=" height:18px; margin-top:20px;" />              </td>
        <td width="284">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td height="25" valign="middle"><input name="password" type="password" id="pass" size="19" maxlength="20" style=" height:18px; margin-top:6px;" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td height="25" valign="bottom"><input name="captcha" type="text" size="7" style=" height:18px;" /> <img src="../../code.php?" onClick="this.src+=Math.random()" alt="图片看不清？点击重新得到验证码" style="cursor:hand;position:absolute;top:337px;" height="18" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td height="2"><input type="submit" name="button"  value="提交" style="margin-top:3px;"> &nbsp;
          <input type="reset" name="button2"  value="清空" style="margin-top:3px;">
          </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="13">&nbsp;</td>
        <td><div align="left">    
        </div></td>
        <td>&nbsp;</td>
      </tr>
      </form>
    </table></td>
  </tr>
</table></div>
</body>
</html>
<?php }} ?>

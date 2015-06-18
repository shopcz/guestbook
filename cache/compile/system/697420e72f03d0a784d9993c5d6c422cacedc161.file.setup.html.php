<?php /* Smarty version Smarty-3.1.19, created on 2014-08-13 00:16:26
         compiled from "D:\phpStudy\WWW\a.com\system\templates\setup.html" */ ?>
<?php /*%%SmartyHeaderCode:1376053ea3ddab82434-53531113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '697420e72f03d0a784d9993c5d6c422cacedc161' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\a.com\\system\\templates\\setup.html',
      1 => 1407143285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1376053ea3ddab82434-53531113',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ea3ddac36e69_32272602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea3ddac36e69_32272602')) {function content_53ea3ddac36e69_32272602($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>系统设置</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	font-size:12px;
}
.button{font-size:12px; background:url(button.gif); border:1px solid #BDC5CA; height:23px;  color:#333333}
.STYLE1 {font-size: 12px}
.STYLE3 {font-size: 12px; font-weight: bold; }
.STYLE5 {color: #FF0000}
-->
</style>
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="30" background="/static/images/admin/tab_05.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12" height="30"><img src="/static/images/admin/tab_03.gif" width="12" height="30" /></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="46%" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="5%"><div align="center"><img src="/static/images/admin/tb.gif" width="16" height="16" /></div></td>
                <td width="95%" class="STYLE1"><span class="STYLE3">你当前的位置</span>：[网站系统设置]</td>
              </tr>
            </table></td>
            <td width="54%">&nbsp;</td>
          </tr>
        </table></td>
        <td width="16"><img src="/static/images/admin/tab_07.gif" width="16" height="30" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="8" background="/static/images/admin/tab_12.gif">&nbsp;</td>
        <td>
        <form  name="add" method="post" action="?act=ok">
        <table width="100%" border="0" cellspacing="5" cellpadding="0">
              <tr>
                <td width="20%"><span class="STYLE3">系统名称：</span></td>
                <td width="80%"><input name="wzname" type="text" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['wzname'];?>
" size="50" /> </td>
              </tr>
			  <tr>
                <td width="20%"><span class="STYLE3">访问地址：</span></td>
                <td width="80%"><input name="url" type="text" id="url" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
" size="50" /> </td>
              </tr>
              <tr>
                <td width="20%"><span class="STYLE3">系统描述：</span></td>
                <td width="80%"><input name="descriptions" type="text" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['descriptions'];?>
" size="50" /></td>
              </tr>
              <tr>
                <td width="20%"><span class="STYLE3">系统关键字：</span></td>
                <td width="80%"><input name="keywords" type="text" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['keywords'];?>
" size="50" /></td>
              </tr>
              <tr>
                <td width="20%"><span class="STYLE3">留言是否审核：</span></td>
                <td width="80%"><input type="radio" name="gbook_sh" value="0" <?php if ($_smarty_tpl->tpl_vars['config']->value['gbook_sh']==0) {?>checked <?php }?>/>
无需审核　
  <input type="radio" name="gbook_sh" value="1" <?php if ($_smarty_tpl->tpl_vars['config']->value['gbook_sh']==1) {?> checked<?php }?>/>
需要审核</td>
              </tr>
              <tr>
                <td width="20%"><span class="STYLE3">模板目录：</span></td>
                <td width="80%"><input name="theme" type="text" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['theme'];?>
" size="10" /> 
                  </td>
              </tr>
              <tr>
                <td width="20%">&nbsp;</td>
                <td width="80%"><input type="submit" name="button" id="button" value="保存系统设置" class="button" /></td>
              </tr>
        </table>
        </form>
        </td>
        <td width="8" background="/static/images/admin/tab_15.gif">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="35" background="/static/images/admin/tab_19.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12" height="35"><img src="/static/images/admin/tab_18.gif" width="12" height="35" /></td>
        <td>&nbsp;</td>
        <td width="16"><img src="/static/images/admin/tab_20.gif" width="16" height="35" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<?php }} ?>

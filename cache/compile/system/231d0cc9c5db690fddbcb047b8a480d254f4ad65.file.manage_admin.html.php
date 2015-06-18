<?php /* Smarty version Smarty-3.1.19, created on 2014-08-13 00:16:25
         compiled from "D:\phpStudy\WWW\a.com\system\templates\manage_admin.html" */ ?>
<?php /*%%SmartyHeaderCode:990153ea3dd9678360-45870894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '231d0cc9c5db690fddbcb047b8a480d254f4ad65' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\a.com\\system\\templates\\manage_admin.html',
      1 => 1407489114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '990153ea3dd9678360-45870894',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'img' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ea3dd976e545_56665849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea3dd976e545_56665849')) {function content_53ea3dd976e545_56665849($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改管理员资料</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	font-size:12px;
}
.button{font-size:12px; background:url(<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
button.gif); border:1px solid #BDC5CA; height:23px;  color:#333333}
.STYLE1 {font-size: 12px}
.STYLE3 {font-size: 12px; font-weight: bold; }
.STYLE7 {font-size: 12px; font-weight: bold; color: #006600; }
-->
</style>
</head>
<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="30" background="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
tab_05.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12" height="30"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
tab_03.gif" width="12" height="30" /></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="46%" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="5%"><div align="center"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
tb.gif" width="16" height="16" /></div></td>
                <td width="95%" class="STYLE1"><span class="STYLE3">你当前的位置</span>：[管理员管理]</td>
              </tr>
            </table></td>
            <td width="54%">&nbsp;</td>
          </tr>
        </table></td>
        <td width="16"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
tab_07.gif" width="16" height="30" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">      
      <tr>
        <td width="8" background="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
tab_12.gif">&nbsp;</td>
        <td><table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" >
        <form action="manage_admin.php?act=update" method="post" name="edit" id="edit">
        <tr onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8" >
          <td height="25" width="12%" class="td">管理员帐号：</td>
          
		   <td width="88%"><input name="username" type="text" id="admin" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['username'];?>
" size="30" /readonly></td>
                
        </tr>
        <tr  onmouseout="style.backgroundColor='#FFFFFF'" bgcolor="#FFFFFF">
          <td width="12%" class="td">登陆密码：</td>
          <td class="td"><input name="password" type="text" size="30" id="password" value="" />
            不修改请留空！</td>
        </tr>
        <tr  onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
          <td width="12%" class="td">确认密码：</td>
          <td class="td"><input name="password2" type="text" size="30" id="password2" /></td>
        </tr>
        <tr  onmouseout="style.backgroundColor='#FFFFFF'" bgcolor="#FFFFFF">
          <td height="25" class="td">&nbsp;</td>
          <td class="td"><input type="submit" name="button" id="button" value="确定修改"  class="button"/></td>
        </tr>
       </form>
      </table></td>
        <td width="8" background="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
tab_15.gif">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="35" background="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
tab_19.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12" height="35"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
tab_18.gif" width="12" height="35" /></td>
        <td>&nbsp;</td>
        <td width="16"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
tab_20.gif" width="16" height="35" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html><?php }} ?>

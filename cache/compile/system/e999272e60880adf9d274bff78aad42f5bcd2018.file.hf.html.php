<?php /* Smarty version Smarty-3.1.19, created on 2014-08-13 00:49:46
         compiled from "D:\phpStudy\WWW\a.com\system\templates\hf.html" */ ?>
<?php /*%%SmartyHeaderCode:753253ea45aae8f3d6-55195853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e999272e60880adf9d274bff78aad42f5bcd2018' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\a.com\\system\\templates\\hf.html',
      1 => 1407240842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '753253ea45aae8f3d6-55195853',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'img' => 0,
    'book_one' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ea45ab06e4a9_66656766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea45ab06e4a9_66656766')) {function content_53ea45ab06e4a9_66656766($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\phpStudy\\WWW\\a.com\\include\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>回复留言</title>
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
                <td width="95%" class="STYLE1"><span class="STYLE3">你当前的位置</span>：[留言反馈回复]</td>
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
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="8" background="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
tab_12.gif">&nbsp;</td>
        <td>
        <form  name="hf" method="post" action="hf_gbook.php?act=save&id=<?php echo $_smarty_tpl->tpl_vars['book_one']->value['id'];?>
">
        <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" >
        <tr  onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8" >
        <td height="28" width="11%" class="td">留言分类</td>
        <td width="89%"  class="td"><?php echo $_smarty_tpl->tpl_vars['book_one']->value['sort_name'];?>
</td>
      </tr>
      <tr  onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8" >
        <td height="28" width="11%" class="td">留言标题</td>
        <td width="89%"  class="td">&nbsp;<?php echo $_smarty_tpl->tpl_vars['book_one']->value['title'];?>
</td>
      </tr>
      <tr  onmouseout="style.backgroundColor='#FFFFFF'" bgcolor="#FFFFFF">
        <td height="25" width="11%" class="td">留言姓名</td>
        <td class="td">&nbsp;<?php echo $_smarty_tpl->tpl_vars['book_one']->value['nickname'];?>
</td>
      </tr>
      <tr  onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
        <td height="25" width="11%" class="td">QQ</td>
        <td class="td">&nbsp;<?php echo $_smarty_tpl->tpl_vars['book_one']->value['qq'];?>
</td>
      </tr>
    <tr  onmouseout="style.backgroundColor='#FFFFFF'" bgcolor="#FFFFFF">
        <td height="25" class="td">E-Mail</td>
        <td class="td">&nbsp;<?php echo $_smarty_tpl->tpl_vars['book_one']->value['email'];?>
</td>
    </tr>
      <tr  onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
        <td height="25" class="td">手机</td>
        <td class="td">&nbsp;<?php echo $_smarty_tpl->tpl_vars['book_one']->value['tel'];?>
</td>
      </tr>
    <tr  onmouseout="style.backgroundColor='#FFFFFF'" bgcolor="#FFFFFF">
        <td height="25" class="td">留言时间</td>
        <td class="td">&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['book_one']->value['add_date'],'%Y-%m-%d');?>
</td>
    </tr>
	<tr  onmouseout="style.backgroundColor='#FFFFFF'" bgcolor="#FFFFFF">
        <td height="25" class="td">联系地址</td>
        <td class="td">&nbsp;<?php echo $_smarty_tpl->tpl_vars['book_one']->value['address'];?>
</td>
    </tr>
    <tr  onmouseout="style.backgroundColor='#FFFFFF'" bgcolor="#FFFFFF">
      <td height="13" class="td">留言内容</td>
      <td class="td"><label><?php echo $_smarty_tpl->tpl_vars['book_one']->value['content'];?>
</label></td>
    </tr>
    <tr  onmouseout="style.backgroundColor='#FFFFFF'" bgcolor="#FFFFFF">
      <td height="12" class="td">回复内容</td>
      <td class="td"><textarea name="reply" cols="40" rows="8"><?php echo $_smarty_tpl->tpl_vars['book_one']->value['reply'];?>
</textarea></td>
    </tr>
    <tr  onmouseout="style.backgroundColor='#FFFFFF'" bgcolor="#FFFFFF">
      <td height="25" class="td">&nbsp;</td>
      <td class="td"><label>
        <input type="submit" name="button" id="button" value="回复留言" class="button"/>
      </label></td>
    </tr>
    </table>
    </form>
    </td>
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

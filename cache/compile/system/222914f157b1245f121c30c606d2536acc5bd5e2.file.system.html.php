<?php /* Smarty version Smarty-3.1.19, created on 2014-08-13 00:16:23
         compiled from "D:\phpStudy\WWW\a.com\system\templates\system.html" */ ?>
<?php /*%%SmartyHeaderCode:697953ea3dd74a4a66-62769427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '222914f157b1245f121c30c606d2536acc5bd5e2' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\a.com\\system\\templates\\system.html',
      1 => 1407828427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '697953ea3dd74a4a66-62769427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ea3dd75edf58_76383230',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea3dd75edf58_76383230')) {function content_53ea3dd75edf58_76383230($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>网站所在服务器信息</title>
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
.STYLE3 {font-size: 12px; font-weight: bold; }
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" id="css" href="/static/images/admin/style.css">
<style type="text/css">
<!--
.STYLE6 {color: #000000}
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
                <td width="95%" class="STYLE6"><span class="STYLE3">你当前的位置</span>：[网站服务器信息查看]</td>
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
        
        <table width="100%" border="0" align="center" cellpadding="4" cellspacing="0" >                
          <tr>
             <td height="25" width="16%" class="td">程序绝对路径:</td>
             <td width="30%"  class="td"><?php echo $_smarty_tpl->tpl_vars['system']->value['now'];?>
</td>
             <td width="16%"  class="td">PHP版本号：</td>
             <td width="38%"  class="td"><?php echo $_smarty_tpl->tpl_vars['system']->value['php'];?>
</td>
          </tr>
          <tr>
             <td height="25" width="16%" class="td">请求机器IP地址：</td>
             <td class="td"><?php echo $_smarty_tpl->tpl_vars['system']->value['c_ip'];?>
</td>
             <td class="td">服务器内部IP：</td>
             <td class="td"><?php echo $_smarty_tpl->tpl_vars['system']->value['ip'];?>
</td>
          </tr>
          <tr>
             <td height="25" width="16%"  class="td">SCRIPT虚拟路径：</td>
             <td class="td">/system/system.asp</td>
             <td class="td">服务器IP地址：</td>
             <td class="td"><?php echo $_smarty_tpl->tpl_vars['system']->value['server'];?>
</td>
          </tr>
          <tr>
             <td height="25" width="16%" class="td">服务器端口：</td>
             <td class="td"><?php echo $_smarty_tpl->tpl_vars['system']->value['port'];?>
</td>
             <td class="td">协议名称和版本：</td>
             <td class="td"><?php echo $_smarty_tpl->tpl_vars['system']->value['protocol'];?>
</td>
          </tr>
          <tr>
             <td height="25" class="td">Zend 支持：</td>
             <td  class="td">
				<b><?php echo $_smarty_tpl->tpl_vars['system']->value['zend'];?>
</b></td>
                 <td  class="td">
                 当前系统版本号：
                   </td>
                 <td  class="td">

<b><?php echo $_smarty_tpl->tpl_vars['system']->value['info'];?>
</b>
</td>
               </tr>
              </table>
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
                <td width="95%" class="STYLE1"><span class="STYLE3">你当前的位置</span>：[网站版权信息]</td>
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
          <table cellpadding="6" cellspacing="5" border="0" width="100%">
            <tr>
              <td width="16%">网站版权所有：</td>
              <td width="84%"><?php echo $_smarty_tpl->tpl_vars['system']->value['author'];?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['system']->value['url'];?>
</a></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
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

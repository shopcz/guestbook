<?php /* Smarty version Smarty-3.1.19, created on 2014-08-13 14:08:59
         compiled from "D:\phpStudy\WWW\a.com\system\templates\fl.html" */ ?>
<?php /*%%SmartyHeaderCode:2108953eb00fb6e7f77-02365425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abd6c1d77deca12c33a8e18b0df2efef3219c54a' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\a.com\\system\\templates\\fl.html',
      1 => 1407250250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2108953eb00fb6e7f77-02365425',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'img' => 0,
    'sort' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53eb00fbc3f2f6_78238689',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53eb00fbc3f2f6_78238689')) {function content_53eb00fbc3f2f6_78238689($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>分类管理</title>
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
                <td width="95%" class="STYLE1"><span class="STYLE3">你当前的位置</span>：[留言分类管理]</td>
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
        
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sort'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sort']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['name'] = 'sort';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['sort']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['total']);
?>
        <table width="100%" border="0" cellpadding="5" cellspacing="0">
        <form action="manage_gbook_fl.php?edit=ok&id=<?php echo $_smarty_tpl->tpl_vars['sort']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sort']['index']]['id'];?>
" method="post" name="edit">
            <tr>
              <td width="10%" class="td">Book_Fl_ID：<?php echo $_smarty_tpl->tpl_vars['sort']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sort']['index']]['id'];?>
</td>
              <td width="18%" height="25" class="td"><input name="sort_name" type="text" size="15"  value="<?php echo $_smarty_tpl->tpl_vars['sort']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sort']['index']]['sort_name'];?>
"/></td>
              <td width="20%" class="td">排序：
                <input name="s_id" type="text" value="<?php echo $_smarty_tpl->tpl_vars['sort']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sort']['index']]['s_id'];?>
" size="5"  /></td>
              <td width="7%" class="td"><input type="submit" name="button2" id="button2" value="修改"  class="button"/></td>
              <td width="7%" class="td"><input type="button" name="Submit" value="删除" onClick="javascript:if(confirm('确定删除？删除后不可恢复!')){window.location.href='manage_gbook_fl.php?act=del&id=<?php echo $_smarty_tpl->tpl_vars['sort']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sort']['index']]['id'];?>
';}else{history.go(0);}"  class="button"/></td>
            </tr></form>
          </table>
        <?php endfor; endif; ?>  
          
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
<form action="manage_gbook_fl.php?add=ok" method="post" name="add">
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
                <td width="95%" class="STYLE1"><span class="STYLE3">你当前的位置</span>：[添加分类]</td>
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
        <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" >
      <tr  onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8" >
        <td height="25" width="34%" class="td">分类名称</td>
        <td width="66%"  class="td"><input name="sort_name" type="text" size="30"  /> <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
ts.gif" width="14" height="15" alt="新闻分类标题" /></td>
      </tr>
      <tr  onmouseout="style.backgroundColor='#FFFFFF'" bgcolor="#FFFFFF">
        <td height="25" width="34%" class="td">排序ID</td>
        <td class="td"><input name="s_id" type="text" size="30"  /> 
          数字越小越靠前。</td>
      </tr>
      
      <tr  onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
        <td height="25" class="td">&nbsp;</td>
        <td class="td"><label>
        <input type="submit" name="button" id="button" value="增加分类"  class="button"/>
        </label></td>
      </tr>
      
    </table>
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
</form>
</body>
</html>
<?php }} ?>

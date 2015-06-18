<?php /* Smarty version Smarty-3.1.19, created on 2014-08-13 00:49:45
         compiled from "D:\phpStudy\WWW\a.com\system\templates\manage_gbook.html" */ ?>
<?php /*%%SmartyHeaderCode:2614353ea45a901ef53-57213031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68f1ca0703b14916e7db9777475008d8a5b1266b' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\a.com\\system\\templates\\manage_gbook.html',
      1 => 1407242264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2614353ea45a901ef53-57213031',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'css' => 0,
    'img' => 0,
    'sorts' => 0,
    'book_list' => 0,
    'pageBar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ea45a91c6329_97731849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea45a91c6329_97731849')) {function content_53ea45a91c6329_97731849($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\phpStudy\\WWW\\a.com\\include\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
pager.css" type="text/css" rel="stylesheet" />
<title>留言管理</title>
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
<script language="javascript"> 
<!-- 
function CheckAll(){ 
 for (var i=0;i<eval(form1.elements.length);i++){ 
  var e=form1.elements[i]; 
  if (e.name!="allbox") e.checked=form1.allbox.checked; 
 } 
} 
--> 
</script> 
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
                <td width="95%" class="STYLE1"><span class="STYLE3">你当前的位置</span>：[企业留言管理]</td>
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
        <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
    <form id="form1" name="form1" method="post" action="?del=checkbox"> 
      <tr>
      <div style="text-align:left; background-color:#F1F5F8; height:25px; padding:2px 10px 2px 10px;"> 
       <select name="ssfl" id="jumpMenu" onChange="window.open(this.options[this.selectedIndex].value,'_self')">
            <option>---分类查看---</option>
			
            <option value="?id=">全部留言</option>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sort'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sort']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['name'] = 'sort';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sort']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['sorts']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
			<option value="?id=<?php echo $_smarty_tpl->tpl_vars['sorts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sort']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['sorts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sort']['index']]['sort_name'];?>
</option>
			<?php endfor; endif; ?>
          </select></div>
        <td bgcolor="#FFFFFF">        </td>
      </tr>
	  <?php if ($_smarty_tpl->tpl_vars['book_list']->value==null) {?>
	    <tr  onmouseout="style.backgroundColor='#FFFFFF'" bgcolor="#FFFFFF">
        <td colspan="2"><center>暂无该分类留言</center></td></tr>
		<?php } else { ?>
	  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['book'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['book']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['name'] = 'book';
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['book_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['book']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['book']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['book']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['book']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['book']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['book']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['total']);
?>

	   <tr  onmouseout="style.backgroundColor='#FFFFFF'" bgcolor="#FFFFFF">

	   
        <td colspan="2"><table width="100%" border="0" cellpadding="5" cellspacing="0">
         
            <tr>
              <td width="8%" class="td"><input name="checkC[]" type="checkbox" id="ID" value="<?php echo $_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['id'];?>
" />
                <?php echo $_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['id'];?>
</td>
              <td width="20%" height="25" class="td"><a href="hf_gbook.php?id=<?php echo $_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['id'];?>
" style="color:#003399"><?php echo $_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['title'];?>
</a></td>
              <td width="19%" class="td"><?php echo $_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['nickname'];?>
</td>
              <td width="9%" class="td"><font color=#0033FF>[<?php if ($_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['reply']==null) {?>未回复<?php } else { ?>已回复<?php }?>]</font></td>
              <td width="14%" class="td">状态：<font color="#0033FF"><?php if ($_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['passed']==1) {?>通过审核<?php } else { ?>未通过审核<?php }?></font></td>
              <td width="17%" class="td"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['add_date'],'%Y-%m-%d');?>
</td>
              <td width="6%" class="td">
                <input type="button" name="Submit3" value="回复" onclick="window.location.href='hf_gbook.php?id=<?php echo $_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['id'];?>
' "  class="button"/></td>
              <td width="7%" class="td">
                <input type="button" name="Submit" value="删除" onclick="javascript:if(confirm('确定删除？删除后不可恢复!')){window.location.href='?fid=<?php echo $_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['id'];?>
&act=del';}else{history.go(0);}"  class="button"/></td>
            </tr>
          </table>
                    </td>
      </tr>

     
     <?php endfor; endif; ?>
	 <?php }?>
      <tr  onmouseout="style.backgroundColor='#FFFFFF'" bgcolor="#FFFFFF">
        <td width="49%" height="30"><table width="100%" border="0" cellpadding="5" cellspacing="0">
          <tr>
            <td width="47%" bgcolor="#F1F5F8">
          <input type="checkbox" name="allbox" onclick="CheckAll()" /><label>
         <select name="lx">
            <option selected="selected" value="">操作类型</option>
            <option value="1">批量删除</option>
			<option value="2">通过审核</option>
			<option value="3">取消审核</option>
          </select>
          <input type="submit" name="button" id="button" value="提交"  class="button"/>
        </label></td>
            <td width="53%" bgcolor="#F1F5F8"><table width=100% border=0 cellpadding=0 cellspacing=0 >
<form method=get onsubmit="document.location = 'http://web2630561.dnsor.com/system/manage_gbook.asp?Page='+ this.page.value;return false;"><TR >
<TD align=left  class=hui>
<p align=right>
<?php echo $_smarty_tpl->tpl_vars['pageBar']->value;?>

</TD>
</TR></form>
</table>
</td>
          </tr>
        </table></td>
      </tr> </form>
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
</html>
<?php }} ?>

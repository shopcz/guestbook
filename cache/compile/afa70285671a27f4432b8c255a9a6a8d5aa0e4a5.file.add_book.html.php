<?php /* Smarty version Smarty-3.1.19, created on 2014-08-13 00:15:56
         compiled from "D:\phpStudy\WWW\a.com\theme\default\add_book.html" */ ?>
<?php /*%%SmartyHeaderCode:2670853ea3dbc3dd134-32086345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afa70285671a27f4432b8c255a9a6a8d5aa0e4a5' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\a.com\\theme\\default\\add_book.html',
      1 => 1407253652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2670853ea3dbc3dd134-32086345',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sort' => 0,
    'ip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ea3dbc506200_83124925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea3dbc506200_83124925')) {function content_53ea3dbc506200_83124925($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('layout/head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script language="javascript" type="text/javascript">
 function cheackbook(){
	var form=document.form_book;
	if (form.book_title.value.replace(/ /g,"")==""){
		alert("留言标题内容不能为空，请认真填写");
		form.book_title.focus();
		return false;
		}
			
	if (form.book_name.value.replace(/ /g,"")==""){
		alert("留言者姓名不能为空，请重新填写");
		form.book_name.focus();
		return false;
		}
		else if (form.book_name.value.replace(/ /g,"").length<2){
		alert("姓名字数太短了，请填写真实姓名");
		form.book_name.focus();
		return false;
		}
		else if (form.book_name.value.replace(/ /g,"").length>10){
		alert("姓名字数太长了，请填写真实姓名");
		form.book_name.focus();
		return false;
		}
	if (form.book_email.value.replace(/ /g,"")==""){
		alert("电子邮件地址不能为空");
		form.book_email.focus();
		return false;
		}
	if (form.book_email.value.replace(/ /g,"") != ""){
		if((!/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(form.book_email.value.replace(/ /g,"")))){
			alert("电子邮件格式不符合标准");
			form.book_email.focus();
			return false;
			}
		}
	if (form.book_qq.value.replace(/ /g,"")==""){
		alert("联系QQ不能为空");
		form.book_qq.focus();
		return false;
		}
	if (isNaN(form.book_qq.value)){
		alert("QQ号码必须为数字");
		form.book_qq.focus();
		return false;
		}
	if (form.book_qq.value.replace(/ /g,"").length != "" & form.book_qq.value.replace(/ /g,"").length<5){
		alert("QQ号码不符合标准");
		form.book_qq.focus();
		return false;
		}
	if (form.book_qq.value.replace(/ /g,"").length>12){
		alert("这么长的QQ号码不符合标准");
		form.book_qq.focus();
		return false;
		}
	if (form.book_body.value.replace(/ /g,"")==""){
		alert("留言内容不能为空");
		form.book_body.focus();
		return false;
		}
		else if (form.book_body.value.replace(/ /g,"").length < 8){
		alert("留言内容太少了，有刷屏的嫌疑!\n\n呵呵，请重新输入你的留言。");
		form.book_body.focus();
		return false;
		}
		}
</script>


  <div id="box">
    <div class="box_box">
      <div class="box_book">
        <p>发表留言</p>
		<form action="add_book.php?act=add_book" method="post" name="form_book" onSubmit="return cheackbook();">
        <table cellpadding="0" cellspacing="8" border="0" width="580" align="center">
          <tr>
            <td width="65"><div align="right">留言类别：</div></td>
            <td width="491"><select name="ssfl" id="ssfl">
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
			<option value="<?php echo $_smarty_tpl->tpl_vars['sort']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sort']['index']]['id'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['sort']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sort']['index']]['sort_name'];?>
</option>
			<?php endfor; endif; ?>
			</select></td>
          </tr>
          <tr>
            <td width="65"><div align="right">留言标题：</div></td>
            <td width="491"><input name="title" type="text" class="b_p" /> <input name="gbook_sh" value="1" type="hidden" /><input type="hidden" name="add_date" value="<?php echo time();?>
">
			<input type="hidden" name="add_ip" value="<?php echo $_smarty_tpl->tpl_vars['ip']->value;?>
"></td>
          </tr>
          <tr>
            <td><div align="right">姓名：</div></td>
            <td><input name="nickname" type="text" class="b_p" /> *</td>
          </tr>
          <tr>
            <td><div align="right">E_mail：</div></td>
            <td><input name="email" type="text" class="b_p" /> 
            * 是否隐藏
              <input type="checkbox" name="yc_email" id="yc_email" value="1" /></td>
          </tr>
		  <tr>
            <td><div align="right">联系电话：</div></td>
            <td><input name="tel" type="text" class="b_p" /> 
            [<span class="style1">为用户保密，其他用户看不到该信息</span>]</td>
          </tr>
          <tr>
            <td><div align="right">联系QQ：</div></td>
            <td><input name="qq" type="text" class="b_p" /> 
            * 是否隐藏 <input type="checkbox" name="yc_qq" id="yc_qq" value="1" /></td>
          </tr>
          <tr>
            <td><div align="right">联系地址：</div></td>
            <td><input name="address" type="text" class="b_p" /></td>
          </tr>
          <tr>
            <td><div align="right">留言内容：</div></td>
            <td><textarea name="content" cols="60" rows="10" style="background:url(images/thanks.gif) no-repeat 190px 115px;"></textarea> *</td>
          </tr>
		  <tr>
            <td><div align="right">验证码：</div></td>
            <td><input name="captcha" type="text"   size="7" /> <img src="code.php?" onClick="this.src+=Math.random()" alt="图片看不清？点击重新得到验证码" style="cursor:hand;" height="20" /></td>
          </tr>
		  <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="Submit" value="提交留言" class="button" /> <input type="reset" name="Submit2" value="重新填写" class="button"  /></td>
          </tr>
        </table>
		</form>
		<div class="line"></div>
		<h5>发表留言须知</h5>
		<div class="book_w">
		  <ul>
		    <li>1、严禁对个人、实体、民族、国家等进行漫骂、污蔑与诽谤</li>
			<li>2、网友应遵守我们互联网的相关法规</li>
			<li>3、网友应对所发布的信息承担全部责任</li>
			<li>4、网站管理人员有权保留或删除留言中的信息内容</li>
			<li>5、发表留言即表明已阅读并接受以上条款</li>
		  </ul>
		</div>
      </div>
    </div>
    <div class="line"></div>
  </div>
<?php echo $_smarty_tpl->getSubTemplate ('layout/foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>

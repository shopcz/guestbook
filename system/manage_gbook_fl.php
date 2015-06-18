<?php
/**
* Author:霏凡
* Email :zyf8985957@163.com
* 
*/
define('IN_DC',true);
require(dirname(__FILE__) . '/include/init.php');

/* 检查登陆状态 */
$db->check_login();

/* 获取所有分类 */
$sorts = $db->get_sort();

if($_GET['edit']== 'ok'){
     unset($_POST['button2']);
	 //print_r($_POST);
     $u = $db->update('sort',$_POST,'id='.$_GET['id']);
	 if($u){
		 $db->msg('修改成功','manage_gbook_fl.php');
	 }else{
         $db->msg('修改失败','manage_gbook_fl.php');
	 }
}

if($_GET['act']=='del')
{
	if(isset($_GET['id'])){
			if($db->delete('sort','id ='.$_GET['id'])){
		$db->msg('删除成功','manage_gbook_fl.php');
			}else{
		$db->msg('删除失败','manage_gbook_fl.php');

			}
	}
}

if($_GET['add']=='ok'){
	//print_r($_POST);
	unset($_POST['button']);
	$arr= $_POST;
	$in = $db->insert('sort',$arr);
	 if($in){
		 $db->msg('添加成功','manage_gbook_fl.php');
	 }else{
         $db->msg('添加失败','manage_gbook_fl.php');
	 }
}

$smarty->assign('sort',$sorts);
$smarty->assign('img',img_path); //img路径
$smarty->assign('css',css_path); //css路径
$smarty->display('fl.html');
?>
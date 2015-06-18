<?php
/**
* Author:霏凡
* Email :zyf8985957@163.com
* 管理员管理
*/
define('IN_DC',true);
require(dirname(__FILE__) . '/include/init.php');

/* 检查登陆状态 */
$db->check_login();

/* 获取管理员信息*/
$admin = $f->read(admin_data);
if($_GET['act']=='update'){
	//print_r($_POST);
	$arr = array();
	unset($_POST['button']);
	if(empty($_POST['password'])){
$db->msg('密码不能为空','manage_admin.php'); 

}else{
	if($_POST['password']!=$_POST['password2']){
		$db->msg('输入密码有误','manage_admin.php'); 
        }else{
			unset($_POST['password2']);
			$arr['username'] = $_POST['username'];
			$arr['password'] = md5($_POST['password']);
			if($f->write($arr,admin_data)){
				$db->msg('更新成功','manage_admin.php'); 
			}else{
				$db->msg('更新失败','manage_admin.php'); 
			}
				
		}
}
}

/* 模板实例化 */
$smarty->assign('admin',$admin);
$smarty->assign('img',img_path); //img路径
$smarty->assign('css',css_path); //css路径
$smarty->display('manage_admin.html');
?>
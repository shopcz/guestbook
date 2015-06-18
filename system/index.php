<?php
/**
* Author:霏凡
* Email :zyf8985957@163.com
* 
*/
define('IN_DC', true);

require(dirname(__FILE__). '/include/init.php');

/* 获取管理员信息 */
$admin = $f->read(admin_data);
/* 后台用户与密码设置 */
$admin_name = $admin['username'];
$admin_pass = $admin['password'];

/*  登陆 */
if($_GET['action']=='login'){
	unset($_POST['Submit']);
	if($_SESSION['captcha'] == md5($_POST['captcha'])){
		if( $admin_name == $_POST['username'] && $admin_pass == md5($_POST['password'])){
			$_SESSION['login'] = ".$admin_name.".".$admin_pass.";
			$_SESSION['admin'] = $_POST['username'];
			header("location:main.php");
				}else{
			echo "<script>alert('用户名或密码错误');</script>";
		}
	}else{
			echo "<script>alert('验证码不对请,重新输入')</script>";
		}
}
/* 退出 */
if($_GET['action']=='logout'){
	unset($_SESSION['login']);
	unset($_SESSION['admin']);
	header("Location:index.php");
}

	$smarty->assign('img',img_path); //img路径
    $smarty->assign('css',css_path); //css路径
    $smarty->display('login.html');

?>
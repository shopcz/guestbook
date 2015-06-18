<?php
/**
* Author:霏凡
* Email :zyf8985957@163.com
* 
*/
define('IN_DC', true);

require(dirname(__FILE__). '/include/init.php');

$db->check_login();

/* 读取系统配置文件 */
$config = $f->read(settings);

/* 从浏览器获取act的值，并触发条件 */
if($_GET['act']=='ok'){
	unset($_POST['Submit']);
	$arr=$_POST;
	$f->write($arr,settings);
	$db->msg('更新完毕','admin_setup.php');
}

/* smarty模板实例化 */
$smarty->assign('config',$config);
$smarty->display('setup.html');
?>
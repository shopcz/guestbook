<?php
/**
* Author:霏凡
* Email :zyf8985957@163.com
* 
*/

define('IN_DC', true);
require(dirname(__FILE__). '/include/init.php');

/* 检查登陆状态 */
$db->check_login();

/* 从配置文件读取信息 */
$cf = $f->read(settings);
$admin = $f->read(admin_data);

/* 实例化 */
$smarty->assign('admin',$admin);
$smarty->assign('cf',$cf);
$smarty->display('main.html');
?>
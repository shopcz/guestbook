<?php
/**
* Author:霏凡
* Email :zyf8985957@163.com
* 
*/
define('IN_DC',true);

/* 引入初始化文件入口 */
require(dirname(__FILE__) . '/include/init.php');

/* 检查登陆状态 */
$db->check_login();

/* 服务器信息 */
$arr = $db->server_info();
//print_r($arr);
$smarty->assign('system',$arr);
$smarty->display('system.html');

?>
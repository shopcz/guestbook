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

/* 根据获得的参数取得单条留言信息 */
$book_one = $db->book_one("a.id=".$_GET['id']." and a.ssfl = b.id");

if($_GET['act'] == 'save'){
	unset($_POST['button']);
	$arr = $_POST;
	$db->update('guestbook',$arr,'id ='.$_GET['id']);
    $db->msg('更新成功','manage_gbook.php');
}

$smarty->assign('book_one',$book_one);
$smarty->assign('img',img_path); //img路径
$smarty->assign('css',css_path); //css路径
$smarty->display('hf.html');
?>
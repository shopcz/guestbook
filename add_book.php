<?php
/**
* Author:霏凡
* Email :zyf8985957@163.com
* 
*/
define('IN_DC', true);

require(dirname(__FILE__) .'/include/init.php');
$ip=$db->get_ip();

/* 获得留言分类 */
$sort = $db->get_sort();

@$action = intval($_GET['action']);

/**
switch ($action)
{
	case add_book:
		 if(!empty($_POST)){
		 	unset($_POST['Submit']);
		 	unset($_POST['gbook_sh']);
		 	if($_SESSION['captcha']==md5($_POST['captcha'])){
		 		unset($_POST['captcha']);
		 	}else{
		 		echo("<script>alert('验证码有误,请重新输入');location.href='/add_book.php'</script>");
		 	}
		 }
		 $rt = $db->insert('guestbook',$_POST);
		switch ($rt)
		{
			case 1:
				$db->msg('留言成功,欢迎访问','index.php');
				break;
			default :
				break;
		}
		break;
	default :
		break;
}
*/

if($_GET['act'] == 'add_book')
{
	if(!empty($_POST)){
		$arr =array();
		unset($_POST['Submit']);
		//print_r($_POST);
		if($_SESSION['captcha'] == md5($_POST['captcha'])){
			unset($_POST['captcha']);
		}else{
			$db->msg('验证码有误,请重新输入','/add_book.php');
		}
		$arr['ssfl'] = $_POST['ssfl'];
		$arr['title'] = $_POST['title'];
		$arr['nickname']=$_POST['nickname'];
		$arr['email'] = $_POST['email'];
		$arr['yc_email'] = $_POST['yc_email'];
		$arr['tel'] = $_POST['tel'];
		$arr['qq'] = $_POST['qq'];
		$arr['yc_qq'] = $_POST['yc_qq'];
		$arr['address'] = $_POST['address'];
		$arr['content'] = $_POST['content'];
		$arr['add_date'] = $_POST['add_date'];
		$arr['add_ip'] = $_POST['add_ip'];
		if($cf['gbook_sh'] =='1'){
			$arr['passed'] ='0';
		}
        $rt = $db->insert('guestbook',$arr);
		if($rt && $cf['gbook_sh']=='1'){
			$db->rc('恭喜你,留言提交成功!但需要经过管理员审核后才能显示!');
		}elseif($rt || $cf['gbook_sh']=='1'){
			$db->msg('留言已提交','index.php');
		}else{
			$db->msg('留言失败,请及时联系管理员','index.php');


		}
	}
}

$smarty->assign('cf',$cf);
$smarty->assign('ip',$ip);
$smarty->assign('sort',$sort);
$smarty->assign('img',img_path);
$smarty->assign('css',css_path);
$smarty->display('add_book.html');

?>
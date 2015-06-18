<?php
/**
* Author:霏凡
* Email :zyf8985957@163.com
* 
*/
define('IN_DC', true);
require(dirname(__FILE__) . '/include/init.php');

/* 检查登陆状态 */
$db->check_login();

/*获得所有分类*/
$sort = $db->get_sort();

/* 输出分页样式 */
$pageBar = $p->GetPagerContent();

/* 获取留言列表 */
$list = $db->book_all($_GET['id'] ,$p->limit());

/* 当action的值为del时执行 */
if($_GET['act']=='del'){
	$db->delete('guestbook','id='.$_GET['fid']);
	$db->msg('删除成功','manage_gbook.php');
}

/* 当del的值为checkbox时执行 */
if($_GET['del']=='checkbox'){
	
	if(isset($_POST['checkC'])){
		$id = $_POST['checkC'];
		foreach($id as $value){
			 $key .=$value.",";
		}
		$keys = substr($key,0,-1);
		if($_POST['lx'] =='1')
	{
		$bk=$db->delete("guestbook","id in (".$keys.")");
		if($bk){
		$db->msg('删除成功','manage_gbook.php');
		}else{$db->msg('删除失败','manage_gbook.php');
		}
	}

	if($_POST['lx'] =='2')
		{
		  $arr =array('passed' =>'1');
		  $bk=$db->update("guestbook",$arr,"id in (".$keys.")");
		  if($bk){
		    $db->msg('更新成功','manage_gbook.php');
		}else{$db->msg('更新失败','manage_gbook.php');}
		
		
		
 }
		

		}
	if($_POST['lx'] =='3'){
		 $arr =array('passed' =>'0');
		  $bk=$db->update("guestbook",$arr,"id in (".$keys.")");
		  echo $bk;
		 if($bk){
		    $db->msg('更新成功','manage_gbook.php');
		}else{$db->msg('更新失败','manage_gbook.php');}
		
	}
}

/* 变量赋值至模板 */
$smarty->assign('sorts',$sort);
$smarty->assign('book_list' ,$list);
$smarty->assign('img',img_path); //img路径
$smarty->assign('css',css_path); //css路径
$smarty->assign('pageBar' ,$pageBar);//分页栏
$smarty->display('manage_gbook.html');
?>
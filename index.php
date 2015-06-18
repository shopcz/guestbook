<?php
/*
 * Created on 2014-7-31
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 define('IN_DC', true);

 require(dirname(__FILE__) . '/include/init.php');


//留言列表

/* 输出分页样式 */
$pageBar= $p->GetPagerContent();
//echo $p->limit();

/* 获取留言列表 */
$list =$db->book_list($p->limit(),$cf['gbook_sh']);//打印是否获取数组  print_r($list);
//print_r($cf);
/* 变量赋值至模板 */
 $smarty->assign('cf',$cf);
 $smarty->assign('book_list',$list);
 $smarty->assign('pageBar',$pageBar); //分页栏
 $smarty->assign('img',img_path); //img路径
 $smarty->assign('css',css_path); //css路径
 $smarty->display('index.html');
?>

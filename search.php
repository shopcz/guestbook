<?php
/**
* Author:霏凡
* Email :zyf8985957@163.com
* 
*/

 define('IN_DC', true);

require(dirname(__FILE__) .'/include/init.php');

/* 获得查询数量*/
$search_num = $db->search_num($_GET['keys']);
/* 输出分页样式 */
$pp = new pager($search_num,intval($CurrentPage));  

$pageBar= $pp->GetPagerContent();

/* 根据搜索条件获取留言列表 */
$list = $db->search($_GET['keys'],$pp->limit(),$cf['gbook_sh']); //输出查询


//print_r($list);
$smarty->assign('cf',$cf);
$smarty->assign('book_list',$list);
$smarty->assign('pageBar',$pageBar); //分页栏
$smarty->assign('css',css_path);
$smarty->assign('img',img_path);
$smarty->display('search.html');
?>
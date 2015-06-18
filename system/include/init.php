<?php
/**
* Author:霏凡
* Email :zyf8985957@163.com
* 
*/

if (!defined('IN_DC'))

	die('Hacking attempt');


/* 开启SESSION */
session_start();

/* PHP错误报错等级定义 */
error_reporting(E_ALL ^ E_NOTICE);

/* 调整时区 */
if(PHP_VERSION >= '5.1')
{
	date_default_timezone_set('PRC');
}

require(dirname(dirname(dirname(__FILE__))) . '/data/config.php');

/* 定义常量 */
define('ROOT_PATH', dirname(dirname(dirname(__FILE__))) .'/');
define('ROOT_URL', preg_replace('/' . ADMIN_PATH . '\//Ums', '', dirname('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']) . "/"));

define('css_path',   '/static/css/admin/');
define('img_path',   '/static/images/admin/');
define('script_path', '/static/js/admin/');
define('settings','../data/settings.php');
define('admin_data','../data/admin.php');

require(ROOT_PATH . 'include/smarty/Smarty.class.php');
require(ROOT_PATH . 'include/mysql.class.php');
require(ROOT_PATH . 'include/db.class.php');
require(ROOT_PATH . 'include/action.class.php');
require(dirname(__FILE__) .'/pager.class.php');
require(dirname(__FILE__) . '/f.class.php');


/* 实例化类 */
$db = new Action($dbhost, $dbuser, $dbpass, $dbname, $prefix, F_CHARSET);
$f = new F;
/* 获取当前页面 */
$curr = isset($_GET['page']) ? $_GET['page'] : 1;
$id  = isset($_GET['id']) ? $_GET['id'] : 0;
/* 记录集的总数量 */
$book_num = $db->book_all_num($id); //总留言数量

/* 实例化分页类 */
$p = new pager($book_num,intval($curr));

if(!defined('EXIT_INIT'))
{
	//Smarty配置
	$smarty = new smarty();
	$smarty->config_dir = ROOT_PATH . 'include/smarty/Config_File.class.php'; //目录变量
	$smarty->caching = false;// 是否启用缓存
	$smarty->template_dir = ROOT_PATH . ADMIN_PATH .'/templates';//模板存放目录
	$smarty->compile_dir = ROOT_PATH . 'cache/compile/' . ADMIN_PATH;//编译目录
	$smarty->cache_dir = ROOT_PATH . 'cache/static/' .ADMIN_PATH;//缓存目录
	$smarty->left_delimiter = '{%'; // 左定界符
	$smarty->right_delimiter = '%}';// 右定界符
}   

?>
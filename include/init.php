<?php
/*
 * Nommo interactive studios source code @ 2014
 */

if (!defined('IN_DC'))
{
	die('Hacking attempt');
}

error_reporting(1);
 session_start();
 /* 取得当前站点所在的根目录 */
define('ROOT_PATH', str_replace('include/init.php', '', str_replace('\\', '/', __FILE__)));
define('ROOT_URL', dirname('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']) . "/");
define('css_path', '/static/css/');
define('img_path', '/static/images/');
define('script_path', '/static/js/');
define('settings','data/settings.php');

require(ROOT_PATH . 'data/config.php');
require(ROOT_PATH . 'include/smarty/Smarty.class.php');
require(ROOT_PATH . 'include/mysql.class.php');
require(ROOT_PATH . 'include/db.class.php');
require(ROOT_PATH . 'include/action.class.php');
require(ROOT_PATH . 'include/pager.class.php');
require(ROOT_PATH . 'include/f.class.php');
/* 载入语言文件 */
require (ROOT_PATH . 'install/include/language.class.php');

$f = new F;
$cf = $f->read(settings);

/* 判断是否安装过 */
$file_lock = ROOT_PATH . 'data/install.lock';
if (!file_exists($file_lock))
{ 
     header('location:/install/');
}

//print_r($cf);
$theme=$cf['theme'];
/* 实例化类 */
$db = new Action($dbhost, $dbuser, $dbpass, $dbname, $prefix,F_CHARSET);

/* 获取当前页面 */
$CurrentPage=isset($_GET['page'])?$_GET['page']:1; 

/* 首先取得总数的记录数，*/
$book_num = $db->book_num($cf['gbook_sh']);


/* 实例化分页类 */
$p=new pager($book_num,intval($CurrentPage));  
if(!defined('EXIT_INIT'))
{
	//Smarty配置
	$smarty = new smarty();
	$smarty->config_dir = ROOT_PATH . "include/smarty/Config_File.class.php";//目录变量
	$smarty->caching = false;//是否使用缓存
	$smarty->template_dir = ROOT_PATH . "theme/".$theme;//模板存放目录
	$smarty->compile_dir = ROOT_PATH . "cache/compile";//编译目录
	$smarty->cache_dir = ROOT_PATH . "cache/static";//缓存目录
	$smarty->left_delimiter = "{%";//左定界符
	$smarty->right_delimiter = "%}";//

}

?>

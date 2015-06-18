<?php
/**
* Author:霏凡
* Email :zyf8985957@163.com
* 
*/
/**
if(!defined('IN_DC'))
die('Hacking attempt');
*/
define('IN_DC',true);

/* 开启SESSION */
session_start();

/* 取得当前站点所在的根目录 */
define('INSTALL_PATH', str_replace('include/init.php', '', str_replace('\\', '/', __FILE__)));
define('ROOT_PATH', dirname(dirname(dirname(__FILE__))) . '/');
define('INSTALL_URL', preg_replace('/install\//Ums', '', dirname('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']) . '/'));
define('admin_data', ROOT_PATH.'/data/admin.php');

require (ROOT_PATH . '/include/smarty/Smarty.class.php');
require (ROOT_PATH . '/include/mysql.class.php');
require (INSTALL_PATH . 'include/install.class.php');
require (ROOT_PATH . '/include/f.class.php');

/* 初始化 */
$install = new Install('utf8');
$douphp_config = ROOT_PATH . 'data/config.php';
$file_lock = ROOT_PATH . 'data/install.lock';

$f = new F;

//SMARTY配置
$smarty = new smarty();
$smarty->config_dir = ROOT_PATH . "/include/smarty/Config_File.class.php"; //目录变量
$smarty->caching = false; //是否使用缓存
$smarty->template_dir = INSTALL_PATH . "template"; //模板存放目录
$smarty->compile_dir = INSTALL_PATH . "data/cache/"; //编译目录
$smarty->cache_dir = INSTALL_PATH . "data/cache/static"; //缓存目录
$smarty->left_delimiter = "{%"; //左定界符
$smarty->right_delimiter = "%}"; //右定界符

/* 载入语言文件 */
require (INSTALL_PATH . 'include/language.class.php');

//通用信息调用
$smarty->assign("lang", $_LANG);


?>
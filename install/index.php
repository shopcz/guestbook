<?php
/**
 * DOUCO TEAM
 * ============================================================================
 * COPYRIGHT DOUCO 2014-2015.
 * http://www.douco.com;
 * ----------------------------------------------------------------------------
 * Author:DouCo
 * Release Date: 2014-06-05
 */
 
define('IN_DC', true);

require (dirname(__FILE__) . '/include/init.php');

/* step操作项的初始化 */
if (empty ($_REQUEST['step']))
{
	$step = 'welcome';
}
else
{
	$step = trim($_REQUEST['step']);
}

/* 判断是否安装过 */
if (file_exists($file_lock))
{
	$title = $_LANG['douphp'] . " &rsaquo; " . $_LANG['lock'];
	
 $smarty->assign('title', $title);
	$smarty->display('install.lock.htm');
	exit;
}

/**
 +----------------------------------------------------------
 * 欢迎页面
 +----------------------------------------------------------
 */
if ($step == 'welcome')
{
	$title = $_LANG['welcome'];
 $smarty->assign('title', $title);
	$smarty->display('welcome.htm');
}

/**
 +----------------------------------------------------------
 * 目录和服务器权限检测
 +----------------------------------------------------------
 */
elseif ($step == 'check')
{
	$title = $_LANG['douphp'] . " &rsaquo; " . $_LANG['check'];
	
	/* 系统信息 */
	$sys_info = array();
	$sys_info['os']            = PHP_OS;
	$sys_info['web_server']    = $_SERVER['SERVER_SOFTWARE'];
	$sys_info['php_ver']       = PHP_VERSION;
	$sys_info['mysql_ver']     = extension_loaded('mysql') ? $_LANG['yes'] : $_LANG['no'];
	$sys_info['zlib']          = function_exists('gzclose') ? $_LANG['yes']:$_LANG['no'];
	$sys_info['timezone']      = function_exists("date_default_timezone_get") ? date_default_timezone_get() : $_LANG['no_timezone'];
	$sys_info['socket']        = function_exists('fsockopen') ? $_LANG['yes'] : $_LANG['no'];
	$sys_info['gd']            = extension_loaded("gd") ? $_LANG['yes'] : $_LANG['no'];

	/* 检查目录 */
	$check_dirs = array (
		'cache',
		'cache/compile',
		'cache/compile/system',
		'data',
		'data/backup'
	);
	
	foreach ($check_dirs AS $dir)
	{
		$full_dir = ROOT_PATH . $dir;
		$check_writeable = $install->check_writeable($full_dir);
		if ($check_writeable == '1')
		{
			$if_write = "<b class='write'>" . $_LANG['write'] . "</b>";
		}
		elseif ($check_writeable == '0')
		{
			$if_write = "<b class='noWrite'>" . $_LANG['no_write'] . "</b>";
			$no_write = true;
		}
		elseif ($check_writeable == '2')
		{
			$if_write = "<b class='noWrite'>" . $_LANG['not_exist'] . "</b>";
			$no_write = true;
		}
		
		$writeable[] = array (
			"dir" => $dir,
			"if_write" => $if_write
		);
	}
	/**
	//根据 Web 服务器 信息配置伪静态文件
	if (stristr($sys_info['web_server'], "Apache"))
	{
		$rewrite_file = ".htaccess.txt";
	}
	elseif (stristr($sys_info['web_server'], "nginx"))
	{
		$rewrite_file = ".nginx.txt";
	}
	elseif (stristr($sys_info['web_server'], "IIS"))
	{
		$iis_exp = explode("/",$sys_info['web_server']);
		$iis_ver = $iis_exp['1'];
		
		if ($iis_ver >= 7.0)
		{
			$rewrite_file = "web.config.txt";
		}
		else
		{
			$rewrite_file = "httpd.ini.txt";
		}
	}
		
	//复制rewrite文件到站点根目录
	if ($rewrite_file)
	{
		$source = DOUPHP_PATH . "install/rewrite/" . $rewrite_file;
		$destination = DOUPHP_PATH . $rewrite_file;
		@copy($source, $destination);
	}
	*/

 $smarty->assign('title', $title);
 $smarty->assign('sys_info', $sys_info);
 $smarty->assign('writeable', $writeable);
 $smarty->assign('no_write', $no_write);
 $smarty->display('check.htm');
}

/**
 +----------------------------------------------------------
 * 安装配置
 +----------------------------------------------------------
 */
elseif ($step == 'setting')
{
	$title = $_LANG['douphp'] . " &rsaquo; " . $_LANG['setting'];
	
	//如果提交表单执行以下
	if ($_POST['install']) 
	{
		//生成config文件内容
		$config_str = "<?php\n";
		$config_str .= "/**\n";
		$config_str .= " * DOUCO TEAM\n";
		$config_str .= " * ============================================================================\n";
		$config_str .= " * COPYRIGHT DOUCO 2014-2015.\n";
		$config_str .= " * http://www.douco.com;\n";
		$config_str .= " * ----------------------------------------------------------------------------\n";
		$config_str .= " * Author:douco\n";
		$config_str .= " * Release Date: 2014-06-05\n";
		$config_str .= "*/\n\n";
	
		$config_str .= "// database host\n";
		$config_str .= '$dbhost   = "' . $_POST[dbhost] . '";' . "\n\n";
	
		$config_str .= "// database name\n";
		$config_str .= '$dbname   = "' . $_POST[dbname] . '";' . "\n\n";
	
		$config_str .= "// database username\n";
		$config_str .= '$dbuser   = "' . $_POST[dbuser] . '";' . "\n\n";
	
		$config_str .= "// database password\n";
		$config_str .= '$dbpass   = "' . $_POST[dbpass] . '";' . "\n\n";
	
		$config_str .= "// charset\n";
		$config_str .= "define('F_CHARSET','utf-8');" . "\n\n";
	
		$config_str .= "// administrator path\n";
		$config_str .= "define('ADMIN_PATH','system');\n\n\n\n\n\n";
	
		$config_str .= "?>";
		
		$fopen_config = fopen($douphp_config, "w+");
		fwrite($fopen_config, $config_str);
	
		//嵌入config配置文件
		include_once ($douphp_config); 
		
		//检查表单
		if (!@$link = mysql_connect($dbhost, $dbuser, $dbpass))
		{
			$cue = $_LANG['cue_connect'];
		}
		elseif (!$_POST['username'])
		{
			$cue = $_LANG['cue_username_empty'];
		}
		elseif (!$install->is_username($_POST['username']))
		{
			$cue = $_LANG['cue_username_wrong'];
		}
		elseif (!$_POST['password'])
		{
			$cue = $_LANG['cue_password_empty'];
		}
		elseif (!$install->is_password($_POST['password']))
		{
			$cue = $_LANG['cue_password_wrong'];
		}
		elseif (!$_POST['password_confirm'])
		{
			$cue = $_LANG['cue_password_confirm_empty'];
		}
		elseif ($_POST['password'] != $_POST['password_confirm'])
		{
			$cue = $_LANG['cue_password_confirm_wrong'];
		}
		
		//如果存在错误信息则不执行数据库操作
		if (!$cue)
		{
			mysql_query("CREATE DATABASE IF NOT EXISTS `$dbname` default charset utf8 COLLATE utf8_general_ci");
			mysql_select_db($dbname);
		
			//读取SQL文件到一个字符串中
			$sql = file_get_contents(INSTALL_PATH . 'data/backup/guestbook.sql');
			
			//进行安装的常规替
			
			//进行安装的常规替换
			$sql_head = "SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO';\n";
			$sql_head .= "SET time_zone = '+00:00';\n\n\n";

			$sql_head .= "/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;\n";
			$sql_head .= "/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;\n";
			$sql_head .= "/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;\n";
			$sql_head .= "/*!40101 SET NAMES utf8 */;\n\n";
			
			$sql = $sql_head . $sql;
			
			//生成管理员
			$arr = array();
			$arr['username'] = $_POST['username'];
			$arr['password'] = md5($_POST['password']);
			
	        $f->write($arr,admin_data);
			
			//导入数据
			$install->sql_execute($sql);
	
			
		
			header("Location: index.php?step=finish");
		}
	}
	
 $smarty->assign('title', $title);
 $smarty->assign('cue', $cue);
 $smarty->assign('post', $_POST);
	$smarty->display('setting.htm');
}

/**
 +----------------------------------------------------------
 * 完成安装
 +----------------------------------------------------------
 */
elseif ($step == 'finish')
{
	//生成install.lock文件
	$fopen_lock = fopen($file_lock, "w+");
	fwrite($fopen_lock, "DOUPHP INSTALLED");
	
	$title = $_LANG['douphp'] . " &rsaquo; " . $_LANG['finish'];
	
 $smarty->assign('title', $title);
 $smarty->assign('username', $_SESSION['username']);
	$smarty->display('finish.htm');
}







?>
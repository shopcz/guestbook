<?php
/**
* Author:霏凡
* Email :zyf8985957@163.com
* 
*/

 define('IN_DC', true);

require(dirname(__FILE__) . '/include/init.php');
require(ROOT_PATH . 'include/code.class.php');

//实例化验证码
$captcha = new Captcha(70, 25);

//清除之前出现的多余输入
@ob_end_clean();

$captcha->create_captcha();

?>
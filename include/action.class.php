<?php
/**
* Author:霏凡
* Email :zyf8985957@163.com
*
*/

if (!defined('IN_DC'))
{
	die('Hacking attempt');
}


class Action extends Db{
    /* 获取留言数量 */
	public function book_num($sh = ''){
        if($sh =='1'){
		$query = $this->query("select count(*) from `guestbook` where passed ='1'");
		}else{
		$query = $this->query("select count(*) from `guestbook` ");
		}
		$row= $this->fetch_array($query);
		$count = $row[0];
		return $count;
	}
    /* 获得单条留言 */

	public function book_one($condition,$debug = '')
	{
		if($debug){
			echo "select a.*,b.sort_name from `guestbook` a,`sort` b where ".$condition;
		}else{
		$query = $this->query("select a.*,b.sort_name from `guestbook` a,`sort` b where ".$condition);
		$row = $this->fetch_array($query);
		}
		return $row;
	}
	/* 获得留言列表 */
	public function book_list($condition,$sh = '')
	{   if($sh =='1'){
        $query = $this->query(
			"select * from `guestbook` where passed = '1' order by id desc limit ".$condition);
	}else{
		$query = $this->query('select * from `guestbook` order by id desc limit '.$condition);
	}
		while($rs = $this->fetch_array($query)){
			$books[] =$rs;
		}
		return $books;
	}

	/* 根据分类获得留言列表 */
	public function book_all($id,$condition,$debug = '')
	{  
		if(empty($id) || !isset($id)){
			$query = $this->query('select * from `guestbook` order by id desc limit '.$condition);
		}else{
		$query = $this->query('select * from `guestbook` where ssfl = '.$id.' order by id desc limit '.$condition);
		}
		while($rs = $this->fetch_array($query))
		{
			$books_all[] = $rs;
		}
        if($debug){
			echo 'select * from `guestbook` where ssfl = '.$id.' order by id desc limit '.$condition;
		}
		return $books_all;
	
	}
    public function book_all_num($id){
		if(empty($id)||!isset($id))
			{  
			      $query = $this->query('select count(*) from `guestbook`');

			}else{
				  $query = $this->query('select count(*) from `guestbook` where ssfl ='.$id);

			}
	    $row= $this->fetch_array($query);
		$count = $row[0];
		return $count;


		}

    /* 获取留言所有分类 */   
	public function get_sort(){
		$query = $this->query('select * from `sort` order by s_id');
		while($rs = $this->fetch_array($query))
		{
			$sorts[] = $rs;
		}
		return $sorts;			
		}

	public function check_login()
	{
			if($_SESSION['admin'] == '' && $_SESSION['login'] == ''){
			$this->msg('非法访问','index.php');
			}
		

	}

	public function search($key,$condition,$sh = '',$debug =''){
		if($sh =='1'){
        $query = $this->query("select * from `guestbook` where title like '%".$key."%' and passed='1' order by id desc limit ".$condition);
		}else{
		$query = $this->query("select * from `guestbook` where title like '%".$key."%' order by id desc limit ".$condition);
		}
		while($rs = $this->fetch_array($query)){
			$book_search[] = $rs;
		}
		 if($debug){
			echo "select * from `guestbook` where title like '%".$key."%' and passed='1' order by id desc limit ".$condition;
		}
		return $book_search;

	}

	public function search_num($key)
	{
		$query = $this->query("select count(*) from `guestbook` where title like '%".$key."%'");
		$row= $this->fetch_array($query);
		$count = $row[0];
		return $count;
	}

	public function server_info(){
		$arr = array();
		$arr['now'] = $_SERVER['SCRIPT_FILENAME'] ;
		$arr['port'] = $_SERVER['SERVER_PORT'];
		$arr['protocol'] = $_SERVER['SERVER_PROTOCOL'];
		$arr['ip'] =   GetHostByName($_SERVER['SERVER_NAME']);
	    $arr['server'] = $_SERVER['SERVER_NAME'];
		$arr['c_ip'] = $_SERVER['REMOTE_ADDR'];
		$arr['php'] =  PHP_VERSION;
		$arr['zend'] = Zend_Version();
		$arr['info'] =  php_uname();
		$arr['author'] = '霏凡';
		$arr['url'] = 'http://hi.baidu.com/menlt';
		//$arr['now'] =dirname(dirname(__FILE__)) .'/system/main.php';
       
	   return $arr;

	}

	
}


?>
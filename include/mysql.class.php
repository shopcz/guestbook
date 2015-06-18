<?php
/**
 *  MYSQL操作类
 *
 *
 *
 */
if (!defined('IN_DC'))
{
	die('Hacking attempt');
}


class MySql {

	private $dbhost;//数据库主机
	private $dbuser;//数据库用户名
	private $dbpass;//数据库用户名密码
	private $dbname;//数据库名
	private $link;//数据库连接标识
	private $prefix;//数据库表前缀
	private $charset;//数据库编码
	private $sql;//sql语句
	private $result;//执行query命令的结果资源

	/* 构造函数 */
	public function __construct($dbhost,$dbuser,$dbpass,$dbname,$prefix,$charset)
	{
		$this->dbhost = $dbhost;
		$this->dbuser = $dbuser;
		$this->dbpass = $dbpass;
		$this->dbname = $dbname;
		$this->prefix = $prefix;
		$this->charset = strtolower(str_replace('-','',$charset));
		$this->connect();
	}

	/* 连接数据库 */
	public function connect()
	{
		$this->link = @mysql_connect($this->dbhost,$this->dbuser,$this->dbpass) or die($this->error());
		mysql_select_db($this->dbname,$this->link) or die("No this database:".$this->error());
		mysql_query("SET NAMES $this->charset");

	}

	/*数据库执行语句，可以执行查询等sql语句*/
	public function query($sql)
	{
		$this->sql = $sql;
		$query = mysql_query($this->sql,$this->link);
		return $query;
	}

	/* 取得前一次 MYSQL操作所影响的记录行数 */
	public function affected_rows()
	{
		return mysql_affected_rows();
	}

	/* 返回结果集中一个字段的值 */
	public function result($row = 0)
	{
		return @mysql_result($this->result,$row);
	}

	/* 返回结果集中行的数目 */
	public function num_rows($query)
	{
		return @mysql_num_rows($query);
	}

	/* 返回结果集中字段的数 */
	public function num_fields($query)
	{
		return mysql_num_fields($query);
	}

	/* 释放内存 */
	public function free()
	{
		return mysql_free_result($this->result);
	}

	/* 返回上一步 INSERT 操作生成的 ID */
	public function insert_id()
	{
		return mysql_insert_id;
	}

	/* 从结果集中取得一行作为数字数组 */
	public function fetch_row($query)
	{
		return mysql_fetch_row($query);
	}

	/* 从结果集中取得一行作为关联数组 */
	public function fetch_assoc($query)
	{
		return mysql_fetch_assoc($query);
	}

	/* 从结果集取得的行生成数组 */
	public function fetch_array($query)
	{
		return mysql_fetch_array($query);
	}

	/* 返回错误信息 */
	public function error()
	{
		return mysql_error();
	}

	/* 返回MYSQL服务器信息 */
	public function version()
	{
		if(empty($this->version))
		{
			$this->version = mysql_get_server_info($this->link);
		}
		return $this->version;
	}

	/* 关闭MYSQL连接 */
	public function close()
	{
		return mysql_close($this->link);
	}

	/* 指定表及其前缀 */
	public function table($str)
	{
		return '`' . $this->prefix . $str .'`';
	}

	/* 查询全部 */
	public function select_all($table)
	{
		return $this->query("select * from " . $this->table($table));
	}

	/* 条件查询 */
	public function select($table, $columnName = "*", $condition = '',$debug = '')
	{
		$condition = $condition ? 'Where' . $condition : NULL;
		if($debug)
		{
			echo "select $columnName from $table $condition";
		}
		else
		{
			$query = $this->query("select $columnName from $table $condition");
			return $query;
		}
	}




}

?>
<?php

if (!defined('IN_DC'))
{
	die('Hacking attempt');
}


class Db extends MySql {

	/* 删除数据  */
 public function delete($table,$condition,$debug='')
    {
    	
    	if($debug){
    		echo "delete from ".$this->table($table)." where $condition";
    	}else{
			$delete= $this->query("delete from ".$this->table($table)." where $condition",$this->link);
    		
    	}
 return $delete;
    }

    /* 添加数据 */
    public function insert($table,$arr,$debug = '')
    {

    	if(!empty($arr))
    	{
    		foreach($arr as $key => $value){
    			$keys .=$key.',';
    			$values .="'".$value."',";
    		}
    		//去掉后面的逗号
    		$keys = substr($keys,0,-1);
    		$values = substr($values,0,-1);
    		$query = "insert into ".$this->table($table)." (".$keys.")values(".$values.")";
    		if($debug){
    		echo $query;
    	}
    	
    	return $this->query($query);
    	}

    }

    /* 更新数据 */
    public function update($table,$arr,$condition)
    {
    	$query = "update ".$this->table($table)." SET ";
		foreach($arr as $key => $value){
			$query .= $key." = '".$value."',";
		}
		//去掉后面的逗号
		$query = substr($query,0,-1);

		$query .= " WHERE ".$condition;
	//echo $query;
      return $this->query($query);
    }
    
	/* 消息提示框*/
    public function msg($msg,$url)
    {
    	echo("<script>alert('".$msg."');location.href='".$url."'</script>");
    }

	public function rc($er)
	{
		echo("<script>alert('".$er."');window.history.back();</script>");
	}

    /* 获取当前用户访问ip，并替换隐藏符号*/
	public function get_ip()
	{
		if($_SERVER['REMOTE_ADDR'] =='::1'){
			$_SERVER['REMOTE_ADDR'] = '127.0.0.1';
		}
		$ip =$_SERVER['REMOTE_ADDR'];
		$arr = explode(".",$ip);
		$arr[3]="*";
		$g_ip =$arr[0].".".$arr[1].".".$arr[2].".".$arr[3];
		return $g_ip;
	}

}
?>
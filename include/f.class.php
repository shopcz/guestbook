<?php
/**
* Author:霏凡
* Email :zyf8985957@163.com
* 
*/
class F{
	private $fp;
	private $cf;
	private $cfg;
	
	public function write($arr,$dir)
	{
		$this->cfg = $arr;
		$write = file_put_contents($dir,serialize($this->cfg));
		return $write;
	}

	public function read($dir){
		$fp = fopen($dir,'r');//读取配置文件
		$cf = unserialize(fread($fp,filesize($dir)));//反序列化，并赋值
		
		return $cf;		
	}


}

?>
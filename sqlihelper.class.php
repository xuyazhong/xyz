<?php
	class SqlHelper{
		private $mysqli;
		private static $host="localhost";
		private static $user="root";
		private static $pwd="";
		private static $db="book";
		public function __construct(){
			$this->mysqli= new mysqli(self::$host,self::$user,self::$pwd,self::$db);
			if($this->mysqli->connect_error){
				die("连接失败".$this->mysqli->connect_error);
			}
			$this->mysqli->query("set names utf8");
		}
		public function execute_dql($sql){
			$res=$this->mysqli->query($sql) or die("失败".$this->mysqli->error);
			return $res;
		}
		public function execute_dml($sql)
		{
			$res=$this->mysqli->query($sql) or die("失败".$this->mysqli->error);
			if(!$res){
				return 0;
			}else{
				if($this->mysqli->affected_rows>0){
					//echo "执行成功";
					return 1;
				}else{
					//echo "没有影响行数".$this->mysqli->error;
					return 2;
				}
			}
		}
	}
?>
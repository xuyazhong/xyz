<?php
	class SqlHelper{
		private $conn;
		private $host="localhost";
		private $user="root";
		private $password="";
		private $db="book";

		function SqlHelper(){
			//echo "ok";
			$this->conn=mysql_connect($this->host,$this->user,$this->password);
			if(!$this->conn){
				die("连接数据库失败".mysql_error());
			}
			mysql_select_db($this->db);
			mysql_query("set names utf8");
		}

		function execute_dql($sql){
			return mysql_query($sql,$this->conn);
		}
		function execute_dml($sql){
			$b=mysql_query($sql,$this->conn);
			if(!$b){
				return 0;
			}else{
				if(mysql_affected_rows($this->conn)>0){
					return 1;
				}else{
					return 2;
				}
			}
		}
	}
?>
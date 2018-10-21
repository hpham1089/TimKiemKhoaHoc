<?php
	class DB{
		private static $con = NULL;
		public static function getConnection(){
			if(self::$con==NULL){//chua ket noi database
				//chen cau hinh (url,port,uname,upass,dbname)
				require_once('config.php');
				self::$con = new PDO("mysql:host=$url;port=$port;dbname=$dbname",$uname,$upass);
				self::$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);	
			}
			return self::$con;
		}
	}
?>
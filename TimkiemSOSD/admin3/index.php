<?php
	require_once('connection.php');
	if(DB::getConnection()){//het noi duoc
		if(isset($_GET['controller'])&&isset($_GET['action'])){
			$controller = $_GET['controller'];
			$action = $_GET['action'];
		}
		else{
			$controller = "page";
			$action = "home";
		}
		include_once('view/layout.php');//trinh bay trang
	}
	else{
		die("Khong ket noi duoc voi database");
	}

?>
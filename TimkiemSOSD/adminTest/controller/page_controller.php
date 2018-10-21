<?php
	class PageController{
		public function home(){
			//kiểm tra xem đã đăng nhập chưa
			if(isset($_SESSION['islogin'])){//đã đăng nhập
				require_once('view/admin.php');
			}
			else{//chưa đăng nhập
				require_once('view/login.php');
			}
		}
		public function error(){
			require_once('view/error.php');
		}
	}
?>
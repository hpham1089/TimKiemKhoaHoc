<?php
	class UserController{
		public function insert(){
			$uname = $_POST['uname'];
			$upass = md5($_POST['upass']);
			$uright = intval($_POST['uright']);
			User::insert($uname,$upass,$uright);
			$users = User::getAllUser();
			require_once('view/showuser.php');

		}
		public function edit(){//hien form
			$id = intval($_GET['id']);
			$user = User::findUser($id);
			//chac chan tim thay
			include_once('view/edituser.php');
		}
		public function update(){//cap nhat database
			$uname = $_POST['uname'];
			$upass = $_POST['upass'];
			$uright = intval($_POST['uright']);
			$id = intval($_POST['id']);
			User::update($id,$uname,$upass,$uright);
			$users = User::getAllUser();
			require_once('view/showuser.php');

		}
		public function delete(){
			//id
			$id = intval($_GET['id']);
			User::delete($id);
			$users = User::getAllUser();
			require_once('view/showuser.php');
		}
		public function view(){
			$users = User::getAllUser();
			require_once('view/showuser.php');
		}
		public function login(){

			$uname = $_POST['uname'];
			$upass = md5($_POST['upass']);
			User::login($uname,$upass);
			header("Location:index.php");
		}
		public function logout(){
			session_unset();
			session_destroy();
			header("Location:index.php");
		}
		public function add(){
			//hiện form để người dùng nhập dữ liệu
			require_once('view/adduser.php');
		}
	}
?>
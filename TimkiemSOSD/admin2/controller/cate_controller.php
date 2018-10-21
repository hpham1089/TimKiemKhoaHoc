<?php
	class CateController{
		public function insert(){
			$name = $_POST['name'];
			Cate::insert($name);
			$cates = Cate::getAllCategory();
			require_once('view/showcate.php');
		}
		public function edit(){//hien form
			$id = intval($_GET['id']);
			$cate = Cate::findCategory($id);
			//chac chan tim thay
			require_once('view/editcate.php');
		}
		public function update(){//cap nhat database
			$name = $_POST['name'];
			$id = intval($_POST['id']);
			Cate::update($id,$name);
			$cates = Cate::getAllCategory();
			require_once('view/showcate.php');
		}
		public function delete(){
			//id
			$id = intval($_GET['id']);
			Cate::delete($id);
			$cates = Cate::getAllCategory();
			require_once('view/showcate.php');
		}
		public function view(){
			$cates = Cate::getAllCategory();
			require_once('view/showcate.php');
		}
		public function add(){
			//hiện form để người dùng nhập dữ liệu
			require_once('view/addcate.php');
		}
	}
?>
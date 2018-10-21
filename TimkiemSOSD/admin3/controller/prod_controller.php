<?php
	class ProdController{
		public function insert(){
			$name = $_POST['name'];
			$quantity = intval($_POST['quantity']);
			$price = floatval($_POST['price']);
			$discountPrice = floatval($_POST['discountPrice']);
			$image = basename($_FILES['image']['name']);
			$description = $_POST['description'];
			$cateId = intval($_POST['cate']);
			Prod::insert($name,$quantity,$price,$image,$description,$cateId,$discountPrice);
			$prods = Prod::getAllProduct();
			//lưu file ảnh
			$file_name = 'image/'.$image;
			if(!file_exists($file_name)){
				move_uploaded_file($_FILES['image']['tmp_name'], $file_name);
			}
			require_once('view/showproduct.php');
		}
		public function edit(){//hien form
			$id = intval($_GET['id']);
			$prod = Prod::findProduct($id);
			$cates = Cate::getAllCategory();
			//chac chan tim thay
			require_once('view/editproduct.php');
		}
		public function update(){//cap nhat database
			$name = $_POST['name'];
			$quantity = intval($_POST['quantity']);
			$price = floatval($_POST['price']);
			$discountPrice = floatval($_POST['discountPrice']);
			$image = basename($_FILES['image']['name']);
			if($image!=""){
				$file_name = 'image/'.$image;
				if(!file_exists($file_name)){
					move_uploaded_file($_FILES['image']['tmp_name'], $file_name);
				}
			}
			$description = $_POST['description'];
			$cateId = intval($_POST['cate']);
			$id = intval($_POST['id']);
			Prod::update($id,$name,$quantity,$price,$image,$description,$cateId,$discountPrice);
			$prods = Prod::getAllProduct();
			require_once('view/showproduct.php');
		}
		public function delete(){
			//id
			$id = intval($_GET['id']);
			Prod::delete($id);
			$prods = Prod::getAllProduct();
			require_once('view/showproduct.php');
		}
		public function view(){
			$prods = Prod::getAllProduct();
			require_once('view/showproduct.php');
		}
		public function add(){
			//hiện form để người dùng nhập dữ liệu
			//lấy ra tất cả các nhóm
			$cates = Cate::getAllCategory();
			require_once('view/addproduct.php');
		}
		public function discountAll(){
			$percent = intval($_POST['percent']);
			Prod::discountAll($percent);
			$prods = Prod::getAllProduct();
			require_once('view/showproduct.php');
		}
		public function discountByCate(){
			$percent = intval($_POST['percent']);
			$cateId = intval($_POST['cate']);
			Prod::discountByCate($percent,$cateId);
			$prods = Prod::getAllProduct();
			require_once('view/showproduct.php');
		}
		public function discountByProd(){
			$percent = intval($_POST['percent']);
			$id = intval($_POST['product']);
			Prod::discountByProd($percent,$id);
			$prods = Prod::getAllProduct();
			require_once('view/showproduct.php');
		}
	}
?>
<?php
	class StaController{
		public function order(){
			$orders = Order::getAllOrder();//lây các hoasa đơn
			//var_dump($orders);
			require_once('view/showorder.php');
		}
		public function delete(){
			//lay id cua hoa don can xoa
			$id = intval($_GET["id"]);
			//Xoa sử dụng phương thức delete của model 
			Order::delete($id);
			//Hiển thị lại danh sách hóa đơn
			$orders = Order::getAllOrder();//lây các hóa đơn
			//Hiển thị bằng cách sử dụng view
			require_once('view/showorder.php');

		}
		//xem chi tiết hóa đơn
		public function details(){
			//lấy id của hóa đơn cần xem
			$id = intval($_GET['id']);
			$orderdetails = OrderDetails::getAllOrderDetails($id);
			//gọi view để hiển thị chi tiết hóa đơn
			require_once('view/showdetails.php');
		}
		public function update(){
			$id = intval($_POST['id']);
			$status = intval($_POST['status']);
			Order::updateStatus($id,$status);
			//hiển thị các hóa đơn
			$orders = Order::getAllOrder();//lây các hoasa đơn
			//var_dump($orders);
			require_once('view/showorder.php');		
		}
	}
?>
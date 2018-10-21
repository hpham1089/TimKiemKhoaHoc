<?php
	class OrderDetails{
		//khai bao cac thuoc tinh
		private $name;
		private $quantity;
		private $price;
		//dinh nghia phuong thuc tao
		public function OrderDetails($name,$quantity,$price){
			$this->name = $name;
			$this->quantity = $quantity;
			$this->price = $price;
		}
		//dinh nghia phuong thuc get
		public function getName(){
			return $this->name;
		}
		public function getQuantity(){
			return $this->quantity;
		}
		public function getPrice(){
			return $this->price;
		}
		
		public static function getAllOrderDetails($orderId){
			$list = [];
			$con = DB::getConnection();
			$sql = "SELECT P.name,OD.quantity,OD.price FROM tblorderdetails AS OD INNER JOIN tblproduct AS P ON OD.prodId = P.id WHERE OD.orderId = ?";
			try{
				$pst = $con->prepare($sql);
				$pst->bindValue(1,$orderId);
				$pst->execute();
				$rs = $pst->fetchAll();
				foreach ($rs as $v) {
					$list[]=new OrderDetails($v['name'],$v['quantity'],$v['price']);
				}
				return $list;
			}
			catch(PDOException $e){
				echo $e->getMessage();
				return NULL;
			}
		}
		public static function insert($orderId,$prodId,$quantity,$price){
			$con = DB::getConnection();
			$sql = "INSERT INTO tblorderdetails (orderId,prodId,quantity,price) VALUES (?,?,?,?)";
			try{
				$pst = $con->prepare($sql);
				$pst->bindValue(1,$orderId);
				$pst->bindValue(2,$prodId);
				$pst->bindValue(3,$quantity);
				$pst->bindValue(4,$price);
				$pst->execute();
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}
		}
	}
?>
<?php
	class Order{
		//khai bao cac thuoc tinh
		private $id;
		private $orderDate;
		private $orderTime;
		private $total;
		private $cname;
		private $rname;
		private $address;
		private $phone;
		private $email;
		private $status;
		//dinh nghia phuong thuc tao
		public function Order($id,$orderDate,$orderTime,$total,$cname,$rname,$address,$phone,$email,$status=0){
			$this->id = $id;
			$this->orderDate = $orderDate;
			$this->orderTime = $orderTime;
			$this->total = $total;
			$this->cname = $cname;
			$this->rname = $rname;
			$this->address = $address;
			$this->phone = $phone;
			$this->email = $email;
			$this->status = $status;
		}
		//dinh nghia phuong thuc get
		public function getId(){
			return $this->id;
		}
		public function getCName(){
			return $this->cname;
		}
		public function getRName(){
			return $this->rname;
		}
		public function getOrderDate(){
			return $this->orderDate;
		}
		public function getOrderTime(){
			return $this->orderTime;
		}
		public function getTotal(){
			return $this->total;
		}
		public function getAddress(){
			return $this->address;
		}
		public function getPhone(){
			return $this->phone;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getStatus(){
			return $this->status;
		}
		public static function getAllOrder(){
			$list = [];
			$con = DB::getConnection();
			$sql = "SELECT O.id,O.orderDate,O.orderTime,O.total,O.name as rname,O.address,O.phone,O.email,O.status,C.name AS cname FROM tblorder AS O INNER JOIN tblcustomer AS C ON O.cusId = C.id";
			try{
				$pst = $con->prepare($sql);
				$pst->execute();
				$rs = $pst->fetchAll();
				foreach ($rs as $v) {
					$list[]=new Order($v['id'],$v['orderDate'],$v['orderTime'],$v['total'],$v['cname'],$v['rname'],$v['address'],$v['phone'],$v['email'],$v['status']);
				}
				return $list;
			}
			catch(PDOException $e){
				echo $e->getMessage();
				return NULL;
			}
		}
		public static function insert($cusId,$total,$rname,$address,$phone,$email){
			$con = DB::getConnection();
			$sql = "INSERT INTO tblorder (orderDate,orderTime,total,name,address,phone,email,cusId) VALUES (?,?,?,?,?,?,?,?)";
			try{
				$pst = $con->prepare($sql);
				$pst->bindValue(1,date('Y-m-d'));
				$pst->bindValue(2,date('H:i:s'));
				$pst->bindValue(3,$total);
				$pst->bindValue(4,$rname);
				$pst->bindValue(5,$address);
				$pst->bindValue(6,$phone);
				$pst->bindValue(7,$email);
				$pst->bindValue(8,$cusId);
				$pst->execute();
				return $con->lastInsertId();
			}
			catch(PDOException $e){
				echo $e->getMessage();
				return 0;
			}
		}
		public static function updateStatus($id,$status){
			$con = DB::getConnection();
			$sql = "UPDATE tblorder SET status = ? WHERE id = ?";
			try{
				$pst = $con->prepare($sql);
				$pst->bindValue(1,$status);
				$pst->bindValue(2,$id);
				
				$pst->execute();
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}
		}
		public static function delete($id){
			$con = DB::getConnection();
			$sql = "DELETE FROM tblorder WHERE id = ?";
			try{
				$pst = $con->prepare($sql);
				$pst->bindValue(1,$id);
				$pst->execute();
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}	
		}
		
	}
?>
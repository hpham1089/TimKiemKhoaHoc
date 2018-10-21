<?php
	class Prod{
		//khai bao cac thuoc tinh
		private $id;
		private $name;
		private $quantity;//ban hang online
		private $price;
		private $discountPrice;
		private $image;
		private $createDate;
		private $description;
		private $cateName;
		//dinh nghia phuong thuc tao
		public function Prod($id,$name,$quantity,$price,$discountPrice,$image,$createDate,$description,$cateName){
			$this->id = $id;
			$this->name = $name;
			$this->quantity = $quantity;
			$this->price = $price;
			$this->discountPrice= $discountPrice;
			$this->image = $image;
			$this->createDate = $createDate;
			$this->cateName = $cateName;
			$this->description = $description;
		}
		//dinh nghia phuong thuc get
		public function getId(){
			return $this->id;
		}
		public function getName(){
			return $this->name;
		}
		public function getQuantity(){
			return $this->quantity;
		}
		public function getPrice(){
			return $this->price;
		}
		public function getDiscountPrice(){
			return $this->discountPrice;
		}
		public function getImage(){
			return $this->image;
		}
		public function getCreateDate(){
			return $this->createDate;
		}
		public function getDescription(){
			return $this->description;
		}
		public function getCateName(){
			return $this->cateName;
		}
		
		//cac phuong thuc tuong tac bang tblcategory
		public static function insert($name,$quantity,$price,$image,$description,$cateId,$discountPrice=0){
			$con = DB::getConnection();
			$sql = "INSERT INTO tblproduct (name,quantity,price,discountPrice,image,description,cateid) VALUES(?,?,?,?,?,?,?)";
			try{
				$pst = $con->prepare($sql);
				$pst->bindValue(1,$name);
				$pst->bindValue(2,$quantity);
				$pst->bindValue(3,$price);
				$pst->bindValue(4,$discountPrice);
				$pst->bindValue(5,$image);
				$pst->bindValue(6,$description);
				$pst->bindValue(7,$cateId);
				$pst->execute();
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}

		}
		public static function update($id,$name,$quantity,$price,$image,$description,$cateId,$discountPrice=0){
			$con = DB::getConnection();
			if($image!=""){
				$sql = "UPDATE tblproduct SET name = ?,quantity = ?,price = ?,discountPrice = ?,description = ?,cateid = ?,image = ? WHERE id = ?";
			}
			else{
				$sql = "UPDATE tblproduct SET name = ?,quantity = ?,price = ?,discountPrice = ?,description = ?,cateid = ? WHERE id = ?";	
			}
			try{
				$pst = $con->prepare($sql);
				$pst->bindValue(1,$name);
					$pst->bindValue(2,$quantity);
					$pst->bindValue(3,$price);
					$pst->bindValue(4,$discountPrice);
					$pst->bindValue(6,$cateId);
					$pst->bindValue(5,$description);
				if($image!=""){
					$pst->bindValue(7,$image);
					$pst->bindValue(8,$id);
				}
				else{
					$pst->bindValue(7,$id);
				}
				$pst->execute();
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}

		}
		public static function delete($id){
			$con = DB::getConnection();
			$sql = "DELETE FROM tblproduct WHERE id = ?";
			try{
				$pst = $con->prepare($sql);
				$pst->bindValue(1,$id);
				$pst->execute();
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}			
		}
		public static function getAllProduct(){
			$list = [];
			$con = DB::getConnection();
			$sql = "SELECT P.id,P.name,P.quantity,P.price,P.discountPrice,P.image,P.createdate,P.description,C.name AS cateName FROM tblproduct AS P INNER JOIN tblcategory AS C ON P.cateid = C.id";
			try{
				$pst = $con->prepare($sql);
				$pst->execute();
				$rs = $pst->fetchAll();
				foreach ($rs as $v) {
					$list[]=new Prod($v['id'],$v['name'],$v['quantity'],$v['price'],$v['discountPrice'],$v['image'],$v['createdate'],$v['description'],$v['cateName']);
				}
				return $list;
			}
			catch(PDOException $e){
				echo $e->getMessage();
				return NULL;
			}
		}
		public static function findProduct($id){
			$con = DB::getConnection();
			$sql = "SELECT P.id,P.name,P.quantity,P.price,P.discountPrice,P.image,P.createdate,P.description,C.name AS cateName FROM tblproduct AS P INNER JOIN tblcategory AS C ON P.cateid = C.id WHERE P.id = ?";
			try{
				$pst = $con->prepare($sql);
				$pst->bindValue(1,$id);
				$pst->execute();
				if($pst->rowCount()>0){//tim thay
					$v = $pst->fetch();
					return new Prod($v['id'],$v['name'],$v['quantity'],$v['price'],$v['discountPrice'],$v['image'],$v['createdate'],$v['description'],$v['cateName']);	
				}
				else{
					return NULL;
				}
			}
			catch(PDOException $e){
				echo $e->getMessage();
				return NULL;
			}
		}
		public function discountAll($percent){
			$con = DB::getConnection();
			$sql = "UPDATE tblproduct SET discountPrice = (1-?/100)*price";
			try{
				$pst = $con->prepare($sql);
				$pst->bindValue(1,$percent);
				$pst->execute();
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}			
		}
		public function discountByCate($percent,$cateId){
			$con = DB::getConnection();
			$sql = "UPDATE tblproduct SET discountPrice = (1-?/100)*price WHERE cateid = ?";
			try{
				$pst = $con->prepare($sql);
				$pst->bindValue(1,$percent);
				$pst->bindValue(2,$cateId);
				$pst->execute();
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}			
		}
		public function discountByProd($percent,$id){
			$con = DB::getConnection();
			$sql = "UPDATE tblproduct SET discountPrice = (1-?/100)*price WHERE id = ?";
			try{
				$pst = $con->prepare($sql);
				$pst->bindValue(1,$percent);
				$pst->bindValue(2,$id);
				$pst->execute();
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}			
		}
		
	}
?>
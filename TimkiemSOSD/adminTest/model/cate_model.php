<?php
	class Cate{
		//khai bao cac thuoc tinh
		private $id;
		private $name;
		//dinh nghia phuong thuc tao
		public function Cate($id,$name){
			$this->id = $id;
			$this->name = $name;
		}
		//dinh nghia phuong thuc get
		public function getId(){
			return $this->id;
		}
		public function getName(){
			return $this->name;
		}
		
		//cac phuong thuc tuong tac bang tblcategory
		public static function insert($name){
			$con = DB::getConnection();
			$sql = "INSERT INTO tblcategory (name) VALUES(?)";
			try{
				$pst = $con->prepare($sql);
				$pst->bindValue(1,$name);
				$pst->execute();
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}

		}
		public static function update($id,$name){
			$con = DB::getConnection();
			$sql = "UPDATE tblcategory SET name = ? WHERE id = ?";
			try{
				$pst = $con->prepare($sql);
				$pst->bindValue(1,$name);
				$pst->bindValue(2,$id);
				$pst->execute();
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}

		}
		public static function delete($id){
			$con = DB::getConnection();
			$sql = "DELETE FROM tblcategory WHERE id = ?";
			try{
				$pst = $con->prepare($sql);
				$pst->bindValue(1,$id);
				$pst->execute();
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}			
		}
		public static function getAllCategory(){
			$list = [];
			$con = DB::getConnection();
			$sql = "SELECT * FROM tblcategory";
			try{
				$pst = $con->prepare($sql);
				$pst->execute();
				$rs = $pst->fetchAll();
				foreach ($rs as $v) {
					$list[]=new Cate($v['id'],$v['name']);
				}
				return $list;
			}
			catch(PDOException $e){
				echo $e->getMessage();
				return NULL;
			}
		}
		public static function findCategory($id){
			$con = DB::getConnection();
			$sql = "SELECT * FROM tblcategory WHERE id = ?";
			try{
				$pst = $con->prepare($sql);
				$pst->bindValue(1,$id);
				$pst->execute();
				if($pst->rowCount()>0){//tim thay
					$rs = $pst->fetch();
					return new Cate($rs['id'],$rs['name']);	
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
		
	}
?>
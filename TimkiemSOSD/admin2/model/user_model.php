<?php
	class User{
		//khai bao cac thuoc tinh
		private $id;
		private $uname;
		private $upass;
		private $uright;
		public function User($id,$uname,$upass,$uright){
			$this->id = $id;
			$this->uname = $uname;
			$this->upass = $upass;
			$this->uright = $uright;
		}
		public function getId(){
			return $this->id;
		}
		public function getUName(){
			return $this->uname;
		}
		public function getUPass(){
			return $this->upass;
		}
		public function getURight(){
			return $this->uright;
		}
		//cac phuong thuc tuong tac bang tbluser
		public static function insert($uname,$upass,$uright){
			$con = DB::getConnection();
			$sql = "INSERT INTO tbluser (uname,upassword,uright) VALUES(?,?,?)";
			try{
				$pst = $con->prepare($sql);
				$pst->bindValue(1,$uname);
				$pst->bindValue(2,$upass);
				$pst->bindValue(3,$uright);
				$pst->execute();
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}

		}
		public static function update($id,$uname,$upass,$uright){
			$con = DB::getConnection();
			$sql = "UPDATE tbluser SET uname = ?,upassword = ?, uright = ? WHERE id = ?";
			try{
				$pst = $con->prepare($sql);
				$pst->bindValue(1,$uname);
				$pst->bindValue(2,$upass);
				$pst->bindValue(3,$uright);
				$pst->bindValue(4,$id);
				$pst->execute();
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}

		}
		public static function delete($id){
			$con = DB::getConnection();
			$sql = "DELETE FROM tbluser WHERE id = ?";
			try{
				$pst = $con->prepare($sql);
				$pst->bindValue(1,$id);
				$pst->execute();
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}			
		}
		public static function getAllUser(){
			$list = [];
			$con = DB::getConnection();
			$sql = "SELECT * FROM tbluser";
			try{
				$pst = $con->prepare($sql);
				$pst->execute();
				$rs = $pst->fetchAll();
				foreach ($rs as $v) {
					$list[]=new User($v['id'],$v['uname'],$v['upassword'],$v['uright']);
				}
				return $list;
			}
			catch(PDOException $e){
				echo $e->getMessage();
				return NULL;
			}
		}
		public static function findUser($id){
			$con = DB::getConnection();
			$sql = "SELECT * FROM tbluser WHERE id = ?";
			try{
				$pst = $con->prepare($sql);
				$pst->bindValue(1,$id);
				$pst->execute();
				if($pst->rowCount()>0){//tim thay
					$rs = $pst->fetch();
					return new User($rs['id'],$rs['uname'],$rs['upassword'],$rs['uright']);	
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
		public static function login($uname,$upass){
			$con = DB::getConnection();
			$sql = "SELECT * FROM tbluser WHERE uname = ? AND upassword = ?";
			try{
				$pst = $con->prepare($sql);
				$pst->bindValue(1,$uname);
				$pst->bindValue(2,$upass);
				$pst->execute();
				if($pst->rowCount()>0){//tim thay
					$rs = $pst->fetch();
					$_SESSION['islogin'] = true;
					$_SESSION['id'] = $rs['id'];
					$_SESSION['uname'] = $rs['uname'];
					$_SESSION['uright'] = $rs['uright'];
				}
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}

		}
	}
?>
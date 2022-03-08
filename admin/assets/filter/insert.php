<?php 
	include_once "../../../config/myconfig.php";
	/**
	 * 
	 */
	class Insert extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}


		// Thêm dữ liệu vào bảng admin

		public function addAdmin($name,$email,$password,$phone,$level)
		{
			$sql="INSERT INTO admin(name,email,password,phone,level)  VALUES(:name,:email,:password,:phone,:level)";
			$pre=$this->pdo->prepare($sql);
			$pre->bindParam(':name',$name);
			$pre->bindParam(':email',$email);
			$pre->bindParam(':password',$password);		
			$pre->bindParam(':phone',$phone);
			$pre->bindParam(':level',$level);
			return $pre->execute();
		}

			// update thông tin admin theo id

		public function update($name,$email,$password,$phone,$level,$id){
			$sql="UPDATE admin SET name=:name,email=:email,password=:password,phone=:phone,level=:level WHERE id =:id";
			$pre=$this->pdo->prepare($sql);
			$pre->bindParam(':id',$id);
			$pre->bindParam(':name',$name);
			$pre->bindParam(':email',$email);
			$pre->bindParam(':password',$password);
			$pre->bindParam(':phone',$phone);
			$pre->bindParam(':level',$level);
			return $pre->execute();
		}

	}

	/**
	 * 
	 */
	class InsertController extends Insert
	{
		private $insert;
		
		function __construct()
		{
			$this->insert = new Insert();
		}

		public function index()
		{	
				$name= $_POST['name'];
				$email= $_POST['email'];
				$password= md5($_POST['pass']);
				$phone= $_POST['phone'];
				$level= $_POST['position'];
			if ($_POST['id'] !="") {
				$id=$_POST['id'];
				$this->insert->update($name,$email,$password,$phone,$level,$id);
				echo "<script>alert('Cập nhật thành công!');</script>";
				
			}else{
				$this->insert->addAdmin($name,$email,$password,$phone,$level);
				echo "<script>alert('Thêm mới thành công!');</script>";
				
			}
			
			include_once 'insertAd.php';
		}

			
	}

	


	$admin =new InsertController();
	$admin->index();
	
?>
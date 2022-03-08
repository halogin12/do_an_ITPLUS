<?php 
include_once '../config/myconfig.php';
	/**
	 * 
	 */
	class categories extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}
        public function show(){
            $sql = "SELECT * FROM categories";
            $pre = $this->pdo->prepare($sql);
            $pre->execute();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
		public function insertCategories( $name,$status){
			$sql = "INSERT INTO categories (name,status) values (:name,:status)";
			$pre = $this->pdo->prepare($sql);
			// $pre->bindParam(':id',$id);
			$pre->bindParam(':name',$name);
			$pre->bindParam(':status',$status);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		public function updateCategory($id, $name,$status){
			$sql = "UPDATE categories SET name =:name, status =:status where id=$id";
			$pre = $this->pdo->prepare($sql);
			//$pre->bindParam(':id',$id);
			$pre->bindParam(':name',$name);
			$pre->bindParam(':status',$status);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);

		}

		public function selectId($id){
			$sql = "SELECT * FROM categories WhERE id=$id";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
    }
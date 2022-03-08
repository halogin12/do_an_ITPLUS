<?php 
	include_once '../../config/myconfig.php';
	class search extends Connect
	{
		function __construct()
		{
			parent::__construct();

		}
		function searchProduct($name)
		{
			$sql = "SELECT id, name, avatar FROM product where name like :name";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':name',$name);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
	}
?>
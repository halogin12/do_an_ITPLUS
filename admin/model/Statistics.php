<?php 
	include_once '../config/myconfig.php';
	/**
	 * 
	 */
	class Statistics extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}

		// Lấy số liệu bảng product
		public function StatisticsPro()
		{	

			$sql="SELECT * FROM product";
			$pre=$this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		// Lấy số liệu doanh thu
		public function Revenue()
		{
			$sql="SELECT orders.total_price FROM orders";
			$pre=$this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);

		}

		// Lấy thông tin admin
			public function admin()
		{
			$sql="SELECT * FROM admin";
			$pre=$this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);

		}
	}
?>
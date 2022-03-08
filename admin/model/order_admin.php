<?php 
include_once '../config/myconfig.php';
	/**
	 * 
	 */
	class OrderAdmin extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}
		// Lấy thông tin đơn hàng
		public function getOrder()
		{
			$result =array();
			$sql = "SELECT orders.id,customer.name,customer.phone,customer.address,orders.key_token,orders.created_at  FROM orders,customer WHERE orders.customer_id=customer.id";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		// Lấy thông tin đơn hàng theo id
		public function OrderDetail($id)
		{
			$OrderDetail= array();
			$sql="SELECT customer.name AS 'member',customer.phone,customer.email,customer.address,product.name,order_detail.quantity,order_detail.price,orders.total_price,orders.note,order_detail.total,product.avatar FROM `order_detail` INNER JOIN product ON order_detail.product_id=product.id INNER JOIN orders ON order_detail.order_id= orders.id INNER JOIN customer ON orders.customer_id=customer.id
			WHERE order_detail.order_id= :id";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id',$id);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		// Xóa chi tiết đơn hàng theo id
		public function DeOrderdetail($id)
		{
			$sql="DELETE FROM order_detail WHERE order_detail.order_id= :id";
			$pre =$this->pdo->prepare($sql);
			$pre->bindParam(':id',$id);
			$pre->execute();
		}
		// Xóa đơn hàng theo id
		public function DeOrder($id)
		{
			$sql="DELETE FROM orders WHERE orders.id = :id";
			$pre =$this->pdo->prepare($sql);
			$pre->bindParam(':id',$id);
			$pre->execute();
		}

		public function DeCustomer($id)
		{
			$sql="DELETE FROM customer WHERE customer.id= :id";
			$pre =$this->pdo->prepare($sql);
			$pre->bindParam(':id',$id);
			$pre->execute();
		}
	}
	?>

	
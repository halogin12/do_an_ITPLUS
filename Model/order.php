<?php  
	include_once 'config/myconfig.php';

	class Order extends Connect
	{
		function __construct()
		{
			parent::__construct();

		}

		public function addMemberOrder($name, $email, $phone, $address){
			$sql = "INSERT INTO customer(name, email, phone, address) VALUES (:name, :email, :phone, :address)";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':name',$name);
			$pre->bindParam(':email',$email);
			$pre->bindParam(':phone',$phone);
			$pre->bindParam(':address',$address);
			return $pre->execute();
		}

		public function addOrder($customer_id,$total_price, $note, $key_token){
			$sql = "INSERT INTO orders(customer_id, total_price,note, key_token) VALUES(:customer_id, :total_price,:note, :key_token)";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':customer_id',$customer_id);
			$pre->bindParam(':total_price',$total_price);
			$pre->bindParam(':note',$note);
			$pre->bindParam(':key_token',$key_token);
			return $pre->execute();
		}


		public function addOrderDetail($order_id, $product_id, $price, $quantity, $total){
			$sql = "INSERT INTO order_detail(order_id, product_id, price, quantity, total) VALUES(:order_id, :product_id, :price, :quantity, :total)";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':order_id',$order_id);
			$pre->bindParam(':product_id',$product_id);
			$pre->bindParam(':price',$price);
			$pre->bindParam(':quantity',$quantity);
			$pre->bindParam(':total',$total);
			return $pre->execute();
		}
	}
	
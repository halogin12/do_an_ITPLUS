<?php 
include_once 'Model/order.php';
	/**
	 * 
	 */
	class OrderController extends Order
	{
		private $order;
		
		function __construct()
		{
			$this->order= new Order();
		}

		public function index()
		{
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}else{
				$method = 'index';
			}

			switch ($method) {
				case 'ordered':
				if (isset($_POST['order'])) {
					$name= $_POST['name'];
					$address=$_POST['addres'];
					$phone =$_POST['phone'];
					$email =$_POST['email'];
					$note= $_POST['note'];
					$total_price = $_SESSION['sum_total'];

					$this->order->addMemberOrder($name, $email, $phone, $address);
					$customer_id = $this->order->pdo->lastInsertId();
					$key_token = md5($customer_id.$phone);
					$this->order->addOrder($customer_id,$total_price, $note, $key_token);

					$order_id= $this->order->pdo->lastInsertId(); 
					
					// echo $order_id;
					if (isset($_SESSION['carts'])&& !empty($_SESSION['carts'])) {
					
						foreach ($_SESSION['carts'] as $key => $value) {
							$total = $value['price']*$value['qty'];

						
							$this->order->addOrderDetail($order_id, $value['id'], $value['price'], $value['qty'], $total);
					}
						include_once 'assets/PHPMailer/mail.php';
						echo "<script>alert('Đặt hàng thành công!');";
						echo "location.href='index.php'; </script>";


						unset($_SESSION['carts']);
					}


				}

				break;



				 

				default:

				break;
			}

			include_once 'view/pages/checkout.php';
		}
	}
	?>
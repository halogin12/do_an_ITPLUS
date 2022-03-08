<?php 
include_once './model/order_admin.php';
	/**
	 * 
	 */
	class OrderAdminController extends OrderAdmin
	{	
		private $orderadmin;
		
		function __construct()
		{
			$this->orderadmin = new OrderAdmin();
		}

		public function index()
		{
			if(isset($_GET['page'])){
				$page = $_GET['page'];
			}else{
				$page = 'order_admin';
			}
			switch ($page) {
				case 'order_admin':
					$result = $this->orderadmin->getOrder();
					include_once 'view/pages/order_admin.php';
				break; 
				case 'detail':
					$id= $_GET['id'];
					$OrderDetail= $this->orderadmin->OrderDetail($id);
					include_once 'view/pages/detail.php';
					break;
				default:
                
				break;
			}

			if (isset($_GET['action'])) {
				$action=$_GET['action'];
			}else{
				$action ='order_admin';
			}

			switch ($action) {
				case 'detroy':
					if (isset($_GET['id'])) {
						$id=$_GET['id'];
						$this->orderadmin->DeOrderdetail($id);
						$this->orderadmin->DeOrder($id);
						$this->orderadmin->DeCustomer($id);
						header('location:index.php?page=order_admin');
					}
					break;
				
				default:
					
					break;
			}

			
		}



	}

	?>

	
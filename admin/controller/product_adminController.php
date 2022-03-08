<?php 
include_once 'model/product_ad.php';
	/**
	 * 
	 */
	class productAdminController extends ProductAdmin
	{	
		private $productadmin;
		
		function __construct()
		{
			$this->productadmin = new ProductAdmin();
		}

		public function index()
		{
			if(isset($_GET['page'])){
				$page = $_GET['page'];
			}else{
				$page = 'product_admin';
			}
			switch ($page) {
				case 'product_admin':
					$result = $this->productadmin->ProAdmin();
					$categories_id = $this->productadmin->categories_id();
					$brand_id = $this->productadmin->brand_id();
					$admin_id = $this->productadmin->admin_id();
					//$searchProduct = $this->productadmin->searchProduct($name);
					include_once 'view/pages/product_admin.php';
				break;

				
			
            }

			if (isset($_GET['action'])) {
				$action=$_GET['action'];
			}else{
				$action ='product_admin';
			}
			switch ($action) {
				case 'product_admin':
					if(isset($_POST['insert_product'])){
                        $name = $_POST['name'];
						$categories_id = $_POST['categories_id'];
						$brand_id = $_POST['brand_id'];
						$avatar = "assets/img/product/".$nameImg;
						$price = $_POST['price'];
						$quantity = $_POST['quantity'];
						$admin_id = $_POST['admin_id'];
						$description = $_POST['description'];
						$status = $_POST['status'];
						
						if( $quantity <= 1){
							$_SESSION['noti'] = 4;	
							header('Location: index.php?page=product_admin');
						}else{
							$insert = $this->productadmin->InsertProduct($name,$categories_id,$brand_id,$avatar,$price,$quantity,$admin_id,$description,$status);
							$_SESSION['noti'] =1;
							header('Location: index.php?page=product_admin');
						}
						
					
						
                        
                    }else if(isset($_POST['update_product'])){
						$name = $_POST['ename'];
						$categories_id = $_POST['ecategories_id'];
						//$brand_id = $_POST['brand_id'];
						// $avatar = $_POST['eavatar'];
						$avatar = "assets/img/product/".$nameImg;
						$price = $_POST['eprice'];
						$quantity = $_POST['equantity'];
						//$admin_id = $_POST['admin_id'];
						$description = $_POST['edescription'];
						$status = $_POST['estatus'];
						$id = $_POST['eid'];
						
						if( $quantity <= 1){
							$_SESSION['noti'] = 4;	
							header('Location: index.php?page=product_admin');
						}else{
							$update = $this->productadmin->UpdateProduct($id,$name,$categories_id,$avatar,$price,$quantity,$description,$status);
							header('Location: index.php?page=product_admin');
						}
					}
					
						
				break;

							
			}
        }
    }
?>
				
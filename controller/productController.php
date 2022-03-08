<?php 
include_once 'Model/product.php';

class ProductController extends Product
{	
	private $product;

	function __construct()
	{
		$this->product = new Product();
	}
	
	function index()
	{	
		if(isset($_GET['page'])){
            $page = $_GET['page'];
          }else{
            $page = 'home';
          }
        switch ($page) {
			case 'home':
			
				//$produc = $this->product->indexProduct();
				$counttt  = $this->product->indexProduct()[0]['count(id)'];
				if (isset($_GET['pages'])){
					$pages = $_GET['pages'];
					$row = 12;
					$from = ($pages - 1)*$row;	
					$produc = $this->product->showProduct($from,$row);
				}else{
					$pages =1;
					$row = 12;
					$from = ($pages - 1)*$row;
					$produc = $this->product->showProduct($from,$row);
				}
				
				$categori = $this->product->indexCategories();
				$status = $this->product->indexStatus();
				$new = $this->product->indexNew();
				$sale = $this->product->indexSale();
				$oos = $this->product->indexOos();
				$banner = $this->product->banner();
				include_once './view/pages/home.php';
				break;
			
            default:
                # code...
                break;
        }
		// if (isset($_GET['method'])) {
		// 	$method = $_GET['method'];
		// }else{
		// 	$method = ' ';
		// }
		// switch ($method) {
		// 	// case 'home':
		// 	// 	$result = $this->product->getProduct();
		// 	// 	include_once 'view/pages/home.php';
		// 	// 	break;
		// 	case 'order':
		// 		if (isset($_GET['id'])) {
		// 			$id = (int)$_GET['id'];
		// 			$result = $this->product->getProductID($id);

		// 			if (!isset($_SESSION['carts']) && empty($_SESSION['carts'])){
		// 				$_SESSION['carts'][$id] = $result;
		// 				$_SESSION['carts'][$id]['qty'] = 1;
		// 			}else{
		// 				if (array_key_exists($id, $_SESSION['carts'])) {
		// 					$_SESSION['carts'][$id]['qty'] += 1;
		// 				}else{
		// 					$_SESSION['carts'][$id] = $result;
		// 					$_SESSION['carts'][$id]['qty'] = 1;
		// 				}
		// 			}

		// 			if ($page!='product-details'){
		// 				header('location:index.php?page='.$page);
		// 			}else{
						
		// 				header('location:index.php?page='.$page.'&id='.$id);
		// 			}
	
		// 		}else{
		// 			if ($page!='product-details'){
		// 				header('location:index.php?page='.$page);
		// 			}else{
						
		// 				header('location:index.php?page='.$page.'&id='.$id);
		// 			}
		// 		}
		// 		break;

		// 	default:
		// 			# code...
		// 	break;
		// }



	}



	function indexProduct()
	{
		if(isset($_GET['page'])){
            $page = $_GET['page'];
          }else{
            $page = 'home';
          }
        switch ($page) {
            case 'shop':
				//$produc = $this->product->indexProduct();	
				$counttt  = $this->product->indexProduct()[0]['count(id)'];
				if (isset($_GET['pages'])){
					$pages = $_GET['pages'];
					$row = 9;
					$from = ($pages - 1)*$row;
					$produc = $this->product->showProduct($from,$row);
				}else{
					$pages =1;
					$row = 9;
					$from = ($pages - 1)*$row;
					$produc = $this->product->showProduct($from,$row);
				}
                
				$categori = $this->product->indexCategories();
                include_once './view/pages/shop.php';
                break; 
			case 'home':
				$produc = $this->product->indexProduct();
				$categori = $this->product->indexCategories();
				$ratingss = $this->product->getRating();
				include_once './view/pages/home.php';
				break;
			case 'product-details':
				if(isset($_GET['id'])){
					$id = (int)$_GET['id'];
					$detail = $this->product->indexProductDetail($id);
					$category = $this->product->indexProductDetail($id)[0]['category_id'];
					$product = $this->product->indexProductDetail($id)[0]['product_id'];
					$rating = $this->product->getNumber($id);
					$img = $this->product->indexImg($id);
					$related = $this->product->indexRelated($category,$product);
					

				}
				include_once './view/pages/product-details.php';
				break; 
            default:
                # code...
                break;
        }
	}
}

?>
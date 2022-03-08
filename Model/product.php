<?php 
	// include_once 'config/myconfig.php';
		class Connect
 	{	
 		private const dns ='mysql:host=localhost;dbname=php1120e_nhom2';
 		private const user ='root';
 		private const passw ='minhduc';
 		protected $pdo = null;
 		function __construct()
 		{
 			try {
 				$this->pdo=new PDO(self::dns,self::user,self::passw);
 				$this->pdo->query('SET NAMES utf8');
 			} catch (PDOException $e) {
 				echo $e->getMessage();
 				exit();
 			}
 		}
 	}

	class Product extends Connect
	{
		function __construct()
		{
			parent::__construct();

		}
		// hàm lấy thông tin sản phẩm từ database
		public function getProduct(){
			$result =array();
			$sql = "SELECT * FROM product WHERE status = 1 ORDER BY created_at DESC ";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);

		}
		// lấy thông tin sản phẩm theo id
		public function getProductID($id)
		{	$result =array();
			$sql = "SELECT * FROM product WHERE id = :id";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id',$id);
			$pre->execute();
			return $pre->fetch(PDO::FETCH_ASSOC);
		}

		public function getNumber($id){
			$sql = "SELECT number FROM ratings where product_id= :id";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id',$id);
			$pre->execute();
			return $pre->fetch(PDO::FETCH_ASSOC);
		}
		

		function showProduct($from,$row)
		{
			$sql = "SELECT * FROM product LIMIT $from,$row";
			//SELECT product.id,product.name,product.slug,product.categories_id,product.brand_id,product.avatar,product.price,product.quantity,product.admin_id,product.view,product.description,product.content,product.status,product.created_at,product.updated_at, ratings.number FROM product,ratings
			$pre = $this->pdo->prepare($sql);
	
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		function indexProduct()
		{
			$sql = "SELECT count(id) FROM product";
			$pre = $this->pdo->prepare($sql);
	
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		function indexCategories()
		{
			$sql = "SELECT * FROM categories";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		function indexStatus()
		{
			$sql = "SELECT DISTINCT status FROM product HAVING status > 0 ";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		function indexNew()
		{
			$sql = "SELECT * FROM product WHERE status = 1 ";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		function indexSale()
		{
			$sql = "SELECT * FROM product WHERE status = 2 ";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		function indexOos()
		{
			$sql = "SELECT * FROM product WHERE status = 3 ";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		function banner()
		{
			$sql = "SELECT * FROM banner";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		function insta()
		{
			$sql = "SELECT * FROM insta";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		function indexProductDetail($id)
		{
			$sql = "SELECT product.id as 'product_id', categories.id as 'category_id', product.name as 'product_name', categories.name as 'category_name', product.avatar, product.price, product.quantity FROM product, categories where product.categories_id = categories.id and product.id = $id";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		function indexImg($id)
		{
			$sql = "SELECT * FROM images where product_id = $id";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		function indexRelated($category, $product)
		{
			$sql = "SELECT product.id, product.status, product.name, product.avatar, product.price, product.quantity FROM product, categories where product.categories_id = categories.id and categories.id = $category and product.id != $product";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		function getRating(){
			$sql = "SELECT product_id, number FROM rating";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
	}
?>
<?php
include_once "../../../config/myconfig.php";
class Filter extends Connect
{

	function __construct()
	{
		parent::__construct();
	}

		        //lấy số liệu trong khoảng thời gian

				//lấy số liệu sản phẩm 
	public function FilterPro($from_date,$to_date)
	{	
		$sql="SELECT * FROM `product` WHERE created_at BETWEEN :from_date AND :to_date ";
		$pre=$this->pdo->prepare($sql);
		$pre->bindParam(':from_date',$from_date);
		$pre->bindParam(':to_date',$to_date);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_ASSOC);
	}

				// Lấy số liệu doanh thu
	public function Revenue($from_date,$to_date)
	{
		$sql="SELECT orders.total_price FROM orders WHERE created_at BETWEEN :from_date AND :to_date ";
		$pre=$this->pdo->prepare($sql);
		$pre->bindParam(':from_date',$from_date);
		$pre->bindParam(':to_date',$to_date);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_ASSOC);

	}

				// Lấy thông tin admin
	public function admin($from_date,$to_date)
	{
		$sql="SELECT * FROM admin WHERE created_at BETWEEN :from_date AND :to_date ";
		$pre=$this->pdo->prepare($sql);
		$pre->bindParam(':from_date',$from_date);
		$pre->bindParam(':to_date',$to_date);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_ASSOC);
		
	}

}



class FilterController extends Filter
{
	
	private $Filter;

	function __construct()
	{
		$this->Filter= new Filter();
	}


	public function index()
	{
		if (isset($_POST["from_date"], $_POST["to_date"])) {
			$from_date=$_POST["from_date"];
			$to_date=$_POST["to_date"];
			$result= $this->Filter->FilterPro($from_date,$to_date);
			$Revenue = $this->Filter->Revenue($from_date,$to_date);
			$admin=$this->Filter->admin($from_date,$to_date);
			include_once'viewData.php';
		}
	}


}

$Filter= new FilterController();
$Filter->index();

?>

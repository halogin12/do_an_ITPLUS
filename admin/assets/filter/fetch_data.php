<?php
include_once "../../../config/myconfig.php";
class Fetch extends Connect
{

	function __construct()
	{
		parent::__construct();
	}

	// lấy thông tin admin theo id
	public function getAd($id)
	{
		$sql="SELECT * FROM `admin` WHERE id=:id ";
		$pre=$this->pdo->prepare($sql);
		$pre->bindParam(':id',$id);
		$pre->execute();
		return $pre->fetch(PDO::FETCH_ASSOC);
	}

	
}

/**
 * 
 */
class FetchController extends Fetch
{	
	private $fetch;
	
	function __construct()
	{
		$this->fetch = new Fetch();

	}

	public function index()
	{
		if (isset($_POST['id'])) {
			$id=$_POST['id'];
			$ad=$this->fetch->getAd($id);
			echo json_encode($ad);
		}
	}
}

$ad= new FetchController();
$ad->index();
 
?>

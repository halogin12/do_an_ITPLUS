<?php 
	include_once 'model/Statistics.php';
	/**
	 * 
	 */
	class StatisticsController extends Statistics
	{	
		private $Statistics;
		
		function __construct()
		{
			$this->Statistics= new Statistics();
		}


		public function index()
		{
			$result= $this->Statistics->StatisticsPro();
			$Revenue = $this->Statistics->Revenue();
			$admin=$this->Statistics->admin();
			include_once 'view/pages/dashboard.php';
		}
	}
?>
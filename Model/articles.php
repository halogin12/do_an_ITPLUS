<?php  
	include_once 'config/myconfig.php';
	class Blog extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function Articles($from,$row)
		{
			$sql="SELECT articles.id,articles.title,articles.description,articles.content,articles.image,articles.created_at,admin.name FROM articles,admin WHERE articles.admin_id = admin.id LIMIT $from,$row";
			$pre=$this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function ArticlesDetail($id)
		{
			$sql="SELECT articles.id,articles.title,articles.description,articles.content,articles.image,articles.created_at,admin.name FROM articles,admin WHERE articles.admin_id = admin.id AND articles.id = :id ";
			$pre=$this->pdo->prepare($sql);
			$pre->bindParam(':id',$id);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		function getCount()
		{
			$sql = "SELECT count(id) FROM articles";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
	}

?>
	
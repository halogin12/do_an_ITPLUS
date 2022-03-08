<?php
include_once 'config/myconfig.php';
class Categories extends Connect
{
    function __construct()
    {
        parent::__construct();
    }
    function categories()
    {
        $sql = "SELECT name FROM categories";
        $pre = $this->pdo->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>








<?php 
 	


	 class Connect
 	{	
 		private const dns ='mysql:host=localhost;dbname=php1120e_nhom2';
 		private const user ='root';
 		private const passw ='';
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


 		
  ?>
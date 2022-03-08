<?php 
	session_start();
	if (isset($_SESSION['namelogin'])) {
		unset($_SESSION['namelogin']);
		header('Location:index.php');
	}else{
		header('Location:index.php');
	}
?>
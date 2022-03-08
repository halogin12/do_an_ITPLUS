<?php  

	if (isset($_POST['id'])){
		$id = (int)$_POST['id'];
		if(isset($_SESSION[$id]) && !empty($_SESSION[$id])){
			unset($_SESSION[$id]);
			return 1;
		}
	}
?>
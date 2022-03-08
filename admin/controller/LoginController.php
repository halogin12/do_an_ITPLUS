<?php 
	include_once '../model/Login.php';
	/**
	 * 
	 */
	class LoginController extends Login
	{
		private $admin;
		function __construct()
		{
			$this->admin = new Login();
		}

		public function index()
		{
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}else{
				$method = 'home';
			}

			switch ($method) {
				case 'admin':
					if (isset($_POST['loginB'])) {
						$email = $_POST['email'];
						$password = md5($_POST['pass']);
						if($this->admin->getAdmin($email,$password)){
							$_SESSION['namelogin'] = $this->admin->getAdmin($email,$password)[0]['name'];
							$_SESSION['levellogin'] = $this->admin->getAdmin($email,$password)[0]['level'];
							echo $_SESSION['namelogin'].$_SESSION['levellogin'];
							header('Location: ../index.php');
						}
					}
					break;
				
				default:
					# code...
					break;
			}
			
			include_once './View/home_L.php';
		}
	}
 ?>
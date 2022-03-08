<?php
include_once 'model/user_model.php';


class userController extends usermodel
{
    private $useradmin;

    function __construct()
    {
        $this->useradmin = new usermodel();
    }

    public function indexx()
    {
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }else{
            $page = 'user';
        }

        switch($page){
            case 'user':
                
                $result = $this->useradmin->showUser();
                include_once 'view/pages/user.php';
                break;

            case 'blog':
                $blog = $this->useradmin->showUser();
                include_once 'view/pages/blog.php';
                break;
            }

            
            if (isset($_GET['action'])) {   
				$action=$_GET['action'];
			}else{
				$action ='user';
			}

			switch ($action) {
				case 'user':
					if(isset($_POST['insert'])){
                       
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $password = md5($_POST['password']);
                        $phone = $_POST['phone'];
                        $level = $_POST['level'];
						$avatar = "assets/img/user/".$nameImg;
                        if($name == '' || $email == '' || $password == '' || $level =='' || $nameImg == ''){
                            $_SESSION['noti'] =4;
                            header('Location: index.php?page=user');
                        }else{
                            $insert = $this->useradmin->insertUser($name,$email,$password,$phone,$level,$avatar);
                            $_SESSION['noti']=1;
                            header('Location: index.php?page=user');
                        }
                        
                        }   
                        else if(isset($_POST['update_user'])){
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $password = md5($_POST['password']);
                            $phone = $_POST['phone'];
                            $level = $_POST['level'];
                            // $avatar = $_POST['avatar'];
                            $avatar = "assets/img/user/".$nameImg;
                            $id = $_POST['id'];

                            if($name == '' || $email == '' || $password == '' || $level ==''  || $id == ''){
                                $_SESSION['noti'] =4;
                                header('Location: index.php?page=user');
                            }else{
                                $update = $this->useradmin->updateUser($id,$name,$email,$password,$phone,$level,$avatar);
                                $_SESSION['noti'] =2;
                                header('Location: index.php?page=user');
                            }
                        }
					
				break;
                
                case 'delete':
                    if (isset($_GET['id'])) {
					$id= $_GET['id'];
					$this->useradmin->deleteUser($id);
                    $_SESSION['noti']=3;
                    header('location:index.php?page=user');
                    }
					
					break;
				default:
                
				break;
                
			}
    }

}



?>

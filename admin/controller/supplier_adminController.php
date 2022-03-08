<?php
include_once 'model/supplier_admin.php';


class supplierAdminController extends supplierAdmin
{
    private $supplieradmin;

    function __construct()
    {
        $this->supplieradmin = new supplierAdmin();
    }

    public function indexx()
    {
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }else{
            $page = 'supplier_admin';
        }

        switch($page){
            case 'supplier_admin':
                
                $result = $this->supplieradmin->SupAdmin();
                include_once 'view/pages/supplier_admin.php';
                break;
                
            
            }


            if (isset($_GET['action'])) {   
				$action=$_GET['action'];
			}else{
				$action ='supplier_admin';
			}

			switch ($action) {
				case 'supplier_admin':
					if(isset($_POST['insert_supplier'])){
                        $id = $_POST['id'];
                        $name = $_POST['name'];
						$avatar = "assets/img/supplier/".$nameImg;
						$description = $_POST['description'];

                        $insert = $this->supplieradmin->insertSupplier($name,$avatar,$description);
                        $_SESSION ['noti'] =1;
                        header('Location: index.php?page=supplier_admin');
                    }
                    else if(isset($_POST['update_supplier'])){
                        $name = $_POST['ename'];
						// $avatar = $_POST['eavatar'];
                        $avatar = "assets/img/supplier/".$nameImg;
						$description = $_POST['edescription'];
                        $id = $_POST['eid'];
                        $update = $this->supplieradmin->updateSupplier($id,$name,$avatar,$description);
                        $_SESSION ['noti'] =2;
                        header('Location: index.php?page=supplier_admin');
                    }
					
				break;	
			}
    }

}



?>

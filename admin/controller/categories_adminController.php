<?php 
include_once 'model/categories_model.php';
	/**
	 * 
	 */
	class categoriesAdminController extends categories
	{	
		private $categories;
		
		function __construct()
		{
			$this->categories = new categories();
		}
    
        public function index()
        {
            if(isset($_GET['page'])){
                $page = $_GET['page'];
            }else{
            $page = 'categories';
            }

            switch ($page) {
                case 'categories':
                    $result = $this->categories->show();
                    include_once 'view/pages/categories.php';
                    break;
    
            }

            if(isset($_GET['action'])){
                $action = $_GET['action'];
            }else{
                $action = 'categories';
            }

            switch ($action) {
                case 'categories':
                    if(isset($_POST['insert_categories'])){
                        //$id = $_POST['id'];
                        $name = $_POST['name'];
                        $status = $_POST['status'];

                        $insert = $this-> categories -> insertCategories($name, $status);
                        $_SESSION['noti'] = 1;
                        header('Location: index.php?page=categories');
                    }
                    else if(isset($_POST['update_categories'])){
                        $name = $_POST['name'];
                        $status = $_POST['status'];
                        $id = $_POST['id'];
                        $update = $this->categories->updateCategory($id, $name,$status);                   
                        $_SESSION['noti'] = 2;
                        header('Location: index.php?page=categories');
                    }
            }
        }
    
    }
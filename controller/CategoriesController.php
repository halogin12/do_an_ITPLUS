<?php
include_once 'Model/Categories.php';
class CategoriesController extends Categories
{
    private $categories;
    function __construct()
    {
        $this->categories = new Categories();
    }
    function categoriescontroller()
    {
        if(isset($_GET['page'])){
            $page = $_GET['page'];
          }else{
            $page = 'home';
          }
        switch ($page) {
            case 'shop':
                $categori = $this->categories->categories();
                include_once './view/pages/shop.php';
                break; 
            
            default:
                # code...
                break;
        }
    }
}
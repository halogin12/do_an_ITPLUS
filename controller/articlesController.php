<?php 
include_once 'Model/articles.php';

class BlogController extends Blog
{
  private $Blog;
  function __construct()
  {
    $this->Blog = new Blog();
  }
  public function index()
  {
    $counttt = $this->Blog->getCount()[0]['count(id)'];
    if (isset($_GET['pages'])){
      $pages = $_GET['pages'];
      $row = 3;
      $from = ($pages - 1)*$row;
      $blog =$this->Blog->Articles($from,$row);
    }else{
      $pages =1;
      $row = 3;
      $from = ($pages - 1)*$row;
      $blog =$this->Blog->Articles($from,$row);
    }
    //$blog =$this->Blog->Articles();
    include_once './view/pages/blog.php';
  }


    public function Atisdetail()
  {
    if (isset($_GET['id'])) {
      $id = (int)$_GET['id'];
      $detail= $this->Blog->ArticlesDetail($id);
      include_once './view/pages/blog-details.php';
    }
  }

}


?>
<?php 
	include_once 'model/Articles.php';
	
	class BlogController extends Blog
	{
		private $blog;

		function __construct()
		{
			$this->blog =new Blog();	
		}

		 public function index()
		{
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}else{
				$method = 'index';
			}
			switch ($method) {
				case 'news':
					if (isset($_POST['add_news'])) {
						$files = $_FILES['main_img'];
				        $type = $_FILES['main_img']['type'];
				        $size = $_FILES['main_img']['size'];
				        $nameImg = time().$files['name'];
				        $arrType = array('image/jpeg', 'images/png', 'images/gif');

				        if (in_array($type, $arrType)) {
				            if ($size <= 1048576) {
				                // Upload file
				                move_uploaded_file($files['tmp_name'], '../assets/img/blog/'.$nameImg);
				            }else{
				                $error[] = 'File phải có dung lượng nhỏ hơn 1MB';
				            }
				        }else{
				            $error[] = 'Định dạng file không hợp lệ';
				        }
				        
						$title=$_POST['title'];
						$writer=$_POST['writer'];
						$image = "assets/img/blog/".$nameImg;
						$description=$_POST['description'];
						$content=$_POST['content'];
						$this->blog->Articles($title,$writer,$image,$description,$content);
						include_once 'view/pages/blog.php';

					}
					break;
				
				default:
					
					break;
			}
		}
	}
?>
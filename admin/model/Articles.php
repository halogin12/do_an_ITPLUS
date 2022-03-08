<?php 
    include_once '../config/myconfig.php';

    class Blog extends Connect
    {
        function __construct()
        {
            parent::__construct();
        }

        // Thêm bài viết
        public function Articles($title,$writer,$image,$description,$content){
            $sql="INSERT INTO articles(title,admin_id,image,description,content) VALUES(:title,:admin_id,:image,:description,:content)";

            $pre = $this->pdo->prepare($sql);
           $pre->bindParam(':title',$title);
           $pre->bindParam(':admin_id',$writer);
           $pre->bindParam(':image',$image);
           $pre->bindParam(':description',$description);
           $pre->bindParam(':content',$content);
           return $pre->execute();
        }
    }
?>
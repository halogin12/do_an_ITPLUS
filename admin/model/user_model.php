<?php 
include_once '../config/myconfig.php';

class usermodel extends Connect
{
    function __construct()
    {
       parent::__construct();  
    }

     public function showUser()
     {
        $result = array();
        $sql="select * from admin";
        $pre = $this -> pdo-> prepare($sql);
        $pre -> execute();
        return $pre -> fetchAll(PDO::FETCH_ASSOC);
     }
     public function selectId($id){
        $sql = "select * from admin where id =$id";
        $pre = $this -> pdo-> prepare($sql);
        $pre -> execute();
        return $pre -> fetchAll(PDO::FETCH_ASSOC);
     }

     public function insertUser($name,$email,$password,$phone,$level,$avatar)
     {
         $sql="INSERT INTO admin(name,email,password,phone,level,avatar) values(:name,:email,:password,:phone,:level,:avatar)";
         $pre = $this->pdo->prepare($sql);
         $pre -> bindParam(":name",$name);
         $pre -> bindParam(":email",$email);
         $pre -> bindParam(":password",$password);
         $pre -> bindParam(":phone",$phone);
        $pre -> bindParam(":level",$level);
        $pre -> bindParam(":avatar",$avatar);
        $pre -> execute();  
        return $pre->fetchAll(PDO::FETCH_ASSOC);
     }
     public function updateUser($id,$name,$email,$password,$phone,$level,$avatar)
     {
         $sql = "UPDATE admin SET name = :name, email = :email, password = :password, phone = :phone,level = :level,avatar = :avatar WHERE id = $id";
         $pre = $this -> pdo -> prepare($sql);
         
         $pre -> bindParam(":name",$name);
         $pre -> bindParam(":email",$email);
         $pre -> bindParam(":password",$password);
         $pre -> bindParam(":phone",$phone);
        $pre -> bindParam(":level",$level);
         $pre -> bindParam(":avatar",$avatar);
         
         $pre -> execute();
         return $pre->fetchAll(PDO::FETCH_ASSOC);
     }
     public function deleteUser($id) {
        $sql = "DELETE FROM admin WHERE id=$id";
        $pre = $this-> pdo-> prepare($sql);
        $pre ->execute();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
     }
}

?>
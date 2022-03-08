<?php 
include_once '../config/myconfig.php';

class supplierAdmin extends Connect
{
    function __construct()
    {
       parent::__construct();  
    }

    public function SupAdmin()
    {
        $result = array();
        $sql="select * from brand";
        $pre = $this -> pdo-> prepare($sql);
        $pre -> execute();
        return $pre -> fetchAll(PDO::FETCH_ASSOC);
    }
    public function selectId($id){
        $sql = "SELECT * FROM brand where id = $id";
        $pre = $this->pdo->prepare($sql);
        $pre ->execute();
        return $pre -> fetchAll(PDO::FETCH_ASSOC);

    }
    public function updateSupplier($id,$name,$avatar,$description)
    {
        $sql = "UPDATE brand SET name = :name,avatar = :avatar, description= :description where id=$id";
        $pre = $this -> pdo -> prepare($sql);
        $pre -> bindParam(":name",$name);
        $pre -> bindParam(":avatar",$avatar);
        $pre -> bindParam(":description",$description);
        
        $pre -> execute();  
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }
    public function insertSupplier($name,$avatar,$description){
        $sql = "INSERT INTO brand(name,avatar,description) values(:name,:avatar,:description)";
        $pre = $this -> pdo -> prepare($sql);
        
        $pre -> bindParam(":name",$name);
        $pre -> bindParam(":avatar",$avatar);
        $pre -> bindParam(":description",$description);
       
        $pre -> execute();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>

<?php
    
    if(isset($_SESSION['noti'])  && ($_SESSION['noti'] == 1)){
        
?>
    <div class="alert alert-success" role="alert">
        Thêm thành công
    </div>
<?php 
    }
    elseif(isset($_SESSION['noti'])  && ($_SESSION['noti'] == 2)){
?>
    <div class="alert alert-success" role="alert">
        Sửa thành công
    </div>

<?php
    }elseif(isset($_SESSION['noti']) && ($_SESSION['noti'] == 3)){

?>

    <div class="alert alert-success" role="alert">
        Xoá thành công
    </div>
<?php        
    }elseif(isset($_SESSION['noti']) && ($_SESSION['noti'] == 4)){
?>
    <div class="alert alert-success" role="alert">
        mời bạn nhập lại thông tin
    </div>
<?php        
    }
    unset($_SESSION['noti']);
    
    
?>



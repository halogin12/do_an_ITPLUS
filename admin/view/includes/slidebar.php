<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li>
            <a href="index.php?page=dashboard"><i class="fa fa-fw fa-dashboard"></i> Trang chủ</a>
        </li>
        <li>
            <a href="index.php?page=order_admin"><i class="fa fa-table"></i> Đơn hàng</a>
        </li>

        <li>
            <a href="index.php?page=product_admin"><i class="fa fa-briefcase"></i> Sản phẩm</a>
        </li>

        <li>
            <a href="index.php?page=supplier_admin"><i class="fa fa-ambulance"></i> Nhà cung cấp</a>
        </li>

        <li>
            <a href="index.php?page=categories"><i class="fa fa-cubes"></i> Loại sản phẩm</a>
        </li>

        <li>
            <a href="index.php?page=blog"><i class="fa fa-newspaper-o"></i> Bài viết</a>
        </li>

        
        
        
        <?php if(isset($_SESSION['levellogin'])){
            // echo $_SESSION['levellogin'];
            if($_SESSION['levellogin'] == 1){
        ?>
            <li>
                <a href="index.php?page=user"><i class="fa fa-user"></i> Quản lý user</a>
            </li>
        <?php
            }
        }?>

    </ul>
</div>
<!-- /.navbar-collapse -->
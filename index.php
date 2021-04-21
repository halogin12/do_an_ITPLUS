<?php 
    include_once 'include/header_index.php';
    include_once 'function/home.php';
    if (isset($_GET['page'])){
        $page = $_GET['page'];
    }else{
        $page = 'home';
    }
?>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <?php include_once 'include/offcanvas.php';?>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <?php include_once 'include/header.php'; ?>
    <!-- Header Section End -->

    <!-- Categories Section Begin -->
    <?php  
    include_once 'include/categories.php';
    ?>
<!-- Categories Section End -->

<!-- Product Section Begin -->
    <?php include_once 'include/product.php'; ?>
<!-- Product Section End -->

<!-- Banner Section Begin -->
    <?php include_once 'include/banner.php'; ?>
<!-- Banner Section End -->

<!-- Trend Section Begin -->
    <?php include_once 'include/trend.php'; ?>
<!-- Trend Section End -->

<!-- Discount Section Begin -->
<?php include_once 'include/discount.php'; ?>
<!-- Discount Section End -->

<!-- Services Section Begin -->
<?php include_once 'include/services.php'; ?>
<!-- Services Section End -->

<!-- Instagram Begin -->
<?php include_once 'include/instagram.php';?>
<!-- Instagram End -->

<!-- Footer Section Begin -->
<?php include_once 'include/footer.php'; ?>
<!-- Footer Section End -->

<!-- Search Begin -->
<?php include_once 'include/search.php';?>
<!-- Search End -->

<!-- Js Plugins -->
<?php include_once 'include/footer_index.php';?>
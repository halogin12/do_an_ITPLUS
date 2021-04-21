<?php include_once 'view/header.php';?>
<?php 
if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }else{
        $page = 'home';
    }

    switch ($page) {
        case 'home':
           include_once 'view/home.php';
            break;

        case 'shop':
           include_once 'view/shop.php';
            break;

        case 'blog-details':
            include_once 'view/blog-details.php';
                break;

        case 'blog':
            include_once 'view/blog.php';
                break;

        case 'contact':
            include_once 'view/contact.php';
                break;

        case 'checkout':
            include_once 'view/checkout.php';
                break;
                
        case 'shop-cart':
            include_once 'view/shop-cart.php';
                break;

        case 'product-details': 
            include_once 'view/product-details.php';
                break;
        
        default:
            echo "<h2 style='color: red;'>ERROR 404, trang không tồn tại</h2><a href='index.php'>Quay lại</a>";
            break;
    }

?>

<?php include_once 'view/footer.php';?>
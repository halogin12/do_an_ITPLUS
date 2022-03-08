<body>
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <!-- <li><a href="#"><span class="icon_heart_alt"></span>
                    <div class="tip">2</div>
                </a></li> -->
            <li><a href="index.php?page=shop-cart"><span class="icon_bag_alt"></span>
                    <div class="tip">2</div>
                </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="./index.php"><img src="assets/img/logo1.jpg" alt=""></a>
        </div>
        <div id="mobile-menu-wrap">
            <div class="slicknav_menu"><a href="#" aria-haspopup="true" role="button" tabindex="0"
                    class="slicknav_btn slicknav_collapsed" style="outline: none;"><span
                        class="slicknav_menutxt">MENU</span><span class="slicknav_icon"><span
                            class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span><span
                            class="slicknav_icon-bar"></span></span></a>
                <!-- <nav class="slicknav_nav slicknav_hidden" aria-hidden="true" role="menu" style="display: none;">
                    <ul>
                        <li class="active"><a href="./index.php" role="menuitem">Home</a></li>
                        <li><a href="#" role="menuitem">Women’s</a></li>
                        <li><a href="#" role="menuitem">Men’s</a></li>
                        <li><a href="./shop.php" role="menuitem">Shop</a></li>
                        <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true"
                                tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a
                                    href="#">Pages</a>
                                <span class="slicknav_arrow">►</span></a>
                            <ul class="dropdown slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
                                <li><a href="./product-details.php" role="menuitem" tabindex="-1">Product Details</a>
                                </li>
                                <li><a href="./shop-cart.php" role="menuitem" tabindex="-1">Shop Cart</a></li>
                                <li><a href="./checkout.php" role="menuitem" tabindex="-1">Checkout</a></li>
                                <li><a href="./blog-details.php" role="menuitem" tabindex="-1">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="./blog.php" role="menuitem">Blog</a></li>
                        <li><a href="./contact.php" role="menuitem">Contact</a></li>
                    </ul>
                </nav> -->
            </div>
        </div>
        <div class="offcanvas__auth">
            <a href="#">Login</a>
            <!-- <a href="#">Register</a> -->
        </div>
    </div>
    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <!-- <a href="./index.php"><img src="assets/img/logo.png" alt=""></a> -->
                        <a href="index.php"><img style="width: 160px;height: 60px; " src="assets/img/logo1.jpg"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <!-- class="active" -->
                            <li><a href="index.php">Home</a></li>
                            <!-- <li><a href="#">Trademark</a></li> -->
                            <li><a href="index.php?page=shop">Shop</a></li>
                            <li><a href="index.php?page=blog">Blog</a></li>
                            <li><a href="index.php?page=contact">Contact</a></li>

                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">

                    <div class="header__right">
                        <div class="header__right__auth">
                            <a href="admin/Login/index.php">Login</a>
                            <!-- <a href="#">Register</a> -->
                        </div>
                        <ul class="header__right__widget">
                            <li>
                                <span class="icon_search search-switch"></span>
                            </li>
                            <li>
                                <a href="index.php?page=favorite"><span class="icon_heart_alt"></span>
                                    <div id="heart">
                                        <?php if(isset($_SESSION['like'])){?>
                                        <div class="tip" id="like">
                                            <?php echo count($_SESSION['like']);?>
                                        </div>
                                        <?php }?>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.php?page=shop-cart">
                                    <span class="icon_bag_alt"></span>
                                    <div id="carts">
                                        <?php if (isset($_SESSION['carts'])){?>
                                        <div class="tip" id="bag-carts">
                                            <?php echo count($_SESSION['carts']);?>
                                        </div>
                                        <?php }?>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="canvas__open">
            <i class="fa fa-bars"></i>
        </div>
        <!-- <div class="canvas__open">
                <i class="fa fa-bars" type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#myNavbar"></i>
            </div> -->
        <!-- <div class="collapse navbar-collapse" id="myNavbar" style="">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">X</a></li>
                    <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="index.php?page=shop"><i class="fa fa-shopping-cart"></i> Shop</a></li>
                    <li><a href="index.php?page=shop-cart"><span class="icon_bag_alt"></span> Giỏ hàng</a></li>
                    <li><a href="index.php?page=blog"><i class="fa fa-pencil-square"></i> Blog</a></li>
                    <li><a href="index.php?page=contact"><i class="fa fa-phone"></i> Contact</a></li>
                </ul>
            </div> -->
        </div>
    </header>
    <!-- Header Section End -->
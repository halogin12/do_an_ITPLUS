<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                    <span>Shop</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Shop Section Begin -->
<section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="shop__sidebar">
                    <div class="sidebar__categories">
                        <div class="section-title">
                            <h4>Categories</h4>
                        </div>
                        <div class="categories__accordion">
                            <div class="accordion" id="accordionExample">
                                <?php 
                                foreach($categori as $key => $value)
                                {
                                ?>
                                <div class="card">
                                    <div class="card-heading ">
                                        <a data-filter=".<?php echo $value['name']?>">
                                            <?php echo $value['name']?>
                                        </a>
                                    </div>
                                </div>
                                <?php
                                }?>
                            </div>
                        </div>
                    </div>
                    <!--                     <div class="sidebar__filter">
                        <div class="section-title">
                            <h4>Shop by price</h4>
                        </div>
                        <div class="filter-range-wrap">
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                data-min="33" data-max="99"></div>
                            <div class="range-slider">
                                <div class="price-input">
                                    <p>Price:</p>
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
                        <a href="#">Filter</a>
                    </div> -->

                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="row property__gallery">
                    <?php 
                        foreach($produc as $key => $value){
                            $count = count($value);
                    ?>

                    <div class="col-lg-4 col-md-6 mix 
                        <?php 
                            switch ($value['categories_id']) {
                                case '1':
                                    echo 'Ghế';
                                    break;
                                case '2':
                                    echo 'Bàn';
                                    break;
                                case '3':
                                    echo 'Tủ';
                                    break;
                                case '4':
                                    echo 'Giường';
                                    break;
                                case '5':
                                    echo 'Kệ';
                                    break;
                            }
                        ?>">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="<?php echo $value['avatar']?>">
                                <?php
                                switch ($value['status']) {
                                    case '1':
                            ?>
                                <!-- <div class="label new">New</div> -->
                                <?php
                                        break;
                                    case '2':
                            ?>
                                <!-- <div class="label sale">Sale</div> -->
                                <?php            
                                        break;
                                    case '3':
                            ?>
                                <!-- <div class="label stockout stockblue">Out Of Stock</div> -->
                                <?php            
                                        break;
                                }
                            ?>

                                <ul class="product__hover">
                                    <li><a href="#detail" data-toggle="modal" data-target="#detail" class="detail" id="<?php echo $value['id'];?>"><span class="fa fa-eye"></span></a></li>
                                    <li><a class="heart" id="<?php echo $value['id'];?>" ><span class="icon_heart_alt"></span></a></li>
                                    <li><a href="#order" class="order" id="<?php echo $value['id'];?>"><span
                                                class="icon_bag_alt"></span></a></li> 
                                </ul>
                            </div>

                            <div class="product__item__text">
                                <h6><a
                                        href="index.php?page=product-details&id=<?php echo $value['id']?>"><?php echo $value['name']?></a>
                                </h6>
                                <!-- <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div> -->
                                <div class="product__price">
                                    <?php echo number_format($value['price'],0,',',',')?>đ
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                        }
                    ?>
                    <!-- Phân trang -->
                    <?php 
                        $pagess = ceil($counttt/9);    
                    ?>
                      <div class="col-lg-12 text-center">
                        <div class="pagination__option">
                            <?php 
                                for ($i = 1; $i <= $pagess; $i++){
                            ?>
                            <a href="index.php?page=shop&pages=<?php echo $i; ?>"><?php echo $i; ?></a>
                            <?php     
                                    }
                                ?>
                            <a href="index.php?pages=2"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
 <!-- Shop Section End  -->

 <div class="modal fade" id="detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg ">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" id="imgDetail">
                        <img src="" alt="">
                    </div>
                    <div class="col-md-6" style="text-align: center; position:relative;">
                        <h3></h3><br>
                        <h4></h4><br>
                        <div class="product__details__button">
                    
                    <a href="#order" class="cart-btn" id="" style="position:absolute; left: 20%;"><span class="icon_bag_alt"></span> Add to cart</a>                    
                </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
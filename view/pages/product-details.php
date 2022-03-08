<?php 
foreach($detail as $key => $value){?>
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                    <a href="index.php?page=shop"><?php echo $value['category_name']?> </a>
                    <span><?php echo $value['product_name']?></span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Breadcrumb End -->

<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__left product__thumb nice-scroll">
                        <a class="pt active" href="#product-1">
                            <img src="<?php echo $value['avatar']?>" alt="">
                        </a>
                        <?php foreach ($img as $key1 => $value1){?>
                        <a class="pt" href="#product-<?php echo $value1['id']?>">
                            <img src="<?php echo $value1['name']?>" alt="">
                        </a>
                        <?php }?>
                    </div>
                    <div class="product__details__slider__content">
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-hash="product-1" class="product__big__img" src="<?php echo $value['avatar']?>"
                                alt="">
                            <?php foreach ($img as $key1 => $value1){?>
                            <img data-hash="product-<?php echo $value1['id']?>" class="product__big__img"
                                src="<?php echo $value1['name']?>" alt="">
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product__details__text">
                    <h3><?php echo $value['product_name']?>
                        <!-- <span>Brand: SKMEIMore Men Watches from SKMEI</span> -->
                    </h3>
                   <div class="rating">
                        <?php 
                            if(empty($rating) ){

                            }else{
                        foreach ($rating as $key2 => $value2){
                           
                            switch ($rating['number']){
                                 case '1':
                         ?>     
                                     <i class="fa fa-star"></i>
                        
                         <?php
                                 break;
                                 case '2':
                         ?>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                         <?php
                                 break;
                                 case '3':
                         ?>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>

                         <?php
                                 break;
                                 case '4':
                         ?>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>

                        <?php
                                break;
                                 case '5':
                         ?>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                         <?php
                             break;
                         
                            
                                 }
                         ?>
                                   

                        <?php }}?>
                        
                    </div>
                <div class="product__details__price"><?php echo number_format($value['price'],0,'.','.')?>
                    VNĐ
                    <!-- <span><?php echo number_format($value['price'],0,'.','.')?> VNĐ</span> -->
                </div>
                <!-- <p>Mô tả nhanh.</p> -->
                <div class="product__details__button">
                    <!--                         <div class="quantity">
                            <span>Quantity:</span>
                            <div class="pro-qty">
                                <input type="number" value="" min="1">
                            </div>
                        </div> -->
                    <a href="#order" class="cart-btn" id="<?php echo $value['product_id']?>"><span class="icon_bag_alt"></span> Add to cart</a>
                    <!--                         <ul>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="#"><span class="icon_adjust-horiz"></span></a></li>
                        </ul> -->
                </div>

            </div>
        </div>
        <div class="col-lg-12">
            <div class="product__details__tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Specification</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Reviews ( 2 )</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                        <h6>Description</h6>
                        <p>Description.</p>
                    </div>
                    <div class="tab-pane" id="tabs-2" role="tabpanel">
                        <h6>Specification</h6>
                        <p>Specification.</p>
                    </div>
                    <div class="tab-pane" id="tabs-3" role="tabpanel">
                        <h6>Reviews ( 2 )</h6>
                        <p>Reviews.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="related__title">
                <h5>RELATED PRODUCTS</h5>
            </div>
        </div>

        <?php foreach ($related as $key2 => $value2){?>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="<?php echo $value2['avatar']?>">
           <!--          <?php
                                    switch ($value2['status']) {
                                        case '1':
                                ?>
                    <div class="label new">New</div>
                    <?php
                                            break;
                                        case '2':
                                ?>
                    <div class="label sale">Sale</div>
                    <?php            
                                            break;
                                        case '3':
                                ?>
                    <div class="label stockout stockblue">Out Of Stock</div>
                    <?php            
                                            break;
                                    }
                                ?> -->
                    <ul class="product__hover">
                       <li><a href="#detail" data-toggle="modal" data-target="#detail" class="detail" id="<?php echo $value2['id'];?>"><span class="fa fa-eye"></span></a></li>
                        <li><a class="heart" id="<?php echo $value2['id'];?>"><span class="icon_heart_alt"></span></a></li>
                        <li><a href="#order" class="order" id="<?php echo $value2['id']?>"><span
                                    class="icon_bag_alt"></span></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6><a
                            href="index.php?page=product-details&id=<?php echo $value2['id']?>"><?php echo $value2['name']?></a>
                    </h6>
                    <!-- <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div> -->
                    <div class="product__price">
                        <?php echo number_format($value2['price'],0,',',',')?>đ
                    </div>
                </div>
            </div> 
        </div>
        <?php }?>
    </div>

    </div>
</section>
<!-- Product Details Section End -->

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
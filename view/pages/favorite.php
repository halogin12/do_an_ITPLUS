<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="./index.php"><i class="fa fa-home"></i>Home</a>
                    <span>Sản phẩm yêu thích</span>
                </div>
            </div>
        </div>
    </div>
</div>
<h2 style="text-align: center;padding: 30px 0px;">Sản Phẩm Yêu Thích</h2>
<div class="container">
    <div class="row">
        <?php 
        if(isset($_SESSION['like']) && !empty($_SESSION['like'])){
            foreach ($_SESSION['like'] as $id => $value){
        ?>

        <div class="col-md-4" >
            <div class="product__item">
                <div class="product__item__pic set-bg" data-id="<?php echo $value['id']; ?>"
                    data-setbg="<?php echo $value['avatar']; ?>">
                    <ul class="product__hover">
                       <li><a href="#detail" data-toggle="modal" data-target="#detail" class="detail" id="<?php echo $value['id'];?>"><span class="fa fa-eye"></span></a></li>
                        <li><a  class="delete" id="<?php echo $value['id'];?>"><span class="fa fa-trash" aria-hidden="true"></span></a></li>
                        <li><a href="index.php?page=home&method=order&id=<?php echo $value['id']; ?>"><span class="icon_bag_alt" type='buy'></span></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6>
                        <a href="index.php?page=product-details&id=<?php echo $value['id']?>"><?php echo $value['name']; ?></a>
                    </h6>
                    <!--<div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div> -->
                    <div class="product__price"><?php echo number_format($value['price'],0,'.','.'); ?>VNĐ</div>
                </div>
            </div>
        </div>
        <?php }
        }else{
            include_once 'view/layouts/notification/noti_like.php';
        }
        ?>


    </div>
</div>


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
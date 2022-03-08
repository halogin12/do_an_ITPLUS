<?php
// switch ($page) {
//     case 'blog':
?>
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option"> 
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                    <span>Blog</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Blog Section Begin -->
<!-- <section class="blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <?php 
                    foreach($blol as $value){$stt +=1;?>
                <div class="blog__item">
                    <div class="blog__item__pic <?php if($stt == 1){echo 'large__item';}?> set-bg"
                        data-setbg="<?php echo $value['avatar']?>"></div>
                    <div class="blog__item__text">
                        <h6><a
                                href="index.php?page=blog-details&id=<?php echo $value['id']?>"><?php echo $value['name']?>...</a>
                        </h6>
                        <ul>
                            <li>by <span><?php echo $value['nameadmin']?></span></li>
                            <li><?php echo $value['created_at']?></li>
                        </ul>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <?php 
                    $stt = 0;
                    foreach($bloc as $value){$stt +=1;?>
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="<?php echo $value['avatar']?>">
                    </div>
                    <div class="blog__item__text">
                        <h6><a
                                href="index.php?page=blog-details&id=<?php echo $value['id']?>"><?php echo $value['name']?>...</a>
                        </h6>
                        <ul>
                            <li>by <span><?php echo $value['nameadmin']?></span></li>
                            <li><?php echo $value['created_at']?></li>
                        </ul>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <?php 
                    $stt = 0;
                    foreach($blor as $value){$stt +=1;?>
                <div class="blog__item">
                    <div class="blog__item__pic <?php if(max(0,$value['id'])){echo 'large__item';}?> set-bg"
                        data-setbg="<?php echo $value['avatar']?>"></div>
                    <div class="blog__item__text">
                        <h6><a
                                href="index.php?page=blog-details&id=<?php echo $value['id']?>"><?php echo $value['name']?>...</a>
                        </h6>
                        <ul>
                            <li>by <span><?php echo $value['nameadmin']?></span></li>
                            <li><?php echo $value['created_at']?></li>
                        </ul>
                    </div>
                </div>
                <?php }?>
            </div>
            <!-- <div class="col-lg-12 text-center">
                <a href="#" class="primary-btn load-btn">Load more posts</a>
            </div> -->
        </div>
    </div>
<!-- </section> -->
<!-- Blog Section End -->
<?php
        // break;








        
    // case 'blog-menu':
?>
<!-- Breadcrumb Begin -->
<!-- <div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                    <a href="index.php?page=blog"> Blog</a>
                    <span>
                        <?php foreach($bloname as $value){ 
                            echo $value['name'];
                        }?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Breadcrumb End -->
<!-- Blog Section Begin -->
<!-- <section class="blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <?php foreach($bloid as $value){?>
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="<?php echo $value['avatar']?>"></div>
                    <div class="blog__item__text">
                        <h6><a
                                href="index.php?page=blog-details&id=<?php echo $value['id']?>"><?php echo $value['name']?>...</a>
                        </h6>
                        <ul>
                            <li>by <span><?php echo $value['nameadmin']?></span></li>
                            <li><?php echo $value['created_at']?></li>
                        </ul>
                    </div>
                </div>
                <?php }?>
            </div>

            <!-- <div class="col-lg-12 text-center">
                <a href="#" class="primary-btn load-btn">Load more posts</a>
            </div> -->
        </div>
    </div>
<!-- </section> --> 
<!-- Blog Section End -->
<?php 
    //     break;
    // default:
    //     # code...
    //     break;
// }
?>


<section class="blog spad">
        <div class="container">
            <div class="row">
          <!--       <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic large__item set-bg" data-setbg="img/blog/blog-1.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">No Bad Blood! The Reason Why Tamr Judge Finally Made Up With...</a></h6>
                            <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul>
                        </div>
                    </div> -->
                <?php foreach ($blog as  $value) {
                    # code...
                

                ?> 
                <div class="col-md-4">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="<?php echo $value['image']; ?>"></div>
                        <div class="blog__item__text">
                            <h6><a href="index.php?page=blog-details&id=<?php echo $value['id']; ?>"><?php echo $value['title']; ?></a></h6>
                            <ul>
                                <li>by <span><?php echo $value['name']; ?></span></li>
                                <li><?php echo $value['created_at']; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php } ?>
<!--                 <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-3.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Gigi Hadid, Rita Ora, Serena & Other Hot Celebs Stun At 2019...</a></h6>
                            <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-5.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Billboard Music Awards: Best, Worst & Wackiest Dresses On The...</a></h6>
                            <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__pic large__item set-bg" data-setbg="img/blog/blog-6.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Stephanie Pratt Busts Out Of Teeny Black Bikini During Hawaii...</a></h6>
                            <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <a href="#" class="primary-btn load-btn">Load more posts</a>
                </div> -->
            </div>
        </div>
        <!-- Phân trang -->
        <?php 
                        
                        $pagess = ceil($counttt/3);    
                    ?>
                      <div class="col-lg-12 text-center">
                        <div class="pagination__option">
                            <?php 
                                for ($i = 1; $i <= $pagess; $i++){
                            ?>
                            <a href="index.php?page=blog&pages=<?php echo $i; ?>"><?php echo $i; ?></a>
                            <?php     
                                    }
                                ?>
                            <a href="index.php?page=blog&pages=2"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
    </section>
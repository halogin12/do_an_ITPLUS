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

<div  style="margin-top: 30px" class="container">
    
        <?php 

           foreach ($detail as $key => $value) {
        ?>
    <div class="row">
        <div class="col-md-6">
            <div>
                <h4><?php echo $value['title']; ?></h4>
                <p>By <?php echo $value['name']; ?></p>
                <p><?php echo $value['content']; ?></p>
            </div>
        </div>
        <div class="col-md-6">
            <img src="<?php echo $value['image']; ?>" alt="" >
        </div>
    </div>
    <?php } ?>

    <div style="margin: 20px 0px;">
        <a href="index.php?page=blog"  style="margin: 15px 0px; padding: 5px 15px;background-color: red; color: #fff; border-radius: 5px;">Quay lại</a>
    </div>
    
</div>


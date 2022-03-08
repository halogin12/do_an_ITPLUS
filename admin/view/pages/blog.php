

<div class="row">
    <div class="col-md-12">
        <h2>BÀI VIẾT</h2>
        <form action="index.php?page=blog&method=news" method="POST" role="form" id="forms_md_user" enctype="multipart/form-data">
        <div id="show_form_add">

            <div class="form-group">
                <label for="">Tiêu đề:</label>
                <input type="text" required="" name="title" class="form-control title" value="">
            </div>

            <div class="form-group">
                <label for="">Người viết</label>
                <select name="writer" id="" class="form-control">  
                    
                    <?php
                        foreach ($blog as $value) {
                    ?>
                        <option value="<?php echo $value['id'];?>"><?php echo $value['name'];?></option>
                    <?php        
                        }
                    ?>

                </select> 
            </div>

            <div class="form-group">
                <label for="">Ảnh đại diện:
                    <span>
                        <?php  
                            if (isset($error) && count($error) > 0) {
                                foreach ($error as $value) {
                                    echo $value;
                                }
                            }
                        ?>
                    </span>
                </label>
                <input type="file"  accept="image/png, image/jpg, image/jpeg" class="form-control main_img" value="" name="main_img">
            </div>

            <div class="form-group">
                <label for="">Mô tả nhanh</label>
                <textarea class="form-control content " required="" name="description" id="" rows="5" ></textarea>
            </div>

            <div class="form-group">
                <label for="">Chi tiết bài viết:</label>
                <textarea class="form-control ckeditor" required=" " name="content" id="ckeditor" rows="10" ></textarea>
            </div>

            <button type="submit" id="add_news" name="add_news" value="" class="btn btn-info">Thêm bài viết</button>
            <a href="index.php?page=dashboard" class="btn btn-danger">Trở lại</a>
        </div>
    </form>   
    </div>
</div>

<?php 
    // if (isset($_POST['add_news'])) {
    //     $files = $_FILES['main_img'];
    //     $type = $_FILES['main_img']['type'];
    //     $size = $_FILES['main_img']['size'];
    //     $nameImg = time().$files['name'];
    //     $arrType = array('image/jpeg', 'images/png', 'images/gif');

    //     if (in_array($type, $arrType)) {
    //         if ($size <= 1048576) {
    //             // Upload file
    //             move_uploaded_file($files['tmp_name'], '../assets/img/blog/'.$nameImg);
    //         }else{
    //             $error[] = 'File phải có dung lượng nhỏ hơn 1MB';
    //         }
    //     }else{
    //         $error[] = 'Định dạng file không hợp lệ';
    //     }
        
    // }
?>
<div class="row">

   
    <div class="col-lg-12">
        <h2>NHÀ CUNG CẤP</h2>
        <!-- <form class="form-inline float-left" action="" method="POST">
            <div>
                <input type="text" class="form-control" name="key"  placeholder="Search"> 
               <button class="btn btn-outline-secondary" type="submit" name="submit-search">Search</button>
            </div>
            
        </form> -->
        <?php include_once 'view/includes/notification.php';?>
        <div class="text-right">
        <button class="btn btn-success" data-toggle="modal" data-target="#modalinsert"> Thêm</button>
        </div>
        <div><hr></div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="bang">
                <thead class="table">
                    <tr>
                        <th>Stt</th>
                        <th>Tên Nhà cung cấp</th>
                        <th>Hình ảnh</th>
                        <th>Ghi chú</th>
                        <th>Thời gian tạo</th>
                        <th>Thời gian cập nhật</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $count =0;
                        foreach($result as $key => $value){
                        $count+=1;
                    ?>
                        <tr>
                            <td><?php echo $count ?></td>
                            <td><?php echo $value['name']?></td>
                            <td><img width="150"  src="../<?php echo $value['avatar']?>" alt=""></td>
                            <td><?php echo $value['description']?></td>
                            <td><?php echo $value['created_at']?></td>
                            <td><?php echo $value['updated_at']?></td>
                            <!-- <td><a class=" btn btn-primary" href="index.php?page=update_supplier&id=<?php echo $value['id'];?>" ><i class="fa fa-pencil-square" ></i></a></td> -->
                            <td>
                            <script type='text/javascript'>
                            <?php
                                echo "var javascript_array = ". json_encode($result) . ";\n";
                                ?>
                            </script>
                            <button array="<?php json_encode($value)?>" id="<?php echo $value['id'];?>"
                                stt="<?php echo $count;?>" name="edit" value="edit" class="editsupplier btn btn-primary"><i
                                    class="fa fa-pencil-square-o">
                                </i></i>

                            </button>
                        </td>
                        </tr>


                    <?php
                        }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>

    <!-- modal -->

    <div class="modal fade" id="modalinsert" >
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="post" role="form" enctype="multipart/form-data" >
                    <div class="modal-header">
                        <legend>Thêm thông tin nhà cung cấp</legend>
                    </div>
                <div class="modal-body">
                   

                    <div class="form-group">
                        <label for="">Tên sản phẩm</label> <span id="errorname"></span>
                        <input type="text" class="form-control" id="name" name="name" value="" onblur="checkName();" Required>
                    </div>

                    <div class="form-group">
                        <label for="">Hình ảnh</label>
                        <input type="file" class="form-control" id="avatar" name="avatar" value="" Required>
                    </div>

                    <div class="form-group">
                        <label for="">Ghi chú</label>
                        <input type="text" class="form-control" id="description" name="description" value="" >
                    </div> 

                    
                </div>

                <div class="modal-footer">
                    <button type="submit"  name="insert_supplier" class="btn btn-primary">Thêm</button>
                </div>
                </form>
                <?php 
                    if (isset($_POST['insert_supplier'])) {
                        $files = $_FILES['avatar'];
                        $nameImg = time().$files['name'];
                        move_uploaded_file($files['tmp_name'], '../assets/img/supplier/'.$nameImg);
                    }
                ?>
            </div>
    
        </div>
    </div>
    <!-- and modal -->

    <div class="modal fade" id="modalupdate" >
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="post" role="form" enctype="multipart/form-data">
                    <div class="modal-header">
                        <legend>Sửa thông tin nhà cung cấp</legend>
                    </div>
                <div class="modal-body">
                <div class="form-group">
                        <label for="">Mã sản phẩm</label> <span id="errorname"></span>
                        <input type="text" class="form-control" id="eid" name="eid" onblur="checkename();" value="" readonly >
                    </div>    

                    <div class="form-group">
                        <label for="">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="ename" name="ename" value="" Required>
                    </div>

                    <div class="form-group">
                        <label for="">Hình ảnh</label> <span id="erroravatar"></span>
                        <input type="text" class="form-control" id="eavatar" name="eavatar" onblur="checkeAvatar();" value="">
                        <input type="file" id="uavatar" name="uavatar" Required>
                    </div>

                    <div class="form-group">
                        <label for="">Ghi chú</label>
                        <input type="text" class="form-control" id="edescription" name="edescription" value="" >
                    </div> 

                    
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit"  name="update_supplier" class="btn btn-primary">Sửa</button>
                </div>
                </form>
                <?php 
                    if (isset($_POST['update_supplier'])) {
                        $files = $_FILES['uavatar'];
                        $nameImg = time().$files['name'];
                        move_uploaded_file($files['tmp_name'], '../assets/img/supplier/'.$nameImg);
                    }
                ?>
            </div>
    
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <h2>LOẠI SẢN PHẨM</h2>
            
        <!-- <form class="form-inline float-left" action="" method="POST">
            <div>
                <input type="text" class="form-control" name="key"  placeholder="Search"> 
                <button class="btn btn-outline-secondary" type="submit" name="submit-search">Search</button>
            </div>
            
        </form> -->
        <?php include_once 'view/includes/notification.php';?>
        <div class="text-right" >
            
            <button class="btn btn-success" data-toggle="modal" data-target="#modalinsert"> Thêm</button>
        </div>
        <div><hr></div>
       
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped" id="bang">
                <thead class="table">
                    <tr>
                        <th>Stt</th>
                        <th>Mã loại</th>
                        <th>Tên loại sản phẩm</th>
                        <th>Trạng thái</th>
                        <th>Thời gian tạo</th>
                        <th>Thời gian cập nhật</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                        $count=0;
                    /*foreach ($result as $value) {*/
                        foreach($result as $key => $value){
                        $count+=1;
                        
                    ?>
                            
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $value['id']; ?></td>
                            <td><?php echo $value['name']; ?></td>
                            <td><?php echo $value['status']; ?></td>
                            <td><?php echo $value['created_at']; ?></td>
                            <td><?php echo $value['updated_at']; ?></td> 
                            <td>
                            <script type='text/javascript'>
                            <?php
                                echo "var javascript_array = ". json_encode($result) . ";\n";
                                ?>
                            </script>
                            <button array="<?php json_encode($value)?>" id="<?php echo $value['id'];?>"
                                stt="<?php echo $count;?>" name="edit" value="edit" class="editcategories btn btn-primary"><i
                                    class="fa fa-pencil-square-o">
                                </i></i>

                            </button>
                            </td>
                            <!-- <td><a href="index.php?page=update_categories&id=<?php echo $value['id'];?>" ><i class="fa fa-pencil-square" ></i></a></td> -->
                    </tr>

                    <?php 
                        }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
<!-- modal thêm -->
    <div class="modal fade" id="modalinsert" >
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="post" role="form">
                    <div class="modal-header">
                        <legend>Thêm thông tin loại sản phẩm</legend>
                    </div>
                <div class="modal-body">
                    <!-- <div class="form-group">
                        <label for="">ID</label>
                        <input type="text" class="form-control" id="eid" name="id" value="">
                    </div> -->

                    <div class="form-group">
                        <label for="">Tên loại sản phẩm</label><span id="errorname"></span>
                        <input type="text" class="form-control" id="name" name="name" value="" onblur="checkname();" Required>
                    </div>

                    <div class="form-group">
                        <label for="">Tình trạng</label>
                        <input type="text" class="form-control" id="status" name="status" value="" >
                    </div>   
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit"  name="insert_categories" class="btn btn-primary">Thêm</button>
                </div>
                </form>
            </div>
    
        </div>
    </div>

    <!-- modal -->

    <div class="modal fade" id="modalupdate" >
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="post" role="form">
                    <div class="modal-header">
                        <legend>Sửa thông tin loại sản phẩm</legend>
                    </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">ID</label>
                        <input type="text" class="form-control" id="eid" name="id" value=""  readonly>
                    </div>

                    <div class="form-group">
                        <label for="">Tên loại sản phẩm</label><span id="errorname"></span>
                        <input type="text" class="form-control" id="ename" name="name" onblur="checkename();" value="" Required>
                    </div>

                    <div class="form-group">
                        <label for="">Tình trạng</label> 
                        <input type="text" class="form-control" id="estatus" name="status" value="" >
                    </div>   
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit"  name="update_categories" class="btn btn-primary">Sửa</button>
                </div>
                </form>
            </div>
    
        </div>
    </div>
</div>
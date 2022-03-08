<div class="row">


    <div class="col-lg-12">
        <h2>SẢN PHẨM</h2>
        <?php include_once 'view/includes/notification.php';?>
        <div class="text-right">

            <button class="btn btn-success" data-toggle="modal" data-target="#modalinsert"> Thêm</button>
        </div>
        <div>
            <hr>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped" id="bang">
                <thead class="table">
                    <tr>
                        <th>Stt</th>
                        <th>Id</th>
                        <th>Tên sản phẩm</th>
                        <th>Loại sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Ghi chú</th>
                        <th>Tình trạng</th>
                        <th>Thời gian tạo</th>
                        <th>Thời gian cập nhật</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                        $count=0;
                        foreach($result as $key => $value){
                        $count+=1;
                    ?>

                    <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $value['id']; ?></td>
                        <td><?php echo $value['name']; ?></td>
                        <td><?php echo $value['categories_id']; ?></td>
                        <td><img width="150"  src="../<?php echo $value['avatar'];?>" alt=""></td>
                        <td><?php echo number_format($value['price'],0,'.','.')?> VNĐ</td>
                        <td><?php echo $value['quantity']; ?></td>
                        <td><?php echo $value['description']; ?></td>
                        <td><?php echo $value['status']; ?></td>
                        <td><?php echo $value['created_at']; ?></td>
                        <td><?php echo $value['updated_at']; ?></td>
                        <!-- <td><a  href="#" class=" btn btn-primary" title="Update" "><i class="fa fa-pencil-square-o" ></i></a></td> -->
                        <td>
                            <script type='text/javascript'>
                            <?php
                                echo "var javascript_array = ". json_encode($result) . ";\n";
                                ?>
                            </script>
                            <button array="<?php json_encode($value)?>" id="<?php echo $value['id'];?>"
                                stt="<?php echo $count;?>" name="edit" value="edit" class="editproduct btn btn-primary"><i
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

    <!-- modal Thêm -->

    <div class="modal fade" id="modalinsert">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="post" role="form" enctype="multipart/form-data">
                    <div class="modal-header">
                        <legend>Thêm thông tin sản phẩm</legend>
                    </div>

                    <div class="modal-body">
                        <!-- <div class="form-group">
                            <label for="">ID</label> <span id="eID"></span>
                            <input type="text" class="form-control" id="id" name="id" value="" onblur="checkID();"
                                readonly>
                        </div> -->

                        <div class="form-group">
                            <label for="">Tên sản phẩm</label> <span id="errorname"></span>
                            <input type="text" class="form-control" id="name" name="name" value="" onblur="checkname();" Required>
                        </div>

                        <div class="form-group">
                            <label for="">Loại sản phẩm</label>
                            <select id="categories_id" name="categories_id" class="form-control">
                                <?php  foreach($categories_id as $key => $value){ ?>
                                <option value="<?php echo $value['id'];?>"><?php echo $value['name'];?></option>
                                <?php }?>
                            </select>
                            <!-- <input type="text" class="form-control" id="categories_id" name="categories_id" value=""> -->
                        </div>

                        <div class="form-group">
                            <label for="">Mã nhà cung cấp</label>
                            <select id="brand_id" name="brand_id" class="form-control">
                                <?php  foreach($brand_id as $key => $value){ ?>
                                <option value="<?php echo $value['id'];?>"><?php echo $value['name'];?></option>
                                <?php }?>
                            </select>
                            <!-- <input type="text" class="form-control" id="brand_id" name="brand_id" value=""> -->
                        </div>

                        <div class="form-group">
                            <label for="">Hình ảnh</label>
                            <input type="file" class="form-control" id="avatar" name="avatar" value="" Required>
                        </div>

                       

                        <div class="form-group">
                            <label for="">Giá</label> <span id="errorprice"></span>
                            <input type="number" class="form-control" id="price" name="price" value="" onblur="checkPrice();" Required>
                        </div>

                        <div class="form-group">
                            <label for="">Số lượng</label> <span id="errorquantity"></span>
                            <input type="number" class="form-control" id="quantity" name="quantity" value="" onblur="checkQuantity();" Required>
                        </div>

                        <div class="form-group">
                            <label for="">Mã quản lý</label>
                            <select id="admin_id" name="admin_id" class="form-control">
                                <?php  foreach($admin_id as $key => $value){ ?>
                                <option value="<?php echo $value['id'];?>"><?php echo $value['name'];?></option>
                                <?php }?>
                            </select>
                            <!-- <input type="text" class="form-control" id="admin_id" name="admin_id" value=""> -->
                        </div>

                        <div class="form-group">
                            <label for="">Ghi chú</label>
                            <input type="text" class="form-control" id="description" name="description" value="" >
                        </div>

                        <div class="form-group">
                            <label for="">Tình trạng</label>
                            <input type="text" class="form-control" id="status" name="status" value="" >
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="insert_product" class="btn btn-primary">Thêm</button>
                    </div>
                </form>
                <?php 
                    if (isset($_POST['insert_product'])) {
                        $files = $_FILES['avatar'];
                        $nameImg = time().$files['name'];
                        move_uploaded_file($files['tmp_name'], '../assets/img/product/'.$nameImg);
                    }
                ?>

               
            </div>

        </div>
    </div>

    <!-- Sửa  -->

    <div class="modal fade" id="modalupdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <form action="" method="post" role="form" enctype="multipart/form-data">
                <div class="modal-header">
                    <legend>Sửa thông tin sản phẩm</legend>
                </div>

                <div class="modal-body">

                    <div class="form-group">
                        <label for="">ID</label>
                        <input type="text" class="form-control" id="eid" name="eid" value="" readonly>
                    </div>

                    <div class="form-group">
                        <label for="">Tên sản phẩm</label> <span id="errorname"></span>
                        <input type="text" class="form-control" id="ename" name="ename" value="" onblur="checkename();" Required>
                    </div>

                    <div class="form-group">
                        <label for="">Loại sản phẩm</label>
                        <input type="text" class="form-control" id="ecategories_id" name="ecategories_id" value="" Required>
                    </div>

                    <div class="form-group  ">
                        <label for="">Hình ảnh</label>
                        <input type="text" class="form-control " id="eavatar" name="eavatar" value="" Required>
                        <input type="file" id="uavatar" name="uavatar" Required>
        
                    </div>

                    <div class="form-group">
                        <label for="">Giá</label> <span id="errorprice"></span>
                        <input type="text" class="form-control" id="eprice" name="eprice" onblur="checkePrice();" value="" Required>
                    </div>

                    <div class="form-group">
                        <label for="">Số lượng</label> <span id="errorquantity"></span>
                        <input type="text" class="form-control" id="equantity" name="equantity" value="" onblur="checkQuantity();" Required>
                    </div>

                    <div class="form-group">
                        <label for="">Ghi chú</label>
                        <input type="text" class="form-control" id="edescription" name="edescription" value="" >
                    </div>

                    <div class="form-group">
                        <label for="">Tình trạng</label>
                        <input type="text" class="form-control" id="estatus" name="estatus" value="" >
                    </div>


                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="update_product">Sửa</button>
                </div>
            </form>

            <?php 
                    if (isset($_POST['update_product'])) {
                        $files = $_FILES['uavatar'];
                        $nameImg = time().$files['name'];
                        move_uploaded_file($files['tmp_name'], '../assets/img/product/'.$nameImg);
                    }
                ?>
            </div>
        </div>
    </div>



</div>


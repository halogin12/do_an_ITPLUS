<div class="row">

   
    <div class="col-lg-12">
        <h2>USER</h2>
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
            <table class="table table-bordered table-hover" id="bang">
                <thead class="table">
                    <tr>
                        <th>Stt</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Phone</th>
                        <th>Level</th>
                        <th>avatar</th>
                        <th>Thời gian tạo</th>
                        <th>Thời gian cập nhật</th>
                        <th>Sửa</th>
                        <th>Xoá</th>
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
                                
                            <td><?php echo $value['name']; ?></td>
                            <td><?php echo $value['email']; ?></td>
                            <td><?php echo $value['password']; ?></td>
                            <td><?php echo $value['phone']; ?></td>
                             <td><?php 
                                if ($value['level']==1) {
                                    echo "Admin";
                                }elseif ($value['level']==0){
                                    echo "Nhân Viên";
                                }
                            ?></td>
                            <td><img width="150" src="../<?php echo $value['avatar'];?>" alt=""></td>
                            <td><?php echo $value['created_at']; ?></td>
                            <td><?php echo $value['update_at']; ?></td> 
                            <td>
                            <script type='text/javascript'>
                            <?php
                                echo "var javascript_array = ". json_encode($result) . ";\n";
                                ?>
                            </script>
                            <button array="<?php json_encode($value)?>" id="<?php echo $value['id'];?>"
                                stt="<?php echo $count;?>" name="edit" value="edit" class="edituser btn btn-primary"><i
                                    class="fa fa-pencil-square-o">
                                </i></i>
                            </button>
                            </td>
                            <td><a class=" btn btn-primary" href="index.php?page=user&action=delete&id=<?php echo $value['id'];?>"><i class="fa fa-trash-o "></i></a></td>
                            
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
                <form action="" method="POST" role="form" enctype="multipart/form-data">
                    <div class="modal-header">
                        <legend>Thêm thông tin User</legend>
                    </div>
                <div class="modal-body">
                   
                    <div class="form-group">
                        <label for="">Tên</label> <span id="errorname"></span>
                        <input type="text" class="form-control" id="name" name="name" value="" onblur="checkname()"; Required>
                    </div>

                    <div class="form-group">
                        <label for="">Email</label> <span id="erroremail"></span>
                        <input type="text" class="form-control" id="email" name="email" value="" onblur="checkEmail();" Required>
                    </div>

                    
                    <div class="form-group">
                        <label for="">password</label> <span id="errorpassword"></span>
                        <input type="password" class="form-control" id="password" name="password" value="" onblur="checkPass();" Required>
                    </div>

                    <div class="form-group">
                        <label for="">phone</label> <span id="errorphone"></span>
                        <input type="number" class="form-control" id="phone" name="phone" value="" onblur="checkPhone();" Required>
                    </div>

                    <div class="form-group">
                        <label for="">Level</label>
                        <select id="level" name="level" class="form-control">  
                           <option value="1">Admin</option>  
                           <option value="0">Nhân viên</option>  
                        </select>  
                    </div>

                    <div class="form-group">
                        <label for="">Hình ảnh</label> <span id="erroravatar"></span>
                        <input type="file" class="form-control" id="avatar" name="avatar" value="" onkeyup="checkAvatar();" Required>
                    </div>

                    
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit"  name="insert" class="btn btn-primary">Thêm</button>
                </div>
                </form>

                <?php 
                    if (isset($_POST['insert'])) {
                        $files = $_FILES['avatar'];
                        $nameImg = time().$files['name'];
                        move_uploaded_file($files['tmp_name'], '../assets/img/user/'.$nameImg);
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
                        <legend>Sửa thông tin User</legend>
                    </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">ID</label> 
                        <input type="text" class="form-control" id="eid" name="id" value="" readonly>
                    </div>

                    <div class="form-group">
                        <label for="">Tên</label> <span id="errorname"></span>
                        <input type="text" class="form-control" id="ename" name="name" value="" onkeyup="checkname()"; Required>
                    </div>

                    <div class="form-group">
                        <label for="">Email</label> <span id="erroremail"></span>
                        <input type="text" class="form-control" id="eemail" name="email" value="" onkeyup="checkEmail();" Required>
                    </div>

                    
                    <div class="form-group">
                        <label for="">password</label>
                        <input type="text" class="form-control" id="epassword" name="password" value="" Required>
                    </div>

                    <div class="form-group">
                        <label for="">phone</label> <span id="errorphone"></span>
                        <input type="number" class="form-control" id="ephone" name="phone" value="" onkeyup="checkePhone();" Required>
                    </div>

                    <div class="form-group">
                        <label for="">Level</label>
                        <select id="elevel" name="level" class="form-control">  
                           <option value="1">Admin</option>  
                           <option value="0">Nhân viên</option>  
                        </select> 
                    </div>

                    <div class="form-group">
                        <label for="">avatar</label> <span id="erroravatar"></span>
                        <input type="text" class="form-control" id="eavatar" name="eavatar" value="" onkeyup="checkeAvatar();">
                        <input type="file" id="uavatar" name="uavatar" Required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit"  name="update_user" class="btn btn-primary">Sửa</button>
                    
                </div>
                </form>
                <?php 
                   
                    if (isset($_POST['update_user'])) {
                        $files = $_FILES['uavatar'];
                        $nameImg = time().$files['name'];
                        move_uploaded_file($files['tmp_name'], '../assets/img/user/'.$nameImg);
                        
                    }
                    
                ?>
            </div>
    
        </div>
    </div>
    
</div>
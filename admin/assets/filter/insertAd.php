 <?php  
 $connect = mysqli_connect("localhost", "root", "", "furniture");  
 $query = "SELECT * FROM admin";  
 $admin = mysqli_query($connect, $query);  
 ?>

 <table class="table table-bordered table-hover" id="list">

        <thead class="table">

          <tr>
            <div style="clear:both;height: 30px;"></div>    
            <th>STT</th>
            <th>Tên đăng nhập</th>
            <th>Email</th>
            <th>Điện thoại</th>
            <th>Chức vụ</th>
            <th>Cập nhật</th>
            <th>Xóa</th>
          </tr>
        </thead>
        <tbody>
         <?php 
         $count=0;
         foreach ($admin as $value) {
          $count+=1;
          ?>
          <tr>
            <td><?php echo $count; ?></td>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['email']; ?></td>
            <td><?php echo $value['phone']; ?></td>
            <td><?php if ($value['level']==1) {
              echo "Admin";
            }elseif ($value['level']==0) {
              echo "Nhân viên";
            }
            ?></td>
            <td style="text-align: center;"><a href="#update"><i class="fa fa-edit fa-2x" id="edit" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning"></i></a></td>
            <td style="text-align: center;"><a href="index.php?page=admin&action=detroy&id=<?php echo $value['id'];?>"><i class="fa fa-trash fa-2x"></i></a></td>
          </tr>
        <?php } ?>

      </tbody>

    </table>
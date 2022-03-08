<!-- Page Heading -->
<style>
.table th {

    text-align: center;
}
</style>
<div class="row">


    <div class="col-md-12 ">
        <h2>ĐƠN HÀNG</h2>

        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="bang">
                <thead class="table">
                    <tr>
                        <th>Stt</th>
                        <th>ID đơn hàng</th>
                        <th>Tên người nhận</th>
                        <th>Mã đơn hàng</th>
                        <th>Ngày đặt hàng</th>
                        <th>Chi tiết</th>
                       <!--  <th>Trạng thái</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $count=0;
                        foreach ($result as $value) {
                            $count+=1;
                    ?>

                    <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $value['id']; ?></td>
                        <td><?php echo $value['name']; ?></td>
                        <td><?php echo $value['key_token']; ?></td>
                        <td><?php echo $value['created_at']; ?></td>
                        <td style="text-align: center;"><a href="index.php?page=detail&id=<?php echo $value['id']; ?>">
                                <i class="fa fa-eye fa-2x"></i>

                            </a>
                        </td>
                        <!-- <td></td> -->
                    </tr>

                    <?php
                        }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
</div>
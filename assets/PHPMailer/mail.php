<?php ob_start(); ?>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 style="text-align: center;">Cám ơn bạn đã đặt hàng tại Wooden Home!</h3>
                <p>Xin chào <?php echo $name ;?>,<br>
                    Wooden Home đã nhận được yêu cầu đặt hàng của bạn và đang xử lý nhé. Bạn sẽ nhận được thông báo tiếp theo khi đơn hàng đã sẵn sàng được giao. <br>

                    *Lưu ý nhỏ cho bạn: Bạn chỉ nên nhận hàng khi trạng thái đơn hàng là “Đang giao hàng” và nhớ kiểm tra Mã đơn hàng, Thông tin người gửi và Mã vận đơn để nhận đúng kiện hàng nhé.
                </p><br>
                 <p>
                    <span class="fa fa-map-marker">Đơn hàng được giao đến</span><br>
                    Tên: <?php echo $name;?><br>
                    Địa chỉ nhà: <?php echo $address;?><br>
                    Điện thoại: <?php echo $phone;?> <br>
                    Email: <?php echo $email;?> <br>
                 </p>
            </div>
        </div>
        <div class="col-md-12">
            <table style="width: 100%; text-align: center; border: 1px;" >
            <caption><h3>Thông tin đơn hàng</h3></caption>
            <thead>
                <tr>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Tổng tiền</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $_SESSION['sum_total'] = 0;
                    foreach ($_SESSION['carts'] as $id => $pro) {
                ?>
                <tr>
                    <td><img src="<?php echo "http://php1120e-2.itpsoft.com.vn/".$pro['avatar'];?>" alt="" style="width: 150px;"></td>
                    <td><h3><?php echo $pro['name'];?></h3></td>
                    <td><?php echo number_format($pro['price'],0,'.','.'); ?>VNĐ</td>
                    <td> <?php echo $pro['qty']; ?></td>
                    <td><?php  
                        $total = $pro['price'] * $pro['qty'];
                        $_SESSION['sum_total'] += $total; 
                        echo number_format($total,0,'.','.').'VNĐ';
                    ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <h2 style="color:red;">Tổng giá trị đơn hàng : <?php echo number_format($_SESSION['sum_total'],0,'.','.'); ?> VNĐ </h2>    
        </div>
    </div>
</div>
<?php $my_var = ob_get_clean(); ?>

<?php

    include_once 'class.phpmailer.php';
    include_once 'class.smtp.php';
    $mail = new PHPMailer(true);
    
       try {
    //Server settings
    $mail->CharSet  =  'UTF-8';
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'woodenhomestaff@gmail.com';                     //SMTP username
    $mail->Password   = 'tamvbtgktrrhpgjl';                               //SMTP password
    $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('systemtest@gmail.com', 'Thông báo đơn hàng mới ');
    $mail->addAddress($email, $name);     //Add a recipient
     
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Thông báo đơn hàng';
    $mail->Body    =  $my_var;
   
    $mail->send();
    
} catch (Exception $e) {
    echo "lỗi: {$mail->ErrorInfo}";
}
    

 ?>

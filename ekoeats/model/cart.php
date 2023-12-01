<?php
function viewcart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    if ($del == 1) {
        $xoasp_th = '<th>Thao Tác </th>';
    } else {
        $xoasp_th = '';
        $xoasp_td = '';
    }
    echo '<tr>
                                <th>STT</th>
                                <th>Tên Món</th>
                                <th>Ảnh</th>
                                <th>Số Lượng</th>
                                <th>Giá</th>
                                <th>Thành Tiền</th>
                              ' . $xoasp_th . '
                          </tr>';
    foreach ($_SESSION['mycart'] as $cart) {

        $hinh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        if ($del == 1) {
            $xoasp_td = '<a href="index.php?act=delcart&idcart=' . $i . '"><input  class="mr20" type="button" value="Xóa" onclick="return confirm(\'Bạn có chắc muốn xóa\')"></a>';
        } else {
            $xoasp_td = '';
        }

        echo
        '
                              <tr>
                              <td id ="stt">' . ($i + 1) . '</td>
                              <td>' . $cart[1] . '</td>
                              <td><img src="' . $hinh . '" alt="" height="70px"></td>                             
                       
                              <td><button class="btn-minute" id="btn-minute" type="button" onclick="giamsl(this)">-</button>
                              <input type="text" name="amount" id="amount" value="' . $cart[4] . '">
                              <button class="btn-plus" id= "btn-plus" type="button" onclick="tangsl(this)">+</button>
                          </td>
                          
                          <td id= "dogia" >' . $cart[3] . '.000</td>
                          <td  id="price" >' . $ttien . '.000</td>
                              <td>' . $xoasp_td . '
                           
                              </tr>';
        $i += 1;
    }
    echo '<tr>
                          <td colspan="5">Tổng Đơn Hàng</td>
                          <td id="total">' . $tong . '.000</td>';
                           
                          if (isset($_SESSION['email'])) {
                              extract($_SESSION['email']);
                            echo'
                          <td><a href="index.php?act=bill"><input type="button" value="Thanh toán "> </a></td>
                          </tr>';
                          } else { 
                            echo '<td><a href="index.php?act=login" ><input type="button" value="Đăng nhập"></a></td>';
                          }
                          
}
function view()
{
    global $img_path;
    $tong = 0;
    $i = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        echo
        '
            <tr>
            <td id ="stt">' . ($i + 1) . '</td>
            <td>' . $cart[1] . '</td>
            <td><img src="' . $hinh . '" alt="" height="50 "></td>                             
            <td id= "dogia">' . $cart[3] . '.000</td>
           
            <td id="amount" >' . $cart[4] . '</td>
            <td></td>
            <td  id="price">' . $ttien . '.000</td>
            </tr>';
        $i += 1;
    }
    echo '<tr>
        <td colspan="6">Tổng Đơn Hàng</td>
        <td id="total" >' . $tong . '.000</td>
        </tr>
        ';
}

function tongdonhang()
{ 

    $tong = 0;

    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return  $tong;
}
function insert_momo($partnerCode,$requestId,$amount,$orderId,$orderInfo,$requestType,$signature){
    $sql="INSERT INTO momo(partnerCode,requestId,amount,orderId,orderInfo,requestType,signature) values('$partnerCode','$requestId','$amount','$orderId','$orderInfo','$requestType','$signature')";
    return pdo_execute($sql);
}
function insert_bill($iduser, $idpro, $name, $email, $address, $tel, $ngaydathang, $tongdonhang, $pttt)
{
    $sql = "INSERT INTO bill(iduser,idpro,user,email,diachi,tel,ngaydathang,tongthanhtoan,pttt) values('$iduser','$idpro','$name','$email','$address','$tel','$ngaydathang','$tongdonhang','$pttt')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "INSERT INTO cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}
function loadone_bill($id)
{
    $sql = "SELECT * FROM bill WHERE id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}

function sendMaildonhang($email) {
    $sql="SELECT * FROM taikhoan WHERE email='$email'";
    $taikhoan=pdo_query_one($sql);
    if ($taikhoan != false) {
        sendMaildh($email, $taikhoan['user']);
        return "Gửi email thành công. Vui lòng check email!";
    }else{
        return "Email không tồn tại.";
    }
}
function sendMaildh($email, $username) {
    require '../PHPMailer-master/src/Exception.php';
    require '../PHPMailer-master/src/PHPMailer.php';
    require '../PHPMailer-master/src/SMTP.php';   


    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
 
try {
    //Server settings
    $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = '06f397728b9785';                     //SMTP username
            $mail->Password   = '4ccf4bb25c4162';                               //SMTP password
            $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('ekoeats@example.com', 'EKO EATS');
            $mail->addAddress($email, $username);  // Add a recipient
   
  
    $mail->isHTML(true);   // Set email format to HTML
    $mail->Subject = 'EKO EATS xin chao';
    $mail->Body = 'Cam on ban da dat hang';
 
    $mail->send();
    //echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}
?>





<style>
    input.mr20 {
        width: 50px;

    }

    a>input {
        width: 150px;

    }

    a>input:hover {
        background-color: green;
        color: white;

    }
    .cn{
        width: 120px;
    }
</style>
<script>
     
  
    
    function tangsl(x) {
        var cha = x.parentElement;
        var dongia = cha.parentElement.children[4];
        var price = cha.parentElement.children[5];
        var  soluongcu= cha.children[1];
        var soluongmoi = parseInt(soluongcu.value) + 1;
        soluongcu.value = soluongmoi;
      
        var pricem = parseInt(soluongmoi*(dongia.innerText));
        price.innerText=pricem +'.000';
       
        var trtong = cha.parentElement.parentElement;
           
           var total = trtong.children[3].children[1]; 
           console.log(total);
           var totalm =parseInt(total.innerText)+parseInt(dongia.innerText);
          
           document.getElementById('total').innerHTML = totalm +'.000' ;
          
                

    }
    function giamsl(x) {
        var cha = x.parentElement;
        var dongia = cha.parentElement.children[4];
        
        var price = cha.parentElement.children[5];
        var  soluongcu= cha.children[1];
        
        if (parseInt(soluongcu.value) > 1) {
            var soluongmoi = parseInt(soluongcu.value) - 1;
            soluongcu.value = soluongmoi;
            var pricem = parseInt(soluongmoi*(dongia.innerText));
            
            price.innerText=pricem +'.000';
       
            var trtong = cha.parentElement.parentElement;
           
        var total = trtong.children[3].children[1]; 
       	
        var totalm =parseInt(total.innerText)-parseInt(dongia.innerText);
       
        document.getElementById('total').innerHTML = totalm +'.000' ;
        console.log(totalm);

        }


    }

    </script>
    

<!-- <script>
    function tai_lai_trang(){
        location.reload();
    }
</script> -->
   
<?php
    function insert_taikhoan($user,$pass,$email){
        $sql="insert into taikhoan(user,pass,email) values('$user','$pass','$email')";
        pdo_execute($sql);
        }
    function checkuser($email,$pass) {
        $sql="select * from taikhoan where email='".$email."' AND pass='".$pass."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }        
    function checkemail($email) {
        $sql="select * from taikhoan where email='".$email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function update_taikhoan($id,$user,$pass,$email,$address,$tel)
     {
        $sql="update taikhoan set user='".$user."', pass='".$pass."', email='".$email."',address='".$address."',tel='".$tel."',id='".$id."' where id=".$id;
        pdo_execute($sql);
    }
    function loadall_taikhoan() {  
        $sql="select * from taikhoan order by id desc";
        $listtaikhoan=pdo_query($sql);
        return $listtaikhoan;
    }
    function loadone_tk($id){
        $sql= "SELECT * FROM taikhoan WHERE id=".$id;
        $taikhoan=pdo_query_one($sql);
        return $taikhoan;
    }
    function update_tk($id,$user,$pass,$email,$address,$tel,$role){
        $sql= "UPDATE taikhoan SET user='".$user."', pass='".$pass."', email='".$email."', address='".$address."', tel='".$tel."',role='".$role."' WHERE id= ".$id;
        pdo_execute($sql);
    }
    function delete_tk($id){
        $sql="DELETE FROM taikhoan WHERE id=".$id;
        pdo_execute($sql);
    }
    function sendMail($email) {
        $sql="SELECT * FROM taikhoan WHERE email='$email'";
        $taikhoan=pdo_query_one($sql);

        if ($taikhoan != false) {
            sendMailPass($email, $taikhoan['user'], $taikhoan['pass']);
            return "Gửi email thành công. Vui lòng check email!";
        }else{
            return "Email không tồn tại.";
        }
    }

    function sendMailPass($email, $username, $pass) {
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
            $mail->addAddress($email, $username);     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'NGUOI DUNG QUEN MAT KHAU';
            $mail->Body    = 'MAT KHAU CUA BAN LA:' .$pass;
        
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
?>

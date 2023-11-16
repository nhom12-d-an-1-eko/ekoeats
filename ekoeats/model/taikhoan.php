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
?>
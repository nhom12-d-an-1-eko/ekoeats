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
?>
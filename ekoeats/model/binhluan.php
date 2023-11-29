<?php
require_once 'pdo.php';
    function binhluan_insert($iduser,$idpro,$noidung,$ngaybl){
        $sql="insert into binhluan(iduser,idpro,noidung,ngaybl) values(?,?,?,?)";
        pdo_execute($sql,$iduser,$idpro,$noidung,$ngaybl);
    }

    function binhluan_select_all(){
        $sql = "SELECT * FROM binhluan ORDER BY id DESC";
        return pdo_query($sql);
     }
?>
<?php
    include("header.php");
    include("home.php");
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "adddm":
                if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao="thêm thành công";
                }
                include "./danhmuc/add.php";
                break;  
            }
        }else{
            include "home.php";
        }
    include("footer.php");
?>
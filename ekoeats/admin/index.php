<?php
    include("../model/pdo.php");
    include("../model/danhmuc.php");
    include("header.php");
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
             case "listdm":
                    $listdm=loadall_dm();
                    include "./danhmuc/list.php";
                    break;
            
            case "xoadm":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdm=loadall_dm();
                include "./danhmuc/list.php";
                break;
            case "suadm":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm=loadone_dm($_GET['id']);
                }
                include "./danhmuc/update.php";
                break;
            case "updatedm":
                if(isset($_POST['capnhat'])&& ($_POST['capnhat'])){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_dm($id,$tenloai); 
                    $thongbao="cập nhật thành công";
                }
                $listdm=loadall_dm();
                include "./danhmuc/list.php";
                break;
            }
        }else{
            include "home.php";
        }
    include("footer.php");
?>
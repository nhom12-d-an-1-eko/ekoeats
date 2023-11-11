<?php
    include("../model/pdo.php");
    include("../model/danhmuc.php");
    include("../model/sanpham.php");
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
            
            //      CONTROLER SẢN PHẨM
        case "addsp":
            //kiểm tra xem người dùng có click vào nút add hay không
            if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
                $iddm=$_POST['iddm'];
                $tensp=$_POST['tensp'];
                $price=$_POST['price'];
                $motasp=$_POST['motasp'];
                $soluong= $_POST['soluong'];
                $hinh=$_FILES['img']['name'];
                $target_dir ="../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
                  } else {
                    // echo "Sorry, there was an error uploading your file.";
                  }
                insert_sp($tensp,$price,$hinh,$motasp,$soluong,$iddm);
                $thongbao="thêm thành công";
            }
            $listdm=loadall_dm();
            include "sanpham/add.php";
            break;
        case 'listsp':
            if(isset($_POST['listok'])&&($_POST['listok'])){
                $kyw= $_POST['kyw'];
                $iddm= $_POST['iddm'];
            } else{
                $kyw= '';
                $iddm =0;
            }
            $listdm=loadall_dm();
            $listsp = loadall_sp($kyw,$iddm);
            include "sanpham/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['id'])&& ($_GET['id']>0)){
                delete_sp($_GET['id']);
            }
            $listsp = loadall_sp("",0);
            include "sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id'])&& ($_GET['id']>0)){
                $sanpham=loadone_sp($_GET['id']);
            }
            $listdm=loadall_dm();
            include "sanpham/update.php";
            break;
        case 'updatesp':

            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                $id=$_POST['id'];
                $iddm=$_POST['iddm'];
                $tensp=$_POST['tensp'];
                $price=$_POST['price'];
                $motasp=$_POST['motasp'];
                $soluong= $_POST['soluong'];
                $hinh=$_FILES['img']['name'];
                $target_dir ="../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
                  } else {
                    // echo "Sorry, there was an error uploading your file.";
                  }
                update_sp($id,$iddm,$tensp,$price,$motasp,$hinh,$soluong);
                $thongbao="Cập nhật thành công";
            }
            $listdm=loadall_dm();
            $listsp =loadall_sp();
            include "sanpham/list.php";
            break;
        }
        
        }else{
            include "home.php";
        }
    include("footer.php");
?>
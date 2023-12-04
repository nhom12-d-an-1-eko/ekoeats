<?php
    include("../model/pdo.php");
    include("../model/danhmuc.php");
    include("../model/sanpham.php");
    include("../model/donhang.php");
    include("../model/taikhoan.php");
    include("../model/thongke.php");
    include("../model/binhluan.php");

    include "header.php";
    $listbill=loadall_bill("",0); 
                $tongsobill=tongdon();
                $thongkedh=loadall_thongke_dh();
                $thongkedm=loadall_thongke_dm();
                $demsp=sosanpham();

    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "dssp":
            if(isset($_POST['listok'])&&($_POST['listok'])){
                $kyw= $_POST['kyw'];
                $iddm= $_POST['iddm'];
            } else{
                $kyw= '';
                $iddm =0;
            }
            $listdm=loadall_dm();
            $listsp = loadall_sp($kyw,$iddm);
                include "sanpham/dssp.php";
                break;
            case "themsp":
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
                include "sanpham/themsp.php";
                break;    
            case "xoasp":
                if (isset($_GET['id'])&& ($_GET['id']>0)){
                    delete_sp($_GET['id']);
                }
                $listsp = loadall_sp("",0);
                include "sanpham/dssp.php";                        
                break;
            case "suasp":
                if (isset($_GET['id'])&& ($_GET['id']>0)){
                    $sanpham=loadone_sp($_GET['id']);
                }
                $listdm=loadall_dm();
                include "sanpham/update.php";                        
                break;  
            case "updatesp":
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
                include "sanpham/dssp.php" ;                        
                break;  
                ///////////////////////////
            case "dsdm":
                $listdm=loadall_dm();
                include "danhmuc/dsdm.php";
                break;
            case "themdm":
                if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    insert_danhmuc($tenloai);
                }

                include "./danhmuc/themdm.php";
                break;
            case "suadm":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm=loadone_dm($_GET['id']);
                }
                    include "danhmuc/update.php" ;                        
                    break;    
            case "xoadm":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdm=loadall_dm();
                include "danhmuc/dsdm.php" ;                        
                break;    
            case "updatedm":
                if(isset($_POST['capnhat'])&& ($_POST['capnhat'])){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_dm($id,$tenloai); 
                }
                $listdm=loadall_dm();
                include "danhmuc/dsdm.php" ;                        
                break;                            
                         
            case "dstk":
                $listtaikhoan=loadall_taikhoan();
                include "taikhoan/dstk.php";
                break;
            case "xoatk":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_tk($_GET['id']);
                }
                $listtaikhoan=loadall_taikhoan();
                include "taikhoan/dstk.php";
                break;    
            case "suatk":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $taikhoan=loadone_tk($_GET['id']);
                }
                include "taikhoan/suatk.php" ;                          
                break;
            case "updatetk":
                    if(isset($_POST['capnhat'])){
                        $id=$_POST['id'];
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        $email=$_POST['email'];
                        $address=$_POST['address'];
                        $tel=$_POST['tel'];
                        $role=$_POST['role'];
                        update_tk($id,$user,$pass,$email,$address,$tel,$role); 
                    }
                    $listtaikhoan=loadall_taikhoan();
                    include "taikhoan/dstk.php" ;                        
                break;                
            case "dsbl" :
                $listbl=loadall_bl(0);
                include "binhluan/dsbl.php";
                break;
            case "xoabl" : 
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_binhluan($_GET['id']);
                }
                $listbl=loadall_bl(0);
                include "binhluan/dsbl.php";
                break;
                ///////////////////
            case "dsdh" :   
                if(isset($_POST['listok'])&&($_POST['listok'])){
                    $kyw= $_POST['kyw'];
                } else{
                    $kyw= '';
                }
                $listbill=loadall_bill($kyw,0);
                include "donhang/dsdh.php";
                break;
            case "suadh":  
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $bill=loadone_dh($_GET['id']);
                } 
                $listct = loadct_dh($_GET['id']);
                include "donhang/suadh.php";
                break;
            case "chitietdh":  
                if(isset($_GET['id'])&&($_GET['id']>0)){  
                    $bill=loadone_dh($_GET['id']);
                } 
                $bill=loadone_dh($_GET['id']);
                $listct = loadct_dh($_GET['id']); 
                include "donhang/billchitiet.php";
                break;
            case "themdh" :   
                include "donhang/themdh.php";
                break;
            case "xoadh" : 
                if (isset($_GET['id'])&& ($_GET['id']>0)){
                    delete_dh($_GET['id']);
                }
                $listbill=loadall_bill("",0); 
                include "donhang/dsdh.php";
                break;
            case "updatedh":
                if(isset($_POST['capnhat'])&& ($_POST['capnhat'])){
                    $ttdh=$_POST['bill_status'];
                    $paybill=$_POST['tinhtrangtt'];
                    $id=$_POST['id'];
                    update_dh($id,$ttdh,$paybill); 
                }
                // $status=bill_status();
                $listbill=loadall_bill("",0); 
                include "donhang/dsdh.php";
                break;
            case "dsthongke" : 
                $tkthang=thang();
                $thongkenam=nam();
                $tongsobill=tongdon();
                $thongkedh=loadall_thongke_dh();
                $thongkedm=loadall_thongke_dm();  
                include "thongke/list.php";
                break;
            case "suabanner"  :
                include "banner/suabanner.php";
                break;
            default:
                $thongkedm=loadall_thongke_dm();
                include "home.php";
                break;
            
        }
    }else{
        include "home.php";
    }
    include "footer.php";
?>
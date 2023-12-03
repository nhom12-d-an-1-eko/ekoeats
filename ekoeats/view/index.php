<?php
ob_start();
session_start();

include "../model/sanpham.php";
include "../model/danhmuc.php";
include "../model/taikhoan.php";
include "../model/cart.php";
include "../model/donhang.php";
include "../model/binhluan.php";

include "header.php";
// include "chitietsp.php";
include "../global.php";
if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
$listsp = loadall_sp();
$listdm = loadall_dm();
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "home":
            if (isset($_POST['keyword']) &&  $_POST['keyword'] != 0) {
                $kyw = $_POST['keyword'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $listsp = loadall_sp($kyw, $iddm);
            $name = load_tendm($iddm);
            include "home.php";
            break;

        case 'chitietsp':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sp($id);
                 $sp_cungloai = loadone_spcl($id, $onesp['iddm']);
                 include "chitietsp.php";
            } else {
                include "home.php";
            }
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                insert_taikhoan($user, $pass, $email);
                $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập.";
            }
            include "taikhoan/dangky.php";
            break;
            case 'login':
                if (isset($_POST['dangnhap'])){
                    $email=$_POST['email'];
                    $pass=$_POST['pass'];
                    $checkuser=checkuser($email,$pass);
                    if (is_array($checkuser)) {
                        $_SESSION['email']=$checkuser;//CLICK ĐNHAP TỪ BL.
                        if (    $_SESSION['trang']=="chitietsp") {
                            header('location:index.php?act=chitietsp&idsp='.$_SESSION['idpro'].'#binhluan');
                        }else
                        header('Location: index.php');
                    }else {
                        $thongbao="Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký.";
                    }
                   
                }
               include "login.php";
               break;
            case 'info':
               if (isset($_POST['capnhat'])&&($_POST['capnhat'])){
                   $user=$_POST['user'];
                   $pass=$_POST['pass'];
                   $email=$_POST['email'];
                   $address=$_POST['address'];
                   $tel=$_POST['tel'];
                   $id=$_POST['id'];
                   update_taikhoan($id,$user,$pass,$email,$address,$tel);
                   $_SESSION['email']=checkuser($email,$pass); 
                   header('Location: index.php');
               }
                include "taikhoan/info.php";
                break;
             case 'quenmk':
                if (isset($_POST['guiemail'])&&($_POST['guiemail'])){
                    $email=$_POST['email'];
                    $sendMailMess=sendMail($email);
                    if(is_array($checkemail)){
                        $thongbao="Mật khẩu của bạn là: ".$checkemail['pass'];
                    }else{
                        $thongbao="Email này không tồn tại";
                    }
                }
                 include "taikhoan/quenmk.php";
                 break;
        case 'about':
            include "about-us.php";
            break;
        case 'contact':
            include "contact.php";
            break;
        case 'dangxuat':
            session_unset();
            header('Location: index.php?act=home');
            break;
        case "addtocart":
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = 1;
                $j = 0;
                $cnsl = 0;
                $ttien = $price * $soluong;
                foreach ($_SESSION['mycart'] as $cart) {
                    if ($cart[0] == $id) {
                        $soluongm = $soluong + $cart[4];
                        $cnsl = 1;
                        $_SESSION['mycart'][$j][4] = $soluongm;
                        break;
                    }
                    $j++;
                }
                if ($cnsl == 0) {
                    $spadd = [$id, $name, $img, $price, $soluong, $ttien];
                    array_push($_SESSION['mycart'], $spadd);
                }
            }
                include "cart/viewcart.php";
                break;
            case "delcart": 
                    if(isset($_GET['idcart'])){
                        array_splice($_SESSION['mycart'],$_GET['idcart'],1);
                    }else{
                        $_SESSION['mycart']=[];
                    }
                    include "cart/viewcart.php";
                    // header('Location: index.php?act=addtocart');
                    break;
            case "bill";
            
                    include "thanhtoan.php";
                    break;    
            case "billconfirm":
                         if(isset($_POST['dong'])&&($_POST['dong'])){
                             $iduser=$_SESSION['email']['id'];
                             $idpro=$cart[0];
                             $name=$_POST['user'];
                             $email=$_POST['email'];
                             $address=$_POST['diachi'];
                             $tel=$_POST['tel'];
                             $ngaydathang=date('Y-m-d H:i:s');
                             $tongdonhang=tongdonhang();
                             $pttt=$_POST['pttt'];
                             $idbill=insert_bill($iduser,$idpro,$name,$email,$address,$tel,$ngaydathang,$tongdonhang,$pttt);
                             $sendMaildh=sendMaildonhang($email);

                             
                             foreach($_SESSION['mycart'] as $cart){
                                 insert_cart($_SESSION['email']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
                            }
                         }
                         
                         $bill=loadone_bill($idbill);
                        include "cart/billconfirm.php";
                        break; 
            case "billol":
                

                if(isset($_GET['partnerCode'])&&($_GET['partnerCode'])){
                    
                    $partnerCode =$_GET['partnerCode'];
                    $requestId = $_GET['requestId'];
                    $amount =$_GET['amount'];
                    $orderId=$_GET['orderId'];
                    $orderInfo = $_GET['orderInfo'];
                    $requestType = $_GET['requestType'];
                    $signature =$_GET['signature'];

                        $momo= insert_momo($partnerCode,$requestId,$amount,$orderId,$orderInfo,$requestType,$signature);
                    
                      
                       
                    }
                    include "thanhtoan.php";
                    break; 
             
            case "mybill";
                if(isset($_POST['huy'])&& ($_POST['huy'])){
                    $id=$_POST['id'];
                    huy($id); 
                }
                    $dsbill=loadall_dh($_SESSION['email']['id']);
                    include "cart/mybill.php";
                    break;   
        }
            
         }else{
            include "home.php";
        } 
            include "footer.php";

            ob_end_flush(); 
    ?>

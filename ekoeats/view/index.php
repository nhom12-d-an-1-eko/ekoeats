 <?php
    session_start();
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../model/danhmuc.php";
    include "../model/taikhoan.php";
    include "../model/cart.php";
    include "header.php";
    // include "chitietsp.php";
    include "../global.php";
    if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];
    $listsp = loadall_sp();
    $listdm = loadall_dm();
    if(isset($_GET['act'])&&($_GET['act']!="")){
      $act=$_GET['act'];
      switch($act){
          case "home":
              if(isset($_POST['keyword']) &&  $_POST['keyword'] != 0 ){
                  $kyw = $_POST['keyword'];
              }else{
                  $kyw = "";
              }
              if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
                  $iddm=$_GET['iddm'];
              }else{
                  $iddm=0;
              }
              $listsp = loadall_sp($kyw,$iddm);
              $name= load_ten_dm($iddm);
              include "home.php";
              break;
            
            case 'chitietsp':
                if (isset($_GET['idsp'])&& ($_GET['idsp']>0)){
                    $id= $_GET['idsp'];
                    $onesp= loadone_sp($id);
                    extract($onesp);
                    $sp_cungloai=loadone_spcl($id,$iddm);
                    include "chitietsp.php";
                }else{
                    include "home.php";
                }
                break;
                 case 'dangky':
                     if (isset($_POST['dangky'])&&($_POST['dangky'])){
                         $user=$_POST['user'];
                         $pass=$_POST['pass'];
                         $email=$_POST['email'];
                         insert_taikhoan($user,$pass,$email);
                         $thongbao="Đã đăng ký thành công. Vui lòng đăng nhập.";
                     }
                     include "taikhoan/dangky.php";
                     break;
                case 'login':
                     if (isset($_POST['dangnhap'])){
                         $email=$_POST['email'];
                         $pass=$_POST['pass'];
                         $checkuser=checkuser($email,$pass);
                         if (is_array($checkuser)) {
                             $_SESSION['email']=$checkuser;
                             //$thongbao="Bạn đã đăng nhập thành công!!";
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
                        $_SESSION['user']=checkuser($user,$pass); 
                        header('Location: index.php?act=info');
                    }
                     include "taikhoan/info.php";
                     break;
                // case 'quenmk':
                //     if (isset($_POST['guiemail'])&&($_POST['guiemail'])){
                //         $email=$_POST['email'];
                //         $checkemail=checkemail($email);
                //         if(is_array($checkemail)){
                //             $thongbao="Mật khẩu của bạn là: ".$checkemail['pass'];
                //         }else{
                //             $thongbao="Email này không tồn tại";
                //         }
                //     }
                //     include "view/taikhoan/quenmk.php";
                //     break;
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
                if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $img=$_POST['img'];
                    $price=$_POST['price'];
                    $soluong=1;
                    $ttien=$soluong*$price;
                    $spadd=[$id,$name,$img,$price,$soluong,$ttien]; 
                    array_push($_SESSION['mycart'],$spadd);
                }
                include "cart/viewcart.php";
                break;
            case "delcart": 
                    if(isset($_GET['idcart'])){
                        array_splice($_SESSION['mycart'],$_GET['idcart'],1);
                    }else{
                        $_SESSION['mycart']=[];
                    }
                    header('Location: index.php?act=addtocart');
                    break;    
            case "thanhtoan":
                include "thanhtoan.php";
                break;
            }
            
         }else{
            include "home.php";
        } 
    include "footer.php";
 ?>
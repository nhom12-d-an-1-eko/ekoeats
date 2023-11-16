 <?php
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../model/danhmuc.php";
    include "../model/taikhoan.php";
    include "header.php";
    // include "chitietsp.php";
    include "../global.php";
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
                         $email=$_POST['email'];
                         $user=$_POST['user'];
                         $pass=$_POST['pass'];
                         insert_taikhoan($email,$user,$pass);
                         $thongbao="Đã đăng ký thành công. Vui lòng đăng nhập.";
                     }
                     include "taikhoan/dangky.php";
                     break;
                case 'login':
                     if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                         $user=$_POST['user'];
                         $pass=$_POST['pass'];
                         $checkuser=checkuser($user,$pass);
                         if (is_array($checkuser)) {
                             $_SESSION['user']=$checkuser;
                             //$thongbao="Bạn đã đăng nhập thành công!!";
                             header('Location: index.php');
                         }
                         $thongbao="Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký.";
                     }
                    include "login.php";
                    break;
                // case 'edit_taikhoan':
                //     if (isset($_POST['capnhat'])&&($_POST['capnhat'])){
                //         $user=$_POST['user'];
                //         $pass=$_POST['pass'];
                //         $email=$_POST['email'];
                //         $address=$_POST['address'];
                //         $tel=$_POST['tel'];
                //         $id=$_POST['id'];
                //         update_taikhoan($id,$user,$pass,$email,$address,$tel);
                //         $_SESSION['user']=checkuser($user,$pass); 
                //         header('Location: index.php?act=edit_taikhoan');
                //     }
                //     include "view/taikhoan/edit_taikhoan.php";
                //     break;
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
            case "contact":
                include "contact.php";
                break;
            }
            
         }else{
            include "home.php";
        } 
    include "footer.php";
 ?>
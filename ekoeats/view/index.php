 <?php
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../model/danhmuc.php";
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
            case 'about':
                include "about-us.php";
                break;
            case "addtocart":
                if(isset($_POST['addtocart']) &&$_POST['addtocart'] ){
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $img=$_POST['img'];
                    $price=$_POST['price'];
                    $soluong=1;
                    $ttien= $price * $soluong;
                    $spadd=[$id,$name,$img,$price,$soluong,$ttien];
                    array_push( $_SESSION['mycart'],$spadd);
                    
                }
                include "cart/viewcart.php";
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
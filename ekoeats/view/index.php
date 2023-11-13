 <?php
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../model/danhmuc.php";
    include "header.php";
    include "chitietsp.php";
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
<<<<<<< HEAD
            
            case 'chitietsp':
                if (isset($_GET['idsp'])&& ($_GET['idsp']>0)){
                    $id= $_GET['idsp'];
                    $onesp= loadone_sp($id);
                    extract($onesp);
                    $sp_cungloai=loadone_spcl($id,$iddm);
                    include "chitietsp.php";
                }else{
                    include "home.php";
=======
              case "sanphamct":
                if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                    $listsp = loadone_sanpham($_GET['idsp']);
                    $listsp = load_sanpham_cungloai($_GET['idsp'], $sanpham['iddm']);
                    include "view/chitietsanpham.php";
                }else{  
                    include "view/home.php";            
>>>>>>> 9f793b7fa99e061d2c600ae099a732474917048d
                }
                break;
            }
         }else{
            include "home.php";
        } 
    include "footer.php";
 ?>
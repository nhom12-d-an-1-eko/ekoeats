 <?php
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../model/danhmuc.php";
    include "header.php";
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
              case "sanphamct":
                if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                    $listsp = loadone_sanpham($_GET['idsp']);
                    $listsp = load_sanpham_cungloai($_GET['idsp'], $sanpham['iddm']);
                    include "view/chitietsanpham.php";
                }else{  
                    include "view/home.php";            
                }
                break;
            }
         }else{
            include "home.php";
        } 
    include "footer.php";
 ?>
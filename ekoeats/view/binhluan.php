<?php
session_start();
$idpro = $_REQUEST['idpro'];
include "../model/pdo.php";
include "../model/binhluan.php";
$dsbl = loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>binh luan</title>
    <link rel="stylesheet" href="../asset/css/style.css">
</head>

<body>


    <div class="mb">
        <div class="box_title">Bình luận</div>
        <div class="binhluan">
            <table>
                <?php
                 echo '<tr>
                 <th>Nội dung </th>
                 <th>Khách hàng </th>
                 <th>Ngày bình luận</th>
                
                 
           </tr>';
                foreach ($dsbl as $value) {
                    echo '<tr ><td>' . $value['noidung'] . ' </td>
                                <td>' . $value['user'] . ' </td>
                                <td>' . $value['ngaybinhluan'] . ' </td></tr>';

                }
                ?>
            </table>
        </div>
        <?php
    if (isset($_SESSION['email'])&&(count($_SESSION['email'])>0)) {
?>
        <div class="box_search">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                <input type="hidden" name="idpro" value="<?= $idpro ?>">
                <input type="text" placeholder="Bình luận" name="noidung">
                <input type="submit" value="binh luan" name="guibinhluan">
            </form>
        </div>
        <?php 
}else{
    $_SESSION['trang']="chitietsp";
    $_SESSION['idpro']=$_GET['idpro'];
    echo "<a href='index.php?act=login' target='_parent'>Bạn phải đăng nhập mới có thể bình luận</a>"; 
}
?>
        <?php
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            if (isset($_SESSION['email'])) {
                extract($_SESSION['email']);
                $noidung = $_POST['noidung'];
                $iduser = $_SESSION['email']['id'];
                $idpro = $_POST['idpro'];
                $ngaybinhluan = date('H:i:s Y-m-d');
                insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
            } else {
                echo "dang nhap de binh luan";
            }
            header("location: " . $_SERVER['HTTP_REFERER']);
        }

        ?>
    </div>
</body>

</html>
<style>
    tr>td{
        width: 1000px;
        height: 10px;
        border: 0.5px solid burlywood;
    }
    .box_search input {
        margin-top: 9px;
        padding: 5px 10px;
        background-color: #ffff;
        border-radius: 5px;
        border: 1px #ccc solid;
    }
    .binhluan table{
        border-spacing: 20px;
        background-color: wheat;
    }
    .binhluan{
    padding:20px;
    background:#EEEE;
    border-left:1px solid #ccc;
    border-right:1px solid #ccc;
    border-bottom:1px solid #ccc;
    border-bottom-left-radius:5px;
    border-bottom-right-radius:5px;
    min-height:200px;
     
    }
</style>
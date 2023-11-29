<?php
    session_start();
    include "../model/pdo.php";
    include "../model/binhluan.php";
    if (isset($_GET['idpro'])) {
       $idpro= $_GET['idpro'];
    }
    if (isset($_POST['guibinhluan'])) {
        $idpro=$_POST[$idpro];
        $noidung=$_POST[$noidung];
        $ngaybl=date('H:i:s d/m/Y');
        $iduser=$_SESSION['email']['id'];
        $hoten=$_SESSION['email']['hoten'];
        binhluan_insert($iduser,$idpro,$noidung,$ngaybl);
    }

    $dsbl=binhluan_select_all();
    $html_bl="";
    foreach ($dsbl as $bl){
        extract($bl);
        $html_bl.='<p>'.$noidung.'<br>'.$iduser.' - ('.$ngaybl.')</p>';
    }
?>
    <h2>BÌNH LUẬN TẠI ĐÂY</h2>
<?php
    if (isset($_SESSION['email'])&&(count($_SESSION['email'])>0)) {
?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>"  method="post">
        <input type="hidden" name="idpro" value="idpro">
        <textarea name="noidung" id="" cols="100%" rows="5" required minlength="3" maxlength="100"></textarea><br>
        <button type="submit" name="guibinhluan">Gửi bình luận</button>
    </form>
<?php 
}else{
    $_SESSION['trang']="chitietsp";
    $_SESSION['idpro']=$_GET['idpro'];
    echo "<a href='index.php?act=login' target='_parent'>Bạn phải đăng nhập mới có thể bình luận</a>"; 
}
?>
<div class="dsbl">
    <?=$html_bl?>
</div>
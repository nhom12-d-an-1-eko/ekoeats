<?php
function insert_sp($tensp, $giasp,$hinh,$soluong,$mota,$iddm){
    $sql="INSERT INTO sanpham(name,price,img,soluong,mota,iddm) VALUES ('$tensp','$giasp','$hinh','$soluong','$mota','$iddm')";
    pdo_execute($sql);
}
function delete_sp($id){
    $sql="DELETE FROM sanpham WHERE id=".$id;
    pdo_execute($sql);
}
function loadall_sp_home(){
    $sql="SELECT * FROM sanpham WHERE 1 order by id desc limit 0,9";

    $listsp = pdo_query($sql);
    return $listsp;
}
function loadall_sp($kyw="",$iddm=0){
    $sql="SELECT * FROM sanpham WHERE 1";

    if ($kyw !=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if ($iddm >0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id asc";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadone_sp($id){
    $sql= "SELECT * FROM sanpham WHERE id=".$id;
    $listsp=pdo_query_one($sql);
    return $listsp;
}
function load_tendm($iddm){
    if ($iddm>0) {
        $sql = "SELECT * FROM danhmuc WHERE id=" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $namedm;
    }else{
        return "";
    }
}
function loadone_spcl($id,$iddm){
    $sql= "SELECT * FROM sanpham WHERE iddm=".$iddm." AND id<>".$id;
    $listsp=pdo_query($sql);
    return $listsp;
}

function update_sp($id,$iddm,$tensp,$giasp,$soluong,$mota,$hinh){
    if ($hinh!=""){
        $sql="update sanpham set iddm='".$iddm."',name='".$tensp."', price='".$giasp."',img='".$hinh."',soluong='".$soluong."', mota='".$mota."' where id=".$id;
    } else{
        $sql="UPDATE sanpham SET iddm='".$iddm."', name='".$tensp."', price='".$giasp."',soluong='".$soluong."', mota='".$mota."' where id=".$id;
    }

    pdo_execute($sql);
}
?>

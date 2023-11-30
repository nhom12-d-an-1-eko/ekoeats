<?php
function insert_sp($tensp,$price,$hinh,$motasp,$soluong,$iddm){
    $sql= "INSERT INTO sanpham(name,price,img,mota,soluong,iddm) VALUES('$tensp','$price','$hinh','$motasp','$soluong','$iddm')";
    pdo_execute($sql);
}
function delete_sp($id){
    $sql="DELETE FROM sanpham WHERE id=".$id;
    pdo_execute($sql);
}
function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by id desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
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
    $sql= "SELECT * FROM sanpham WHERE iddm= $iddm AND id <> $id";
    $listsp=pdo_query($sql);
    return $listsp;
}

    function update_sp($id,$iddm,$tensp,$price,$motasp,$hinh,$soluong){
        if($hinh!="")
            $sql= "UPDATE sanpham SET iddm='".$iddm."',name='".$tensp."',price='".$price."',mota='".$motasp."',img='".$hinh."',soluong='".$soluong."' WHERE id= ".$id;
        else
            $sql= "UPDATE sanpham SET iddm='".$iddm."',name='".$tensp."',price='".$price."',mota='".$motasp."',soluong='".$soluong."' WHERE id= ".$id;
        pdo_execute($sql);   
    }

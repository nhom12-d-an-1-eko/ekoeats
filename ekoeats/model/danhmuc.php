<?php
function insert_danhmuc($tenloai){
    $sql="INSERT INTO danhmuc(name) VALUES ('$tenloai')";
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql="DELETE FROM danhmuc WHERE id=".$id;
    pdo_execute($sql);
}
function loadall_dm(){
    $sql="SELECT * FROM danhmuc order by id asc";
    $listdm = pdo_query($sql);
    return $listdm;
}
function loadone_dm($id){
    $sql= "SELECT * FROM danhmuc WHERE id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}

function update_dm($id,$tenloai){
    $sql="UPDATE danhmuc SET name='".$tenloai."' WHERE id=".$id;
    pdo_execute($sql);
}
function load_ten_dm($iddm){
    if($iddm>0){
        $sql="select * from sanpham where id=".$iddm;
        $dm=pdo_query_one($sql);
        //extract($dm);
        // return $name;
    }else{
        return "";
    }
}
?>


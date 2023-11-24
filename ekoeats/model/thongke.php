<?php
    function loadall_thongke_dm(){
        $sql=" select danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as demsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
        $sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
        $sql.=" group by danhmuc.id order by danhmuc.id desc";
        $thongkedm=pdo_query($sql);
        return $thongkedm;
    }
    function loadall_thongke_dh(){
        $sql= "select bill.ngaydathang as ngay, count(bill.id) as countbill,min(bill.tongthanhtoan) as mintong, max(bill.tongthanhtoan) as maxtong, sum(bill.tongthanhtoan) as tongtien ";
        $sql.= "from bill ";
        $sql.= "group by ngay";
        // $sql.= "ORDER BY bill.id by bill.ngaydathang desc";
        $thongkedh=pdo_query($sql);
        return $thongkedh;
    }
    function tongdon(){
        $sql= "select count(bill.id) as tongsobill,sum(bill.tongthanhtoan) as tong from bill";
        $tongsobill=pdo_query($sql);
        return $tongsobill;
    }
    function sosanpham(){
        $sql= "select count(sanpham.id) as sosp from sanpham";
        $demsp=pdo_query($sql);
        return $demsp;
    }
    
?>

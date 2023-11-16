<?php
    function loadall_bill($kyw="",$iduser=0){
        $sql= "SELECT * FROM bill WHERE 1";
        if ($iduser>0) {
            $sql.=" AND iduser=".$iduser;
        }
        if($kyw!="") $sql.=" AND id like '%".$kyw."%'";
        $sql.=" order by id desc";
        $listbill=pdo_query($sql);
        return $listbill;
    }
    function loadall_cart_count($idbill){
        $sql="SELECT * FROM cart WHERE idbill=".$idbill;
        $bill=pdo_query($sql);
        return sizeof($bill) ;
    }
    function get_ttdh($n){
        switch ($n) {
            case '0':
                $tt ="Đơn hàng mới";
                break;
            
            case '1':
                $tt ="Đang xử lý";
                break;
            
            case '2':
                $tt ="Đang giao hàng";
                break;
            
            case '3':
                $tt ="Hoàn tất";
                break;
            
            default:
                $tt ="Đơn hàng mới";
                break;
        }
        return $tt;
    }
?>
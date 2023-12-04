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
    function loadall_dh($iduser){
        $sql="SELECT * FROM bill WHERE iduser=".$iduser;
        $sql.=" order by id desc";
        $dsbill=pdo_query($sql);
        return $dsbill ;
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
            case '4':
                $tt ="Đơn đã hủy";
                break;
            
            default:
                $tt ="Đơn hàng mới";
                break;
        }
        return $tt;
    }
    function get_tt($n){
        switch ($n) {
            case '0':
                $pay="Chưa thanh toán";
                break;
            
            case '1':
                $pay ="Đã thanh toán";
                break;
            default:
                $pay ="Chưa thanh toán";
                break;
        }
        return $pay;
    }
    function delete_dh($id){
        $sql="DELETE FROM bill WHERE id=".$id;
        pdo_execute($sql);
    }
    function loadone_dh($id){
        $sql= "SELECT * FROM bill WHERE id=".$id;
        $bill=pdo_query_one($sql);
        return $bill;
    }
    function update_dh($id,$ttdh,$paybill){
        $sql="UPDATE bill SET bill_status='".$ttdh."', tinhtrangtt='".$paybill."' WHERE id=".$id;
        pdo_execute($sql);
    }
    function loadct_dh($id){
        $sql="SELECT cart.id, cart.name, cart.price, cart.img, cart.soluong, cart.thanhtien FROM `cart` 
        LEFT JOIN bill ON cart.idbill = bill.id
        WHERE bill.id= $id";
        $listct = pdo_query($sql);
        return $listct;
    }
    function huy($id){
        $sql=" UPDATE `bill` SET `bill_status` = '4' WHERE `bill`.`id`=  ".$id;
        $huy = pdo_query($sql);
        return $huy;
    }
   
        
?>
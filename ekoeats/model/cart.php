<?php
    function viewcart($del){
        global $img_path;
                          $tong=0;
                          $i = 0;
                          if($del==1){
                              $xoasp_th='<th>Thao Tác </th>';
                              }else{
                                  $xoasp_th='';
                                  $xoasp_td='';
                              }
                              echo '<tr>
                                <th>STT</th>
                                <th>Tên Món</th>
                                <th>Ảnh</th>
                                <th>Số Lượng</th>
                                <th>Giá</th>
                                <th>Thành Tiền</th>
                              '.$xoasp_th.'
                          </tr>';
                          foreach($_SESSION['mycart'] as $cart){
                              $hinh=$img_path.$cart[2];
                              $ttien=$cart[3]*$cart[4];
                              $tong+=$ttien;
                              if($del==1){
                              $xoasp_td='<a href="index.php?act=delcart&idcart='.$i.'"><input  class="mr20" type="button" value="Xóa" onclick="return confirm(\'Bạn có chắc muốn xóa\')"></a>';
                              
                              }else{
                                  $xoasp_td='';
                              }
                              echo
                              '
                              <tr>
                              <td>'.$cart[0].'</td>
                              <td>'.$cart[1].'</td>
                              <td><img src="'.$hinh.'" alt="" height="200 "></td>                             
                              <td>'.$cart[4].'</td>
                              <td>'.$cart[3].'.000</td>
                              <td>'.$ttien.'.000</td>
                              <td>'.$xoasp_td.'</td>
                              </tr>';
                              $i+=1;
                          }
                          echo '<tr>
                          <td colspan="5">Tổng Đơn Hàng</td>
                          <td>'.$tong.'.000</td>
                          <td><a href="index.php?act=bill"><input type="button" value="Tiếp Tục Đặt Hàng"> </a></td>
                          </tr>
                          ';
                        }
      function view(){
        global $img_path;
                          $tong=0;
                          $i = 0;
        foreach($_SESSION['mycart'] as $cart){
            $hinh=$img_path.$cart[2];
            $ttien=$cart[3]*$cart[4];
            $tong+=$ttien;
            echo
            '
            <tr>
            <td>'.$cart[1].'</td>
            <td><img src="'.$hinh.'" alt="" height="50 "></td>                             
            <td>'.$cart[3].'.000</td>
            <td></td>
            <td>'.$cart[4].'</td>
            <td></td>
            <td>'.$ttien.'.000</td>
            </tr>';
            $i+=1;
        }
        echo '<tr>
        
        <td>'.$tong.'.000</td>
        </tr>
        ';
      }
      function tongdonhang(){
    
        $tong=0;
        
        foreach($_SESSION['mycart'] as $cart){
           $ttien=$cart[3]*$cart[4];
           $tong+=$ttien;
           
            
        }
      return  $tong;
       
}
    function insert_bill($name,$email,$address,$tel,$ngaydathang,$tongdonhang,$pttt){
        $sql="INSERT INTO bill(user,email,diachi,tel,pttt,ngaydathang,tongthanhtoan) values('$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
        return pdo_execute_return_lastInsertID($sql);
    }
    function insert_cart($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
        $sql="INSERT INTO cart(iduser,idpro,img,name,price,soluong,,thanhtien,idbill) values('$iduser','$idpro','$img','$price','$soluong','$thanhtien','$idbill')";
        return pdo_execute_return_lastInsertID($sql);
    }
?>
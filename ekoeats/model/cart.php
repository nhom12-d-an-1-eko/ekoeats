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
                              <td>'.($i+1).'</td>
                              <td>'.$cart[1].'</td>
                              <td><img src="'.$hinh.'" alt="" height="70px"></td>                             
                              <td><button class="btn-minute" type="button" onclick="giamsl(this)">-</button>
                              <input type="text" name="amount" id="amount" value="'.$cart[4].'">
                              <button class="btn-plus" type="button" onclick="tangsl(this)">+</button></td>
                              <td>'.$cart[3].'.000</td>
                              <td>'.$ttien.'.000</td>
                              <td>'.$xoasp_td.'</td>
                              </tr>';
                              $i+=1;
                          }
                          echo '<tr>
                          <td colspan="5">Tổng Đơn Hàng</td>
                          <td>'.$tong.'.000</td>
                          <td><a href="index.php?act=bill"><input type="button" value="Thanh toán "> </a></td>
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
        <td colspan="6">Tổng Đơn Hàng</td>
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
    function insert_bill($iduser,$name,$email,$address,$tel,$ngaydathang,$tongdonhang,$pttt){
        $sql="INSERT INTO bill(iduser,user,email,diachi,tel,ngaydathang,tongthanhtoan,pttt) values('$iduser','$name','$email','$address','$tel','$ngaydathang','$tongdonhang','$pttt')";
        return pdo_execute_return_lastInsertId($sql);
    }
    function insert_cart($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
        $sql="INSERT INTO cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
        return pdo_execute($sql);
    }
    function loadone_bill($id){
        $sql= "SELECT * FROM bill WHERE id=".$id;
        $bill=pdo_query_one($sql);
        return $bill;
    }
?>
    
     



<style>
    input.mr20{
        width: 50px;
        
    }
    a>input{
        width: 150px;

    }
    a>input:hover{
        background-color: green;
        color: white;
        
    }
</style>
<script>
    function giamsl(x){
        var cha= x.parentElement;
        var soluongcu = cha.children[1];     
        if(parseInt( soluongcu.value)>1){
            var soluongmoi =parseInt( soluongcu.value)-1;
            soluongcu. value= soluongmoi;

        }
       

    }
    function tangsl(x){
        var cha= x.parentElement;
        var soluongcu = cha.children[1];
        var soluongmoi =parseInt( soluongcu.value)+1;
        soluongcu. value= soluongmoi;
        

    }


        // function tangsl(x){
        //     let ongnoi = x.parentElement;
            // let vt = ongnoi.chidren[0];
            // let sl = ongnoi.chidren[1];
            // alert(sl);
            // let slmoi = 0;
            // let thanhtien = 0;
            // for (let i = 0; i < cart.length; i++) {
            // if(i == vt){
            //     slmoi = cart[i].soluong;
            //     thanhtien = slmoi * cart[i].dongia;
            //     cart[i].soluong += 1;
            //     break;
            //  }                
            // }
            // sessionStorage.setItem("mycart",JSON.stringify(cart));
            // sl.value = slmoi;

            // let tt = ongnoi.parentElement.parentElement.chidren[3].chidren[0];
            // tt.innerText = thanhtien;
        
</script>

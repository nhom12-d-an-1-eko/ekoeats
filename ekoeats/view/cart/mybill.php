
<div class="cart">
<div class="field-back">
                    <a href="index.php?act=home">
                        <button type="button" title="Quay lại">← <b>Mua thêm </b></button>
                    </a>
                </div>
                
        <h1>Đơn hàng của bạn</h1>
       <div class="form-cart">
        <form action="index.php?act=mybill" method="post">
        <table class="table" >
        <tr>
                <th>MÃ ĐƠN HÀNG</th>
                <th>KHÁCH HÀNG</th>
                <th>SỐ LƯỢNG HÀNG</th>
                <th>GIÁ TRỊ ĐƠN HÀNG</th>
                <th>TÌNH TRANG ĐƠN HÀNG</th>
                <th>Trạng Thái Thanh Toán</th>
                <th>NGÀY ĐẶT HÀNG</th>
                <th>Chức Năng</th>
        </tr>
            <?php 
                foreach ($dsbill as $bill) {
                    extract($bill);
                    $kh=$bill["user"].'
                    <br> '.$bill["email"].'
                    <br> '.$bill["tel"].'
                    <br> '.$bill["diachi"];
                
                    $countsp=loadall_cart_count($bill["id"]);
                    $ttdh=get_ttdh($bill["bill_status"]);
                    $paybill=get_tt($bill["tinhtrangtt"]);
                    echo '<tr>
                    <td>EKO-'.$bill['id'].'</td>
                    <td>'.$kh.'</td>
                    <td>'.$countsp.'</td>
                    <td>'.$bill['tongthanhtoan'].'.000</td>
                    <td>'.$ttdh.'</td>
                    <td>'.$paybill.'</td>
                    <td>'.$bill['ngaydathang'].'</td>
                    <td>';
                
                    if ($bill['bill_status']!="3"&&$bill['bill_status']!="2"&&$bill['bill_status']!="4") {
                        echo '
                        <input type="hidden" name="id" value="'.$bill['id'].'">
                        <input  type="submit" value="hủy" name="huy" onclick="return confirm(\'Bạn có chắc muốn hủy đơn\')"> ';                  
                    } else{
                       echo 'không thể hủy đơn';
                    }
                    echo'
                    </td>
                    </tr>';
                }
            ?>

                
        </table>
       </div>
    </div>
   
    </form>
</div>
</div>
<style>
    .cart {
        margin: 150px auto 50px;
        width: 1200px;
      
        margin-bottom: 20px;

    }

    .cart h1 {
        margin: 50px 0;
    }

    table,
    th,
    td {
        border: 1px solid rgb(252, 45, 45);
        border-collapse: collapse;
        padding: 10px 20px;
       

    }

    table th {
        background-color: rgb(252, 45, 45);
        color: aliceblue;
    }
    table {
        height: 100%;
        margin-bottom: 20px;
    }
    .form-cart {
        display: grid;
        grid-template-columns: 10fr 1fr;
       
        
    }
    button {
        width: 70px;
        height: 40px;
        background-color: #e36872dd;
        border: none;
        border-radius: 5px;
        font-size: 15px;
    }
    input{
            width: 70px;
            height: 40px;
            background-color: #d3737bdd;
            border: none;
            border-radius: 5px;
            font-size: 15px;
            padding: 8px;
           
        }
        .field-back {
        float: right;
      

    }

    .field-back>a>button {
        color: #ff5b6a;
        background-color: white;
        border-radius: 40px;
        padding: 5px 17px;
        border: none;
        box-shadow: 1px 2px 2px 2px rgba(128, 128, 128, 0.415);
        width: 140px;
        height: 40px;
        font-size: medium;
        margin-right: 100px;
    }

    .field-back>a>button:hover {
        color: white;
        background-color: green;
        border-radius: 40px;
        padding: 5px 17px;
        border: none;
        box-shadow: 1px 2px 2px 2px rgba(128, 128, 128, 0.415);
    }

</style>
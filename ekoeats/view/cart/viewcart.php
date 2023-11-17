<div class="cart">
    <h1>Giỏ Hàng Của Bạn</h1>
    <div class="form-cart">
        <table class="table">

            <tr>
                <th>STT</th>
                <th>Tên Món</th>
                <th>Ảnh</th>
                <th>Số Lượng</th>
                <th>Giá</th>
                <th>Thành Tiền</th>
            </tr>

            <?php
            $tong = 0;
            foreach ($_SESSION['mycart'] as $cart) {
                $hinh = $img_path.$cart[2];
                $ttien = $cart[3] * $cart[4];
                $tong += $ttien;
                echo ' <tr>
                   <td>'.$cart[0].'</td>
                   <td>'.$cart[1].'</td>
                   <td><img src="'.$hinh.'" width="80px" alt=""></td>
                   <td>'.$cart[4].'</td>
                   <td>'.$cart[3].'</td>
                   <td>'.$ttien.'</td>
               </tr>';
            }
            echo'
            <tr>
            <td colspan="5">Tổng đơn hàng </td>
            <td>'.$tong.'</td>
           
        </tr>
                ';
            //         echo'
            //         </table>
            // <div class="right-cart">
            //     <table>
            //         <tr>
            //             <th>Total</th>
            //             <th>Tổng tiền</th>
            //          </tr>
            //         <tr>
            //             <td>=></td>
            //             <td>'.$tong.'</td>
            //         </tr>
            //     </table>
            //         ';
            ?>




        </table>
    </div>
</div>
</div>
<style>
    .cart {
        margin: 150px auto 50px;
        width: 1200px;
        height: 500px;
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

    .form-cart {
        display: grid;
        grid-template-columns: 10fr 1fr;

    }
</style>
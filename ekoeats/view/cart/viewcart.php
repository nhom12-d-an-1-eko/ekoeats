
<div class="cart">
        <h1>Giỏ Hàng Của Bạn</h1>
       <div class="form-cart">
        <table class="table" >
          
                <!-- <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên Món</th>
                    <th>Ảnh</th>
                    <th>Số Lượng</th>
                    <th>Giá</th>
                    <th>Thành Tiền</th>
                </tr>
                </thead> -->

                   
                    <?php
                    viewcart(1);
                    ?>

                 
        </table>
         <!-- echo'
                
                <div class="right-cart">
                    <table>
                        <tr>
                            <th>Total</th>
                            <th>Tổng tiền</th>
                         </tr>
                        <tr>
                            <td>=></td>
                            <td>'.$tong.'</td>
                        </tr>
                    </table>
                        ';    -->

         
           
               
        
       </div>
    </div>
    <style>
    .cart{
    margin: 150px auto 50px;
    width: 1200px;
}
.cart h1{
    margin: 50px 0;
}
table, th, td {
    border: 1px solid rgb(252, 45, 45);
    border-collapse: collapse;
    padding: 10px 20px;
   
   
  }
  table th {
    background-color: rgb(252, 45, 45);
    color: aliceblue;
  }
  .form-cart{
    display: grid;
    grid-template-columns: 10fr 1fr;
    
  }
  </style>






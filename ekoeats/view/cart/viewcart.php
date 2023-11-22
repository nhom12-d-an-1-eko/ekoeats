
<div class="cart">
<div class="field-back">
                    <a href="index.php?act=home">
                        <button type="button" title="Quay lại">← <b>Mua thêm </b></button>
                    </a>
                </div>
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

    .form-cart {
        display: grid;
        grid-template-columns: 10fr 1fr;
        height: 80%;
        
        
    }
    button {
        width: 32px;
        height: 32px;
        background-color: #e36872dd;
        border: none;
        border-radius: 5px;
        font-size: 20px;
    }
    input{
            width: 32px;
            height: 32px;
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



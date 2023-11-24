<?php
    include "../model/cart.php";
?>
<main role="main" class="container">
    <form action="../model/congthanhtoan.php" method="post">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4">
            <form class="needs-validation">

                <div class="py-5 text-center">
                    <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                    <h2>Thanh toán</h2>
                    <p class="lead">Vui lòng kiểm tra thông tin Khách hàng, thông tin Giỏ hàng trước khi Đặt hàng.</p>
                </div>

                <div class="row">
                    <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Đơn hàng </span>
                        </h4>
                        <ul class="list-group mb-3">
                        <table>
                                
                                <tr>
                                
                                    <th>Tên Món</th>    
                                    <th>Ảnh</th>
                                    <th>Giá</th>
                                    <th></th>
                                    <th>Số Lượng</th>
                                    <th></th>
                                    <th>Thành Tiền</th>
                                </tr>
                        
                                    <?php 
                                        view();
                                    ?>
                                    </table>
                                   
                                
                        </ul>


                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Mã khuyến mãi">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">Xác nhận</button>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Thông tin khách hàng</h4>

                        <div class="row">
                            
                            <div class="col-md-12">
                                <label for="kh_ten">Họ tên</label>
                                <input type="text" class="form-control" name="user" 
                                    value="<?=$user?>" readonly="">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_diachi">Địa chỉ</label>
                                <input type="text" class="form-control" name="diachi" required minlength="3" maxlength="100"
                                    >
                            </div>
                            <div class="col-md-12">
                                <label for="kh_dienthoai">Điện thoại</label>
                                <input type="tel" class="form-control" name="tel" required
    pattern="[0-9]{3}[0-9]{3}[0-9]{4}"   id="phone">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_email">Email</label>
                                <input type="text" class="form-control" name="email" 
                                    value="<?=$email?>" readonly="">
                            </div>
                        </div>
                        <input type="hidden" name="total" value="<?=$tong?>">
                     <button name="thanhtoandonhangol" >Thanh toán</button>                   
                </div>
            </form>

        </div>
    </form>
        <!-- End block content -->
</main>
<style>
    
    .container{
        width: 100%;
        height:2000px;
        margin-top: 40px;
        margin-bottom: 40px;
    }
    table tr td{
        border: 1px solid black;
    }
    .cart{
    margin: 150px auto 50px;
    width: 100px;
    height: 100%;
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
    grid-template-columns: 5fr 1fr;}
    .container{
        width: 100%;
        height:2000px;
        margin-top: 40px;
        margin-bottom: 40px;
    }
    table tr td{
        border: 1px solid black;
    }
</style>
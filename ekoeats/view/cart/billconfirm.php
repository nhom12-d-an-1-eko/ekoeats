<main role="main" class="container">
    <form action="index.php?act=billconfirm" method="post">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4">
            <form class="needs-validation">
            <?php
            if (isset($bill)&&(is_array($bill))) {
                extract($bill);
            }
            

            ?>
                <div class="py-5 text-center">
                    <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                    <h2>Thông tin đơn hàng</h2>
                    <p class="lead">Cảm ơn quý khách đã đặt hàng</p>
                </div>
           
                <div class="row">
                    <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Giỏ hàng</span>
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

                    </div>
                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Thông tin khách hàng</h4>

                        <div class="row">
                            
                            <div class="col-md-12">
                                <label for="kh_ten">Họ tên</label>
                                <input type="text" class="form-control"
                                    value="<?=$bill['user']?>" readonly="">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_diachi">Địa chỉ</label>
                                <input type="text" class="form-control" 
                                    value="<?=$bill['diachi']?>" readonly="">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_dienthoai">Điện thoại</label>
                                <input type="text" class="form-control"
                                    value="<?=$bill['tel']?>" readonly="">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_email">Email</label>
                                <input type="text" class="form-control" 
                                    value="<?=$bill['email']?>" readonly="">
                            </div>
                        </div>

                        <h4 class="mb-3">Hình thức thanh toán</h4>

                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="httt-1" name="pttt" type="radio" class="custom-control-input" value="<?=$bill['pttt']?>" required="">
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-md-12">
                                <label for="kh_ten">Mã đơn hàng</label>
                                <input type="text" class="form-control" name="user" 
                                    value="EKO-<?=$bill['id']?>" readonly="">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_diachi">Ngày đặt hàng</label>
                                <input type="text" class="form-control" name="diachi" 
                                    value="<?=$bill['ngaydathang']?>" readonly="">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_dienthoai">Tổng đơn hàng</label>
                                <input type="text" class="form-control" name="tel" 
                                    value="<?=$bill['tongthanhtoan']?>.000" readonly="">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_email">Email</label>
                                <input type="text" class="form-control" name="email" 
                                    value="<?=$email?>" readonly="">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- <div class="xacnhan">
            <input type="submit" name="dong" value="Xác nhận">
            </div> -->
        </div>
    </form>
        <!-- End block content -->
</main>
<style>
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
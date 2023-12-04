<?php
if (is_array($bill)) {
    extract($bill);
}

?>
<div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
											<div class="breadcomb-icon">
												<i class="icon nalika-home"></i>
											</div>
											<div class="breadcomb-ctn">
												<h2>Product Edit</h2>
												<p>Welcome to Nalika <span class="bread-ntd">Admin Template</span></p>
											</div>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">
											<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-b-30">
<div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                    <form action="index.php?act=updatedh" method="POST">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Sửa đơn hàng</a></li>
                                    <li><a href="#reviews"><i class="icon nalika-picture" aria-hidden="true"></i> Sản phẩm</a></li>
                                    <!-- <li><a href="#INFORMATION"><i class="icon nalika-chat" aria-hidden="true"></i> Review</a></li> -->
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                <label class="ten">Mã đơn hàng:</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="id" value="EKO-<?=$bill['id']?>"  >
                                                    </div>
                                                    <label class="ten">Khách hàng:</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" value="<?=$bill['user']?>" >
                                                        <input type="text" class="form-control" value="<?=$bill['email']?>" >
                                                        <input type="text" class="form-control" value="<?=$bill['diachi']?>" >
                                                        <input type="text" class="form-control" value="<?=$bill['tel']?>" >
                                                    </div>
                                                    <!-- <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Thuế">
                                                    </div> -->
                                                    <label class="ten">Ngày đặt hàng:</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" value="<?=$bill['ngaydathang']?>" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                <label class="ten">Tổng tiền đơn hàng:</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-favorites-button" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" value="<?=$bill['tongthanhtoan']?>.000">
                                                    </div>
                                                    <!-- <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Khuyến Mãi">
                                                    </div> -->
                                                    <label class="ten">Tình trạng đơn hàng:</label>
                                                     <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
                                                        <select name="bill_status" class="form-control pro-edt-select form-control-primary">
                                                             <?php 
                                                             if ($bill['bill_status']!="3"&&$bill['bill_status']!="4") {
                                                                        echo '<option value="0">Đơn hàng mới</option>
                                                                        <option value="1">Đang xử lý</option>
                                                                        <option value="2">Đang giao</option>
                                                                        <option value="3" selected>Hoàn tất</option>
                                                                        <option value="4" selected>Đơn đã hủy</option>
                                                                        ';
                                                                        
                                                             } else{
                                                                echo '<option value="0" disabled >Đơn hàng mới</option>
                                                                        <option value="1" disabled >Đang xử lý</option>
                                                                        <option value="2" disabled>Đang giao</option>
                                                                        <option value="3" selected>Hoàn tất</option>
                                                                        ';
                                                             }
                                                            ?> 
														</select> 
                                                        
                                                    </div> 
                                                    <!-- ///////////////////////////////////////////////////////// -->
                                                    <label class="ten">Trạng thái thanh toán:</label>
                                                     <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
                                                        <select name="tinhtrangtt" class="form-control pro-edt-select form-control-primary">
                                                             <?php 
                                                             if ($bill['tinhtrangtt']!="1") {
                                                                        echo '<option value="0">Chưa thanh toán</option>
                                                                        <option value="1">Đã thanh toán</option>';
                                                                        
                                                             } else{
                                                                echo '  <option value="0"disabled>Chưa thanh toán</option>
                                                                        <option value="1"selected>Đã thanh toán</option>';
                                                             }
                                                            ?> 
														</select> 
                                                        
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                <div class="text-center custom-pro-edt-ds"><input type="hidden" name="id" value="<?=$bill['id']?>">
                                                    <input type="submit" value="Cập Nhật" name="capnhat" class="btn btn-ctl-bt waves-effect waves-light m-r-10">
														
                                                    <input type="reset" value="NHẬP LẠI" class="btn btn-ctl-bt waves-effect waves-light">
														
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="row">
                                                    <div class="product-status-wrap border-pdt-ct">
                                                    <table>
                                                        <?php
                                                            global $img_path;
                                                            $tong=0;
                                                            $i = 0;
                                  
                                                                echo '<tr>
                                                                  <th>STT</th>
                                                                  <th>Tên Món</th>
                                                                  <th>Ảnh</th>
                                                                  <th>Số Lượng</th>
                                                                  <th>Giá</th>
                                                                  <th>Thành Tiền</th>
                                                                  </tr>';
                                                            foreach($listct as $cart){
                                                                extract($cart);
                                                                $img="../upload/".$img;
                                                                if (is_file($img)) {
                                                                   $img="<img src='".$img."' height='80'>";
                                                               }else{
                                                                   $img="no photo";
                                                               }
                                                              $ttien=$cart['soluong']*$cart['price'];
                                                              $tong+=$ttien;
                                                              echo
                                                                '
                                                                <tr>
                                                                <td>'.($i+1).'</td>
                                                                <td>'.$cart['name'].'</td>
                                                                <td>'.$img.'</td>                                                                                            
                                                                <td>'.$cart['soluong'].'</td>                                                                                           
                                                                <td>'.$cart['price'].'.000</td>
                                                                 <td>'.$ttien.'.000</td>
                                                                </tr>';
                                                                $i+=1;
                                                            }
                                                            echo '<tr>
                                                            <td colspan="5">Tổng Đơn Hàng</td>
                                                            <td>'.$tong.'.000</td>
                                                            </tr>
                                                            ';
                                                          
                                    
                                                        ?>
                                                    </table>
                                                        
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .ten{
                color: #fff;
            }
        </style>
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
												<h2>Product Cart</h2>
												<p>Welcome to Eko Eats <span class="bread-ntd">Admin Eko Eats</span></p>
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
        <div class="product-cart-area mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-cart-inner">
                            <div id="example-basic">
                                <h3 style="color:#fff">Đơn Hàng</h3>
                                <section>
                                    <h3 class="product-cart-dn">Shopping</h3>
                                    <div class="product-list-cart">
                                        <div class="product-status-wrap border-pdt-ct">
                                            <table>
                                                <tr>
                                                <form role="search" action="index.php?act=dsdh" method="POST" class="">
                                                <th>
													<input type="text" name="kyw" placeholder="Tìm Kiếm..." class="form-control">
												</th>
                                                <th><input type="submit" name="listok" class="form-control"></th>
                                                </form>
                                                </tr>
                                                <tr>
                                                    <th>MÃ ĐƠN HÀNG</th>
                                                    <th>KHÁCH HÀNG</th>
                                                    <th>SỐ LƯỢNG HÀNG</th>
                                                    <th>GIÁ TRỊ ĐƠN HÀNG</th>
                                                    <th>NGÀY ĐẶT HÀNG</th>
                                                    <th>TÌNH TRANG ĐƠN HÀNG</th>
                                                    <th>Trạng Thái Thanh Toán</th>
                                                    <th>Chi TIẾT ĐƠN HÀNG</th>
                                                    <th>THAO TÁC</th>
                                                </tr>
                                                <?php 
                                                    foreach ($listbill as $bill) {
                                                        extract($bill);
                                                        $billtong=number_format($bill['tongthanhtoan'],3);
                                                        $kh=$bill["user"].'
                                                        <br> '.$bill["email"].'
                                                        <br> '.$bill["tel"].'
                                                        <br> '.$bill["diachi"];
                
                                                        $countsp=loadall_cart_count($bill["id"]);
                                                        $ttdh=get_ttdh($bill["bill_status"]);
                                                        $paybill=get_tt($bill["tinhtrangtt"]);
                                                        $suadh="index.php?act=suadh&id=".$id;
                                                        $xoadh="index.php?act=xoadh&id=".$id;
                                                        $chitietdh="index.php?act=chitietdh&id=".$id;
                                                        echo '<tr>
                                                        <td>EKO-'.$bill['id'].'</td>
                                                        <td>'.$kh.'</td>
                                                        <td>'.$countsp.'</td>
                                                        <td>'.$billtong.'</td>
                                                        <td>'.$bill['ngaydathang'].'</td>
                                                        <td>'.$ttdh.'</td>
                                                        <td>'.$paybill.'</td>
                                                        <td><a href="'.$chitietdh.'"><input type="button" value="Chi tiết đơn hàng"></a></td>
                                                        <td><a href="'.$suadh.'"><input type="button" value="Sửa"></a> <a href="'.$xoadh.'">   <input type="button" value="Xóa"></a></td>
                                                        </td>
                                                    </tr>';
                                                    }
                                                ?>
                                                
                                                <!-- <tr>
                                                    <td><img src="img/product/2.jpg" alt="" /></td>
                                                    <td>
                                                        <h3>Product Title 2</h3>
                                                        <p>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum.</p>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="1">
                                                    </td>
                                                    <td>$17</td>
                                                    <td>
                                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="img/product/3.jpg" alt="" /></td>
                                                    <td>
                                                        <h3>Product Title 3</h3>
                                                        <p>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum.</p>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="3">
                                                    </td>
                                                    <td>$15</td>
                                                    <td>
                                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="img/product/2.jpg" alt="" /></td>
                                                    <td>
                                                        <h3>Product Title 4</h3>
                                                        <p>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum.</p>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="2">
                                                    </td>
                                                    <td>$12</td>
                                                    <td>
                                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="img/product/1.jpg" alt="" /></td>
                                                    <td>
                                                        <h3>Product Title 5</h3>
                                                        <p>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum.</p>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="1">
                                                    </td>
                                                    <td>$18</td>
                                                    <td>
                                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    </td>
                                                </tr> -->
                                            </table>
                                        </div>
                                    </div>
                                </section>
                                <!-- <h3>Thông Tin Khách Hàng</h3>
                                <section>
                                    <h3 class="product-cart-dn">Shopping</h3>
                                    <div class="product-delivary">
                                        <div class="form-group">
                                            <label for="card-number" class="form-label">Tên</label>
                                            <input id="name-2" name="name" type="text" class="form-control">
                                        </div> -->
                                        <!-- <div class="form-group">
                                            <label for="card-number" class="form-label">Địa Chỉ *</label>
                                            <input id="surname-2" name="surname" type="text" class="form-control">
                                        </div> -->
                                        <!-- <div class="form-group">
                                            <label for="card-number" class="form-label">Select Country</label>
                                            <select class="form-control required">
													<option>Select Country</option>
													<option>Gujarat</option>
													<option>Kerala</option>
													<option>Manipur</option>
													<option>Tripura</option>
													<option>Sikkim</option>
												</select>
                                        </div> -->
                                        <!-- <div class="form-group">
                                            <label for="address" class="form-label">Địa Chỉ *</label>
                                            <input id="address" name="address" type="text" class="form-control">
                                        </div> -->
                                        <!-- <div class="form-group">
                                            <label for="city" class="form-label">City *</label>
                                            <input id="city" name="city" type="text" class="form-control">
                                        </div> -->
                                        <!-- <div class="form-group">
                                            <label for="phone-2" class="form-label">Số Điện THoại #</label>
                                            <input id="phone-2" name="phone" type="number" class="form-control phone">
                                        </div>
                                    </div>
                                </section> -->
                                <!-- <h3>Phương Thức Thanh Toán</h3> -->
                                <!-- <section>
                                    <h3 class="product-cart-dn">Shopping</h3>
                                    <div class="payment-details">
                                        <select id="hello-single" class="form-control">
												<option value="">---- Select card ----</option>
												<option value="married">Visa</option>
												<option value="unmarried">Master</option>
												<option value="married">American Express</option>
												<option value="unmarried">Discover</option>
											</select>
                                        <div class="form-group mg-t-15">
                                            <label for="card-number" class="form-label">Card number</label>
                                            <input id="card-number" class="form-control" type="text" name="card_number">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <label for="expdate-month" class="form-label">Expiration date</label>
                                                <div class="row gutter-xs">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="input-group">
                                                            <select id="expdate-month" class="form-control" name="expdate_month">
																	<option value="" selected="selected">Month</option>
																	<option value="1">01</option>
																	<option value="2">02</option>
																	<option value="3">03</option>
																	<option value="4">04</option>
																	<option value="5">05</option>
																	<option value="6">06</option>
																	<option value="7">07</option>
																	<option value="8">08</option>
																	<option value="9">09</option>
																	<option value="10">10</option>
																	<option value="11">11</option>
																	<option value="12">12</option>
																</select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <select id="expdate-year" class="form-control" name="expdate_year">
																	<option value="" selected="selected">Year</option>
																	<option value="2016">2016</option>
																	<option value="2017">2017</option>
																	<option value="2018">2018</option>
																	<option value="2019">2019</option>
																	<option value="2020">2020</option>
																	<option value="2021">2021</option>
																	<option value="2022">2022</option>
																	<option value="2023">2023</option>
																	<option value="2024">2024</option>
																	<option value="2025">2025</option>
																	<option value="2026">2026</option>
																	<option value="2027">2027</option>
																	<option value="2028">2028</option>
																	<option value="2029">2029</option>
																	<option value="2030">2030</option>
																	<option value="2031">2031</option>
																	<option value="2032">2032</option>
																	<option value="2033">2033</option>
																	<option value="2034">2034</option>
																	<option value="2035">2035</option>
																	<option value="2036">2036</option>
																</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 offset-md-1">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="cvv2-number" class="form-label">Card Security Code</label>
                                                            <input id="cvv2-number" class="form-control" type="text" name="cvv2_number">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="promotional-code" class="control-label">Promotional code</label>
                                            <input id="promotional-code" class="form-control" type="text" name="promotional_code">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                    </div>
                                </section> -->
                                <!-- <h3>Confirmation</h3> -->
                                <!-- <section>
                                    <div class="product-confarmation">
                                        <h2>Congratulations! Your Order is accepted.</h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                                            it to make a type specimen book.</p>
                                        <button class="btn btn-primary m-y">Track Order</button>
                                    </div>
                                </section> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .form-label{
                color:#fff;
            }
            h3{
                color:#fff;
            }
            .control-label{
                color:#fff;
            }
        </style>
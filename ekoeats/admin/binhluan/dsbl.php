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
<div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>DANH SÁCH SẢN PHẨM</h4>
                            <table>
                                <!-- <tr>
                                    <form role="search" action="index.php?act=dssp" method="POST" class="">
                                    <th>
										<input type="text" name="kyw" placeholder="Tìm Kiếm..." class="form-control">
									</th>
                                    <th>
                                    <select name="iddm" class="form-control">
                                        <option value="0" selected>Tất Cả</option>
                                        <?php 
                                            foreach ($listdm as $danhmuc) {
                                                extract($danhmuc);
                                                echo '<option value="'.$id.'">'.$name.'</option>';
                                            }
                                        ?>
                                    </select>
                                    </th>
                                    <th><input type="submit" name="listok" class="form-control"></th>
                                    </form>
                                </tr> -->
                                <tr>
                
                <th>ID</th>
                <th>NỘI DUNG</th>
                <th>User</th>
                <th>IDPRO</th>
                <th>NGÀY BÌNH LUẬN</th>
            </tr>
                <?php 
                    foreach ($listbl as $binhluan) {
                        extract($binhluan);
                        $xoabl="index.php?act=xoabl&id=".$id;
                        echo '<tr>
                       
                        <td>'.$id.'</td>
                        <td>'.$noidung.'</td>
                        <td>'.$iduser.'</td>
                        <td>'.$idpro.'</td>
                        <td>'.$ngaybinhluan.'</td> 
                        <td><a href="'.$xoabl.'">   <input type="button" value="Xóa"></a></td>
                    </tr>';
                    }
                
                
                ?>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
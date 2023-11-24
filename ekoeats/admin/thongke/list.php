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
                                    <h2>Quản lý danh mục</h2>
                                    <p>Welcome to eko eats <span class="bread-ntd">Admin Template</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcomb-report">
                                <button data-toggle="tooltip" data-placement="left" title="Download Report"
                                    class="btn"><i class="icon nalika-download"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="single-product-tab-area mg-b-30">
    <div class="product-status mg-b-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">

                        <h4>DANH SÁCH THỐNG KÊ</h4>
                        <h4>SẢN PHẢM THEO DANH MỤC</h4>
                        <table>
                            <tr>
                                <th>MÃ DANH MỤC</th>
                                <th>TÊN DANH MỤC</th>
                                <th>SỐ LƯỢNG</th>
                                <th>GIÁ CAO NHẤT</th>
                                <th>GIÁ THẤP NHẤT</th>
                                <th>GIÁ TRUNG BÌNH</th>
                            </tr>
                            <?php 
                    foreach ($thongkedm as $thongke) {
                        extract($thongke);
                        echo '<tr>
                        <td>'.$madm.'</td>
                        <td>'.$tendm.'</td>
                        <td>'.$demsp.'</td>
                        <td>'.$maxprice.'000</td>
                        <td>'.$minprice.'000</td>
                        <td>'.$avgprice.'000</td>
                    </tr>';
                    }
                ?>


                        </table>
                        <h4>ĐƠN HÀNG THEO NGÀY</h4>
                        <table>
                            <tr>
                                <th>NGÀY ĐẶT HÀNG</th>
                                <th>SỐ LƯỢNG ĐƠN HÀNG</th>
                                <th>GIÁ CAO NHẤT</th>
                                <th>GIÁ THẤP NHẤT</th>
                                <th>TỔNG THU</th>
                            </tr>
                            <?php 
                    foreach ($thongkedh as $thongke) {
                        extract($thongke);
                        echo '<tr>
                        <td>'.$ngay.'</td>
                        <td>'.$countbill.'</td>
                        <td>'.$maxtong.'000</td>
                        <td>'.$mintong.'000</td>
                        <td>'.$tongtien.'000</td>
                    </tr>';
                    }
                ?>
                        </table>
                        <h4>TỔNG SỐ ĐƠN HÀNG ĐÃ BÁN</h4>
                        <table>
                            <tr>
                                <th>TỔNG SỐ ĐƠN HÀNG</th>
                                <th>TỔNG THU</th>
                            </tr>
                            <?php 
                    foreach ($tongsobill as $tong) {
                        extract($tong);
                        echo '<tr>
                        <td>'.$tongsobill.'</td>
                        <td>'.$tong.'000</td>
                    </tr>';
                    }
                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
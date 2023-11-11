<body>
    <div class="container">
        <!-- Start content -->
        <div class="content">
            <section class="category">
                <div class="title">
                    <h1>DANH MỤC MÓN ĂN</h1>
                    <hr >
                </div>
                <div class="category-list">
                    <div class="category-card">
                        <img src="../asset/img/MON MOI.jpg" alt="">
                        <div class="sub"><a href="#">Món Mới<i class="fa-solid fa-angle-right"></i></a></div>
                    </div>
                    <div class="category-card">
                        <img src="../asset/img/COMBO 1 NGUOI.jpg" alt="">
                        <div class="sub"><a href="#">Combo 1 Người<i class="fa-solid fa-angle-right"></i></a></div>
                    </div>
                    <div class="category-card">
                        <img src="../asset/img/COMBO NHOM.jpg" alt="">
                        <div class="sub"><a href="#">Combo Nhóm<i class="fa-solid fa-angle-right"></i></a></div>
                    </div>
                    <div class="category-card">
                        <img src="../asset/img/GA.jpg" alt="">
                        <div class="sub"><a href="#">Gà Rán - Gà Quay<i class="fa-solid fa-angle-right"></i></a></div>
                    </div>
                    <div class="category-card">
                        <img src="../asset/img/COM.jpg" alt="">
                        <div class="sub"><a href="#">Burger - Cơm - Mì Ý <i class="fa-solid fa-angle-right"></i></a></div>
                    </div>
                    <div class="category-card">
                        <img src="../asset/img/MON AN NHE.jpg" alt="">
                        <div class="sub"><a href="#">Thức Ăn Nhẹ <i class="fa-solid fa-angle-right"></i></a></div>
                    </div>
                    <div class="category-card">
                        <img src="../asset/img/TRANG MIENG.jpg" alt="">
                        <div class="sub"><a href="#">Thức Uống & Tráng Miệng <i class="fa-solid fa-angle-right"></i></a></div>
                    </div>
                    <a href="index.php?act=listdm"><input  class="sub2" type="button" value="DANH SÁCH"></a>
                </div>
            </section>
            <section class="category">
                <div class="title">
                    <h1 style="width: 35%;">CÓ THỂ BẠN SẼ THÍCH MÓN NÀY</h1>
                    <hr style="width: 65% !important;">
                </div>
                <div class="combo-list">
                    <div class="combo-card">
                        <img src="../asset/img/D6.jpg" alt="">
                        <div class="sub-combo">
                            <div class="sub-title">Combo Nhóm 1</div>
                            <div class="price">175.000đ</div>
                        </div>
                        <div class="des">3 Miếng Gà Rán + 1 Burger Tôm + 2 Lon Pepsi</div>
                        <button><a href="#">Thêm</a></button>
                    </div>
                    <div class="combo-card">
                        <img src="../asset/img/D7-new.jpg" alt="">
                        <div class="sub-combo">
                            <div class="sub-title">Combo Nhóm 2 </div>
                            <div class="price">375.000đ</div>
                        </div>
                        <div class="des">4 Miếng Gà Giòn Cay/4 Miếng Gà Giòn Không Cay </div>
                        <button><a href="#">Thêm</a></button>
                    </div>
                    <div class="combo-card">
                        <img src="../asset/img/D8-new.jpg" alt="">
                        <div class="sub-combo">
                            <div class="sub-title">Combo Nhóm 3</div>
                            <div class="price">200.000đ</div>
                        </div>
                        <div class="des">5 Miếng Gà Giòn Cay/5 Miếng Gà Giòn Không Cay</div>
                        <button><a href="#">Thêm</a></button>
                    </div>
                </div>
            </section>
            <section class="app">
                <img src="../asset/img/banner.jpg" alt="">
                <div class="download">
                    <a class="chplay" href="#"><img src="../asset/img/boton-google.png" alt=""></a>
                    <a class="appstore" href="#"><img src="../asset/img/boton-app-store.png" alt=""></a>
                </div>
            </section>
        </div>
        <!-- End content -->

        

    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  
      </script>
</body>
<main >
        <div class="main-menu">
            <div class="content">
            <section class="delivery-address">
                    <p><span>Đặt Ngay</span> <img src="https://img.icons8.com/color/48/motorcycle.png"
                        alt="motorcycle" /></i> <span>Giao Hàng</span><img
                        src="https://img.icons8.com/color/48/food-receiver.png" alt="food-receiver" /> <span>hoặc Mang
                        đi</span>
                        <button><a href="index.php?act=">Bắt đầu đặt hàng</a></button>
                    </p>
                </section>
            <section class="banner">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide"><img src="../asset/img/buatruavuive.webp" alt=""></div>
                      <div class="swiper-slide"><img src="../asset/img/gahoangkim.webp" alt=""></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                  </div>
            </section>
                
                <div class="option-menu">
                    <ul>
                    <?php
                      foreach($listdm as $danhmuc){
                          extract($danhmuc);
                          $linkdm="index.php?act=home&iddm=".$id;
                          echo '<li><a href="'.$linkdm.'#sale">'.$name.' </a></li>';
                      }
                      ?>

                    </ul>
                </div>
            </div>
        </div>
        <!-- món ưu đãi -->
        <div id="sale" class="container ">
            <div class="menu-sale">
                <?php
            $i=0;
            foreach ($listsp as $sp){
                extract($sp);
                $hinh =  $img_path.$img;
                $linksp="index.php?act=chitietsp&idsp=".$id;
                
                if(($i==2)||($i==5)||($i==8)){
                    $mr="mr";
                }else{
                    $mr="";
                }
                echo '<div class="item-menu '.$mr.'">
                <a href="'.$linksp.'"><img width="100%" src="'.$hinh.'" alt="">
                <p>'.$name.'</p>
                <p>'.$price.'.000₫<del>60.000₫</del></p>
                <p>'.$mota.'</p></a>
                <form action="index.php?act=addtocart" method="post">
                    <input type="hidden" name="id" value="'.$id.'">
                    <input type="hidden" name="name" value="'.$name.'">
                    <input type="hidden" name="img" value="'.$img.'">
                    <input type="hidden" name="price" value="'.$price.'">
                    <input type="submit" name="addtocart" value="THÊM" >
                </form>
                </div>';

                    $i+=1;
                }
            ?>

            </div>
        </div>
        <!-- món mới
        <div id="new-menu" class="container new-menu">
            <h2>MÓN MỚI</h2>
            <div class="menu-sale">

                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/1-gahoangkim.jpg?v=L7ybXg" alt="">
                    <p>1 Gà Hoang Kim</p>
                    <p>80.000₫ <del>110.000₫</del></p>
                    <p>2 miếng gà Hoàng Kim</p>
                    <button>Thêm</button>
                </div>
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/1-gahoangkim.jpg?v=L7ybXg" alt="">
                    <p>1 Gà Hoang Kim</p>
                    <p>80.000₫ <del>110.000₫</del></p>
                    <p>2 miếng gà Hoàng Kim</p>
                    <button>Thêm</button>
                </div>
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/1-gahoangkim.jpg?v=L7ybXg" alt="">
                    <p>1 Gà Hoang Kim</p>
                    <p>80.000₫ <del>110.000₫</del></p>
                    <p>2 miếng gà Hoàng Kim</p>
                    <button>Thêm</button>
                </div>
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/1-gahoangkim.jpg?v=L7ybXg" alt="">
                    <p>1 Gà Hoang Kim</p>
                    <p>80.000₫ <del>110.000₫</del></p>
                    <p>2 miếng gà Hoàng Kim</p>
                    <button>Thêm</button>
                </div>
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/1-gahoangkim.jpg?v=L7ybXg" alt="">
                    <p>1 Gà Hoang Kim</p>
                    <p>80.000₫ <del>110.000₫</del></p>
                    <p>2 miếng gà Hoàng Kim</p>
                    <button>Thêm</button>
                </div>
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/1-gahoangkim.jpg?v=L7ybXg" alt="">
                    <p>1 Gà Hoang Kim</p>
                    <p>80.000₫ <del>110.000₫</del></p>
                    <p>2 miếng gà Hoàng Kim</p>
                    <button>Thêm</button>
                </div>
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/1-gahoangkim.jpg?v=L7ybXg" alt="">
                    <p>1 Gà Hoang Kim</p>
                    <p>80.000₫ <del>110.000₫</del></p>
                    <p>2 miếng gà Hoàng Kim</p>
                    <button>Thêm</button>
                </div>
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/1-gahoangkim.jpg?v=L7ybXg" alt="">
                    <p>1 Gà Hoang Kim</p>
                    <p>80.000₫ <del>110.000₫</del></p>
                    <p>2 miếng gà Hoàng Kim</p>
                    <button>Thêm</button>
                </div>

            </div>
        </div>
         combo 1 người 
        <div id="combo1" class="container combo-alone">
            <h2>COMBO 1 NGƯỜI</h2>
            <div class="menu-sale">

                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/D3-new.jpg?v=L7ybXg" alt="">
                    <p>Combo Trưa - Cơm Gà Rán</p>
                    <p>45.000₫ <del>60.000₫</del></p>
                    <p>1 Cơm Gà Rán + 1 Lon Mirinda cam. *Chỉ áp dụng từ 10:00 - 14:00, từ thứ Hai đến thứ Sáu trong tuần.</p>
                    <button>Thêm</button>
                </div>
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/D3-new.jpg?v=L7ybXg" alt="">
                    <p>Combo Trưa - Cơm Gà Rán</p>
                    <p>45.000₫ <del>60.000₫</del></p>
                    <p>1 Cơm Gà Rán + 1 Lon Mirinda cam. *Chỉ áp dụng từ 10:00 - 14:00, từ thứ Hai đến thứ Sáu trong tuần.</p>
                    <button>Thêm</button>
                </div>
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/D3-new.jpg?v=L7ybXg" alt="">
                    <p>Combo Trưa - Cơm Gà Rán</p>
                    <p>45.000₫ <del>60.000₫</del></p>
                    <p>1 Cơm Gà Rán + 1 Lon Mirinda cam. *Chỉ áp dụng từ 10:00 - 14:00, từ thứ Hai đến thứ Sáu trong tuần.</p>
                    <button>Thêm</button>
                </div>
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/D3-new.jpg?v=L7ybXg" alt="">
                    <p>Combo Trưa - Cơm Gà Rán</p>
                    <p>45.000₫ <del>60.000₫</del></p>
                    <p>1 Cơm Gà Rán + 1 Lon Mirinda cam. *Chỉ áp dụng từ 10:00 - 14:00, từ thứ Hai đến thứ Sáu trong tuần.</p>
                    <button>Thêm</button>
                </div>

            </div>
        </div>
         combo team 
        <div id="combo-team" class="container combo-team">
            <h2>COMBO NHÓM</h2>
            <div class="menu-sale">

                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/D7-new.jpg?v=L7ybXg" alt="">
                    <p>Combo Nhóm 1</p>
                    <p>125.000₫ <del>175.000₫</del></p>
                    <p>4 Miếng Gà Giòn Cay / 4 Miếng Gà Giòn Không Cay / 4 Miếng Gà Truyền thống + 1 Khoai tây chiên lớn / 2 Thanh Bí Phô-mai + 2 Pepsi Lon</p>
                    <button>Thêm</button>
                </div>
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/D7-new.jpg?v=L7ybXg" alt="">
                    <p>Combo Trưa - Cơm Gà Rán</p>
                    <p>125.000₫ <del>175.000₫</del></p>

                    <p>4 Miếng Gà Giòn Cay / 4 Miếng Gà Giòn Không Cay / 4 Miếng Gà Truyền thống + 1 Khoai tây chiên lớn / 2 Thanh Bí Phô-mai + 2 Pepsi Lon</p>
                    <button>Thêm</button>
                </div>
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/D7-new.jpg?v=L7ybXg" alt="">
                    <p>Combo Trưa - Cơm Gà Rán</p>
                    <p>125.000₫ <del>175.000₫</del></p>

                    <p>4 Miếng Gà Giòn Cay / 4 Miếng Gà Giòn Không Cay / 4 Miếng Gà Truyền thống + 1 Khoai tây chiên lớn / 2 Thanh Bí Phô-mai + 2 Pepsi Lon</p>
                    <button>Thêm</button>
                </div>
                

            </div>
        </div>
        combo chicken 
        <div id="chicken" class="container combo-chicken">
            <h2>GÀ RÁN -GÀ QUAY</h2>
            <div class="menu-sale">

                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/BJ.jpg?v=L7ybXg" alt="">
                    <p>Combo Nhóm 1</p>
                    <p>125.000₫ <del>175.000₫</del></p>
                    <p>4 Miếng Gà Giòn Cay / 4 Miếng Gà Giòn Không Cay / 4 Miếng Gà Truyền thống + 1 Khoai tây chiên lớn / 2 Thanh Bí Phô-mai + 2 Pepsi Lon</p>
                    <button>Thêm</button>
                </div>
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/BJ.jpg?v=L7ybXg" alt="">
                    <p>Combo Trưa - Cơm Gà Rán</p>
                    <p>125.000₫ <del>175.000₫</del></p>

                    <p>4 Miếng Gà Giòn Cay / 4 Miếng Gà Giòn Không Cay / 4 Miếng Gà Truyền thống + 1 Khoai tây chiên lớn / 2 Thanh Bí Phô-mai + 2 Pepsi Lon</p>
                    <button>Thêm</button>
                </div>
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/BJ.jpg?v=L7ybXg" alt="">
                    <p>Combo Trưa - Cơm Gà Rán</p>
                    <p>125.000₫ <del>175.000₫</del></p>

                    <p>4 Miếng Gà Giòn Cay / 4 Miếng Gà Giòn Không Cay / 4 Miếng Gà Truyền thống + 1 Khoai tây chiên lớn / 2 Thanh Bí Phô-mai + 2 Pepsi Lon</p>
                    <button>Thêm</button>
                </div>
                
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/BJ.jpg?v=L7ybXg" alt="">
                    <p>Combo Nhóm 1</p>
                    <p>125.000₫ <del>175.000₫</del></p>
                    <p>4 Miếng Gà Giòn Cay / 4 Miếng Gà Giòn Không Cay / 4 Miếng Gà Truyền thống + 1 Khoai tây chiên lớn / 2 Thanh Bí Phô-mai + 2 Pepsi Lon</p>
                    <button>Thêm</button>
                </div>
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/BJ.jpg?v=L7ybXg" alt="">
                    <p>Combo Trưa - Cơm Gà Rán</p>
                    <p>125.000₫ <del>175.000₫</del></p>

                    <p>4 Miếng Gà Giòn Cay / 4 Miếng Gà Giòn Không Cay / 4 Miếng Gà Truyền thống + 1 Khoai tây chiên lớn / 2 Thanh Bí Phô-mai + 2 Pepsi Lon</p>
                    <button>Thêm</button>
                </div>
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/BJ.jpg?v=L7ybXg" alt="">
                    <p>Combo Trưa - Cơm Gà Rán</p>
                    <p>125.000₫ <del>175.000₫</del></p>

                    <p>4 Miếng Gà Giòn Cay / 4 Miếng Gà Giòn Không Cay / 4 Miếng Gà Truyền thống + 1 Khoai tây chiên lớn / 2 Thanh Bí Phô-mai + 2 Pepsi Lon</p>
                    <button>Thêm</button>
                </div>
                

            </div>
        </div>
         combo burger 

        <div id="burger" class="container combo-chicken">
            <h2>BURGER -CƠM - MÌ Ý</h2>
            <div class="menu-sale">

                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/Burger-Zinger.jpg?v=L7ybXg" alt="">
                    <p>Burger Gà Quay</p>
                    <p>125.000₫ <del>175.000₫</del></p>
                    <p>4 Miếng Gà Giòn Cay / 4 Miếng Gà Giòn Không Cay / 4 Miếng Gà Truyền thống + 1 Khoai tây chiên lớn / 2 Thanh Bí Phô-mai + 2 Pepsi Lon</p>
                    <button>Thêm</button>
                </div>
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/Burger-Zinger.jpg?v=L7ybXg" alt="">
                    <p>Burger Gà Quay</p>
                    <p>125.000₫ <del>175.000₫</del></p>

                    <p>4 Miếng Gà Giòn Cay / 4 Miếng Gà Giòn Không Cay / 4 Miếng Gà Truyền thống + 1 Khoai tây chiên lớn / 2 Thanh Bí Phô-mai + 2 Pepsi Lon</p>
                    <button>Thêm</button>
                </div>
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/Burger-Zinger.jpg?v=L7ybXg" alt="">
                    <p>Burger Gà Quay</p>
                    <p>125.000₫ <del>175.000₫</del></p>

                    <p>4 Miếng Gà Giòn Cay / 4 Miếng Gà Giòn Không Cay / 4 Miếng Gà Truyền thống + 1 Khoai tây chiên lớn / 2 Thanh Bí Phô-mai + 2 Pepsi Lon</p>
                    <button>Thêm</button>
                </div>
                
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/Burger-Zinger.jpg?v=L7ybXg" alt="">
                    <p>Burger Gà Quay</p>
                    <p>125.000₫ <del>175.000₫</del></p>
                    <p>4 Miếng Gà Giòn Cay / 4 Miếng Gà Giòn Không Cay / 4 Miếng Gà Truyền thống + 1 Khoai tây chiên lớn / 2 Thanh Bí Phô-mai + 2 Pepsi Lon</p>
                    <button>Thêm</button>
                </div>
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/Burger-Zinger.jpg?v=L7ybXg" alt="">
                    <p>Burger Gà Quay</p>
                    <p>125.000₫ <del>175.000₫</del></p>

                    <p>4 Miếng Gà Giòn Cay / 4 Miếng Gà Giòn Không Cay / 4 Miếng Gà Truyền thống + 1 Khoai tây chiên lớn / 2 Thanh Bí Phô-mai + 2 Pepsi Lon</p>
                    <button>Thêm</button>
                </div>
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/Burger-Zinger.jpg?v=L7ybXg" alt="">
                    <p>Burger Gà Quay</p>
                    <p>125.000₫ <del>175.000₫</del></p>

                    <p>4 Miếng Gà Giòn Cay / 4 Miếng Gà Giòn Không Cay / 4 Miếng Gà Truyền thống + 1 Khoai tây chiên lớn / 2 Thanh Bí Phô-mai + 2 Pepsi Lon</p>
                    <button>Thêm</button>
                </div>
                

            </div>
        </div>
         thức uống  
        <div id="drink" class="container combo-drink">
            <h2>BURGER -CƠM - MÌ Ý</h2>
            <div class="menu-sale">

                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/milo-box-hd.jpg?v=L7ybXg" alt="">
                    <p>Milo Hộp</p>
                    <p>11.000₫ <del>20.000₫</del></p>
                    <p>330ml</p>
                    <button>Thêm</button>
                </div>
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/7Up-Can.jpg?v=L7ybXg" alt="">
                    <p>7 Up</p>
                    <p>11.000₫ <del>20.000₫</del></p>
                    <p>550ml</p>
                    <button>Thêm</button>
                </div>
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/4-eggtart.jpg?v=L7ybXg" alt="">
                    <p>Bánh Trứng</p>
                    <p>125.000₫ <del>175.000₫</del></p>

                    <p>4  Bánh trứng</p>
                    <button>Thêm</button>
                </div>
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/4-eggtart.jpg?v=L7ybXg" alt="">
                    <p>Bánh Trứng</p>
                    <p>125.000₫ <del>175.000₫</del></p>

                    <p>4  Bánh trứng</p>
                    <button>Thêm</button>
                </div>
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/4-eggtart.jpg?v=L7ybXg" alt="">
                    <p>Bánh Trứng</p>
                    <p>125.000₫ <del>175.000₫</del></p>

                    <p>4  Bánh trứng</p>
                    <button>Thêm</button>
                </div>
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/4-eggtart.jpg?v=L7ybXg" alt="">
                    <p>Bánh Trứng</p>
                    <p>125.000₫ <del>175.000₫</del></p>

                    <p>4  Bánh trứng</p>
                    <button>Thêm</button>
                </div>
                <div class="item-menu">
                    <img width="100%" src="https://static.kfcvietnam.com.vn/images/items/lg/4-eggtart.jpg?v=L7ybXg" alt="">
                    <p>Bánh Trứng</p>
                    <p>125.000₫ <del>175.000₫</del></p>

                    <p>4  Bánh trứng</p>
                    <button>Thêm</button>
                </div>
              
                

            </div>  
        </div> -->
    </main>
    <!-- end main -->
    <style>
        .item-menu input{
  width: 80%;
  padding: 15px;
  margin: 30px 0 20px;
  border: none;
  background-color: #a73a3a;
  color: #fff;
  border-radius: 20px;
  box-shadow: 0 2px 5px  rgb(88, 88, 88);
}
    </style>
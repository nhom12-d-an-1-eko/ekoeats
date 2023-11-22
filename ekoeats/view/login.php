<div class="container login">
            <div class="form-login">
                <img width="100%" src="https://static.kfcvietnam.com.vn/images/web/signin/lg/signin.jpg?v=L7ybXg" alt="">
                <div class="form-submit" >
                        <?php
                            if (isset($_SESSION['email'])) {
                                extract($_SESSION['email']);
                        ?>
                        <div class="header-right">
                            <ul>
                            <li><i class="fa-solid fa-user icon fa-lg"></i>Xin chào,<?=$user?></li>
                                <li><a href="index.php?act=addtocart"><i class="fa-solid fa-cart-shopping fa-lg"></i></a></li>
                                <li class="active"> 
                                <a href="index.php?act=info" title=""><h5>Thông tin tài khoản</h5></a>
                            </li>
                            <li>
                                <a href="index.php?act=dangxuat"><img src="../upload/icon-logout.svg" alt="" style="color: #000;"><h6> Đăng xuất</h6></a>
                            </li>
                            </ul>
                        </div> 
                            <?php
                            }else{
                        ?>
                <form action="index.php?act=login" method="post">
                    <h2>ĐĂNG NHẬP</h2>
                    <input type="email" name="email" placeholder="Địa chỉ email của bạn *">
                    <input type="password" name="pass" placeholder="Mật khẩu *">
                    <p><a href="#">Bạn quên mật khẩu ?</a></p>
                    <button type="submit" name="dangnhap" value="Đăng nhập">Đăng nhập</button>
                    <p>Hoặc tiếp tục với </p>
                    <button><i class='bx bxl-facebook-circle'></i> FaceBook</button>
                    <button><i class='bx bxl-apple'></i> Apple</button>
                    <button><i class='bx bxl-google'></i> Google</button>
                    <p>Bạn chưa có tài khoản ? <a href="index.php?act=dangky"> Đăng ký</a></p>
                </div>
                </form>
            </div>
    </div>
    <?php }?>
<style>
    .thongbao{
        color: red;
    }
</style>
<div class="container login">
            <div class="form-login">
                <img width="100%" src="https://static.kfcvietnam.com.vn/images/web/signin/lg/signin.jpg?v=L7ybXg" alt="">
                <div class="form-submit">
                    <form action="index.php?act=dangky" method="post">
                    <h2>TẠO TÀI KHOẢN</h2>
                    <input type="text" name="ho" placeholder="Họ của bạn *"required minlength="3" maxlength="100">
                    <input type="text" name="user" placeholder="Tên của bạn *"required minlength="3" maxlength="100">
                    <input type="number" name="sdt" placeholder="Số điện thoại *"required pattern="[0-9]{3}[0-9]{3}[0-9]{4}">
                    <input type="email" name="email" placeholder="Địa chỉ email của bạn *"pattern="/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/"
    required>
                    <input type="password" name="pass" placeholder="Mật khẩu *">
                    <button type="submit" name="dangky" value="Tạo tài khoản">Tạo tài khoản</button>
                    <p>Bạn đã có tài khoản ? <a href="index.php?act=login"> Đăng nhập</a></p>
                    <h2 class="thongbao">
                <?php 
                    if (isset($thongbao)&&($thongbao!="")) {
                        echo $thongbao;
                    }
                ?>
                </h2>
                </div>
                
                </form>
                
            </div>
    </div>
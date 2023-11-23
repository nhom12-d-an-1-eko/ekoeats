<style>
    .thongbao{
        color: red;
    }
</style>
<div class="container login">
            <div class="form-login">
                <img width="100%" src="https://static.kfcvietnam.com.vn/images/web/signin/lg/signin.jpg?v=L7ybXg" alt="">
                <div class="form-submit">
                    <form action="index.php?act=quenmk" method="post">
                    <h2>QUÊN MẬT KHOẢN</h2>
                    
                    <input type="email" name="email" placeholder="Địa chỉ email của bạn *">
                    
                    <button type="submit" name="guiemail" value="Gửi" style=" background-color: #3b5998;">Gửi</button>
                    <p>Bạn đã có tài khoản ? <a href="index.php?act=login"> Đăng nhập</a></p>
                    <h2 class="thongbao" style="font-size:25px">
                <?php 
                    if (isset($sendMailMess)&&($sendMailMess!="")) {
                        echo $sendMailMess;
                    }
                ?>
                </h2>
                </div>
                
                </form>
                
            </div>
    </div>
    
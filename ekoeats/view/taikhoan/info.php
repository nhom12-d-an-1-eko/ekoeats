<style>
    .thongbao{
            color: red;
    }
</style>

            <?php 
                if (isset($_SESSION['email'])&&(is_array($_SESSION['email']))) {
                    extract($_SESSION['email']);}
            ?>


<div class="container login">
            <div class="form-login">
                <img width="100%" src="https://static.kfcvietnam.com.vn/images/web/signin/lg/signin.jpg?v=L7ybXg" alt="">

                <div class="form-submit" >      
                    <form method="post" action="index.php?act=info">
                    <h2>THÔNG TIN TÀI KHOẢN</h2>
                                <label for="">Tên đăng nhập</label>
                                <input type="text"  name="user" value="<?=$user?>" >    
                                    <label>Số điện thoại</label>                                 
                                    <input type="text" name="tel" value="<?=$tel?>" required pattern="[0-9]{3}[0-9]{3}[0-9]{4}">
                                    
                                    <label for="r_tel" class="col-md-3 col-form-label">Địa chỉ</label>
                                    <input type="text" name="address" value="<?=$address?>" required minlength="3" maxlength="100">
                                    
                                    <label >Email</label>
                                    <input type="email" name="email" value="<?=$email?>" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$"  >
                                    
                                <br>
                                <input type="hidden" name="id" value="<?=$id?>">
                                <input class="btn btn-primary" type="submit"  value="Cập nhật" name="capnhat">
                </div>
                
                </form>
                
            </div>
</div>
    
 
            </div>
        </main>
    </div>

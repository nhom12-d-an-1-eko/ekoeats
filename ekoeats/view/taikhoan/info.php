<div class="wrapper">
        <main class="main">
            <div class="container">
            <?php 
                                    if (isset($_SESSION['user'])&&(is_array($_SESSION['user']))) {
                                        extract($_SESSION['user']);
                                    }
                                ?>
                <div class="my-account">
                    <div class="account-left" style="display: none;">
                      <div class="b-avatar">
                        <div class="f-full name" name="user" value="<?=$user?>"></div>
                      </div>
                    </div>
                    
                </div>

                <div class="account-right d-block" >
                    <button class="f-back"></button>
                    <h2 class="head-title">Thông tin tài khoản</h2>
                    <form method="post" action="index.php?act=info">
                    <div class="account-content">
                        <div class="acc-info-from">
                                <h5>THÔNG TIN CÁ NHÂN</h5>
                                <div class="form-group row">
                                
                                    <label for="r_name" class="col-md-3 col-form-label">Tên đăng nhập</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="user" value="<?=$user?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="r_tel" class="col-md-3 col-form-label">Số điện thoại</label>
                                    <div class="col-md-7">
                                        <input type="text"class="form-control" name="tel" value="<?=$tel?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="r_tel" class="col-md-3 col-form-label">Địa chỉ</label>
                                    <div class="col-md-7">
                                        <input type="text"class="form-control" name="address" value="<?=$address?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="r_email" class="col-md-3 col-form-label">Email</label>
                                    <div class="col-md-7">
                                        <input type="email" name="email" value="<?=$email?>" class="form-control"  >
                                    </div>
                                </div>
                                <br>
                                <h5>THAY ĐỔI MẬT KHẨU</h5>
                                <div class="form-group row">
                                    <label for="r_old_password" class="col-md-3 col-form-label">Mật khẩu cũ</label>
                                    <div class="col-m-7">
                                        <input type="password" class="form-control" name="pass" value="<?=$pass?>">
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="r_confirm_password" class="col-md-3 col-form-label">Nhập lại mật khẩu</label>
                                    <div class="col-md-7">
                                        <input type="password" name="confirmPassword" id="r_confirm_password" placeholder="Nhập lại mật khẩu" class="form-control" autocomplete="off">
                                        <p class="invalid" style="color: #ff5b6a;">Không được để trống</p>
                                    </div>
                                </div>
                                <div class="form-action">
                                <input type="hidden" name="id" value="<?=$id?>">
                                    <input type="button" class="btn btn-primary" type="submit" value="Cập nhật" name="capnhat">
                                    </input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <style>
    .container{
        height: 100%;
        }
    .my-account .b-menu ul h5 {
    font-size: x-large;
        display: block;
    color: #0d0b0b;
    position: relative;
    padding: 15px 10px 15px 50px;}
    
    .my-account .b-menu ul h6 {
    font-size: x-large;
        display: block;
    color: #0d0b0b;
    position: relative;
    padding: 15px 10px 15px 50px;}
    
    .main{
        padding-left: 150px;
        padding-top: 50px;
        line-height: 30px;
    }
    .container{
        width: 500px;
        height:800px;
    }
    .my-account .b-menu ul a {
    display: block;
    color: #fff;
    position: relative;
    padding: 15px 10px 15px 50px;
}.my-account .b-menu ul li {
    margin-bottom: 1px;
}.my-account .b-menu ul {
    list-style: none;
    margin-bottom: 0;
}.my-account .account-left {
    -webkit-border-radius: 15px 0 0 15px;
    -moz-border-radius: 15px 0 0 15px;
    border-radius: 15px 0 0 15px;
    background: #ff5b6a;
    flex: 1 255px;
    max-width: 255px;
}.my-account .account-right {
    flex: 1;
    min-width: 0;
    position: relative;
}

.d-block {
    display: block !important;
}.my-account .account-right .f-back {
    border: none;
    background: 0 0;
    display: none;
    width: 30px;
    height: 48px;
    position: absolute;
    left: 0;
    top: -15px;
    z-index: 1;
}

[type='button']:not(:disabled), [type='reset']:not(:disabled), [type='submit']:not(:disabled), button:not(:disabled) {
    cursor: pointer;
}.my-account .account-right .head-title {
    border-bottom: 1px solid #FF9EA2;
    font-size: 24px;
    font-weight: 700;
    padding: 24px 30px;
    position: relative;
    margin-bottom: 0;
    text-align: center;
    text-transform: uppercase;
}.my-account .account-left {
-webkit-border-radius: 15px 0 0 15px;
    -moz-border-radius: 15px 0 0 15px;
    border-radius: 15px 0 0 15px;
    background: #ff5b6a;
    flex: 1 255px;
    max-width: 255px;
}.my-account .account-content {
    padding: 32px 24px 40px;
}.acc-info-form h5 {
    font-weight: 700;
    font-size: 16px;
    text-transform: uppercase;
    margin-bottom: 20px;
}.form-group {
    margin-bottom: 1rem;
}
.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}.form-group label {
    font-weight: 500;
    display: block;
}

.col-form-label {
    padding-top: calc(0.375rem + 1px);
    padding-bottom: calc(0.375rem + 1px);
    margin-bottom: 0;
    font-size: inherit;
    line-height: 1.5;
}
@media (min-width: 768px){}
.col-md-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
}@media (min-width: 768px){}
.col-md-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
}.form-control:disabled, .form-control[readonly] {
    background: rgba(255,91,106,.1);
}

.form-control:disabled, .form-control[readonly] {
    background-color: #e9ecef;
    opacity: 1;
}
.form-group {
    margin-bottom: 1rem;
}

.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    padding-left: 50px;
}.form-group {
    margin-bottom: 1rem;
}

.form-group label {
    font-weight: 500;
    display: block;
}

.col-form-label {
    padding-top: calc(0.375rem + 1px);
    padding-bottom: calc(0.375rem + 1px);
    margin-bottom: 0;
    font-size: inherit;
    line-height: 1.5;
}
@media (min-width: 768px){}
.col-md-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
}@media (min-width: 768px){}
.col-md-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
}.react-datepicker-wrapper {
    display: inline-block;
    padding: 0;
    border: 0;
    width: 100%;
}
input{
    width: 300px;
}
.form-control:disabled, .form-control[readonly] {
    background: rgba(255,91,106,.1);
}.acc-info-form h5 {
    font-weight: 700;
    font-size: 16px;
    text-transform: uppercase;
    margin-bottom: 20px;
}.form-group {
    margin-bottom: 1rem;
}
.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.form-group label {
    font-weight: 500;
    display: block;
}
.col-form-label {
    padding-top: calc(0.375rem + 1px);
    padding-bottom: calc(0.375rem + 1px);
    margin-bottom: 0;
    font-size: inherit;
    line-height: 1.5;
}.form-control {
    font-size: 16px;
    border-color: #ff5b6a;
    height: auto;
    padding: 7px 10px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}.acc-info-form .form-action {
    padding-top: 20px;
}.acc-info-form .form-action .btn {
    margin-right: 10px;
min-width: 160px;
}
[type='button']:not(:disabled), [type='reset']:not(:disabled), [type='submit']:not(:disabled), button:not(:disabled) {
    cursor: pointer;
}
.btn-primary, .btn-primary:focus, .btn-primary:hover {
    background-color: #ff5b6a;
    border-color: #ff5b6a;
}
.btn {
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    font-size: 16px;
    padding-top: 7px;
    padding-bottom: 7px;
    font-weight: 500;
}
.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}

.react-datepicker-wrapper {
    display: block!important;
    position: relative;
}.form-group {
    margin-bottom: 1rem;
}

.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}.form-group label {
    font-weight: 500;
    display: block;
}
.col-form-label {
    padding-top: calc(0.375rem + 1px);
    padding-bottom: calc(0.375rem + 1px);
    margin-bottom: 0;
    font-size: inherit;
    line-height: 1.5;
}
.form-control {
    font-size: 16px;
    border-color: #ff5b6a;
    height: auto;
    padding: 7px 10px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}
    @import url(https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap&subset=vietnamese);.clearfix {
    display: block;
    zoom:1}



.button-border:focus,.button-border:hover {
    background-color: #333;
    color: #fff
}

.button-bg {
    display: inline-block;
    border: 2px solid #333;
    background-color: #333;
    color: #fff;
    font-weight: 700;
    font-size: 16px;
    padding: 12px 45px;
    line-height: 100%;
    text-transform: uppercase;
    position: relative
}

.button-bg:visited {
    color: #fff
}

.button-bg:focus,.button-bg:hover {
    background: 0 0;
    color: #333
}

.button-bg.btn-small,.button-border.btn-small {
    font-size: 13px;
    text-transform: none;
    font-weight: 400;
    border-width: 1px;
    padding: 5px 10px
}

.button-bg.disabled,.button-border.disabled {
    background: #d6d6d6;
    color: #fff;
    border-color: #d6d6d6;
    cursor: default
}

* {
    margin: 0;
    padding: 0;
    outline: 0
}

html {
    -webkit-font-smoothing: antialiased;
    -webkit-text-size-adjust: 100%
}

body {
    font-family: Roboto,Arial,sans-serif;
    color: #142f43;
    font-size: 16px;
    line-height: 1.4;
    background-color: #FFFCFE
}

a {
    color: #ff5b6a;
    text-decoration: none
}

a:focus,a:hover {
    color: #ff5b6a;
    outline: 0;
    text-decoration: none
}

h1,h2,h3,h4,h5,h6 {
    margin-bottom: 15px
}

img {
    max-width: 100%;
    height: auto
}

p {
    margin-bottom: 15px
}

iframe {
    max-width: 100%;
    border: none
}

button:focus,button:hover {
    outline: 0
}

input[type=number],input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button {
    -moz-appearance: textfield;
-webkit-appearance: textfield;
    appearance: textfield
}

input[type=email]::-webkit-input-placeholder,input[type=number]::-webkit-input-placeholder,input[type=text]::-webkit-input-placeholder,input[type=password]::-webkit-input-placeholder,input[type=url]::-webkit-input-placeholder,input[type=url_key]::-webkit-input-placeholder,input[type=tel]::-webkit-input-placeholder,input[type=search]::-webkit-input-placeholder,input[type=datetime]::-webkit-input-placeholder,select::-webkit-input-placeholder,textarea::-webkit-input-placeholder {
    color: #777
}

input[type=email]:-moz-placeholder,input[type=number]:-moz-placeholder,input[type=text]:-moz-placeholder,input[type=password]:-moz-placeholder,input[type=url]:-moz-placeholder,input[type=url_key]:-moz-placeholder,input[type=tel]:-moz-placeholder,input[type=search]:-moz-placeholder,input[type=datetime]:-moz-placeholder,select:-moz-placeholder,textarea:-moz-placeholder {
    color: #777;
    opacity: 1
}

input[type=email]::-moz-placeholder,input[type=number]::-moz-placeholder,input[type=text]::-moz-placeholder,input[type=password]::-moz-placeholder,input[type=url]::-moz-placeholder,input[type=url_key]::-moz-placeholder,input[type=tel]::-moz-placeholder,input[type=search]::-moz-placeholder,input[type=datetime]::-moz-placeholder,select::-moz-placeholder,textarea::-moz-placeholder {
    color: #777;
    opacity: 1
}

input[type=email]:-ms-input-placeholder,input[type=number]:-ms-input-placeholder,input[type=text]:-ms-input-placeholder,input[type=password]:-ms-input-placeholder,input[type=url]:-ms-input-placeholder,input[type=url_key]:-ms-input-placeholder,input[type=tel]:-ms-input-placeholder,input[type=search]:-ms-input-placeholder,input[type=datetime]:-ms-input-placeholder,select:-ms-input-placeholder,textarea:-ms-input-placeholder {
    color: #777
}

input[type=email]::placeholder,input[type=number]::placeholder,input[type=text]::placeholder,input[type=password]::placeholder,input[type=url]::placeholder,input[type=url_key]::placeholder,input[type=tel]::placeholder,input[type=search]::placeholder,input[type=datetime]::placeholder,select::placeholder,textarea::placeholder {
    color: #777
}

.btn-primary.disabled,.btn-primary:disabled {
    background-color: #3c3c3c;
    border-color: #3c3c3c;
    cursor: default
}

.btn-primary.disabled:focus,.btn-primary.disabled:hover,.btn-primary:disabled:focus,.btn-primary:disabled:hover {
    background-color: #3c3c3c;
    border-color: #3c3c3c
}

.btn-mw {
    min-width: 160px
}

.form-control.is-invalid,.was-validated .form-control:invalid {
    background: 0 0
}

.form-group label {
    font-weight: 500;
    display: block
}

.form-control {
    font-size: 16px;
    border-color: #ff5b6a;
    height: auto;
    padding: 7px 10px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px
}

.form-control:focus,.form-control:hover {
    outline: 0;
    box-shadow: none;
    border-color: #ff5b6a
}
.form-control::-webkit-input-placeholder {
    color: #c4c4c4
}

.form-control:-moz-placeholder {
    color: #c4c4c4;
    opacity: 1
}

.form-control::-moz-placeholder {
    color: #c4c4c4;
    opacity: 1
}

.form-control:-ms-input-placeholder {
    color: #c4c4c4
}

.form-control::placeholder {
    color: #c4c4c4
}

.form-control.icon-calendar {
    background-image: url(../images/icon-calendar.svg);
    background-color: #fff;
    background-size: 20px auto;
    background-position: 97% 50%;
    background-repeat: no-repeat;
    padding-right: 35px
}

.form-control.icon-address {
    background: url(../images/icon-pos-5.svg) 7px 50% no-repeat #fff;
    padding-left: 35px
}

.form-control:disabled,.form-control[readonly] {
    background: rgba(255,91,106,.1)
}

button:disabled,button[readonly] {
    background: #FF9EA2!important;
    pointer-events: none;
    border-color: #FF9EA2!important;
    color: #fff!important
}

button:disabled.btn-outline-primary,button[readonly].btn-outline-primary {
    border-color: #ff5b6a!important;
    color: #ff5b6a!important;
    background-color: #fff!important
}

.custom-control-input:focus~.custom-control-label::before {
    box-shadow: none
}

label {
    margin-bottom: 5px
}

select {
    background: url(../images/arr-down.svg) right 0 no-repeat;
    appearance: none;
    -webkit-appearance: none;
    position: relative
}

select::before {
    background-color: red;
    border-left: 2px solid #000;
    border-bottom: 2px solid #000;
    content: '';
    display: block;
    width: 8px;
    height: 8px;
    position: absolute;
    right: 0;
    top: 5px;
    z-index: 1
}

select [disabled] {
    color: #c4c4c4
}

.custom-control-label::before {
    width: 18px;
    height: 18px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    border-color: #ff5b6a;
    background-color: #ff5b6a;
    left: -30px
}

.custom-control-input:not(:disabled):active~.custom-control-label::before {
    border-color: #ff5b6a;
    background-color: #ff5b6a
}

.custom-control-input:checked~.custom-control-label::before {
    border-color: #ff5b6a;
    background-color: #ff5b6a
}

.custom-control {
    padding-left: 30px
}

.my-account {
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    border-radius: 15px;
    background-color: #fff;
    box-shadow: 0 1px 4px rgba(0,0,0,.25);
    display: flex
}

@media (max-width: 991.96px) {
    .my-account {
        display:block;
        background: 0 0;
        box-shadow: none;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0
    }
}

.my-account .account-left {
    -webkit-border-radius: 15px 0 0 15px;
    -moz-border-radius: 15px 0 0 15px;
    border-radius: 15px 0 0 15px;
    background: #ff5b6a;
    flex: 1 255px;
    max-width: 255px
}

@media (max-width: 991.96px) {
    .my-account .account-left {
        display:none
    }
}

.my-account .account-right {
    flex: 1;
    min-width: 0;
position: relative
}

.my-account .account-right .f-back {
    border: none;
    background: 0 0;
    display: none;
    width: 30px;
    height: 48px;
    position: absolute;
    left: 0;
    top: -15px;
    z-index: 1
}

@media (max-width: 991.96px) {
    .my-account .account-right .f-back {
        display:block
    }
}

.my-account .account-right .f-back::before {
    border-left: 2px solid #ff5b6a;
    border-bottom: 2px solid #ff5b6a;
    content: '';
    display: block;
    width: 14px;
    height: 14px;
    position: absolute;
    left: 13px;
    top: 50%;
    margin-top: -5px;
    transform: rotate(45deg)
}

.my-account .account-right .head-title {
    border-bottom: 1px solid #FF9EA2;
    font-size: 24px;
    font-weight: 700;
    padding: 24px 30px;
    position: relative;
    margin-bottom: 0;
    text-align: center;
    text-transform: uppercase
}

@media (max-width: 991.96px) {
    .my-account .account-right .head-title {
        font-size:18px;
        padding-top: 0
    }
}

.my-account .account-content {
    padding: 32px 24px 40px
}

@media (max-width: 991.96px) {
    .my-account .account-content {
        padding:30px 0 0
    }
}

.my-account .b-avatar {
    font-weight: 700;
    padding: 32px 15px 24px;
    text-align: center;
    text-transform: uppercase
}

.my-account .b-avatar .f-name {
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    background-color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 136px;
    height: 136px;
    margin: 0 auto 16px;
    font-size: 50px
}

.my-account .b-avatar .f-fullname {
    color: #fff
}

.my-account .b-avatar .f-point {
    margin-top: 7px;
    color: #fff
}

.my-account .b-avatar .f-point span {
    display: inline-block;
    text-transform: none;
    font-weight: 400;
    background: url(../images/icon-point.svg) no-repeat;
    padding: 0 0 0 30px
}

.my-account .b-menu ul {
    list-style: none;
    margin-bottom: 0
}

.my-account .b-menu ul li {
    margin-bottom: 1px
}

.my-account .b-menu ul li.active a {
    background-color: rgba(255,255,255,.2);
    font-weight: 700
}

.my-account .b-menu ul a {
    display: block;
    color: #fff;
    position: relative;
    padding: 15px 10px 15px 50px
}

.my-account .b-menu ul a img {
    width: 21px;
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translate(0,-50%)
}

.my-account .b-menu ul a:hover {
    background-color: rgba(255,255,255,.2)
}

.my-account.menu-only {
    margin: -40px -15px;
    box-shadow: none
}

.my-account.menu-only .account-left {
    border-radius: 0;
    flex: 1 100%;
    max-width: 100%;
    padding-bottom: 30px
}

.my-account.menu-only .account-right {
    display: none
}

.account-content .g-infomation .item {
    display: flex;
    margin-bottom: 20px;
    word-break: break-word
}

.account-content .g-infomation label {
    font-weight: 700;
    flex: 1 102px;
    max-width: 102px;
    margin-right: 10px;
margin-bottom: 0
}

</style>
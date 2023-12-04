<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EKO EATS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="icon" href="../asset/img/logo.png">
    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="../bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../app.css" type="text/css">
    <!--  -->
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="../asset/css/login.css">
 
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        
.main-menu{
    margin-top: 100px;
}
.option-menu ul{
    display: flex;
    justify-content: space-between;
    padding: 15px;
    border-bottom: 1px solid #d8d6d6;
    margin-bottom: 30px;
}


.container{
    width: 1200px;
}
.menu-sale{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    column-gap: 30px;
    row-gap: 40px;
    margin-top: 30px;
}
.new-menu,.combo-alone,.combo-chicken ,.combo-team,.combo-drink {
    margin-top: 50px;
}
.combo-drink{
    margin-bottom: 100px;
}
.item-menu{
    padding: 10px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgb(170, 170, 170);
    text-align: center;
    overflow: hidden;
}
.item-menu img{
    transition: .2s linear;
    width: 100%;
}
.item-menu:hover img{
    transform: scale(1.1);
    transition: .2s linear;
}
.item-menu :nth-child(2){
    color: #000;
    font-weight: bold;
    margin-top: 20px;
}
.item-menu :nth-child(3){
    font-weight: bold;
}
.item-menu :nth-child(3) del{
    color: #969696;
    margin:0 15px ;
}
.item-menu :nth-child(4){
    margin-top: 10px;
    font-size: 13px;
}
.item-menu button{
    width: 80%;
    padding: 15px;
    margin: 30px 0 20px;
    border: none;
    background-color: #cccccc;
    color: #fff;
    border-radius: 20px;
    box-shadow: 0 2px 5px  rgb(88, 88, 88);
}
    </style>
    <title>Document</title>
</head>
<body>
    <!-- Start header -->
    <div class="header">
        <div class="header-left">
            <ul>
                <li><a href="index.php">
                        <img width="100%"
                            src="../asset/img/logo.png" alt="">
                    </a>
                </li>
                <li><a href="index.php?act=home">THỰC ĐƠN</a></li>
                <li><a href="index.php?act=about">VỀ CHÚNG TÔI</a></li>
                <li><a href="index.php?act=contact">LIÊN HỆ CHÚNG TÔI</a></li>
            </ul>
        </div>
        <div class="header-right">
            <ul>
            <?php 
            if (isset($_SESSION['email'])) {
                extract($_SESSION['email']);
        ?>
            <li class="user"><?=$user?></li>   
            <li class="form_li"><a href="index.php?act=info">Thông tin tài khoản</a></li>
            <?php if($role==2) { ?>
            <li class="form_li"><a href="../admin/index.php">Đăng nhập Admin</a></li>
            <?php } ?>
            <li class="form_li"><a href="index.php?act=mybill">Đơn hàng của tôi</a></li>
            <li class="form_li"><a href="index.php?act=dangxuat">Thoát</a></li>
            <li><a href="index.php?act=addtocart"><i class="fa-solid fa-cart-shopping fa-lg"></i></a></li>
            <br>    
        <?php }else { ?>
                <li><a href="index.php?act=login"><i class="fa-solid fa-user icon fa-lg"></i></a></li>
                
            <?php } ?>
            </ul>
        </div>
    </div>
    <!-- End header -->

    <style>
        .user{
            font-weight: 300;
            font-size: 25px;
        }
    </style>
<?php
extract($onesp);
?>
<div class="wrapper">
    <form action="">
        <main class="container">
            <div class="product-catagory-detail">
                <div class="title">
                    <h4>Chi tiết sản phẩm</h4>
                </div>
                <div class="field-back">
                    <a href="index.php?act=home">
                        <button type="button" title="Quay lại">← <b>Quay lại</b></button>
                    </a>
                </div>
            </div>
            <div class="fied-img">
                <div class="item">
                    <img src="../upload/<?= $img ?>" alt="">
                </div>
                <div class="content">
                    <div class="fied-content">
                        <h3><?= $name ?></h3>
                        <div class="fied-price"><?= $price ?>.000đ <del> 150.000đ</del></div>
                    </div>
                    <div class="fied-note">
                        <span class="fied-text">
                            <p>2 miếng gà Hoàng Kim</p>
                        </span>
                    </div>

                    <div class="options-product">
                        <div class="headline">
                            <h4>Có thể bạn sẽ thích</h4>
                        </div>
                        <ul class="list-options add-opts">
                            <li>
                                <div class="product-name">
                                    <img src="../upload/2-Cajun.jpg" alt="">
                                    <span class="txt">Gà Que Kem Xốt Cajun</span>
                                </div>
                                <div class="r-info">
                                    <div class="inner">
                                        <span class="price">
                                            +43.000đ
                                        </span>

                                        <button class="btn-minute" type="button" onclick="giam()">-</button>
                                        <input type="text" name="amount" id="amount" value="1">
                                        <button class="btn-plus" type="button" onclick="tang()">+</button>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="nav-bottom">
                        <div class="inner">
                            <div class="pty">
                                <span class="lbl">Số lượng</span>
                            </div>

                            <button class="btn-minute" type="button" onclick="giam()">-</button>
                            <input type="text" name="amount" id="amount" value="1">
                            <button class="btn-plus" type="button" onclick="tang()">+</button>
                            <div class="btn-cart">
                                <button type="button" title="Thêm vào giỏ hàng">Thêm
                                    vào giỏ hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </form>
</div>
<style>
    .wrapper {
        width: 60%;
        height: 900px;
        line-height: 30px;
        padding-top: 150px;
    }

    .container {
        width: 100%;
    }

    .product-catagory-detail {
        width: 100%;
        padding-bottom: 100px;
    }

    .field-back {
        float: right;

    }

    .field-back>a>button {
        color: #ff5b6a;
        background-color: white;
        border-radius: 40px;
        padding: 5px 17px;
        border: none;
        box-shadow: 1px 2px 2px 2px rgba(128, 128, 128, 0.415);

    }

    .field-back>a>button:hover {
        color: white;
        background-color: green;
        border-radius: 40px;
        padding: 5px 17px;
        border: none;
        box-shadow: 1px 2px 2px 2px rgba(128, 128, 128, 0.415);
    }

    .fied-img {
        clear: both;
        border-radius: 1px solid black;
    }

    .item {
        float: left;
        width: 50px;
    }

    .content {
        float: right;
        width: 30%;
        margin-top: 0;
        line-height: 50px;
        padding-left: 30px;
    }

    h3 {
        font-size: xx-large;
    }

    .fied-price {
        font-size: x-large;
        color: #ff5b6a;
    }

    del {
        color: rgb(60, 55, 55);
        font-size: medium;
    }

    .options-product {
        width: 500px;
    }

    .headline {
        height: 67px;
        padding: 15px;
        font-size: 17px;
        background-color: #F2F2F2;
    }

    .list-options {
        line-height: 1.4px;
        padding: 10px;
        height: 50px;

    }

    .product-name {
        float: left;

    }

    .product-name>img {
        width: 50px;
        height: 50px;
    }

    .txt {
        font-size: 14px;
        margin-left: 15px;
        margin-bottom: 5px;
        height: 50px;
    }

    .r-info {
        float: right;
    }

    .inner {
        display: inline;
        width: 50%;
    }

    .price {
        font-size: 14px;
        margin-bottom: 5px;
        width: 50px;
        margin-right: 15px;
        text-align: center;
    }

    .inner>button {
        width: 32px;
        height: 32px;
        background-color: #e36872dd;
        border: none;
        border-radius: 5px;
        font-size: 20px;
    }

    .nav-bottom {
        clear: both;
        margin-top: 20px;
    }

    .btn-cart>button {
        width: 200px;
        height: 50px;
        background-color: #dd3c4add;
        border: none;
        border-radius: 5px;
        font-size: 20px;
        color: white;
        margin-top: 40px;
    }

    .btn-cart>button:hover {
        width: 200px;
        height: 50px;
        background-color: darksalmon;
        border: none;
        border-radius: 5px;
        font-size: 20px;
        color: white;
        margin-top: 40px;
    }
</style>
<script>
    let amountElement = document.getElementById('amount');
    let amount = amountElement.value;
    let render = (amount) => {
        amountElement.value = amount
    }
    let tang = () =>{
        console.log(amount);
        amount++
        render(amount);
    }
    let giam = () =>{
        if(amount > 1)
        console.log(amount);
        amount--
        render(amount);
    }
    amountElement.addEventListener('input', () =>{
        amount = amountElement.value;
        amount = parseInt(amount);
        amount = isNaN(amount)?1:amount;
        render(amount);
    }
    );
</script>
<?php
extract($onesp);
?>

<div class="wrapper">
    
        <main class="container">
            <div class="product-catagory-detail">
                <div class="title">
                    <h4>Chi tiết sản phẩm</h4>
                </div>
                    <a href="index.php?act=addtocart">
                   
                 </a>
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
                            <h4>Món của bạn</h4>
                        </div>
                        <ul class="list-options add-opts">
                            <li>
                                <span>Fried Chicken: 2 miếng gà hoàng kim</span><br>
                               
                            </li>
                            <li> <span>Drink : 1 lon pepsi</span></li>
                        </ul>
                    </div>
                    
                  
                    <div class="nav-bottom">
                        <div class="inner">
                            <div class="pty">
                                <span class="lbl">Số lượng</span>
                            </div>
                            
                           
                            <!-- <button class="btn-minute" type="button" onclick="giam1()">-</button> -->
                            <input type="text" class="amount1" name="amount1" id="amount1" value="1">
                            <!-- <button class="btn-plus" type="button" onclick="tang1()">+</button> -->
                            <div class="btn-cart">
                            <form action="index.php?act=addtocart" method="post">
                    <input type="hidden" name="id" value=<?= $id ?>>
                    <input type="hidden" name="name" value=<?= $name ?>>
                    <input type="hidden" name="img" value=<?= $img ?>>
                    <input type="hidden" name="price" value=<?= $price ?>>
                    <input type="submit" name="addtocart" value="THÊM" >
                    </form>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr> 
            <div id="binhluan">
                <iframe src="binhluan.php?idpro=<?=$id?>" width="100% " height="550px" frameborder="0"></iframe>
                </div>
                <hr>
        </main>
   
</div>
<style>
    
    .add-opts>li{
        color: black;
        margin: 5px;
        height: 30px;
        list-style:disc;
     
    }
    .add-opts>li>span{
        font-size: 16px;
    }
    .wrapper{
        margin-bottom: 300px;

    }
    #binhluan{
        clear: both;
        margin-bottom: 100px;
    }
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
        background-color:#e81c1c9e;
        color: black;
        border-radius: 5px;
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
    .inner input{
            width: 32px;
            height: 32px;
            background-color: #d3737bdd;
            border: none;
            border-radius: 5px;
            font-size: 15px;
            padding: 8px;
           
        }
        

    .nav-bottom {
        clear: both;
        margin-top: 20px;
    }

    .btn-cart>input {
        width: 200px;
        height: 50px;
        background-color: #dd3c4add;
        border: none;
        border-radius: 5px;
        font-size: 20px;
        color: white;
        margin-top: 40px;
    }

    .btn-cart>input:hover {
        width: 200px;
        height: 50px;
        background-color: darksalmon;
        border: none;
        border-radius: 5px;
        font-size: 20px;
        color: white;
        margin-top: 40px;
    }
    .btn-cart input{
  width: 80%;
  margin: 30px 0 20px;
  border: none;
  background-color: #a73a3a;
  color: #fff;
  border-radius: 20px;
  box-shadow: 0 2px 5px  rgb(88, 88, 88);
  padding-bottom: 50px;
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
       
        amount--
        render(amount);
    }
    amountElement.addEventListener('input', () =>{
        amount = amountElement.value;
        amount = parseInt(amount);
        amount = isNaN(amount)? 1 : amount;
        render(amount);
    }
    );
    let amount1Element = document.getElementById('amount1');
    let amount1 = amount1Element.value;
    let render1 = (amount1) => {
        amount1Element.value = amount1
    }
    let tang1 = () =>{
        console.log(amount1);
        amount1++
        render1(amount1);
    }
    let giam1 = () =>{
        if(amount1 > 1)
       
        amount1--
        render1(amount1);
    }
    amount1Element.addEventListener('input', () =>{
        amount1 = amount1Element.value;
        amount1 = parseInt(amount1);
        amount1 = isNaN(amount1)? 1 : amount1;
        render1(amount1);
    }
    );
</script>

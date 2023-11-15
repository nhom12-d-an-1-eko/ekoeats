<style>
    .container {
    width: 1200px;
}

.top-main-contact {
    margin-top: 100px;
    text-align: center;
}

.top-main-contact p {
    margin: 30px;
}

.top-main-contact button {
    background-color: transparent !important;
    padding: 10px 20px;
    border: none;
    border: 1px solid #ccc;
    margin: 10px;
    transition: .2s linear;

}

.top-main-contact button:hover {
    border: 1px solid #e4002b;
    cursor: pointer;
    transition: .2s linear;
}

.form-contact {
    text-align: center;
    margin: 40px 0;
    padding: 10px;
    border: 1px solid #ccc;

}

.form-contact h2 {
    padding: 10px 0;
    border-bottom: 1px solid #ccc;
    margin: 50px 0;
}

.form-contact input,
select,
textarea {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
}

.form-grid-contact {
    display: grid !important;
    grid-template-columns: 1fr 1fr;
    column-gap: 30px;
    
}

.form-contact button {
    padding: 10px 30px;
    border: none;
    background-color: #e4002b;
    color: #fff;
    border-radius: 20px;
    margin: 20px 0;
    transition: .2s linear;
    cursor: pointer;
}

.form-contact button:hover {
    background-color: #f75270;
    transition: .2s linear;
}
</style>
<div class="container">
        <div class="main-contact">
            <div class="top-main-contact">
                <h1>LIÊN HỆ CHÚNG TÔI</h1>
                <p>Tầng 2, Tòa nhà L,</p>
                <p>Số 1 Trịnh Văn Bô, P. Phương Canh, Q. Nam Từ Liêm, TP. Hà Nội.</p>
                <button><i class='bx bx-envelope'></i>Email</button>
                <button> <i class='bx bxs-phone-call'></i>01232456789</button>
            </div>
            <div class="form-contact">
                <h2>LIÊN HỆ EKO EATS </h2>
                <div class="form-grid-contact">
                    <input type="text" placeholder="Họ và tên của bạn">
                    <input type="email" placeholder="Địa chỉ email của bạn">
                </div>
                <input type="number" placeholder="Số điện thoại *">
                <h2>ĐỊA CHỈ CỦA BẠN</h2>
                <div class="form-grid-contact">
                    <select name="" id="">
                        <option value="0">Tỉnh/thành phố</option>
                        <option value="1">Hà Nội</option>
                        <option value="2">Cà Mau</option>
                    </select>
                    <select name="" id="">
                        <option value="0">Quận/Huyện</option>
                        <option value="1"></option>
                        <option value="2"></option>
                    </select>
                    <select name="" id="">
                        <option value="0">Phường/xã</option>
                        <option value="1"></option>
                        <option value="2"></option>
                    </select>
                    <input type="text" placeholder="Địa chỉ ( số nhà, tên đường)">
                </div>
                <h2>NỘI DUNG MUỐN LIÊN HỆ</h2>
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <button>Gửi đi</button>
            </div>
        </div>
    </div>
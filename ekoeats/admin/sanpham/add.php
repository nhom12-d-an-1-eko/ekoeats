<div class="form">
        <div class=" font_title ">
          <h1>THÊM MỚI SẢN PHẨM</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=addsp" method="POST">
           <div class="row2 mb10 ">
           <label> Mã sản phẩm </label> <br>
            <input type="text" name="masp" placeholder="mã sản phẩm">
           </div>
           <div class="row2 mb10">
            <label>Tên sản phẩm </label> <br>
            <input type="text" name="tenloai" placeholder="nhập vào tên">
           </div>
           <var class="sub1">
            <input class="sub2" type="submit" value="THÊM MỚI" name="themmoi">
            <input  class="sub2" type="reset" value="NHẬP LẠI">
            <a href="index.php?act=listsp"><input  class="sub2" type="button" value="DANH SÁCH"></a>
            </var>
           </div>
          </form>
         </div>
        </div>
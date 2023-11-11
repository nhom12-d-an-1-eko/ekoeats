<div class="form">
        <div class=" font_title ">
          <h1>THÊM MỚI DANH MỤC</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=updatedm" method="POST">
           <div class="row2 mb10 ">
           <label> Mã loại </label> <br>
            <input type="text" name="maloai" placeholder="mã loại">
           </div>
           <div class="row2 mb10">
            <label>Tên loại </label> <br>
            <input type="text" name="tenloai" placeholder="nhập vào tên" value="<?=$dm['name']?>">
           </div>
           <var class="sub1">
            <input type="hidden" name="id" value="<?=$dm['id']?>">
            <input class="sub2" type="submit" value="Cập Nhật" name="capnhat">
            <input  class="sub2" type="reset" value="NHẬP LẠI">
            <a href="index.php?act=listdm"><input  class="sub2" type="button" value="DANH SÁCH"></a>
            </var>
           </div>
          </form>
         </div>
        </div>
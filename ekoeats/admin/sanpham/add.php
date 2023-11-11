<div class="form">
        <div class=" font_title ">
          <h1>THÊM MỚI SẢN PHẨM</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=addsp"  method="POST" enctype="multipart/form-data">

          <div class="row2 mb10 ">
           <label> Danh mục </label> <br>
           <select name="iddm" id="">
                    <?php  foreach ($listdm as $dm) {
                        extract($dm);
                        echo '<option value="'.$id.'">'.$name.'</option>';
                    } ?>
                    
            </select>     
          </div>

           <div class="row2 mb10 ">
           <label> Mã sản phẩm </label> <br>
            <input type="text" name="masp" placeholder="mã sản phẩm">
           </div>

           <div class="row2 mb10">
            <label>Tên sản phẩm </label> <br>
            <input type="text" name="tensp" placeholder="nhập vào tên">
           </div>

           <div class="row2 mb10">
            <label>Hình</label> <br>
            <input type="file" name="hinh">
           </div>

           <div class="row2 mb10">
            <label>Giá </label> <br>
            <input type="text" name="giasp" placeholder="nhập vào giá">
           </div>
           
           
           <div class="row2 mb10">
            <label>Mô tả</label> <br>
            <input type="text" name="mota" placeholder="nhập mô tả">
           </div>
           <div class="row2 mb10">
            <label>Số lượng</label> <br>
            <input type="text" name="soluong" placeholder="nhập số lượng">
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
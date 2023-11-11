<div class="form">
        <div class="row2 font_title">
          <h1>THÊM MỚI SẢN PHẨM</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
           <div class="row2 mb10 form_content_container">
           <label> Danh mục </label> <br>
            <select name="iddm">
              <?php 
                 foreach ($listdm as $dm) {
                  extract($dm);
                  echo '<option value="'.$id.'">'.$name.'</option>';
                }
              ?>
            </select>
           </div>
           <div class="row2 mb10">
            <label>Tên hàng hóa </label> <br>
            <input type="text" name="tensp" placeholder="nhập vào tên">
           </div>
           <div class="row2 mb10">
            <label>price </label> <br>
            <input type="text" name="price" placeholder="nhập vào giá">
           </div>
           <div class="row2 mb10">
            <label>img </label> <br>
            <input type="file" name="img" >
           </div>
           <div class="row2 mb10">
            <label>mô tả </label> <br>
            <textarea name="motasp"  cols="30" rows="10"></textarea>
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
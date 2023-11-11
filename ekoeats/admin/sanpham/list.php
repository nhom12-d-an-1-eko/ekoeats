<div class="form">
        <div class="row2 font_title">
          <h1>DANH SÁCH SẢN PHẨM</h1>
        </div>
        <div class="row2 form_content ">
          <form action="index.php?act=listsp" method="POST">
          <input type="text" name="kyw">
                
                <select name="iddm" >
                    <option value="0" select>Tất cả</option>
                    <?php  foreach ($listdm as $dm) {
                        extract($dm);
                        echo '<option value="'.$id.'">'.$name.'></option>';
                    } ?>
                    
                
                </select>
                <input type="submit" name="listok" value="GO">
            </form>
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th></th>
                <th>MÃ SẢN PHẨM</th>
                <th>TÊN SẢN PHẨM</th>
                <th>Hình</th>
                <th>Giá</th>
                <th>Mô tả</th>
                <th>Số lượng</th>
                <th></th>
            </tr>
                <?php 
                      foreach ($listsp as $sp) {
                          extract($sp);
                         $suasp="index.php?act=suasp&id=".$id;
                         $xoasp="index.php?act=xoasp&id=".$id;
                         $hinhpath="../upload/".$img;
                         if (is_file($hinhpath)) {
                            $hinh="<img src='".$hinhpath."' height='80'>";
                        }else{
                            $hinh="no photo";
                        }
                         echo '<tr>
                         <td><input type="checkbox" name="" id=""></td>
                         <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$img.'</td>
                        <td>'.$price.'</td>
                        <td>'.$mota.'</td>
                        <td>'.$soluong.'</td>
                        <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a> <a href="'.$xoasp.'">   <input type="button" value="Xóa"></a></td>
                     </tr>';
                       }
                
                
                ?>
            
           </table>
           </div>
           <div class="row mb10 ">
                <input class="sub2" type="button" value="CHỌN TẤT CẢ">
                <input  class="sub2" type="button" value="BỎ CHỌN TẤT CẢ">
                <a href="index.php?act=addsp"> <input  class="sub2" type="button" value="NHẬP THÊM"></a>
           </div>
          
         </div>
        </div>
</div>
<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <?php
            extract($onesp);
            ?>
            <div class="boxtitle">
                <p style="font-size: 18px; font-weight: 600"><?= $name?></p>
            </div>
            <div class="boxcontent row">
                <?php
                    $img= $img_path.$img;
                    echo'<div style="text-align: center" class="row mb"><img src="'.$img.'"></div><br>';
                    echo $mota;
                ?>
            </div>
        </div>
        <!-- <div class="row">
            <iframe src="view/binhluan/binhluanform.php?idpro=<?=$id?>" frameborder="0" width="100%" height="300px"></iframe>
        </div> -->
        <div class="row mb">
            <div class="boxtitle">
                <p>SẢN PHẨM CÙNG LOẠI</p>
            </div>
            <div class="boxcontent row">
                <?php
                    foreach ($sp_cungloai as $spcl){
                        extract($spcl);
                        $linksp= "index.php?act=sanphamct&idsp=".$id;
                        echo '
                                <li><a href="'.$linksp.'">'.$name.'</a> </li>
                               ';
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php
        include "boxright.php";
        ?>
    </div>
</div>


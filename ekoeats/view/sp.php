<div class="row mb">
        <div class="row mb">
            <div class="boxtitle">
                <p style="font-size: 18px; font-weight: 600">SẢN PHẨM <strong><?=$tendm?></strong></p>
            </div>
            <div class="boxcontent row">
                <?php
                    $i=0;
                    foreach ($dssp as $sp){
                        extract($sp);
                        $linksp= "index.php?act=chitietsp.php&idsp=".$id;
                        $hinh= $img_path.$img;
                        if (($i==2)||($i==5)||($i=8)||($i==11)){
                            $mr="";
                        }else{
                            $mr="mr";
                        }
                        echo '
                        <div class="boxsp " style="margin-right: 6px">
                            <div class="img row spct">
                                <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
                            </div>
                            <p style="color: red; font-size: 15px; text-align: center">'.$price.'</p>
                            <a style="text-decoration: none; font-size: 1vw; padding-left: 50px; font-weight: 700" href="'.$linksp.'" >'.$name.'</a>
                        </div>';
                        $i+=1;
                    }
                ?>
            </div>
        </div>

    </div>
   
</div>



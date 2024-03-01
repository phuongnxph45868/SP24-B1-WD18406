<div class="row mb ">
            <div class="boxtrai mr">
            <div class="row mb">
                <?php
                    extract($onesp);
                ?>
                <div class="boxtitle"><?=$name?></div>
                <div class="row boxcontent">
                    <?php
                        
                        $img=$img_path.$img;
                        echo '<div class="row mb spct"> <img src="'.$img.'"></div>';
                        echo $mota;
                    ?>                
                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle">BÌNH LUẬN</div>
                <div class="row boxcontent">
                    <iframe src="view/binhluan/binhluanform.php?idpro=<?=$id?>" frameborder="0"></iframe>                
                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
                <div class="row boxcontent">
                <ul>
                    <?php foreach ($sp_cungloai as $sp_cungloai) : ?>
                        <li><a href="index.php?act=sanphamct&id=<?php echo $sp_cungloai['id']; ?>"><?php echo $sp_cungloai['name']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>                               
                </div>
            </div>
            <div class="boxphai">
               <?php
                    include'boxright.php';
               ?>
            </div>
        </div>
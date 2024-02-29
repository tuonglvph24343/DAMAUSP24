<div class="row">
    <article class="col-sm-9">
        <div class="panel panel-default">
            <div class="panel-heading text-center" style="font-size: 20px;">
                Sản phẩm theo danh mục
                <strong><?=$tendm?></strong>
            </div>
          
            <br>
            <?php
              foreach ($dssp as $sp) {
                $i = 0;
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $hinh = $img_path . $img;
                if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 12)) { // Sửa lỗi so sánh
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                echo '<div class="col-sm-6 col-md-4 ' . $mr . '">
               <div class="thumbnail text-center">
                   <a href="' . $linksp . '">
                       <img src="' . $hinh . '" style="width:150px">
                   </a>
                   <div class="caption text-left">
                       <h3>$ ' . $price . ' </h3>
                       <p>
                       <a href="' . $linksp . '">
                       
                   </a>' . $name . '
                       </p>
                   </div>
               </div>
           </div>';
                $i += 1;
            }
            ?>
        </div>
    </article>
    <aside class="col-sm-3">
        <?php
        include "view/boxright.php";
        ?>
    </aside>
</div>
<style>
    .panel {
        margin-top: 20px;
    }

    .panel-heading {
        background-color: #f5f5f5;
        border-bottom: 1px solid #ddd;
        text-align: center;
        font-size: 15px;
    }

    .product-image {
        text-align: center;
        margin-bottom: 20px;
    }

    .product-description {
        margin-bottom: 20px;
    }

    .product-price {
        font-size: 18px;
        color: #333;
    }
</style>
<div class="row">
    <article class="col-sm-9">
        <div class="row" style="padding: 0 15px !important;">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/products/la.jpg" alt="#">
                    </div>

                    <div class="item">
                        <img src="images/products/2a.jpg" alt="#">
                    </div>

                    <div class="item">
                        <img src="images/products/3a.jpg" alt="#">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <br>
        <div class="row">
            <?php
            $i = 0;
            echo '<div class="row products-container">';
            foreach ($spnew as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $hinh = $img_path . $img;
                if (($i == 2) || ($i == 5) || ($i == 8)) { // Sửa lỗi so sánh
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
                <form action="index.php?act=addtocart" method="post">
                <input type="hidden" value="' . $id . '" name="id">
                <input type="hidden" value="' . $name . '" name="name">
                <input type="hidden" value="' . $img . '"name="img">
                <input type="hidden" value="' . $price . '" name="price">
                <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
            </form>
            </div>
           </div>';
                $i += 1;
            }
            echo '</div>'; // Đóng container sản phẩm
            ?>
            <style>
                .products-container {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: space-between;
                }
            </style>

        </div>
    </article>
    <aside class="col-sm-3">
        <?php
        include "view/boxright.php";
        ?>
    </aside>
</div>
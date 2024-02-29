<div class="row">
    <article class="col-sm-9">
        <div class="panel panel-default">
            <?php extract($onesp); ?>
            <div class="panel-heading text-center" style="font-size: 20px;">
                <?= $name ?>
            </div>
            <div class="panel-body">
                <div class="product-image">
                    <?php $img = $img_path . $img; ?>
                    <img src="<?= $img ?>" alt="<?= $name ?>" style="width:200px">
                </div>
                <div class="product-description">
                    <?= $mota ?>
                </div>
                <div class="product-price">
                    <strong>Price:</strong> $<?= $price ?>
                </div>
                <!-- Các thông tin sản phẩm khác bạn có thể thêm vào đây -->
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Bình luận </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">sản phẩm cùng loại</div>
            <div class="panel-body">
                <?php
                foreach ($sp_cung_loai as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    echo'<li><a href="'.$linksp.'">'.$name.'</a></li>';
                }
                ?>

            </div>
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
<?php
if (is_array($dm)) {
    extract($dm);
}
?>

<header class="row">
    <h4 class="alert alert-info">Cập nhập loại hàng</h3>
        <form action="index.php?act=updatedm" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên loại</label>
                <input type="tenloai" class="form-control" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name;?>">
            </div>

            <br>
            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
            <input type= "submit" class="btn btn-primary" name="capnhat" value="Cập nhật">
            <button type="reset" class="btn btn-primary">Nhập lại</button>
            <a href="index.php?act=listdm"> <button type="button" class="btn btn-primary">Quay lại</button></a>
            <?php
            if (isset($thongbao) && ($thongbao != " "))
                echo "<div class='thong-bao'>$thongbao</div>";
            ?>
        </form>
        <br>
        <style>
            .thong-bao {
                background-color: green;
                color: #333;
                border: 1px solid #ccc;
                padding: 10px;
                margin-bottom: 15px;
                border-radius: 5px;
                /* Thêm các thuộc tính khác tùy thuộc vào thiết kế mong muốn */
            }
        </style>
</header>
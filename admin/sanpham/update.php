<?php
if (is_array($sanpham)) {
  extract($sanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
  $hinh =  "<img src='" . $hinhpath . "' height='80'>";
} else {
  $hinh = "no photo available";
}
?>

<header class="row">
  <h4 class="alert alert-info">Cập nhập loại hàng</h3>
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
      <select name="iddm">
        <?php
        foreach ($listdanhmuc as $danhmuc) {
          // extract($danhmuc);
          if ($iddm == $id) $s="selected" ;else $s="";
            echo '  <option value="' .  $danhmuc['id'] . '" '.$s.'> ' . $danhmuc['name']  . '"</option> ';
        }
        ?>
      </select>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
        <input type="tenloai" class="form-control" name="tensp" value="<?= $name ?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Giá</label>
        <input type="tenloai" class="form-control" name="giasp" value="<?= $price ?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Hình</label>
        <input type="file" class="form-control" name="hinh">
        <?= $hinh ?>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Mô tả</label>
        <textarea name="mota" id="" cols="30" rows="10"><?= $mota ?></textarea>
      </div>

      <br>
      <!-- <button type="submit" class="btn btn-primary" name="themmoi">Thêm mới</button> -->
      <input type="hidden" name="id" value="<?= $id ?>">
      <input type="submit" class="btn btn-primary" name="capnhat" value="Cập nhật">
      <button type="reset" class="btn btn-primary">Nhập lại</button>
      <a href="index.php?act=listsp"> <button type="button" class="btn btn-primary">Danh sách </button></a>
      <?php
      if (isset($thongbao) && ($thongbao != " "))
        echo "<div class='thong-bao'>$thongbao</div>";
      ?>
    </form>
</header>
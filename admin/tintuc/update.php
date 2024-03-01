<?php
if (is_array($sanpham)) {
  extract($sanpham);
}
$hinhpath = "../upload/" . $hinh_anh;
if (is_file($hinhpath)) {
  $hinh =  "<img src='" . $hinhpath . "' height='80'>";
} else {
  $hinh = "no photo available";
}
?>

<header class="row">
  <h4 class="alert alert-info">Cập nhập tin tức</h3>
    <form action="index.php?act=updatetintuc" method="post" enctype="multipart/form-data">
    <label>Danh mục tin tức</label> <br />
    <select name="iddm" style="padding: 4px;" class="form-control">
        <?php
        foreach ($listdanhmuc as $danhmuc) {
          extract($danhmuc);
          if ($iddm == $id) $s = "selected";
          else $s = "";
          echo '  <option value="' .  $danhmuc['id_danhmuc'] . '" ' . $s . '> ' . $danhmuc['ten_danhmuc']  . '</option> ';
        }
        ?>
      </select>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tiêu đề</label>
        <input type="tenloai" class="form-control" name="tieude" value="<?= $tieu_de ?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nội dung</label>
        <input type="tenloai" class="form-control" name="noidung" value="<?= $noi_dung ?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Hình ảnh</label>
        <input type="file" class="form-control" name="hinh">
        <?= $hinh ?>
      </div>
      <br>
      <!-- <button type="submit" class="btn btn-primary" name="themmoi">Thêm mới</button> -->
      <input type="hidden" name="id" value="<?= $id ?>">
      <input type="submit" class="btn btn-primary" name="capnhat" value="Cập nhật">
      <a href="index.php?act=listtintuc"> <button type="button" class="btn btn-primary">Danh sách </button></a>
      <?php
      if (isset($thongbao) && ($thongbao != " "))
        echo "<div class='thong-bao'>$thongbao</div>";
      ?>
    </form>
</header>
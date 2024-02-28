<?php
if (is_array($dm)) {
    extract($dm);
}
?>

<header class="row">
    <h4 class="alert alert-info">Cập nhập loại hàng</h3>
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Mã Sản phẩm</label>
        <input type="maloai" class="form-control"  name="masp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
        <input type="tenloai" class="form-control" name="tensp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Giá</label>
        <input type="tenloai" class="form-control" name="giasp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Hình</label>
        <input type="file" class="form-control" name="hinh">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Mô tả</label>
       <textarea name="mota" id="" cols="30" rows="10"></textarea>
      </div>

      <br>
      <!-- <button type="submit" class="btn btn-primary" name="themmoi">Thêm mới</button> -->
      <input type="submit" class="btn btn-primary" name="themmoi" value="Câp nhật">
      <button type="reset" class="btn btn-primary">Nhập lại</button>
      <a href="index.php?act=listsp"> <button type="button" class="btn btn-primary">Danh sách </button></a>
      <?php
      if (isset($thongbao) && ($thongbao != " "))
      echo "<div class='thong-bao'>$thongbao</div>";
      ?>
    </form>
</header>
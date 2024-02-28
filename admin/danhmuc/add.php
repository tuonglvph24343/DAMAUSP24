<header class="row">
  <h4 class="alert alert-info">Thêm mới loại hàng</h3>
    <form action="index.php?act=adddm" method="post">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Mã loại</label>
        <input type="maloai" class="form-control"  name="maloai">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tên loại</label>
        <input type="tenloai" class="form-control" name="tenloai">
      </div>

      <br>
      <!-- <button type="submit" class="btn btn-primary" name="themmoi">Thêm mới</button> -->
      <input type="submit" class="btn btn-primary" name="themmoi" value="Thêm mới">
      <button type="reset" class="btn btn-primary">Nhập lại</button>
      <a href="index.php?act=listdm"> <button type="button" class="btn btn-primary">Danh sách </button></a>
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

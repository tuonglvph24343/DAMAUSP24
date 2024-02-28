<header class="row">
  <h4 class="alert alert-info">Thêm mới sản phẩm</h3>
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Danh mục</label>
          <select class="" name="iddm" id="iddm">
            <?php
            foreach ($listdanhmuc as $danhmuc) {
             extract($danhmuc);
             echo '  <option value="'.$id.'"> '.$name.'"</option> ';
            }
            ?>
          
          </select>
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
      <input type="submit" class="btn btn-primary" name="themmoi" value="Thêm mới">
      <button type="reset" class="btn btn-primary">Nhập lại</button>
      <a href="index.php?act=listsp"> <button type="button" class="btn btn-primary">Danh sách </button></a>
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
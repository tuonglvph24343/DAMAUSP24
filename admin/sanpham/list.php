<header class="row">
    <h4 class="alert alert-info">Danh sách loại hàng</h3>
        <form action="index.php?act=listsp" method="post">
            <input type="text" name="kyw">
            <select name="iddm" id="">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo '  <option value="' . $id . '"> ' . $name . '"</option> ';
                }
                ?>

            </select>
            <input type="submit" value="go" name="listok">
        </form>
        <form>
            <div class="container">

                <div class="table-wrapper">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="selectAll">
                                        <label for="selectAll"></label>
                                    </span>
                                </th>
                                <th>Mã loại</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình</th>
                                <th>Giá</th>
                                <th>Lượt xem</th>
                                <th>Mô tả</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listsanpham as $sanpham) {
                                extract($sanpham);
                                $suasp = "index.php?act=suasp&id=".$id;
                                $xoasp = "index.php?act=xoasp&id=".$id;
                                $hinhpath = "../upload/" . $img;
                                if (is_file($hinhpath)) {
                                    $hinh =  "<img src='" . $hinhpath . "' height='80'>";
                                } else {
                                    $hinh = "no photo available";
                                }
                                echo '
                               <tr>
                               <td>
                                   <span class="custom-checkbox">
                                       <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                       <label for="checkbox1"></label>
                                   </span>
                               </td>
                               <td>' . $id . '</td>
                               <td>' . $name . '</td>
                               <td>' . $hinh . '</td>
                               <td>' . $price . '</td>
                               <td>' . $luotxem . '</td>
                               <td>' . $mota . '</td>
                               <td>
                                   <a href="'.$suasp.'" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                   <a href="'.$xoasp.'" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                               </td>
                           </tr>
                               ';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <button type="button" class="btn btn-primary">Chọn tất cả</button>
            <button type="button" class="btn btn-primary">Bỏ chọn tất cả</button>
            <button type="button" class="btn btn-primary">Xoá các mục đã chọn</button>
            <a href="index.php?act=addsp"> <button type="button" class="btn btn-primary">Nhập thêm </button></a>

        </form>
</header>
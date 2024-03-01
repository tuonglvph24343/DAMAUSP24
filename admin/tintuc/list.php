<header class="row">
    <h4 class="alert alert-info">Danh sách Tin tức</h3>
        <form>
            <div class="container">

                <div class="table-wrapper">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Mã tin tức</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Hình ảnh</th>
                                <th>Danh mục tin tức</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listdanhmuc as $sanpham) {
                                extract($sanpham);
                                //BỔ SUNG
                                $ten_danhmuc = '';
                                foreach ($listdanhmuctintuc as $danhmuc) {
                                    if ($danhmuc['id_danhmuc'] == $id_danh_muc) {
                                        $ten_danhmuc = $danhmuc['ten_danhmuc'];
                                        break;
                                    }
                                } //BỔ SUNG
                                $suasp = "index.php?act=suatintuc&id=" . $id;
                                $xoasp = "index.php?act=xoatintuc&id=" . $id;
                                $hinhpath = "../upload/" . $hinh_anh;
                                if (is_file($hinhpath)) {
                                    $hinh =  "<img src='" . $hinhpath . "' height='80'>";
                                } else {
                                    $hinh = "no photo available";
                                }
                                echo '
                               <tr>
                               <td>' . $id . '</td>
                               <td>' . $tieu_de . '</td>
                               <td>' . $noi_dung . '</td>
                               <td>' . $hinh . '</td>
                               <td>' . $ten_danhmuc . '</td>
                               <td>
                                   <a href="' . $suasp . '" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                   <a href="' . $xoasp . '" class="delete" data-toggle="modal" onclick="return confirmDelete(event)">
                                   <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
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
            <div class="text-center">
                <a href="index.php?act=addtintuc"> <button type="button" class="btn btn-primary">Thêm mới </button></a>
            </div>
        </form>
</header>
<script type="text/javascript">
    function confirmDelete(event) {
        if (!confirm('Bạn muốn xoá không?')) {
            event.preventDefault(); // Ngăn chặn chuyển hướng mặc định của liên kết
        }
    }
</script>
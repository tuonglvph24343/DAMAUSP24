<header class="row">
    <h4 class="alert alert-info">Danh sách loại hàng</h3>
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
                                <th>Tên loại</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listdanhmuc as $danhmuc) {
                               extract($danhmuc) ;
                               $suadm = "index.php?act=suadm&id=".$id;
                               $xoadm = "index.php?act=xoadm&id=".$id;
                               echo '
                               <tr>
                               <td>
                                   <span class="custom-checkbox">
                                       <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                       <label for="checkbox1"></label>
                                   </span>
                               </td>
                               <td>'.$id.'</td>
                               <td>'.$name.'</td>
                               <td>
                                   <a href="'.$suadm.'" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                   <a href="'.$xoadm.' " class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
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
            <a href="index.php?act=adddm"> <button type="button" class="btn btn-primary">Nhập thêm </button></a>

        </form>
</header>
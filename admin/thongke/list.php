<header class="row">
    <h4 class="alert alert-info">Thống kê sản phẩm theo danh mục</h3>
        <form>
            <div class="container">

                <div class="table-wrapper">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Mã danh mục</th>
                                <th>Tên danh mục</th>
                                <th>Số Lượng</th>
                                <th>Giá Cao Nhất</th>
                                <th>Giá Thấp Nhất</th>
                                <th>Giá Trung Bình</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listthongke as $tk) {
                                extract($tk);
                                echo '
                               <tr>
                               <td>' . $madm . '</td>
                               <td>' . $tendm . '</td>
                               <td>' . $countsp . '</td>
                               <td>' . $maxprice . '</td>
                               <td>' . $minprice . '</td>
                               <td>' . $avgprice . '</td>
                            
                           </tr>
                               ';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="text-center">
                    <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ" class="btn btn-primary"></a>
                </div>
            </div>
        </form>
</header>
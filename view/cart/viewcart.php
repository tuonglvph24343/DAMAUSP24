    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class="mb-0">Giỏ hàng</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Ảnh</th>
                                        <th scope="col">Tên sản phẩm</th>
                                        <th scope="col">Đơn giá</th>
                                        <th scope="col">Số lượng</th>
                                        <th scope="col">Thành tiền</th>
                                        <th scope="col">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $tong = 0;
                                    $i = 0;
                                    foreach ($_SESSION['mycart'] as $cart) {
                                        $hinh = $img_path . $cart[2];
                                        $ttien = $cart[3] * $cart[4];
                                        $tong += $ttien;

                                        $xoasp = '<a href="index.php?act=delcart&idcart=' . $i . '">
                                        <input  type="button" value="Xoá"></input>
                                    </a>';

                                        echo '<tr>
                                            <td><img src="' . $hinh . '" alt="' . $cart[1] . '" height="80"></td>
                                            <td>' . $cart[1] . '</td>
                                            <td>' . number_format($cart[3]) . 'đ</td>
                                            <td>' . $cart[4] . '</td>
                                            <td>' . number_format($ttien) . 'đ</td>
                                            <td>' . $xoasp . '</td>
                                        </tr>';
                                        $i += 1;
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="4">
                                            <h5 class="font-weight-bold mb-0">Tổng đơn hàng</h5>
                                        </td>
                                        <td colspan="2"><?php echo number_format($tong); ?>đ</td>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="text-center">
            <a href="index.php?act=bill" class="mr-2">
                <input type="button" class="btn btn-primary" value="Đồng ý đặt hàng">
            </a>
        </div>
<br>
    </div>

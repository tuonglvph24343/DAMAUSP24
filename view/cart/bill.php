<main class="catalog mb">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header bg-primary text-white">Thông tin tài khoản</div>
                    <div class="card-body">
                        <?php if (isset($_SESSION['user'])) { ?>
                            <div class="form-group row">
                                <label for="user" class="col-sm-4 col-form-label">Người đặt hàng</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="user" name="user" value="<?= $_SESSION['user']['user'] ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address" class="col-sm-4 col-form-label">Địa chỉ</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="address" name="address" value="<?= $_SESSION['user']['address'] ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="email" name="email" value="<?= $_SESSION['user']['email'] ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tell" class="col-sm-4 col-form-label">Số điện thoại</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="tell" name="tell" value="<?= $_SESSION['user']['tel'] ?>" readonly>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header bg-primary text-white">Phương thức thanh toán</div>
                    <div class="card-body">
                        <div class="form-check">
                            <input checked id="ttktt" type="radio" class="form-check-input" name="payment" value="0">
                            <label for="ttktt" class="form-check-label">Trả tiền khi thanh toán</label>
                        </div>
                        <div class="form-check">
                            <input id="cknh" type="radio" class="form-check-input" name="payment" value="1">
                            <label for="cknh" class="form-check-label">Chuyển khoản ngân hàng</label>
                        </div>
                        <div class="form-check">
                            <input id="tto" type="radio" class="form-check-input" name="payment" value="2">
                            <label for="tto" class="form-check-label">Thanh toán online</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header bg-primary text-white">Sản phẩm</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Đơn giá</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $total = 0;
                                    foreach ($_SESSION['mycart'] as $key => $value) {
                                        $total += $value[3];
                                        $delete = "/?act=delete-cart&id=$key";
                                        $hinh = $img_path . $value[2];
                                    ?>
                                        <tr>
                                            <td><img src="<?= $hinh ?>" width="100" alt=""></td>
                                            <td><?= $value[1] ?></td>
                                            <td><?= $value[3] ?></td>
                                            <td>1</td>
                                            <td><?= $value[3] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                    <tr>
                                        <td colspan="4" class="text-right">Tổng tiền</td>
                                        <td><?= $total ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-right">
                <form action="/?act=bill-confirm" method="POST">
                    <input type="hidden" name="total" value="<?= $total ?>">
                    <input name="btn-confirm-bill" class="btn btn-primary" type="submit" value="Đồng ý đặt hàng" />
                </form>
            </div>
        </div>
    </div>
</main>

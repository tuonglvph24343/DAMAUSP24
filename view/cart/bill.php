<main class="catalog mb ">
    <div class="boxleft">
        <form action="/?act=bill-confirm" method="POST">
            <div class="box_title">Thông tin tài khoản</div>
            <div class="box_content form_account">
                <?php if (isset($_SESSION['user'])) { ?>
                    <div style="display: flex; gap: 20px">
                        <p style="padding-top: 4px; width: 20%;">Người đặt hàng</p>
                        <input type="text" name="user" value="<?= $_SESSION['user']['user'] ?>">
                    </div>
                    <div style="display: flex; gap: 20px">
                        <p style="padding-top: 4px; width: 20%;">Địa chỉ</p>
                        <input type="text" name="address" value="<?= $_SESSION['user']['address'] ?>">
                    </div>
                    <div style="display: flex; gap: 20px">
                        <p style="padding-top: 4px; width: 20%;">Email</p>
                        <input type="email" name="email" value="<?= $_SESSION['user']['email'] ?>">
                    </div>
                    <div style="display: flex; gap: 20px">
                        <p style="padding-top: 4px; width: 20%;">Số diện thoại</p>
                        <input type="text" name="tell" value="<?= $_SESSION['user']['tel'] ?>">
                    </div>
                <?php } ?>
            </div>
            <br>
            <br>
            <div class="box_title">Phương thức thanh toán</div>
            <div class="box_content form_account" style="min-height: 0;">
                <div style="display: flex; justify-content: space-between;">
                    <div style="display: flex;">
                        <input checked id="ttktt" type="radio" name="payment" value="0">
                        <label for="ttktt" style="font-size: 16px; color: #000; padding-bottom: 6px;">Trả tiền khi thanh toán</label>
                    </div>
                    <div style="display: flex;">
                        <input id="cknh" type="radio" name="payment" value="1">
                        <label for="cknh" style="font-size: 16px; color: #000; padding-bottom: 6px;">Chuyển khoản ngân hàng</label>
                    </div>
                    <div style="display: flex;">
                        <input id="tto" type="radio" name="payment" value="2">
                        <label for="tto" style="font-size: 16px; color: #000; padding-bottom: 6px;">Thanh toán online</label>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="box_title">Sản phẩm</div>
            <div class="box_content form_account formds_loai">
                <table style="background-color: #fff;">
                    <tr>
                        <th>Ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th></th>
                    </tr>
                    <?php
                    $total = 0;
                    foreach ($_SESSION['listCart'] as $key => $value) {
                        $total += $value[3];
                        $delete = "/?act=delete-cart&id=$key";
                    ?>
                        <tr>
                            <td style="padding: 10px"><img src="/upload/<?= $value[2] ?>" width="100" alt="<?= $value[1] ?>"></td>
                            <td style="padding: 10px"><?php echo $value[1] ?></td>
                            <td style="padding: 10px"><?php echo $value[3] ?></td>
                            <td style="padding: 10px"><?php echo 1 ?></td>
                            <td style="padding: 10px"><?php echo $value[3] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                    <tr>
                        <td style="font-weight: 500; font-size: 18px; padding: 10px;" colspan="4">Tổng tiền</td>
                        <td style="font-weight: 500; font-size: 18px; padding: 10px;" colspan="1"><?= $total ?></td>
                    </tr>
                </table>
            </div>
            <br>
            <div class="row mb10">
                <input type="hidden" name="total" value="<?= $total ?>">
                <input name="btn-confirm-bill" class="mr20" type="submit" value="Đồng ý đặt hàng" />
            </div>
        </form>

    </div>
</main>
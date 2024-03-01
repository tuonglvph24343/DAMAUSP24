<div class="row">
    <article class="col-sm-6 col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading text-center" style="font-size: 24px; font-weight: bold;">
                Cập nhập tài khoản
            </div>
            <div class="panel-body">
                <?php
                if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);
                }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= $email ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="user">Tên đăng nhập:</label>
                        <input type="text" class="form-control" id="user" name="user" value="<?= $user ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu:</label>
                        <input type="password" class="form-control" id="password" name="pass" value="<?= $pass ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Địa chỉ:</label>
                        <input type="text" class="form-control" id="password" name="address" value="<?= $address ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Điện thoại:</label>
                        <input type="text" class="form-control" id="password" name="tel" required value="<?= $tel ?>">
                    </div>
                    <div class="text-center">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input type="submit" value="Cập nhật" name="capnhat" class="btn btn-primary text-center">
                    </div>
                </form>
                <br>
                <?php if (isset($thongbao) && ($thongbao != "")) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= $thongbao ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </article>
</div>
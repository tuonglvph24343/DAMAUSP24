<div class="row">
    <article class="col-sm-6 col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading text-center" style="font-size: 24px; font-weight: bold;">
                Đăng ký thành viên
            </div>
            <div class="panel-body">
                <form action="index.php?act=dangky" method="post">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="user">Tên đăng nhập:</label>
                        <input type="text" class="form-control" id="user" name="user" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu:</label>
                        <input type="password" class="form-control" id="password" name="pass" required>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Đăng ký" name="dangky" class="btn btn-primary text-center">
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
<div class="row">
    <article class="col-sm-6 col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading text-center" style="font-size: 24px; font-weight: bold;">
               Quên mật khẩu
            </div>
            <div class="panel-body">
                <form action="index.php?act=quenmk" method="post">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Gửi" name="guiemail" class="btn btn-primary text-center">
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
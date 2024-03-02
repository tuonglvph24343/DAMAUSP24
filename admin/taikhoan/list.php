<header class="row">
    <h4 class="alert alert-info">Danh sách tài khoản</h3>
        <form>
            <div class="container">

                <div class="table-wrapper">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Mã tài khoản</th>
                                <th>Người dùng</th>
                                <th>Mật khẩu</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                <th>Vai trò</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listtk as $sanpham) {
                                extract($sanpham);
                                echo '
                               <tr>
                               <td>' . $id . '</td>
                               <td>' . $user . '</td>
                               <td>' . $pass . '</td>
                               <td>' . $email . '</td>
                               <td>' . $address . '</td>
                               <td>' . $tel . '</td>
                               <td>' . $role . '</td>
                           </tr>
                               ';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
</header>
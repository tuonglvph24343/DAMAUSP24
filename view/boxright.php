 <!--LOGIN-->
 <div class="panel panel-default nn-panel-login">
     <div class="panel-heading">TÀI KHOẢN</div>
     <div class="panel-body">
         <?php
            if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
            ?>
             <div class="form-group">
                 <div>Xin chào</div>
                 <?= $user ?>
             </div>
             <div class="form-group">
                 <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                 <li><a href="index.php?act=edit_taikhoan">Cập nhập thông tin </a></li>
                 <li><a href="admin/index.php">Đăng nhập admin </a></li>
                 <li><a href="index.php?act=thoat">Thoát </a></li>
             </div>
         <?php
            } else {

            ?>
             <form action="index.php?act=dangnhap" method="post">
                 <div class="form-group">
                     <div>Tên đăng nhập</div>
                     <input name="user" class="form-control" value="">
                 </div>
                 <div class="form-group">
                     <div>Mật khẩu</div>
                     <input name="pass" type="password" class="form-control" value="">
                 </div>
                 <div class="form-group">
                     <div class="form-control">
                         <label class="checkbox-inline">
                             <input name="ghi_nho" type="checkbox" checked>
                             Ghi nhớ tài khoản?
                         </label>
                     </div>
                 </div>
                 <div class="form-group">
                     <input type="submit" value="Đăng nhập" name="dangnhap" class="btn btn-default">
                 </div>
             </form>
             <div class="form-group">
                 <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                 <li><a href="index.php?act=dangky">Đăng ký thành viên</a></li>
             </div>
         <?php } ?>
     </div>
 </div>
 <!--CATALOG-->
 <div class="panel panel-default">
     <div class="panel-heading">DANH MỤC</div>
     <div class="list-group">
         <?php
            foreach ($dmnew as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                echo '<a href="' . $linkdm . '" class="list-group-item">' . $name . '</a>';
            }
            ?>
     </div>
     <div class="panel-footer">
         <form action="index.php?act=sanpham" method="post">
             <input type="text" name="kyw" class="form-control">
             <br>
             <input type="submit" value="Tìm kiếm" name="timkiem">
         </form>
     </div>
 </div>
 <!--FAVORITE-->
 <div class="panel panel-default">
     <div class="panel-heading">TOP 10 YÊU THÍCH</div>
     <div class="panel-body nn-panel-body container-fluid">
         <?php
            foreach ($dstop10 as $top) {
                extract($top);
                $img = $img_path . $img;
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                echo '  <div class="row" style="margin-bottom: 20px !important;">
                        <div class="col-xs-3">
                        <a href="' . $linksp . '">
                        <img src="' . $img . '" style="width:50px">
                        </a>
                        </div>
                        <div class="col-xs-7"><a href="' . $linksp . '">' . $name . '</a></div>
                        </div>';
            }
            ?>
     </div>
 </div>
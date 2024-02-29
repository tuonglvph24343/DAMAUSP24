 <!--LOGIN-->
 <div class="panel panel-default nn-panel-login">
     <div class="panel-heading">TÀI KHOẢN</div>
     <div class="panel-body">
         <form action="tai-khoan/dang-nhap.php" method="post">
             <div class="form-group">
                 <div>Tên đăng nhập</div>
                 <input name="ma_kh" class="form-control" value="">
             </div>
             <div class="form-group">
                 <div>Mật khẩu</div>
                 <input name="mat_khau" type="password" class="form-control" value="">
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
                 <button name="btn_login" class="btn btn-default">Đăng nhập</button>
             </div>
             <div class="form-group">
                 <li><a href="tai-khoan/quen-mk.php">Quên mật khẩu</a></li>
                 <li><a href="tai-khoan/dang-ky.php">Đăng ký thành viên</a></li>
             </div>
         </form>
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
         <!-- <a href="" class='list-group-item'>Đồng hồ đeo tay</a>
                <a href='#' class='list-group-item'>Máy tính xách tay</a>
                <a href='#' class='list-group-item'>Điện thoại</a> -->
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
         <!-- <div class="row" style="margin-bottom: 20px !important;">
                    <div class="col-xs-3"><img src="images/products/1111.jpg" style="width:50px"></div>
                    <div class="col-xs-7"><a href="#">Tên sản phẩm</a></div>
                </div>
                <div class='row' style="margin-bottom: 20px !important;">
                    <div class='col-xs-3'><img src='images/products/1111.jpg' style="width:50px"></div>
                    <div class='col-xs-7'><a href='#'>Tên sản phẩm</a></div>
                </div>
                <div class='row' style="margin-bottom: 20px !important;">
                    <div class='col-xs-3'><img src='images/products/1111.jpg' style="width:50px"></div>
                    <div class='col-xs-7'><a href='#'>Tên sản phẩm</a></div>
                </div>
                <div class='row' style="margin-bottom: 20px !important;">
                    <div class='col-xs-3'><img src='images/products/1111.jpg' style="width:50px"></div>
                    <div class='col-xs-7'><a href='#'>Tên sản phẩm</a></div>
                </div>
                <div class='row' style="margin-bottom: 20px !important;">
                    <div class='col-xs-3'><img src='images/products/1111.jpg' style="width:50px"></div>
                    <div class='col-xs-7'><a href='#'>Tên sản phẩm</a></div>
                </div> -->
     </div>
 </div>
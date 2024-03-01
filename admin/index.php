<?php
include "../model/pdo.php";
include "header.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/tintuc.php";
include "../model/danhmuctintuc.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            /**
         * controllers DANH MỤC
         */
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $listdanhmuc = danhmuc_loadall();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = danhmuc_loadall();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = danhmuc_loadone($_GET['id']);
            }

            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                danhmuc_update($id, $tenloai);
                $thongbao = "Cập thành công";
            }
            $listdanhmuc = danhmuc_loadall();
            include "danhmuc/list.php";
            break;
            /**
             * controllers SẢN PHẨM
             */
        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //  echo "Sorry, there was an error uploading your file.";
                }
                insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                $thongbao = "thêm thành công";
            }
            $listdanhmuc = danhmuc_loadall();
            include "sanpham/add.php";
            break;
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = danhmuc_loadall();
            $listsanpham = sanpham_loadall($kyw, $iddm);
            include "sanpham/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = sanpham_loadall("", 0);
            include "sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = sanpham_loadone($_GET['id']);
            }
            $listdanhmuc = danhmuc_loadall();
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //  echo "Sorry, there was an error uploading your file.";
                }
                sanpham_update($id, $iddm, $tensp, $giasp, $mota, $hinh);
                $thongbao = "Cập thành công";
            }
            $listdanhmuc = danhmuc_loadall();
            $listsanpham = sanpham_loadall();
            include "sanpham/list.php";
            break;
            /**
             * controllers TIN TỨC
             */
        case 'listtintuc':
            $listdanhmuc = tintuc_loadall();
            $listdanhmuctintuc = danhmuctintuc_loadall(); //bổ sung
            include "tintuc/list.php";
            break;
        case 'addtintuc':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tieude = $_POST['tieude'];
                $noidung = $_POST['noidung'];
                $hinhanh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //  echo "Sorry, there was an error uploading your file.";
                }
                insert_tintuc($tieude, $noidung, $hinhanh, $iddm);
                $thongbao = "thêm thành công";
            }
            $listdanhmuc = danhmuctintuc_loadall();
            include "tintuc/add.php";
            break;
        case 'xoatintuc':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_tintuc($_GET['id']);
            }
            $listdanhmuc = tintuc_loadall();
            $listdanhmuctintuc = danhmuctintuc_loadall();  //bổ sung
            include "tintuc/list.php";
            break;
        case 'suatintuc':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = tintuc_loadone($_GET['id']);
            }
            $listdanhmuc = danhmuctintuc_loadall();
            include "tintuc/update.php";
            break;
        case 'updatetintuc':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tieude = $_POST['tieude'];
                $noidung = $_POST['noidung'];
                $hinhanh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //  echo "Sorry, there was an error uploading your file.";
                }
                tintuc_update($id, $iddm, $tieude, $noidung, $hinhanh);
                $thongbao = "Cập thành công";
            }
            $listdanhmuc = danhmuctintuc_loadall();
            $listdanhmuc = tintuc_loadall();
            $listdanhmuctintuc = danhmuctintuc_loadall();  //bổ sung
            include "tintuc/list.php";
            break;

        default:

            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";

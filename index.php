<?php
include "model/pdo.php";
include "model/sanpham.php";
include "view/header.php";
include "global.php";
include "model/danhmuc.php";
$spnew = sanpham_loadall_home();
$dmnew = danhmuc_loadall_home();
$dstop10 = sanpham_loadall_home_top10();
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
        case 'sanphamct':

            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = sanpham_loadone($id);
                extract($onesp);
                $sp_cung_loai = load_sanpham_cungloai($id, $iddm);
                include "view/sanphamchitiet.php";
            } else {
                include "view/home.php";
            }

            break;
            case 'sanpham':

                if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                    $iddm = $_GET['iddm'];
                    $dssp =  sanpham_loadall("", $iddm);
                    $tendm = load_ten_dm($iddm);
                    include "view/sanpham.php";
                } else {
                    include "view/home.php";
                }
    
                break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";

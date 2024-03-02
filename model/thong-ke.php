<?php
require_once 'pdo.php';

function  loadall_thongkes(){
    $sql = "SELECT lo.ma_loai, lo.ten_loai,"
            . " COUNT(*) so_luong,"
            . " MIN(hh.don_gia) gia_min,"
            . " MAX(hh.don_gia) gia_max,"
            . " AVG(hh.don_gia) gia_avg"
            . " FROM hang_hoa hh "
            . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
            . " GROUP BY lo.ma_loai, lo.ten_loai";
    return pdo_query($sql);
}

function loadall_thongke(){
    $sql="select danhmuc.id as madm,danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
    $sql .=" from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
    $sql .= " group by danhmuc.id order by danhmuc.id desc";
    $listtk=pdo_query($sql);
    return $listtk;
}
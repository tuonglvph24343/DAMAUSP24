<?php
function tintuc_loadall(){
    $sql = "select * from tintuc order by id desc";
    $listdanhmuc = pdo_query($sql);
    return   $listdanhmuc;
}
function insert_tintuc($tieude, $noidung, $hinhanh,$iddm)
{
    $sql = "insert into tintuc(tieu_de,noi_dung,hinh_anh,id_danh_muc) values('$tieude','$noidung','$hinhanh','$iddm')";
    pdo_execute($sql);
}
function delete_tintuc($id)
{
    $sql = "delete  from tintuc where id=" . $id;
    pdo_execute($sql);
}
function tintuc_loadone($id)
{
    $sql = "select * from tintuc where id= " . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function tintuc_update($id, $iddm, $tieude, $noidung, $hinhanh)
{
    if ($hinhanh != "") {
        $sql = "update  tintuc set id_danh_muc='" . $iddm . "',  tieu_de='" . $tieude . "', noi_dung='" . $noidung . "',hinh_anh='" . $hinhanh . "' where id=" . $id;
    } else {
        $sql = "update  tintuc set id_danh_muc='" . $iddm . "',  tieu_de='" . $tieude . "', noi_dung='" . $noidung . "' where id=" . $id;
    }

    pdo_execute($sql);
}
?>
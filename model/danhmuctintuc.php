<?php
function danhmuctintuc_loadall(){
    $sql = "select * from danhmuctintuc order by id_danhmuc desc";
    $listdanhmuc = pdo_query($sql);
    return   $listdanhmuc;
}
?>
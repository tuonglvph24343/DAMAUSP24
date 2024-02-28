<?php
function insert_danhmuc($tenloai){
    $sql = "insert into danhmuc(name) values('$tenloai')";
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql = "delete  from danhmuc where id=".$id;
    pdo_execute($sql);
}
function danhmuc_loadall(){
    $sql = "select * from danhmuc order by id desc";
    $listdanhmuc = pdo_query($sql);
    return   $listdanhmuc;
}
function danhmuc_loadone($id){
    $sql = "select * from danhmuc where id= " . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function danhmuc_update($id,$tenloai){
    $sql = "update  danhmuc set name='" .$tenloai. "' where id=".$id;
    pdo_execute($sql);
}


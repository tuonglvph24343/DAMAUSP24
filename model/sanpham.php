<?php
function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
    $sql = "insert into sanpham(name,price,img,mota,iddm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql = "delete  from sanpham where id=".$id;
    pdo_execute($sql);
}
function sanpham_loadall($kyw, $iddm){
    $sql = "select * from sanpham where 1";
    if($kyw!= ""){
        $sql.= " and name LIKE '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.= " and iddm =  '".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham = pdo_query($sql);
    return   $listsanpham;
}
function sanpham_loadone($id){
    $sql = "select * from sanpham where id= " . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function sanpham_update($id,$tenloai){
    $sql = "update  sanpham set name='" .$tenloai. "' where id=".$id;
    pdo_execute($sql);
}
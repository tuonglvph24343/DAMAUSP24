<?php
function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
    $sql = "insert into sanpham(name,price,img,mota,iddm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql = "delete  from sanpham where id=".$id;
    pdo_execute($sql);
}
function sanpham_loadall($kyw="", $iddm=0){
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
function sanpham_update($id,$iddm, $tensp,$giasp,$mota,$hinh){
    if($hinh!= ""){
        $sql = "update  sanpham set iddm='" .$iddm. "',  name='" .$tensp. "', price='" .$giasp. "',mota='" .$mota. "',img='" .$hinh. "' where id=".$id;
    }else{
        $sql = "update  sanpham set iddm='" .$iddm. "',  name='" .$tensp. "',price='" .$giasp. "',mota='" .$mota. "' where id=".$id;
    }
  
    pdo_execute($sql);
}
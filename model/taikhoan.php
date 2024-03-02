<?php
// require_once 'pdo.php';

function taikhoan_insert($user, $pass, $email)
{
    $sql = "INSERT INTO taikhoan (user, pass, email) VALUES ('$user', '$pass', '$email')";
    pdo_execute($sql);
}
function checkuser($user, $pass)
{
    $sql = "Select * from taikhoan where user='" . $user . "' and pass='" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function editAccount($id, $user, $email, $pass, $tel, $address)
{
    $sql = "UPDATE taikhoan SET user='$user', email = '$email', pass = '$pass', tel = '$tel', address = '$address' where id=" . $id;
    pdo_execute($sql);
}
function checkemail($email)
{
    $sql = "Select * from taikhoan where email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function taikhoan_loadall()
{
    $sql = "select * from taikhoan order by id desc";
    $listdanhmuc = pdo_query($sql);
    return   $listdanhmuc;
}

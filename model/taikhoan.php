<?php
// require_once 'pdo.php';

function taikhoan_insert($user, $pass, $email){
    $sql = "INSERT INTO taikhoan (user, pass, email) VALUES ('$user', '$pass', '$email')";
    pdo_execute($sql);
}
function checkuser($user,$pass){
    $sql="Select * from taikhoan where user='".$user."' and pass='".$pass."'";
    $sp=pdo_query_one($sql);
    return $sp;
}

function editAccount($id,$user, $email, $pass, $tel, $address)
    {
        $sql = "UPDATE taikhoan SET user='$user', email = '$email', pass = '$pass', tel = '$tel', address = '$address' where id=".$id;
        pdo_execute($sql);
    }
    function checkemail($email){
        $sql="Select * from taikhoan where email='".$email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
// function user_update($username,$password,$email,$diachi,$dienthoai,$role,$id){
//     $sql = "UPDATE user SET username=?,password=?,email=?,diachi=?,dienthoai=?,role=? WHERE id=?";
//     pdo_execute($sql,$username,$password,$email,$diachi,$dienthoai,$role,$id);    
// }


// function get_user($id){
//     $sql="Select * from user where id=? ";
//     return pdo_query_one($sql, $id);
// }

// function user_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro){
//     $sql = "UPDATE user SET mat_khau=?,ho_ten=?,email=?,hinh=?,kich_hoat=?,vai_tro=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat==1, $vai_tro==1, $ma_kh);
// }

// function user_delete($ma_kh){
//     $sql = "DELETE FROM user  WHERE ma_kh=?";
//     if(is_array($ma_kh)){
//         foreach ($ma_kh as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_kh);
//     }
// }

// function user_select_all(){
//     $sql = "SELECT * FROM user";
//     return pdo_query($sql);
// }

// function user_select_by_id($ma_kh){
//     $sql = "SELECT * FROM user WHERE ma_kh=?";
//     return pdo_query_one($sql, $ma_kh);
// }

// function user_exist($ma_kh){
//     $sql = "SELECT count(*) FROM user WHERE $ma_kh=?";
//     return pdo_query_value($sql, $ma_kh) > 0;
// }

// function user_select_by_role($vai_tro){
//     $sql = "SELECT * FROM user WHERE vai_tro=?";
//     return pdo_query($sql, $vai_tro);
// }

// function user_change_password($ma_kh, $mat_khau_moi){
//     $sql = "UPDATE user SET mat_khau=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau_moi, $ma_kh);
// }
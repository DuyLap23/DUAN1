<?php
// require_once "./dao/pdo.php";
// Thêm khách hàng
function them_khach_hang($mat_khau, $ho_ten, $email,){
    // Chuẩn bị truy vấn với tham số
    $sql = "INSERT INTO khach_hang(mat_khau, ho_ten, email) VALUES (?, ?, ?)";
    pdo_execute($sql, $mat_khau, $ho_ten, $email);
}   

// Đăng nhập
function check_user($mat_khau, $ho_ten){
    $sql ="SELECT * FROM khach_hang WHERE ho_ten='".$ho_ten."' AND mat_khau='".$mat_khau."'";
    return pdo_query_one($sql);
}   

// Sửa khách hàng
function sua_khach_hang($ma_kh, $mat_khau, $ho_ten, $email, $dia_chi, $phone){

    // Chuẩn bị truy vấn với tham số
    $sql = "UPDATE khach_hang SET mat_khau = ?, ho_ten = ?, email = ?, dia_chi = ?, phone = ?  WHERE ma_kh = ?";
    pdo_execute($sql, $mat_khau, $ho_ten, $email, $dia_chi, $phone, $ma_kh);

}

// Xóa khách hàng
function xoa_khach_hang($ma_kh){
    $sql = "DELETE FROM khach_hang WHERE ma_kh=?";
    pdo_execute($sql, $ma_kh);
}


// Quên mật khẩu
function check_email($email){
    $sql ="SELECT * FROM khach_hang WHERE email='".$email."'";
    $email =  pdo_query_one($sql);
    return $email;
} 

// Hiển thị khách hàng
function hien_thi_khach_hang(){
    $sql = "SELECT * FROM khach_hang";
    return pdo_query($sql);
}

// Hiển thị 1 khách hàng
// function hien_thi_mot_khach_hang($ma_kh){
//     $sql = "SELECT * FROM khach_hang WHERE ma_kh=?";
//     return pdo_query_one($sql, $ma_kh);
// }

?>
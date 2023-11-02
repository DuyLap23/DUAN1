<?php
require_once "pdo.php";

// Thêm hàng hóa
function them_hang_hoa($ten_hh, $don_gia, $hinh,  $mo_ta,  $ma_loai){
    // Chuẩn bị truy vấn với tham số
    $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, hinh,  mo_ta,  ma_loai) VALUES (?, ?, ?, ?, ?)";
    pdo_execute($sql, $ten_hh, $don_gia, $hinh,  $mo_ta,  $ma_loai);

}

// Sửa hàng hóa
function cap_nhat_hang_hoa($ten_hh, $don_gia, $hinh,  $mo_ta,  $ma_loai, $ma_hh){
    // Chuẩn bị truy vấn với tham số
    $sql = "UPDATE hang_hoa SET ten_hh = ?, don_gia = ?, hinh = ?,  mo_ta = ?,  ma_loai = ? WHERE ma_hh = ?";
    pdo_execute($sql, $ten_hh, $don_gia, $hinh, $mo_ta, $ma_loai, $ma_hh);

}

// Xóa hàng hóa
function xoa_hang_hoa($ma_hh) {
    // Tiếp theo, xóa sản phẩm
    $sql = "DELETE FROM hang_hoa WHERE ma_hh = ?";
    pdo_execute($sql, $ma_hh);
}


// Hiển thị tất cả
function hang_hoa_select($key="", $ma_loai=0){
    $sql = "SELECT *, COUNT(binh_luan.id) AS sobinhluan FROM hang_hoa JOIN binh_luan ON binh_luan.idpro = hang_hoa.ma_hh
    GROUP BY hang_hoa.ma_hh";
    if ($key != "") {
        $sql .= " AND ten_hh LIKE '%".$key."%'";
    }
    if ($ma_loai > 0) {
        $sql .= " AND ma_loai ='".$ma_loai."'";
    }
    $sql .=" ORDER BY ma_hh DESC";
    return pdo_query($sql);
}

function hang_hoa_selectAll($key, $ma_loai){
    $sql = "SELECT * FROM hang_hoa WHERE 1";
    if ($key != "") {
        $sql .= " AND ten_hh LIKE '%".$key."%'";
    }
    if ($ma_loai > 0) {
        $sql .= " AND ma_loai ='".$ma_loai."'";
    }
    $sql .=" ORDER BY ma_hh DESC";
    return pdo_query($sql);
}

function load_thong_ke() {
    $sql = "SELECT dm.ma_loai, dm.ten_loai, COUNT(*) 'soluong', MIN(don_gia) 'gia_min', MAX(don_gia) 'gia_max', 
    AVG(don_gia) 'gia_avg' FROM loai dm JOIN hang_hoa sp ON dm.ma_loai=sp.ma_loai GROUP BY dm.ma_loai, dm.ten_loai ORDER BY soluong DESC";
    return pdo_query($sql);
}

function hang_hoa_selectAll_home(){
    $sql = "SELECT * FROM hang_hoa WHERE 1 ORDER BY ma_hh DESC LIMIT 0,9 ";
    return pdo_query($sql);
}

// Hiển thị top 10
function hang_hoa_selectAll_top10(){
    $sql = "SELECT * FROM hang_hoa WHERE 1 ORDER BY so_luot_xem DESC LIMIT 0,10";
    return pdo_query($sql);
}

// Lấy thông tin 1 mã hàng hóa
function select_hang_hoa_one($ma_hh){
    $sql = "SELECT * FROM hang_hoa WHERE ma_hh=?";
    return pdo_query_one($sql, $ma_hh);
}

// Lấy thông tin 1 mã hàng hóa
function select_hang_hoa_cungloai($ma_hh){
    $sql = "SELECT * FROM hang_hoa WHERE ma_loai = ma_loai   AND ma_hh <> ?";
    return pdo_query($sql, $ma_hh);
}


// Hiển thị theo loại
function display_hang_hoa_by_loai($ma_loai) {
    // Truy vấn danh sách hàng hóa thuộc loại có mã là $ma_loai
    $sql = "SELECT * FROM hang_hoa WHERE ma_loai = ?";
    return pdo_query($sql, $ma_loai);
}

// Load tên danh mục
function load_ten_dm($ma_loai) {
    if($ma_loai>0){
    $sql = "SELECT * FROM loai WHERE ma_loai =".$ma_loai;
    $dm = pdo_query_one($sql);
    extract($dm);
    return $ten_loai;
    }else{
        return"";
    }

}
?>


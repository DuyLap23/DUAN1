<?php
// Hiển thị loại
function loai_selectAll(){
    $sql = "SELECT * FROM loai ORDER BY ma_loai DESC";
    return pdo_query($sql);
}

// Thêm mới loại
function them_loai($ten_loai){
    $sql = "INSERT INTO loai(ten_loai) VALUE (?)";
    pdo_execute($sql, $ten_loai);
}

// Xóa
function xoa_loai($ma_loai){
    $sql = "DELETE FROM loai  WHERE ma_loai=?";
    pdo_execute($sql, $ma_loai);
}

// Lấy thông tin 1 mã loại
function select_loai_one($ma_loai){
    $sql = "SELECT * FROM loai WHERE ma_loai=?";
    return pdo_query_one($sql, $ma_loai);
}

// Cập nhật dữ liệu
function edit_loai($ma_loai, $ten_loai){
    $sql = "UPDATE loai SET ten_loai=? WHERE ma_loai=?";
    pdo_execute($sql, $ten_loai, $ma_loai);
}
?>
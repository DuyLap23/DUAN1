<?php
require_once "../model/pdo.php";
require_once "../model/loai.php";
require_once "../model/sanpham.php";
require_once "../model/tai_khoan.php";
require_once "../model/binhluan.php";
// HEADER
include "header.php";
// MAIN
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {

        // Danh Mục
        case 'adddm':
            if(isset($_POST['themmoi']) && $_POST['themmoi']){
                $ten_loai = $_POST['ten_loai'];
                them_loai($ten_loai);
                $thongbao = "Thêm thành công";
            }
            include "danh_muc/add.php";
            break;

        case 'listdm':
            $danhmuc = loai_selectAll();
            include "danh_muc/listdm.php";
            break;

        case 'xoadm':
            if(isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)){
                $ma_loai = $_GET['ma_loai'];
                xoa_loai($_GET['ma_loai']);
            }
            $danhmuc = loai_selectAll();
            include "danh_muc/listdm.php";
            break;

        case 'suadm':
            if(isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)){
                $dm = select_loai_one($_GET['ma_loai']);
            }
            include "danh_muc/update.php";
            break;
        
        case 'updatedm':
            if(isset($_POST['capnhat']) && $_POST['capnhat']){
                $ma_loai = $_POST['ma_loai'];
                $ten_loai = $_POST['ten_loai'];
                edit_loai($ma_loai, $ten_loai);
                $thongbao = "cập nhật thành công";
            }
            $danhmuc = loai_selectAll();
            include "danh_muc/listdm.php";
            break;

        // SẢN PHẨM
        case 'addsp':
            if(isset($_POST['themmoi']) && $_POST['themmoi']){
                $ten_hh = $_POST['ten_hh'];
                $don_gia = $_POST['don_gia'];
                $mo_ta = $_POST['mo_ta'];
                $ma_loai = $_POST['ma_loai'];
                $file = $_FILES['hinh'];
                $hinh = $file['name'];
                move_uploaded_file($file['tmp_name'], "./image/" .$hinh);
                
                them_hang_hoa($ten_hh, $don_gia, $hinh,  $mo_ta,  $ma_loai);
                $thongbao = "Thêm thành công";
            }
            $danhmuc = loai_selectAll();
            include "san_pham/add.php";
            break;

        case 'listsp':
            if (isset($_POST['listloc']) && $_POST['listloc']) {
                $key = $_POST['key'];
                $ma_loai = $_POST['ma_loai'];
            }else{
                $key = '';
                $ma_loai = 0;
            }
            $listsp =  hang_hoa_selectAll($key, $ma_loai);
            $danhmuc = loai_selectAll();
            include "san_pham/listsp.php";
            break;

        case 'xoasp':
            if(isset($_GET['ma_hh']) && ($_GET['ma_hh'] > 0)){
                $ma_hh = $_GET['ma_hh'];
                xoa_hang_hoa($ma_hh);
            }
            $listsp = hang_hoa_selectAll("", 0);
            include "san_pham/listsp.php";
            break;

        case 'suasp':
            if(isset($_GET['ma_hh']) && ($_GET['ma_hh'] > 0)){
                $ma_hh = $_GET['ma_hh'];
                $sp = select_hang_hoa_one($ma_hh);
            }
            $danhmuc = loai_selectAll();
            $listsp = hang_hoa_selectAll("", 0);
            include "san_pham/update.php";
            break;
        
        case 'updatesp':
            if(isset($_POST['capnhat']) && $_POST['capnhat']){
                $ten_hh = $_POST['ten_hh'];
                $ma_hh = $_POST['ma_hh'];
                $don_gia = $_POST['don_gia'];
                $mo_ta = $_POST['mo_ta'];
                $ma_loai = $_POST['ma_loai'];
                
                $file = $_FILES['hinh'];
                if ($file['size'] > 0) {
                    $hinh = $file['name'];
                    move_uploaded_file($file['tmp_name'], "./image/" . $hinh);
                } else {
                    // Nếu không có tệp tải lên, giữ nguyên ảnh cũ bằng cách lấy giá trị từ trường ẩn
                    $hinh = $_POST['old_image'];
                }               
                // them_hang_hoa($ten_hh, $don_gia, $hinh,  $mo_ta,  $ma_loai);
                cap_nhat_hang_hoa($ten_hh, $don_gia, $hinh,  $mo_ta,  $ma_loai, $ma_hh);
                $thongbao = "cập nhật thành công";
            }
            $listsp = hang_hoa_selectAll("", 0);
            include "san_pham/listsp.php";
            break;
        // Tài khoản
        case 'dskh':
            $danhsachtk = hien_thi_khach_hang();
            include "taikhoan/danhsachtk.php";
            break;
        case 'xoatk':
            if(isset($_GET['ma_kh']) && ($_GET['ma_kh'] > 0)){
                $ma_kh= $_GET['ma_kh'];
                xoa_khach_hang($ma_kh);
            }
            $danhsachtk = hien_thi_khach_hang();
            include "taikhoan/danhsachtk.php";
            break;

        // Bình Luận
        case 'dsbl':
            $danhsachbl = hien_thi_binh_luan();
            include "binhluan/danhsachbl.php";
            break;
        case 'xoabl':
            if(isset($_GET['id']) && ($_GET['id'] > 0)){
                $id= $_GET['id'];
                xoa_binh_luan($id);
            }
            $danhsachbl = hien_thi_binh_luan();
            include "binhluan/danhsachbl.php";
            break;
        // Thống kê
        case 'bieudo':
            $listsp = load_thong_ke();
            include "./thongke/bieudo.php";
            break;
        case 'thongke':
            $listsp = load_thong_ke();
            include "./thongke/thongke.php";
            break;
        case 'bieudobl':
            $listspp = hang_hoa_select();
            include "./thongke/thongkebl.php";
            break;
        default:
            include "home.php";
            break;
    }
}else{
    include "home.php";
}
// FOOTER
include "footer.php";
?>
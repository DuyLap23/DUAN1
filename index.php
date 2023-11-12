<?php

require "Models/connect.php";
require "Models/danhmuc.php";
require "Models/sanpham.php";
require "Models/binhluan.php";
require "Models/cart.php";
require "Models/khachhang.php";

$loadall_sanpham=loadall_sanpham_home();
$sellect_categories = sellect_all_categories();

require "View/Home/header.php";
if (isset($_GET['act']) && ($_GET['act']) != "") {
    $act = $_GET['act'];
    switch ($act) {

        // chitietdm
        case 'chitietdm':
            if (isset($_GET['id_cate']) && ($_GET['id_cate'])) {
                $category_id = $_GET['id_cate'];

            } else {
                $category_id = 0;
            }
            // Box right tìm kiếm
            if (isset($_POST['key']) && ($_POST['key'] != "")) {
                $key = $_POST['key'];
            }else{
                $key ="";
            }
            // Hiển thị sp theo danh mục và tìm kiếm tên sp
            $slect_ma_loai = hang_hoa_selectAll($key, $category_id);
            $danhmucsp = load_ten_dm($category_id);

            include "View/home/header.php";
            break;


        // chi tiết sp 
        case "chitietsp":
            include "View/Sanpham/spchitiet.php";
            break;

        // đăng nhập đăng kí 
        case "account":
            include "View/Account/account.php";
            break;

        //giỏ hàng
        case "cart":
            include "View/Giohang/cart.php";
            break;

        // tất cả sản phẩm
        case "pro-all":
            include "View/Sanpham/product-all.php";
            break;

        default:
            include "View/Home/home.php";
            break;
    }
} else {
    include "View/Home/home.php";
}
include "View/Home/footer.php";

?>
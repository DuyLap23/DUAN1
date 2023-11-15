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
            $slect_ma_loai = loadall_sanpham($key, $category_id);
            $danhmucsp = load_ten_dm($category_id);

            include "View/home/header.php";
            break;


        // chi tiết sp 
        case "chitietsp":
          
                if(isset($_GET['idct_sp'])&&($_GET['idct_sp'] > 0)){
                    $product_id = $_GET['idct_sp'];
                    $chitietsp = loadone_sanpham($product_id);
                    extract($chitietsp);
                    // lấy mã danh mục
                    // require "Admin/imageArray.php";
                    // uploadImages();
                    $sp_cung_loai = select_sp_cungloai($product_id);
                    include "View/Sanpham/spchitiet.php";  
                }else{
                    include "View/Home/home.php";
                }
            break;

        // đăng nhập đăng kí 
        case "account":
            include "View/Account/account.php";
            break;

        // giỏ hàng
        case 'addtocard':
            if (isset($_POST['addtocard']) && $_POST['addtocard']) {
                $product_id = $_POST['product_id'];
                $product_name = $_POST['product_name'];
                $price = $_POST['price'];
              
                $quantity = 1;
                $tong_tien = $quantity * $price;
                $addToCart = [$product_id, $product_name, $price, $quantity, $tong_tien];
                array_push($_SESSION['mycard'], $spadd);
            }
            include "View/Giohang/cart.php";
            break;

        case 'deletecard':
            if (isset($_GET['idcarfd'])) {
                array_splice($_SESSION['mycard'], $_GET['idcarfd'], 1);
            }else{
                $_SESSION['mycard'] = [];
            }
            header('location: index.php?act=viewcard');
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
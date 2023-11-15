<?php
require "header.php";
require "../Models/connect.php";
require "../Models/danhmuc.php";
require "../Models/sanpham.php";
require "../Models/binhluan.php";
require "../Models/thongke.php";
require "../Models/cart.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        case 'home':
            include "home.php";
            break;


        // Danh mục
        case 'listdm':
            if (isset($_POST['search']) && ($_POST['search'])) {
                $sea = $_POST['sea'];
            } else {
                $sea = '';
            }
            $sellect_categories = sellect_all_categories();
            include "Danhmuc/list.php";
            break;

        // add dm 
        case "createdm":
            if (isset($_POST['submitdm']) && $_POST['submitdm']) {
                $category_name = $_POST['category_name'];
                insert_categories($category_name);
                $Notification = "Thêm Thành Công";
            }
            include "Danhmuc/create.php";
            break;

        // update dm 
        case 'editdm':
            if (isset($_GET['id_cate']) && ($_GET['id_cate'] > 0)) {

                $one_categories = sellect_one_categories($_GET['id_cate']);
            }
            include "Danhmuc/update.php";
            break;

        case 'updatedm':
            if (isset($_POST['updatedm']) && $_POST['updatedm']) {
                $category_id = $_POST['category_id'];
                $category_name = $_POST['category_name'];
                update_categories($category_id, $category_name);
                $Notification = "Cập Nhật Thành Công";
            }
            $sellect_categories = sellect_all_categories();
            header('location: index.php?act=listdm');
            break;


        // delete dm 
        case 'deletedm':
            if (isset($_GET['id_cate']) && ($_GET['id_cate'] > 0)) {
                $id_category = $_GET['id_cate'];
                delete_categories($_GET['id_cate']);
            }
            $sellect_categories = sellect_all_categories();
            include "Danhmuc/list.php";
            break;


        // Sản phẩm 
        case 'listsp':
            if (isset($_POST['locsp']) && ($_POST['locsp'])) {
                $search = $_POST['search'];
                $category_id = $_POST['category_id'];
            } else {
                $search = '';
                $category_id = 0;
            }
            $listsanpham = loadall_sanpham($search, $category_id);
            $sellect_categories = sellect_all_categories();

            include "Sanpham/list.php";
            break;

        // add sp 
        case "createsp":
            require 'imageArray.php';
            // kiểm tra xem người dùng có click vào nút add hay ko
            if (isset($_POST['submitsp']) && ($_POST['submitsp'])) {
                
                $product_name = $_POST['product_name'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                $category_id = $_POST['category_id'];
                
                insert_sanpham($product_name, uploadImages(), $price, $description, $category_id);
                $Notification = "Thêm thành công";
            }

            $sellect_categories = sellect_all_categories();
            include "Sanpham/create.php";
            break;

        //xoa sp
        case 'deletesp':
            if (isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)) {
                delete_sanpham($_GET['id_sp']);
            }
            $listsanpham = loadall_sanpham("", 0);
            ;
            include "Sanpham/list.php";
            break;

        // edit sp 
        case 'editsp':

            if (isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)) {
                $id_sp = $_GET['id_sp'];

                $sanpham = loadone_sanpham($id_sp);


            }
            $sellect_categories = sellect_all_categories();

            include "Sanpham/update.php";
            break;
        // update sp 
        case 'updatesp':
            if (isset($_POST['updatesp'])) {
                $product_id = $_POST['product_id'];
                $category_id = $_POST['category_id'];
                $price = $_POST['price'];
                $product_name = $_POST['product_name'];
                $description = $_POST['description'];
                require 'imageArray.php';

                // $category_id =$_POST['category_id'];$image = $_FILES['image']['name'];
                //     $target_dir = "../image/";
                // $target_file = $target_dir . basename($_FILES["image"]["name"]);
                // if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                //     // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                // } else {
                //     // echo "Sorry, there was an error uploading your file.";
                // }
                update_sanpham($product_id, $product_name, uploadImages(), $price, $description, $category_id);
                $Notification = "Sửa thành công";
            }

            $sellect_categories = sellect_all_categories();
            $listsanpham = loadall_sanpham("", 0);
            include "Sanpham/list.php";
            break;


        // Bình Luận
        case 'listbinhluan':
            include "Binhluan/list.php";
            break;

        // xóa bl 
        case 'deletebl':
            include "Binhluan/delete.php";
            break;



        // Khách Hàng 
        case 'listkhachhang':
            include "Khachhang/list.php";
            break;

        // xóa kh 
        case 'deletekh':
            include "Khachhang/delete.php";
            break;


        // Đơn Hàng
        case 'listdonhang':
            include "Qldonhang/list.php";
            break;

        // dh chi tiết
        case 'order_detail':
            include "Qldonhang/donhangchitiet.php";
            break;

        // Thống Kê
        case 'listthongke':
            include "Thongke/thongke.php";
            break;

        //  Biểu đồ 
        case 'bieudo':
            include "Thongke/bieudo.php";
            break;



        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
// FOOTER
include "footer.php";
?>
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
            $sellect_categories = sellect_all_categories();
            include "Danhmuc/list.php";
            break;

        // add dm 
        case "createdm":
            if (isset($_POST['submit']) && $_POST['submit']) {
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
            if (isset($_POST['update']) && $_POST['update']) {
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

                // Danh mục con 
                case "createdm_items":
                    if (isset($_POST['submit']) && $_POST['submit']) {
                        $category_name_items = $_POST['category_name_items'];
                        insert_categories($category_name);
                        $Notification = "Thêm Thành Công";
                    }
                    $one_categories_items = sellect_one_categories($category_id);

                    include "Danhmuc/Danhmuccon/create.php";
                    break;
                case "listdm_items":

                    // lấy ra tên danh mục cha 
                    $one_categories_items = sellect_one_categories($_GET['id_cate']);
                    
                    // tìm trong Danhmuc/danhmuccon/list.php lấy ra tên danh mục con
                    $sellect_all_categories_item=sellect_all_categories_item($_GET['id_cate']);
                    
                    include "Danhmuc/Danhmuccon/list.php";
                    break;
                case "editdm_items":
                    include "Danhmuc/Danhmuccon/update.php";
                    break;
                case "updatedm_items":
                    include "Danhmuc/Danhmuccon/list.php";
                    break;
                case "deletedm_items":
                    include "Danhmuc/Danhmuccon/list.php";
                    break;


        // Sản phẩm 
        case 'listsp':
            include "Sanpham/list.php";
            break;

        // add sp 
        case "createsp":
            include "Sanpham/create.php";
            break;

        // edit sp 
        case 'editsp':
            include "Sanpham/update.php";
            break;
        // update sp 
        case 'updatesp':
            include "Sanpham/update.php";
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
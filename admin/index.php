<?php
include "header.php";




if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        case 'home':
            include "home.php";
            break;


        // Danh mục
        case 'listdm':
            include "Danhmuc/list.php";
            break;

                // add dm 
                case "createdm":
                    include "Danhmuc/create.php";
                    break;

                // update dm 
                case 'updatedm':
                    include "Danhmuc/update.php";
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


        // Khách Hàng 
        case 'listkhachhang':
            include "Khachhang/list.php";
            break;


        // Đơn Hàng
        case 'listdonhang':
            include "Qldonhang/list.php";
            break;



        // Thống Kê
        case 'listthongke':
            include "Thongke/thongke.php";
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
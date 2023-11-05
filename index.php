<?php
require "View/Home/header.php";
require "Models/connect.php";

if (isset($_GET['act']) && ($_GET['act']) != "") {
    $act = $_GET['act'];
    switch ($act) {

        // chi tiết sp 
        case "chitietsp":
            include "View/Sanpham/spchitiet.php";
            break;
        
        // đăng nhập đăng kí 
        case"account":
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
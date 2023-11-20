<?php
ob_start();
session_start();
require "Models/connect.php";
require "Models/danhmuc.php";
require "Models/sanpham.php";
require "Models/binhluan.php";
require "Models/cart.php";
require "Models/khachhang.php";
require "Models/account.php";

$userID = $_SESSION['user_id'] ?? 0;
$user = select__userByid($userID);

$loadall_sanpham = loadall_sanpham_home();
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

            // Hiển thị sp theo danh mục và tìm kiếm tên sp
            $slect_ma_loai = loadall_sanpham($key, $category_id);
            $danhmucsp = load_ten_dm($category_id);

            include "View/home/header.php";
            break;


        // chi tiết sp 
        case "chitietsp":

            if (isset($_GET['idct_sp']) && ($_GET['idct_sp'] > 0)) {
                $product_id = $_GET['idct_sp'];
                $chitietsp = loadone_sanpham($product_id);
                extract($chitietsp);
                // lấy mã danh mục
                // require "Admin/imageArray.php";
                // uploadImages();
                // $loadall_pro_detail= loadall_pro_detail($product_id);

                $sp_cung_loai = select_sp_cungloai($product_id);
                $load_all_binhluan = loadall__comment__Byid($product_id);
                include "View/Sanpham/spchitiet.php";
            } else {
                $product_id = "";
            }

            if(isset($_POST['guibinhluan'])) {
                $productId = $_POST["product_id"];
                $noidung = $_POST['noidung'];
                insert__comment($userID,$productId,$noidung);
                header('Location:'.$_SERVER['HTTP_REFERER']);
            }

            
            break;
        case "sanpham":
            if (isset($_POST['key']) && ($_POST['key'] != "")) {
                $key = $_POST['key'];
            } else {
                $key = "";
            }
            if (isset($_GET['id_cate']) && ($_GET['id_cate'] > 0)) {
                $idcate = $_GET['id_cate'];

            } else {
                $idcate = 0;
            }
            $dssp = loadall_sanpham($key, $idcate);
            $tendm = load_ten_dm($idcate);
            include "View/Sanpham/product-all.php";
            break;
        // đăng nhập đăng kí 
        case"account":
            // Đăng ký
            if(isset($_POST['signup'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $name = $_POST['name'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];

                dangky($name,$email,$password,$phone,$address,0);
                echo "<script>alert('Đăng ký thành công!')</script>";
            }

            // Đăng nhập
            $err = "";

            if(isset($_POST['login'])) {
                $email = $_POST['emailLogin'];
                $password = $_POST['passwordLogin'];
                $check = true;

                $checkTaikhoan = check__taikhoan($email,$password);
                
                if($checkTaikhoan) {
                    $_SESSION['user_id'] = $checkTaikhoan['user_id'];
                    // die();
                    header('Location: index.php');
                    die;
                } else {
                    $err = "Tài khoản hoặc mật khẩu không đúng";
                    $check = false;
                }

            }

            
            include "View/Account/account.php";
            break;
        case "logout":
            logout();
            break;

        case "user":
            if(!$user) {
                header("location:index.php?act=account");
                die;
            }
            
            if($_SERVER['REQUEST_METHOD'] == "POST") {
                updateAccount($_POST['name'],$_POST['email'],$_POST['password'],$_POST['phone'],$_POST['address'],$userID);
                echo "<script>alert('Bạn đã đổi thông tin thành công')</script>";
            }
            $load__thontin = select__userByid($userID);
            include "View/Account/userAccount.php";
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
            } else {
                $_SESSION['mycard'] = [];
            }
            header('location: index.php?act=viewcard');
            break;

        // tất cả sản phẩm


        default:
            include "View/Home/home.php";
            break;
    }
} else {
    include "View/Home/home.php";
}
include "View/Home/footer.php";

?>
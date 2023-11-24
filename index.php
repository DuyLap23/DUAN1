<?php
ob_start();
session_start();

require "Models/connect.php";
if (!isset($_SESSION['cart']))
    $_SESSION['cart'] = [];
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
        // case 'chitietdm':
        //     if (isset($_GET['id_cate']) && ($_GET['id_cate'])) {
        //         $category_id = $_GET['id_cate'];

        //     } else {
        //         $category_id = 0;
        //     }
        //     // Box right tìm kiếm

        //     // Hiển thị sp theo danh mục và tìm kiếm tên sp
        //     $slect_ma_loai = loadall_sanpham($key, $category_id);
        //     $danhmucsp = load_ten_dm($category_id);

        //     include "View/home/header.php";
        //     break;


        // chi tiết sp 
        case "chitietsp":

            if (isset($_GET['idct_sp']) && ($_GET['idct_sp'] > 0)) {
                $product_id = $_GET['idct_sp'];

                $chitietsp = loadone_sanpham($product_id);
                extract($chitietsp);

                $sp_cung_loai = select_sp_cungloai($product_id, $category_id);
                $load_all_binhluan = loadall__comment__Byid($product_id);
                $loadall_pro_detail = get_product_details($product_id);

                include "View/Sanpham/spchitiet.php";
            } else {
                $product_id = "";
            }

            if (isset($_POST['guibinhluan'])) {
                $productId = $_POST["product_id"];
                $noidung = $_POST['noidung'];
                insert__comment($userID, $productId, $noidung);
                header('Location:' . $_SERVER['HTTP_REFERER']);
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


            
            $limit = 3;
            $page = $_GET['page'] ?? 1;
            $start = ($page - 1) * $limit;
            $countsp=count(loadall_sanpham($key, $idcate ,0,999999999));
            $dssp = loadall_sanpham($key, $idcate ,$start,$limit);
            $tendm = load_ten_dm($idcate);
           
            include "View/Sanpham/product-all.php";
            break;


        // đăng nhập đăng kí 
        case "account":
            // Đăng ký
            if (isset($_POST['signup'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $name = $_POST['name'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];

                dangky($name, $email, $password, $phone, $address, 0);
                echo "<script>alert('Đăng ký thành công!')</script>";
            }

            // Đăng nhập
            $err = "";

            if (isset($_POST['login'])) {
                $email = $_POST['emailLogin'];
                $password = $_POST['passwordLogin'];
                $check = true;

                $checkTaikhoan = check__taikhoan($email, $password);

                if ($checkTaikhoan) {
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
            if (!$user) {
                header("location:index.php?act=account");
                die;
            }

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                updateAccount($_POST['name'], $_POST['email'], $_POST['password'], $_POST['phone'], $_POST['address'], $userID);
                echo "<script>alert('Bạn đã đổi thông tin thành công')</script>";
            }
            $load__thontin = select__userByid($userID);
            include "View/Account/userAccount.php";
            break;
        case "viewCart":
            if (!$user) {
                header("location:index.php?act=account");
                die;
            }
            include "View/Giohang/cart.php";
            break;


        // giỏ hàng 
        case 'addtocart':
            if (isset($_POST['addcart']) && ($_POST['addcart'])) {
                $product_id = $_POST['product_id'];
                $product_name = $_POST['product_name'];
                $price = $_POST['price'];
                if (isset($_POST['selected_size']) && ($_POST['selected_size'] != "")) {
                    $size = $_POST['selected_size'];
                } else {
                    $size = "";
                }
                if (isset($_POST['selected_quantity']) && ($_POST['selected_quantity'] > 0)) {
                    $quantity = $_POST['selected_quantity'];
                } else {
                    $quantity = 1;
                }

                $image = $_POST['img'];

                $fg = 0;
                $i = 0;
                foreach ($_SESSION['cart'] as $key => $value):
                    if ($value[0] == $product_id && $value[4] == $size) {
                        $newQuantity = $value[5] + $quantity;
                        $_SESSION['cart'][$i][5] = $newQuantity;

                        $fg = 1;
                        break;
                    }
                    $i++;
                endforeach;

                if ($fg == 0) {
                    $addToCart = [$product_id, $product_name, $image, $price, $size, $quantity];
                    $_SESSION['cart'][] = $addToCart;
                }

                header('Location: index.php?act=viewCart');
            }

            break;



        // tất cả sản phẩm
        case 'deleteCart':
            if (isset($_GET['idCart']) && ($_GET['idCart'] > 0)) {
                if (isset($_SESSION['cart']) && (count($_SESSION['cart']) > 0))
                    array_splice($_SESSION['cart'], $_GET['idCart'], 1);

            } else {
                if (isset($_SESSION['cart']))
                    unset($_SESSION['cart']);
            }

            if (isset($_SESSION['cart']) && (count($_SESSION['cart']) > 0)) {
                header('Location: index.php?act=viewCart');
            } else {
                header('Location: index.php');
            }
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
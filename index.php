<?php
if (isset($_GET['act'])&&($_GET['act'])!="") {
    $act = $_GET['act'];
    switch ($act) {


default:
            include "./view/home.php"; 
            break;
    }
}else{
   include "./view/home.php"; 
}
include "./view/footer.php";

?>
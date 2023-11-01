<?php
$this->view("partitions/header.php");
$this->view("question/detail.php",[
    'pageTitle'=>$pageTitle
]);
$this->view("partitions/footer.php");
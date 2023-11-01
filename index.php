<?php
include "Core/Database.php";
include "Controllers/BaseController.php";
include "Models/BaseModel.php";
//lấy tên Controller (tên này sẽ bằng với tên file controller) để tí include vào đây
$controllerName = (ucfirst($_GET['controller'] ?? "Home")) . "Controller";
$actionName = $_GET['action'] ?? "show";
//thêm controller
include "Controllers/" . $controllerName . ".php";
//tạo đối tượng controller
$objectController = new $controllerName();
//gọi đến phương thức của đổi tượng controller được tùy biến bằng $_GET['action']
//nếu action không tồn tại thì mặc định sẽ gọi phương thức show() trong controller đó
$objectController->$actionName();
?>

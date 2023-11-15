<?php
function insert_sanpham($product_name, $image, $price, $description, $category_id)
{
    // $sql = "INSERT INTO product(product_name, image, price, description, category_id) values(?,?,?,?,?)";
    $sql = "INSERT INTO product_detail( product_id,product_name,price,category_id,size,quantity)
    SELECT product.product_id,product.product_name,product.price,product.category_id,size,quantity
    FROM (SELECT product.product_id,product.product_name,product.price,product.category_id,size,quantity
      FROM product
      LEFT JOIN product_detail ON product.product_id = product_detail.product_id
    ) AS t
  ";
    pdo_execute($sql, $product_name, $image, $price, $description, $category_id);
}
function loadall_sanpham($search = "", $category_id = 0)
{
    $sql = "select * from product where 1";
    if ($search != "") {
        $sql .= " and product_name like '%" . $search . "%'";
    }
    if ($category_id > 0) {
        $sql .= " and category_id= '" . $category_id . "'";
    }
    $sql .= " order by product_id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
// SELECT
//   product.product_id,
//   product.product_name,
//   product.price,
//   product_detail.size,
//   product_detail.quantity
// FROM
//   product
// JOIN
//   product_detail
// ON
//   product.product_id = product_detail.product_id

function delete_sanpham($product_id)
{
    $sql = "delete from product where product_id=" . $product_id;
    pdo_execute($sql);
}

function load_ten_dm($category_id)
{
    if ($category_id > 0) {
        $sql = "SELECT * FROM categories WHERE category_id =" . $category_id;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $category_id;
    } else {
        return "";
    }

}
function loadone_sanpham($product_id)
{
    $sql = "select * from product where product_id=" . $product_id;
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}
function loadall_sanpham_home()
{
    $sql = "select * from product order by product_id desc limit 0,8";
    return pdo_query($sql);
}
function select_sp_cungloai($product_id)
{
    $sql = "SELECT * FROM product WHERE category_id = category_id   AND product_id <> ?";
    return pdo_query($sql, $product_id);
}

function update_sanpham($product_id, $product_name, $category_id, $price, $description, $image)
{
    if ($image != "")
        $sql = "update product set product_name='" . $product_name . "',category_id = '" . $category_id . "', price='" . $price . "',description='" . $description . "',image='" . $image . "' where product_id=" . $product_id;
    else
        $sql = "update product set product_name='" . $product_name . "',category_id = '" . $category_id . "', price='" . $price . "',description='" . $description . "' where product_id=" . $product_id;
    pdo_execute($sql);
}


?>
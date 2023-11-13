<?php
function insert_sanpham($product_id, $product_name, $image, $price, $description, $category_id)
{
    $sql = "INSERT INTO product(product_id,product_name,image,price,description,category_id) value (? ,? ,? ,? ,? ,?)";
    pdo_execute($sql, $product_id, $product_name, $image, $price, $description, $category_id);
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
function loadone_sanpham($product_id){
    $sql = "select * from product where product_id=".$product_id;
    $sanpham=pdo_query_one($sql);
    return  $sanpham;
}
function loadall_sanpham_home(){
    $sql="select * from product order by product_id desc limit 0,8";
    return pdo_query($sql);
}
function  update_sanpham($product_id,$product_name,$image,$price,$description,$category_id){
    if ($image!="") 
        $sql = "update product set product_id='".$product_id."', product_name='".$product_name."', price='".$price."',description='".$description."',image='".$image."' where category_id=".$category_id;
    else
        $sql = "update product set product_id='".$product_id."', product_name='".$product_name."', price='".$price."',description='".$description."' where category_id=".$category_id;
    pdo_execute($sql);
}

?>
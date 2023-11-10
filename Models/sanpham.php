<?php
function insert_sanpham($product_id , $product_name ,$image ,$price ,$description ,$category_id ){
    $sql = "INSERT INTO product(product_id,product_name,image,price,description,category_id) value (? ,? ,? ,? ,? ,?)";
    pdo_execute($sql, $product_id , $product_name ,$image ,$price ,$description ,$category_id);
}
function loadall_sanpham($search="",$category_id=0){
    $sql = "select * from product where 1";
    if($search!=""){
        $sql.=" and product_name like '%".$search."%'";
    }
    if($category_id>0){
        $sql.=" and category_id= '".$category_id."'";
    }
    $sql.=" order by product_id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function delete_sanpham($product_id){
    $sql = "delete from product where product_id=".$product_id;
    pdo_execute($sql);
}

?>
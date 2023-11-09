<?php

//  láy ra toàn bộ danh mục 
function sellect_all_categories()
{

    $sql = "SELECT * FROM categories order by category_id asc";
    return pdo_query($sql);
}


//  lấy ra 1 danh mục theo id 
function sellect_one_categories($category_id)
{
    $sql = "SELECT * FROM categories where category_id=?";
    return pdo_query_one($sql, $category_id);
}

//  thêm 1 danh mục 
function insert_categories($category_name)
{
    $sql = "INSERT INTO categories(category_name) VALUES(?)";
    pdo_execute($sql, $category_name);

}

// xóa 1 danh mục 
function delete_categories($category_id)
{
    $sql = "DELETE FROM categories WHERE category_id=?";
    pdo_execute($sql, $category_id);
}



//  sửa 1 danh mục 
function update_categories($category_id, $category_name)
{
    $sql = "UPDATE categories SET category_name=? WHERE category_id=?";
    pdo_execute($sql, $category_name, $category_id);
}



//  danh mục con 

// Lấy ra tất cả danh mục con theo id danh mục cha 
function sellect_all_categories_item($category_id)
{
    $sql = "SELECT categories_details.category_id_items, categories_details.category_name_items ";
    $sql .= " FROM categories_details";
    $sql .= " WHERE categories_details.category_id = $category_id";
    return pdo_query($sql);
}



// lấy ra 1 danh mục con theo id danh mục cha 
function sellect_one_categories_items($category_id_items)
{
    $sql = "SELECT * FROM categories_details where category_id_items=?";
    return pdo_query_one($sql, $category_id_items);
}


// thêm 1 danh mục con 
function insert_categories_items($category_id, $category_name_items)
{

    $sql = "INSERT INTO categories_details (category_id, category_name_items) VALUES (?, ?)";
    pdo_execute($sql, $category_id, $category_name_items);

}



// xóa 1 danh mục con 
function delete_categories_items($category_id_items)
{
    $sql = "DELETE FROM categories_details WHERE category_id_items=?";
    pdo_execute($sql, $category_id_items);
}


//  sửa 1 danh mục con 
function update_categories_items($category_id_items, $category_name_items)
{
    $sql = "UPDATE categories_details SET category_name_items=? WHERE category_id_items=?";
    pdo_execute($sql, $category_name_items, $category_id_items);
}





?>
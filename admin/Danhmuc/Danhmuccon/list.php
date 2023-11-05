<?php
if (is_array($one_categories_items)) {
    extract($one_categories_items);
}

// gọi để lấy tên danh mục cha

?>



<main>
<div class="head-title">
    <div class="left">
        <h1>Danh Mục</h1>
        <ul class="breadcrumb">
            <li>
                <a href="#">Trang Chủ</a>
            </li>
            <li><i class='bx bx-chevron-right'></i></li>
            <li>
                <a class="active" href="#">Danh Mục </a>
            </li>
        </ul>
    </div>

</div>

<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Danh Mục Cha : <i><?=$category_name?></i> </h3>
          
        </div>
        <form action="index.php?act=createdm_items" method="post" class="pb-4"> 
            <a href="index.php?act=createdm_items"><button class="btn btn-insert">Thêm Danh Mục Con</button></a>
        </form>
        <table>
            <thead>
                <tr>
                    <th>Mã Danh Mục</th>
                    <th colspan="5">Tên Danh Mục</th>

                    <th >Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($sellect_all_categories_item as $category_items){
                        extract($category_items);
          
                        $edit ="index.php?act=editdm_item&id_category_item=".$category_id_items;
                        $delete ="index.php?act=deletedm_item&id_category_item=".$category_id_items;
                        echo '
                        
                        <tr class="tr-shadow">
                        <td colspan="2">
                           <span>'.$category_id_items.'</span>
                        </td>
                        <td colspan="5"> <p>'.$category_name_items.'</p></td>
                      
                        <td >
                            <a href="'.$edit.'"><button class=" btn status completed">Sửa </button></a>
                        <a href="'.$delete.'"><button class="btn status pending">xóa</button></a>
                        </td>
                    </tr>
                    
                        
                        '
                        ;
                    }
                
                
                ?>
              
              
             
            </tbody>    
        </table>
      
    </div>

</div>
</main>
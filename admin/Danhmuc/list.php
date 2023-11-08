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
                <h3>Danh Mục</h3>

            </div>
            <form action="index.php?act=createdm" method="post" class="pb-4">
                <a href="index.php?act=createdm"><button class="btn btn-insert">Thêm Danh Mục</button></a>
            </form>
            <table>
                <thead>
                    <tr>
                        <th>Mã Danh Mục</th>
                        <th colspan="5">Tên Danh Mục</th>
                        <th>Thao Tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($sellect_categories as $category) {
                        extract($category);
                        $category_id = $category['category_id'];
                        $edit = "index.php?act=editdm&id_cate=" . $category_id;
                        $delete = "index.php?act=deletedm&id_cate=" . $category_id;
                        echo '
                        
                        <tr class="tr-shadow">
                        <td colspan="2">
                          ' . $category_id . '
                        </td>
                        <td colspan="5"> ' . $category_name . '</td>
    
                        <td >
                            <a href="' . $edit . '"><button class=" btn status completed">Sửa </button></a>
                        <a href="' . $delete . '" onclick="return confirm(\'Bạn có chắc muốn xóa?\')"><button class="btn status pending">xóa</button></a>
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
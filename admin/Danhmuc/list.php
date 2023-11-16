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
            <!-- <form action="index.php?act=listdm" method="post" class="form-group form-search-sp">
              <div class="form-input pb-2 d-flex    ">
              <input type="text" name="sea" width="50px"  placeholder="Search..." class="form-control mx-2" >	
                  <input type="submit" name="search" value="Tìm Kiếm " class=" btn btn-insert px-2">
              </div>
          </form> -->
       
            <table>
                <thead>
                    <tr>
                        <th>Mã Danh Mục</th>
                        <th colspan="5">Tên Danh Mục</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($sellect_categories as $category) :?>
                       <?php extract($category);
                        // $category_id = $category['category_id'];
                        $edit = "index.php?act=editdm&id_cate=" . $category_id;
                        $delete = "index.php?act=deletedm&id_cate=" . $category_id;
                        // $hide = "index.php?act=hidedm&id_cate=" . $category_id;
                     ?>
                        
                        <tr class="tr-shadow">
                        <td colspan="2">
                          <?=$category_id?> 
                        </td>
                        <td colspan="5"> <?= $category_name?></td>
    
                        <td >
                            <a href="<?=$edit ?>"><button class=" btn status completed">Sửa </button></a>
                        
                        </td>
                        <td><a href=" <?=$delete ?>" onclick="return confirm('Bạn có chắc muốn xóa?')"><button class="btn status pending">xóa</button></a>
                        <!-- <a href="<?=$hide ?>"><button class=" btn status process">Ẩn</button></a> -->
                        </td>
                    </tr>
                    
                        
                    


                    <?php endforeach;?>

                    


                </tbody>
            </table>

        </div>

    </div>
</main>
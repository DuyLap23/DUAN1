<main>
<div class="head-title">
    <div class="left">
        <h1>Sản Phẩm</h1>
        <ul class="breadcrumb">
            <li>
                <a href="#">Trang Chủ</a>
            </li>
            <li><i class='bx bx-chevron-right'></i></li>
            <li>
                <a class="active" href="#">Sản Phẩm</a>
            </li>
        </ul>
    </div>

</div>

<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Sản Phẩm</h3>
        </div>
      <div class="form-group  d-flex "  >
      <form action="index.php?act=createsp" method="post"class="pb-4" > 
          
          <a href="index.php?act=createsp"><button class="btn btn-insert">Thêm Sản Phẩm</button></a>
      </form> 
      <form action="" method="post" class="form-group form-search-sp">
              <div class="form-input pb-2 d-flex    ">
                
              <input type="text" name="search" width="50px"  placeholder="Search..." class="form-control mx-2" >	
              <select name="category_id">
                        <option value="0" selected>Tất cả</option>
                    <?php 
                            foreach ($sellect_categories as $danhmuc) {
                                extract($danhmuc);
                                echo '   <option value="'.$category_id.'">'.$category_name.'</option>';
                            }
                            ?>
                    </select>
              <input type="submit" name="locsp" value="Lọc " class=" btn btn-insert mx-2">
              </div>
          </form>
      </div>
      
        <table>
       
            <thead class="tr-shadow">
                <tr>
                    <th>Mã Sản Phẩm</th>
                    <th >Tên Sản Phẩm</th>
                    <th colspan="2"> Ảnh </th>
                    <th>Giá </th>
                    <th>Mô Tả </th>
                    <th>Số Lượng </th>  
                    <th> Lượt Xem</th>  
                    <th>Mã Danh Mục</th>
                    <th >Thao Tác</th>
                </tr>
            </thead>
            <tbody>
               
            <?php 

                        foreach ($listsanpham as $sanpham) {
                            extract($sanpham);
                            $suasp = "index.php?act=updatesp&id_sp=".$product_id;
                            $xoasp = "index.php?act=deletesp&id_sp=".$product_id; // đường liên kết 
                           echo '<tr class="tr-shadow">
                           <td>
                            '.$product_id.'
                           </td>
                           <td >'.$product_name.'</td>
                           <td colspan="2"> <img src="../image/'.$image.'" ></td>
                           <td>'.$price.'</td>
                           <td>'.$description.'</td>
                           <td>Số Lượng</td>
                           <td>Lượt Xem</td>
                           <td>'.$category_id.'</td>
                           <td >
                               <a href="'.$suasp.'"><button class=" btn status completed">Sửa </button></a>
                           <a href=" '.$xoasp.'" onclick="return confirm(\'Bạn có chắc muốn xóa?\')"><button class="btn status pending">xóa</button></a>
                           </td>
                       </tr>'
                       ;}
            ?>
             
                
              

                
             
            </tbody>    
        </table>
     
    </div>

</div>
</main>
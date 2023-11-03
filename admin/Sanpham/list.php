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
                <span class="w-25 pt-2 ">Tìm Kiếm </span>
              <input type="text" name="search" width="50px"  placeholder="Search..." class="form-control px-2" >	
                  <input type="submit" name="locsp" value="Lọc " class=" btn btn-insert px-2">
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
                <tr class="tr-shadow">
                    <td>
                     1
                    </td>
                    <td >Quần Đùi</td>
                    <td colspan="2">Ảnh</td>
                    <td>Giá</td>
                    <td>Mô Tả</td>
                    <td>Số Lượng</td>
                    <td>Lượt Xem</td>
                    <td>Mã Danh Mục</td>
                    <td >
                        <a href="index.php?act=updatesp"><button class=" btn status completed">Sửa </button></a>
                    <a href="index.php?act=deletesp"><button class="btn status pending">xóa</button></a>
                    </td>
                </tr>
                <tr class="tr-shadow">
                    <td>
                     1
                    </td>
                    <td >Quần Đùi</td>
                    <td colspan="2">Ảnh</td>
                    <td>Giá</td>
                    <td>Mô Tả</td>
                    <td>Số Lượng</td>
                    <td>Lượt Xem</td>
                    <td>Mã Danh Mục</td>
                    <td >
                        <a href="index.php?act=updatesp"><button class=" btn status completed">Sửa </button></a>
                    <a href="index.php?act=deletesp"><button class="btn status pending">xóa</button></a>
                    </td>
                </tr>
                <tr class="tr-shadow">
                    <td>
                     1
                    </td>
                    <td >Quần Đùi</td>
                    <td colspan="2">Ảnh</td>
                    <td>Giá</td>
                    <td>Mô Tả</td>
                    <td>Số Lượng</td>
                    <td>Lượt Xem</td>
                    <td>Mã Danh Mục</td>
                    <td >
                        <a href="index.php?act=updatesp"><button class=" btn status completed">Sửa </button></a>
                    <a href="index.php?act=deletesp"><button class="btn status pending">xóa</button></a>
                    </td>
                </tr>
              
                
             
            </tbody>    
        </table>
     
    </div>

</div>
</main>
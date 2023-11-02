<div class="row2">
         <div class="row2 font_title mb">
          <h1>DANH SÁCH SẢN PHẨM</h1>
         </div>
            <form action="index.php?act=listsp" method="POST" class="mb">
                    <input type="text" name="key" width="50px">
                    <select name="ma_loai" id="">
                        <option value="0" selected>Tất cả</option>
                        <?php
                            foreach ($danhmuc as $dm) {
                            extract($dm);
                            echo'<option value="'.$ma_loai.'">'.$ten_loai.'</option>';
                            
                            }
                        ?>
                </select>
                <input type="submit" name="listloc" value="loc">
            </form>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai"> 
           <table>
            <tr>
                <th></th>
                <th>MÃ LOẠI</th>
                <th>TÊN TÊN SẢN PHẨM</th>
                <th>GIÁ SẢN PHẨM</th>
                <th>HÌNH ẢNH</th>
                <th>SỐ LƯỢT XEM</th>
                <th>MÃ DANH MỤC</th>
            </tr>

            <?php
                foreach ($listsp as $sp) {
                    extract($sp);
                    $suasp = "index.php?act=suasp&ma_hh=".$ma_hh;
                    $xoasp = "index.php?act=xoasp&ma_hh=".$ma_hh;

                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$ma_hh.'</td>
                            <td>'.$ten_hh.'</td>
                            <td>'.$don_gia.'</td>
                            <td> <img src="../image/'.$hinh.'" alt="" width="200px"> </td>
                            <td>'.$so_luot_xem.'</td>
                            <td>'.$ma_loai.'</td>
                            
                            <td> 
                                <a href="'.$suasp.'"><input type="button" value="Sửa"></a>  
                                <a href="'.$xoasp.'"><input type="button" value="Xóa"></a>
                            </td>
                        </tr>';
                }
                
            ?>
            
           </table>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
            <a href="index.php?act=addsp"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
            <a href="index.php?act=bieudobl"> <input  class="mr20" type="button" value="Biểu Đồ"></a>
           </div>
          </form>   
         </div>
        </div>
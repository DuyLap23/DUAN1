<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th></th>
                <th>MÃ LOẠI</th>
                <th>TÊN LOẠI</th>
                <th></th>
            </tr>

            <?php
                foreach ($danhmuc as $dm) {
                    extract($dm);
                    $ma_loai = $dm['ma_loai']; // Lấy mã loại từ dữ liệu hiện tại
                    $suadm = "index.php?act=suadm&ma_loai=".$ma_loai;
                    $xoadm = "index.php?act=xoadm&ma_loai=".$ma_loai;

                    echo '<tr>
                            <td><input type="checkbox" name="" id="checkbox"></td>
                            <td>'.$ma_loai.'</td>
                            <td>'.$ten_loai.'</td>
                            <td> 
                                <a href="'.$suadm.'"><input type="button" value="Sửa"></a>  
                                <a href="'.$xoadm.'"><input type="button" value="Xóa"></td></a>
                        </tr>'
                    ;
                }
            ?>
            
           </table>
           </div>
           <div class="row mb10 ">
           <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
            <a href="index.php?act=adddm"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>
          </form>
         </div>
        </div>

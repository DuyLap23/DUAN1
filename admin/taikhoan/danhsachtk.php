<div class="row2">
         <div class="row2 font_title mb">
          <h1>DANH SÁCH TÀI KHOẢN</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai"> 
           <table>
            <tr>
                <th></th>
                <th>Mã tài khoản</th>
                <th>Họ tên</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Mật khẩu</th>
                <th>Vai trò</th>
            </tr>

            <?php
                foreach ($danhsachtk as $dstk) {
                    extract($dstk);
                    // $suatk = "index.php?act=suatk&ma_kh=".$ma_kh;
                    $xoatk = "index.php?act=xoatk&ma_kh=".$ma_kh;

                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$ma_kh.'</td>
                            <td>'.$ho_ten.'</td>
                            <td>'.$dia_chi.'</td>
                            <td>'.$phone.'</td>
                            <td>'.$email.'</td>
                            <td>'.$mat_khau.'</td>
                            <td>'.$vai_tro.'</td>
                            <td> 
                                <a href="index.php?act=edittk"><input type="button" value="Sửa"></a>  
                                <a href="'.$xoatk.'"><input type="button" value="Xóa"></a>
                            </td>
                        </tr>';
                }
                
            ?>
            
           </table>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
            <a href="../../../view/taikhoan/dangky.php"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>
          </form>   
         </div>
        </div>
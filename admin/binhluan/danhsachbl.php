<div class="row2">
    <div class="row2 font_title mb"><h1>DANH SÁCH BÌNH LUẬN</h1></div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai"> 
                <table>
                    <tr>
                        <th>Mã bình luận</th>
                        <th>Nội dung</th>
                        <th>Mã người bình luận</th>
                        <th>Mã sản phẩm</th>
                        <th>Ngày bình luận</th>
                    </tr>

                    <?php
                        foreach ($danhsachbl as $dsbl) {
                            extract($dsbl);
                            // $suatk = "index.php?act=suatk&ma_kh=".$ma_kh;
                            $xoabl = "index.php?act=xoabl&id=".$id;

                            echo '<tr>
                                    <td>'.$id.'</td>
                                    <td>'.$noidung.'</td>
                                    <td>'.$iduser.'</td>
                                    <td>'.$idpro.'</td>
                                    <td>'.$ngaybinhluan.'</td>
                                    <td>  
                                        <a href="'.$xoabl.'"><input type="button" value="Xóa"></a>
                                        <a href="index.php?act=bieudobl"><input type="button" value="Biểu đồ"></a>
                                    </td>
                                </tr>';
                        }
                    ?>
                </table>
            </div>
        </form>   
    </div>
</div>
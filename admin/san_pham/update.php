<?php
if(is_array($sp)){
  extract($sp);
}

?>

<div class="row2">
        <div class="row2 font_title">
        <h1>CẬP NHẬT LOẠI SẢN PHẨM</h1>
      </div>
      <div class="row2 form_content ">
        <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
                  
          <div class="row2 mb10 form_content_container">
            <!-- Mã -->
            <label> Mã sản phẩm </label> <br>
            <input type="text" disabled name="ma_hh" value="<?= $ma_hh?>" placeholder="nhập vào mã sản phẩm">
          </div>
          <!-- Tên -->
          <div class="row2 mb10">
            <label>Tên sản phẩm </label> <br>
            <input type="text" name="ten_hh" value="<?= $ten_hh?>" placeholder="nhập vào tên">
          </div>
          <!-- Giá -->
          <div class="row2 mb10">
            <label> Giá </label> <br>
            <input type="text" name="don_gia" value="<?= $don_gia?>" placeholder="nhập vào giá">
          </div>
          <!-- Ảnh -->
          <div class="row2 mb10">
            <label> Ảnh của sản phẩm </label> <br>
            <div>
              <input type="file" name="hinh">
              <br>
              <input type="hidden" name="old_image" value="<?=$hinh?>">
              <br>
              <img src="../image/<?=$hinh?>" width="200px" alt="">
            </div>
          </div>
          <!-- Mô tả -->
          <div class="row2 mb10">
            <label> Mô tả </label> <br>
            <textarea name="mo_ta" cols="30" rows="10"><?=$mo_ta?></textarea>
          </div>
          <div class="row2 mb10">
            <label for="">Mã loại</label>
            <select name="ma_loai">
              <option value="0" selected>Tất cả</option>
                <?php
                  foreach ($danhmuc as $dm) {
                    $ma_loai_option = $dm['ma_loai']; // Trích xuất giá trị 'ma_loai' từ mảng $dm
                    $ten_loai_option = $dm['ten_loai']; // Trích xuất giá trị 'ten_loai' từ mảng $dm
                    if ($ma_loai_option  == $ma_loai){
                      echo'<option value="'.$ma_loai_option .'" selected>'.$ten_loai_option .'</option>';
                    }else{
                      echo'<option value="'.$ma_loai_option .'">'.$ten_loai_option .'</option>';
                    }       
                  }
                ?>
            </select>
          </div>
          <div class="row mb10">
            <input type="hidden" name="ma_hh" value="<?=$ma_hh?>">
            <input class="mr20" type="submit" name="capnhat" value="CẬP NHẬT">
            <input class="mr20" type="reset" value="NHẬP LẠI">

            <a href="index.php?act=listsp"><input class="mr20" type="button" value="DANH SÁCH"></a>
          </div>
          
        </form>
        </div>
        <?php
            if (isset($thongbao) && $thongbao != "") {
              echo $thongbao;
            }
          ?>
</div>
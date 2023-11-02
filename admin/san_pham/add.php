<div class="row2">
        <div class="row2 font_title">
        <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
      </div>
      <div class="row2 form_content ">
        <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
            <!-- Mã -->
          <div class="row2 mb10 form_content_container">
            <label> Mã Danh Mục </label> <br>
            <select name="ma_loai" id="">
              <option value="0" selected>Tất cả</option>
              <?php
                foreach ($danhmuc as $dm) {
                  extract($dm);
                  echo'<option value="'.$ma_loai.'">'.$ten_loai.'</option>';
                  
                }
              ?>
            </select>
          </div>
          <!-- Tên -->
          <div class="row2 mb10">
            <label>Tên Sản Phẩm </label> <br>
            <input type="text" name="ten_hh" placeholder="nhập vào tên sản phẩm">
          </div>
          <!-- Đơn Giá -->
          <div class="row2 mb10">
            <label> Đơn Giá </label> <br>
            <input type="text" name="don_gia" placeholder="nhập vào giá sản phẩm">
          </div>
          <!-- Hình ảnh -->
          <div class="row2 mb10">
            <label> Hình ảnh </label> <br>
            <input type="file" name="hinh" >
          </div>
          <!-- Hình ảnh -->
          <div class="row2 mb10">
            <label> Mô Tả </label> <br>
            <textarea name="mo_ta" cols="243" rows="10"></textarea>
          </div>

          <div class="row mb10 ">
            <input class="mr20" type="submit" name="themmoi" value="THÊM MỚI">
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
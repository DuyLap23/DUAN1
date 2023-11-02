<?php
if(is_array($dm)){
    extract($dm);
}
?>

<div class="row2">
        <div class="row2 font_title">
        <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
      </div>
      <div class="row2 form_content ">
        <form action="index.php?act=updatedm" method="POST">
          <div class="row2 mb10 form_content_container">
            <label> Mã loại </label> <br>
            <input type="text" disabled name="ma_loai" value="<?php if(isset($ma_loai)&& $ma_loai != "") echo $ma_loai?>" placeholder="nhập vào mã loại">
          </div>
          <div class="row2 mb10">
            <label>Tên loại </label> <br>
            <input type="text" name="ten_loai" value="<?php if(isset($ten_loai)&& $ten_loai != "") echo $ten_loai?>" placeholder="nhập vào tên">
          </div>
          <div class="row mb10 ">
            <input type="hidden" name="ma_loai" value="<?=$ma_loai?>">
            <input class="mr20" type="submit" name="capnhat" value="CẬP NHẬT">
            <input class="mr20" type="reset" value="NHẬP LẠI">

            <a href="index.php?act=listdm"><input class="mr20" type="button" value="DANH SÁCH"></a>
          </div>
          
        </form>
        </div>
        <?php
            if (isset($thongbao) && $thongbao != "") {
              echo $thongbao;
            }
          ?>
</div>
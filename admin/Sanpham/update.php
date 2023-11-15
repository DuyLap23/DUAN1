<?php
if (isset($sanpham)) {
    extract($sanpham);

}
?>

<main>
    <div class="head-title">
        <div class="left">
            <h1>Cập Nhật Sản Phẩm</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Trang Chủ</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="" href="#">Sản Phẩm </a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Cập Nhật Sản Phẩm </a>
                </li>
            </ul>
        </div>

    </div>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Sản Phẩm</h3>

            </div>
            <form action="index.php?act=updatesp" class="form-input" method="post">
                <div class="form-group pb-4">
                    <label for="">
                        Mã Sản Phẩm
                    </label> <br />
                    <input type="text" name="product_id" id="" value="<?= $product_id?>" readonly class="rounded-2 w-75"> <br />
                    <label for="" class="label pt-2">
                        Tên Sản Phẩm
                    </label><br />
                    <input type="text" name="product_name" id="" value="<?= $product_name?>" placeholder="Nhập tên sản phẩm "
                        class="input w-75 rounded-2"><br />
                    <label for="" class="label pt-2">
                        Ảnh
                    </label><br />
                    <img src="../image/<?= $image?>" width="150px" alt="">
                    <input type="file" name="image" id=""  width="150px" class="input w-75 rounded-2"><br />
                    <div class="list-img">
                        
                    </div>
                    <script>
                        let listImg=document.querySelector('.list-img');
                        let fileImage=document.querySelector('.fileImage');
                        fileImage.onchange=function(){
                        let file=fileImage.files;
                        console.log(file);
                        for(let i=0;i<file.length;i++){
                            let img=document.createElement('img');
                            img.src=URL.createObjectURL(file[i]);
                            listImg.appendChild(img);
                        }
                            
                        }
                    </script>

                    <label for="" class="label pt-2">
                        Giá
                    </label><br />
                    <input type="number" name="price" id="" value="<?= $price?>" placeholder="Nhập số lượng "
                        class="input w-75 rounded-2"><br />

                    <!-- <label for="product_size" class="label pt-2">
                        Size:</label>
                    <select id="product_size" name="product_size">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                    </select><br /> -->

                    <!-- <label for="product_color" class="label pt-2">Màu sắc:</label><br />
                    <input type="radio" id="red" name="product_color" value="Red">
                    <label for="red">Đỏ</label>
                    <input type="radio" id="blue" name="product_color" value="Blue">
                    <label for="blue">Xanh</label><br /> -->
                    <label for="" class="label pt-2">
                        Mô Tả
                    </label><br />
                    <textarea name="description" id="" cols="30" rows="10"><?= $description?></textarea><br />
                    <!-- <label for="" class="label pt-2">
                        Số Lượng
                    </label><br />
                    <input type="number" name="quantity" id="" value="" placeholder="Nhập số lượng "
                        class="input w-75 rounded-2"><br /> -->

                    <label for="" class="pt-3">Danh Mục</label><br />
                    <select name="category_id" id="" class="rounded-2 ">
                    <?php
                  foreach ($sellect_categories as $dm) {
                    $cate_id = $dm['category_id']; // Trích xuất giá trị 'ma_loai' từ mảng $dm
                    $cate_name = $dm['category_name']; // Trích xuất giá trị 'ten_loai' từ mảng $dm
                    if ($cate_id  == $category_id){
                      echo'<option value="'.$cate_id .'" selected>'.$cate_name .'</option>';
                    }else{
                      echo'<option value="'.$cate_id .'">'.$cate_name .'</option>';
                    }       
                  }
                ?>
                    </select>
                    <div class="notification">
                        <?php
                        if (isset($Notification) && $Notification != "") {
                            echo $Notification; 
                        }
                        ?>
                    </div>
                </div>


                <a href="index.php?act=listsp"><input type="submit" name="submit" id="" value="Cập Nhật"
                        class="btn btn-insert  status completed "> </a>
                <input type="reset" name="reset" id="" value="Nhập Lại" class=" btn btn-reset ">
            </form>
        </div>

    </div>
</main>
<script>
    const fs = require(uploadImages());

const path = '../image/';

fs.readFile(path, (err, data) => {
  if (err) {
    console.log(err);
  } else {
    console.log(data.toString()); // Nội dung của tệp tin data.txt
  }
});

</script>
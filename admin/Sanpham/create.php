<main>
    <div class="head-title">
        <div class="left">
            <h1>Thêm Sản Phẩm</h1>
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
                    <a class="active" href="#">Thêm Sản Phẩm </a>
                </li>
            </ul>
        </div>

    </div>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Sản Phẩm</h3>

            </div>
            <form action="index.php?act=createsp" class="form-input" method="post">
                <div class="form-group pb-4">
                    <label for="">
                        Mã Sản Phẩm
                    </label> <br />
                    <input type="text" name="product_id" id="" value="" readonly class="rounded-2 w-75"> <br />
                    <label for="" class="label pt-2">
                        Tên Sản Phẩm
                    </label><br />
                    <input type="text" name="product_name" id="" value="" placeholder="Nhập tên sản phẩm "
                        class="input w-75 rounded-2"><br />
                    <label for="" class="label pt-2">
                        Ảnh
                    </label><br />
                    <input type="file" name="image" id="" value="" width="150px" class="input w-75 rounded-2"><br />

                    <label for="" class="label pt-2">
                        Giá
                    </label><br />
                    <input type="number" name="price" id="" value="" placeholder="Nhập số lượng "
                        class="input w-75 rounded-2"><br />

                    <label for="product_size" class="label pt-2">
                        Size:</label>
                    <select id="product_size" name="product_size">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                    </select><br />

                    <label for="product_color" class="label pt-2">Màu sắc:</label><br />
                    <input type="radio" id="red" name="product_color" value="Red">
                    <label for="red">Đỏ</label>
                    <input type="radio" id="blue" name="product_color" value="Blue">
                    <label for="blue">Xanh</label><br />
                    <label for="" class="label pt-2">
                        Mô Tả
                    </label><br />
                    <textarea name="description" id="" cols="30" rows="10"></textarea><br />
                    <label for="" class="label pt-2">
                        Số Lượng
                    </label><br />
                    <input type="number" name="quantity" id="" value="" placeholder="Nhập số lượng "
                        class="input w-75 rounded-2">
                </div>


                <a href="index.php?act=listsp"><input type="submit" name="submit" id="" value="Thêm"
                        class="btn btn-insert  status completed "> </a>
                <input type="reset" name="reset" id="" value="Nhập Lại" class=" btn btn-reset ">
            </form>
        </div>

    </div>
</main>
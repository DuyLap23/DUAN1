<main>
    <div class="head-title">
        <div class="left">
            <h1>Thêm Danh Mục</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Trang Chủ</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="" href="#">Danh Mục </a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Thêm Danh Mục </a>
                </li>
            </ul>
        </div>

    </div>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Danh Mục</h3>

            </div>
            <form action="index.php?act=createdm" class="form-input" method="post">
               <div class="form-group pb-4">
               <label for="">
                    Mã Danh Mục
                </label> <br />
                <input type="text" name="category_id" id="" value="" readonly class="rounded-2 w-75"> <br />
                <label for="" class="label pt-2">
                    Tên Danh Mục
                </label><br />
                <input type="text" name="category_name" id="" value="" placeholder="Nhập tên danh mục "
                    class="input w-75 rounded-2">
               </div>


                <a href="index.php?act=listdm"><input type="submit" name="submit" id="" value="Thêm"
                        class="btn btn-insert  status completed "> </a>
                <input type="reset" name="reset" id="" value="Làm Lại" class=" btn btn-reset ">
            </form>
        </div>

    </div>
</main>
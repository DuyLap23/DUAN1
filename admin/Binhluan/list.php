<main>
<div class="head-title">
    <div class="left">
        <h1>Quản Lý Bình Luận</h1>
        <ul class="breadcrumb">
            <li>
                <a href="#">Trang Chủ</a>
            </li>
            <li><i class='bx bx-chevron-right'></i></li>
            <li>
                <a class="active" href="#">Quản Lý Bình Luận </a>
            </li>
        </ul>
    </div>

</div>

<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Quản Lý Bình Luận</h3>
          
        </div>
        <table>
            <thead>
                <tr>
                    <th>Mã Bình Luận</th>
                    <th>Mã Khách Hàng</th>
                    <th>Mã Sản Phẩm</th>
                    <th>Nội Dung</th>
                    <th>Ngày Bình Luận</th>
                    <th >Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($liastBinhluan as $key => $binhluan) {
                        ?>
                            <tr class="tr-shadow">
                                <td>
                                    <?= $key + 1 ?>
                                </td>
                                <td><?= $binhluan['user_id'] ?></td>
                                <td><?= $binhluan['product_id'] ?></td>
                                <td><?= $binhluan['content'] ?></td>
                                <td><?= $binhluan['date_comment'] ?></td>
                                <td >

                                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa bình luận này hay không?')" href="index.php?act=deletebl&id_khachhang=<?= $binhluan['comment_id'] ?>"><button class="btn status pending">xóa</button></a>
                                </td>
                            </tr>
                        <?php
                    }
                ?>    
   
            </tbody>    
        </table>
       
    </div>

</div>
</main>
<main>
<div class="head-title">
    <div class="left">
        <h1>Quản Lý Đơn Hàng</h1>
        <ul class="breadcrumb">
            <li>
                <a href="#">Trang Chủ</a>
            </li>
            <li><i class='bx bx-chevron-right'></i></li>
            <li>
                <a class="active" href="#">Quản Lý Đơn Hàng </a>
            </li>
        </ul>
    </div>

</div>

<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Quản Lý Đơn Hàng</h3>
          
        </div>
        <table>
            <thead>
                <tr>
                    <th>Mã Đơn Hàng</th>
                    <th>Mã Khách Hàng</th>
                    <th>Số Lượng</th>
                    <th>Tổng Giá Trị</th>
                    <th>Tình Trạng Đơn Hàng</th>
                    <th >Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($loadAll_bill as $key => $bill) :
                    extract($bill);
                    $kh =$bill["name"].'<br>
            
                    '.$bill["email"].'<br>
                    '.$bill["address"].'<br>
                    '.$bill["tel"];
                    $count_sl = count_sl($bill["id_bill"]);
                    $trangthaidh = get_ttdh($bill["bill_startus"]);
                ?>
                <tr class="tr-shadow">
                    <td>
                      <?= $bill["id_bill"]?>
                    </td>
                    <td> <?= $kh?></td>
                    <td><?= $count_sl?></td>
                    
                    <td><?= number_format($bill['total'], 0, '.', ',')?> VND</td>
                    <td><span class="status completed"><?= $trangthaidh?></span></td>
                    <td >

                    <a href="index.php?act=order_detail"><button class="btn btn-submit">Chi Tiết Đơn Hàng</button></a>
                    </td>
                </tr>
                <?php endforeach; ?>
                
               
                
             
            </tbody>    
        </table>
       
    </div>

</div>
</main>     
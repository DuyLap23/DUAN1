<main class="bg_gray">
    <div class="container margin_30">
        <div class="page_header">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Category</a></li>
                    <li>Page active</li>
                </ul>
            </div>
            <h1>Cart page</h1>
        </div>
        <!-- /page_header -->
        <table class="table table-striped cart-list">
            <thead>
                <tr>
                    <th>
                       Mã đơn hàng
                    </th>
                    <th>
                       Ngày đặt
                    </th>
                    <th>
                      Số lượng
                    </th>
                    <th>
                        Tổng giá trị
                    </th>
                    <th>
                        Tình trạng đơn hàng
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
            if ($user) {
                # code...
          
                if(is_array($loadAll_bill)):
                    foreach($loadAll_bill as $bill):
                        extract($bill);
                        $trangthaidh = get_ttdh($bill['bill_startus']);
                        $count_sl=count_sl($bill['id_bill']);
                        ?>
                        <tr>
                            <td>
                               
                                <span class="item_cart">
                                    <?= $bill['id_bill'] ?>
                                </span>
                            </td>
                            <td>
                                <strong><?= $bill['date']?></strong>
                            </td>
                            <td>
                                <div class="">
                                <?= $count_sl?>
                                </div>
                            </td>
                            <td>
                                <span><?= number_format($bill['total'], 0, '.', ',') ?> VND</span>
                            </td>
                            <td>
                                <strong><?=  $trangthaidh?></strong>
                            </td>
                            <td class="options">
                               
                            </td>
                        </tr>
                        <?php
                    endforeach;
                endif;
            }else{
                echo "Vui lòng đăng nhập để theo dõi đơn hàng ";
            }
                ?>
            </tbody>
        </table>


    </div>
    <!-- /cart_actions -->

    
    <!-- /container -->




</main>
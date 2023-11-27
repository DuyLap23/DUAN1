<main class="bg_gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div id="confirm">
                    <div class="icon icon--order-success svg add_bottom_15">
                        <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
                            <g fill="none" stroke="#8EC343" stroke-width="2">
                                <circle cx="36" cy="36" r="35"
                                    style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                                <path d="M17.417,37.778l9.93,9.909l25.444-25.393"
                                    style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                            </g>
                        </svg>
                    </div>
                    <h2>Cảm ơn bạn đã đặt hàng</h2>

                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
    <div class="container margin_30">
        <?php
        if(isset($bill) && (is_array($bill))) {
            extract($bill);
        } ?>
        <h4>Thông tin đơn hàng </h4>
        <div>
            <li>Mã đơn hàng :
                <?= $bill['id_bill'] ?>
            </li>
            <li>Ngày đặt hàng :
                <?= $bill['date'] ?>
            </li>

            <li>phương thức thanh toán :
                <?= $bill['payment'] ?>
            </li>
            <li>Tổng đơn hàng :
                <?= $bill['total'] ?>
            </li>
        </div>
        <hr>
        <h4>Thông tin người mua </h4>
        <div>
            <li>Tên người mua:
                <?= $bill['name'] ?>
            </li>
            <li>Địa chỉ:
                <?= $bill['address'] ?>
            </li>
            <li>Số điện thoại: 0
                <?= $bill['tel'] ?>
            </li>
            <li>Email:
                <?= $bill['email'] ?>
            </li>

        </div>
        <hr>
        <h4>Chi tiết đơn hàng</h4>
        <table class="table table-striped cart-list">

            <thead>
                <tr>

                    <th>Tên sản phẩm</th>
                    <th>Ảnh </th>
                    <th>Giá</th>
                    <th>Size</th>
                    <th>Số lượng</th>
                    <th>Tổng tiền</th>
                  
                </tr>
            </thead>
            <hr>
            <tbody id="cart">
                <?php
                $tong = 0;
                $i = 0;

                foreach($bill_detail as $key => $value) {
                    extract($value);
                    $image = explode(',', $image)[0];

                    $tong += $value['total'];

                    echo '<tr>
                                   <td>
                                       <span class="item_cart mb-4">
                                           '.$value['name'].'
                                       </span>
                                   </td>
                                   <td>
                                       <div class="thumb_cart">
           
                                           <img src="image/'.$image.'" data-src="image/'.$image.'" class="item-box" alt="">
           
                                       </div>
                                   </td>
           
           
                                   <td>
                                       '.number_format($value['price'], 0, '.', ',').'
                                   </td>
                                   <td>
                                       '.$value['size'].'
                                   </td>
                                   <!-- số lượng  -->
                                   <td>
                                       <div class="numbers">
                                           <input type="number" value="'.$value['quantity'].'" id="quantity_1" class="qty2" name="quantity_1"
                                               min="1" max="100">
           
                                       </div>
           
           
                                   </td>
                                   <!-- tổng  -->
                                   <td id="total">
                                       '.number_format($value['total'], 0, '.', ',').'
                                   </td>
                                   
                               </tr>';


                    $i += 1;

                }
                ?>


                <!--  -->

            </tbody>


        </table>
    </div>

</main>
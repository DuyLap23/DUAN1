<main class="bg_gray">
	<div class="container margin_30">
		<div class="page_header ">

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
		<?php
		if (isset($_SESSION['cart']) && (count($_SESSION['cart']) > 0)) {
			# code...
			?>
			<table class="table table-striped cart-list">

				<thead>
					<tr>

						<th>
							Tên sản phẩm
						</th>
						<th>Ảnh </th>
						<th>
							Giá
						</th>
						<th>
							Size
						</th>
						<th>
							Số lượng
						</th>
						<th>
							Tổng tiền
						</th>
						<th>

						</th>
					</tr>
				</thead>
				<tbody id="cart">
					<?php

					$tong = 0;
					$i = 0;

					foreach ($_SESSION['cart'] as $key => $value):
						extract($value);
						$image = explode(',', $value[2])[0];
						$ttien = $value[3] * $value[5];
						$tong += $ttien;
						$deleteCart = "index.php?act=deleteCart&idCart=" . $i;




						?>

						<tr>
							<td>
								<span class="item_cart mb-4">
									<?= $value[1] ?>
								</span>
							</td>
							<td>
								<div class="thumb_cart">

									<img src="image/<?= $image ?>" data-src="../image/<?= $image ?>" class="item-box" alt="">

								</div>
							</td>


							<td>
								<?= number_format($value[3], 0, '.', ','); ?>
							</td>
							<td>
								<?= $value[4] ?>
							</td>
							<!-- số lượng  -->
							<td>
								<div class="numbers">
									<input type="number" value="<?= $value[5] ?>" id="quantity_1" class="qty2" name="quantity_1"
										min="1" max="100">

								</div>


							</td>
							<!-- tổng  -->
							<td id="total">
								<?= number_format($ttien, 0, '.', ','); ?>
							</td>
							<td class="options">
								<a href="<?= $deleteCart ?>" class="delete">
									<i class="ti-trash"></i>
								</a>
							</td>
						</tr>
						<?php $i += 1; ?>
					<?php endforeach; ?>

				</tbody>
				<tbody id="tongdonhang">
					<tr>
						<td colspan="5">Tổng Tiền</td>
						<td><span>
								<?= number_format($tong, 0, '.', ','); ?>
							</span> </td>
						<td></td>
					</tr>
					<tr>
						<td>
							<a href="index.php?act=deleteCart">Xóa tất cả sản phẩm</a>
						</td>
					</tr>
				</tbody>
			</table>
		<?php } else {
			echo '<h3>Giỏ hàng trống</h3>';
		} ?>



	</div>
	<!-- /container -->

	<div class="box_cart">
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-xl-4 col-lg-4 col-md-6">
					<ul>
						<li>
							<span>Subtotal</span> $240.00
						</li>
						<li>
							<span>Shipping</span> $7.00
						</li>
						<li>
							<span>Total</span> $247.00
						</li>
					</ul>
					<a href="cart-2.html" class="btn_1 full-width cart">Proceed to Checkout</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /box_cart -->

</main>
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
				<tr>
					<td>
						<span class="item_cart mb-4">Armor Air x Fear</span>
					</td>
					<td><div class="thumb_cart">
							<img src="View/img/products/product_placeholder_square_small.jpg"
								data-src="View/img/products/shoes/1.jpg" class="lazy" alt="Image">
						</div></td>
					
					
					<td>
						140.00
					</td>
					<!-- số lượng  -->
					<td>
						<div class="numbers">
						<input type="number" value="1" id="quantity_1" class="qty2" name="quantity_1" min="1" max="10">

						</div>
							
						
					</td>
					<!-- tổng  -->
					<td id="total">
						140
					</td>
					<td class="options">
						<a href="" class="delete"><i class="ti-trash"></i></a>
					</td>
				</tr>
				<tr>
					<td>
						<span class="item_cart mb-4">Armor Air x Fear</span>
					</td>
					<td><div class="thumb_cart">
							<img src="View/img/products/product_placeholder_square_small.jpg"
								data-src="View/img/products/shoes/1.jpg" class="lazy" alt="Image">
						</div></td>
					
					
					<td>
						140
					</td>
					<!-- số lượng  -->
					<td>
						<div class="numbers">
						<input type="number" value="1" id="quantity_1" class="qty2" name="quantity_1" min="1" >

						</div>
							
						
					</td>
					<!-- tổng  -->
					<td id="total">
						140
						<!-- number_format($number, 0, '.', ','); -->
					</td>
					<td class="options">
						<a href="" class="delete"><i class="ti-trash"></i></a>
					</td>
				</tr>

			</tbody>
			<tbody id="tongdonhang">
				<tr>
					<td colspan="4">Tổng Đơn Hàng</td>	
					<td><span></span> </td>
				</tr>
			</tbody>
		</table>

		<!-- <div class="row add_top_30 flex-sm-row-reverse cart_actions">
			<div class="col-sm-4 text-end">
				<button type="button" class="btn_1 gray">Update Cart</button>
			</div>
			<div class="col-sm-8">
				<div class="apply-coupon">
					<div class="form-group">
						<div class="row g-2">
							<div class="col-md-6"><input type="text" name="coupon-code" value=""
									placeholder="Promo code" class="form-control"></div>
							<div class="col-md-4"><button type="button" class="btn_1 outline">Apply Coupon</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- /cart_actions -->

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
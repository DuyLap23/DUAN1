<main>

	<!-- banner full  -->
	<div id="carousel-home">
		<div class="owl-carousel owl-theme">
			<div class="owl-slide cover" style="background-image: url(View/img/banner5.jpg);">
				<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
					<div class="container">
						<div class="row justify-content-center justify-content-md-end">
							<div class="col-lg-6 static">
								<div class="slide-text text-end white">
									<h2 class="owl-slide-animated owl-slide-title">Attack Air<br>Max 720 Sage
										Low</h2>
									<p class="owl-slide-animated owl-slide-subtitle">
										Limited items available at this price
									</p>
									<div class="owl-slide-animated owl-slide-cta"><a class="btn_1"
											href="listing-grid-1-full.html" role="button">Mua Sắm Ngay</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/owl-slide-->
			<div class="owl-slide cover" style="background-image: url(View/img/banner2.jpg);">
				<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
					<div class="container">
						<div class="row justify-content-center justify-content-md-start">
							<div class="col-lg-6 static">
								<div class="slide-text white">
									<h2 class="owl-slide-animated owl-slide-title">Attack Air<br>VaporMax
										Flyknit 3</h2>
									<p class="owl-slide-animated owl-slide-subtitle">
										Limited items available at this price
									</p>
									<div class="owl-slide-animated owl-slide-cta"><a class="btn_1"
											href="listing-grid-1-full.html" role="button">Mua Sắm Ngay</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/owl-slide-->
			<div class="owl-slide cover" style="background-image: url(View/img/banner6.jpg);">
				<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(255, 255, 255, 0.5)">
					<div class="container">
						<div class="row justify-content-center justify-content-md-start">
							<div class="col-lg-12 static">
								<div class="slide-text text-center black">
									<h2 class="owl-slide-animated owl-slide-title">Attack Air<br>Monarch IV SE
									</h2>
									<p class="owl-slide-animated owl-slide-subtitle">
										Lightweight cushioning and durable support with a Phylon midsole
									</p>
									<div class="owl-slide-animated owl-slide-cta"><a class="btn_1"
											href="listing-grid-1-full.html" role="button">Mua Sắm Ngay</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/owl-slide-->
			</div>
		</div>
		<div id="icon_drag_mobile"></div>
	</div>
	<!-- hết banner full  -->

	<!-- banner grid  -->
	<ul id="banners_grid" class="clearfix">
		<li>
			<a href="#0" class="img_container">
				<img src="View/img/banner1.jpg" data-src="View/img/banner1.jpg" alt="" class="lazy">
				<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
					<h3>Bộ Sưu Tập Mới</h3>
					<div><span class="btn_1">Mua Sắm Ngay</span></div>
				</div>
			</a>
		</li>
		<li>
			<a href="#0" class="img_container">
				<img src="View/img/banner3.jpg" data-src="View/img/banner3.jpg" alt="" class="lazy">
				<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
					<h3>Bộ Sưu Tập Nàng Thơ</h3>
					<div><span class="btn_1">Mua Sắm Ngay</span></div>
				</div>
			</a>
		</li>
		<li>
			<a href="#0" class="img_container">
				<img src="View/img/banner4.jpg" data-src="View/img/banner4.jpg" alt="" class="lazy">
				<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
					<h3>Bộ Sưu Tập Xanh</h3>
					<div><span class="btn_1">Mua Sắm Ngay</span></div>
				</div>
			</a>
		</li>
	</ul>
	<!-- hết banner grid  -->

	<!-- sp mới  -->
	<div class="container margin_60_35">
		<div class="main_title">
			<h2>Sản Phẩm Mới</h2>
			<p>Chúng tôi luôn cập nhật những sản phẩm mới cho quý khách hàng lựa chọn</p>
		</div>
		<div class="row small-gutters">
			<?php foreach($loadall_sanpham as $key => $value): ?>
				<?php extract($value);
				?>

				<div class="col-sl-6 col-md-4 col-xl-3 pb-4">
					<form action="index.php?act=addtocart" method="post" class="">

						<div class="grid_item boxsp">
							<span class="ribbon new">New</span>
							<figure>
								<a href="index.php?act=chitietsp&idct_sp=<?= $product_id ?>">
									<img class="img-fluid lazy " src="image/<?= explode(',', $image)[0] ?>"
										data-src="image/<?= explode(',', $image)[0] ?>" alt="">
									<img class="img-fluid lazy" src="image/<?= explode(',', $image)[0] ?>"
										data-src="image/<?= explode(',', $image)[0] ?>" alt="">
								</a>
							</figure>
							<a href="index.php?act=chitietsp&idct_sp=<?= $product_id ?>">
								<h3>
									<?= $product_name ?>
								</h3>
							</a>
							<div class="price_box">
								<span class="new_price">
									<?=
										number_format($price, 0, '.', ','); ?> VND
								</span>
							</div>
						</div>
						<div class="spacer-20 d-flex justify-content-center	">
							<input type="submit" name="addcart" id="" value="Thêm vào giỏ hàng " class="btn_1">
						</div>

						<input type="hidden" name="product_id" id="" value="<?= $product_id ?>">
						<input type="hidden" name="product_name" id="" value="<?= $product_name ?>">
						<input type="hidden" name="img" id="" value="<?= $image ?>">
						<input type="hidden" name="price" id="" value="<?= $price ?>">
					</form>
				</div>


			<?php endforeach; ?>


		</div>

	</div>
	<!-- hết sp mới  -->

	<!-- sản phẩm đặc sắc  -->
	<div class="container margin_60_35">
		<div class="main_title">
			<h2>Featured</h2>

			<p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
		</div>
		<div class="owl-carousel owl-theme products_carousel">
			<div class="item">
				<div class="grid_item">
					<span class="ribbon new">New</span>
					<figure>
						<a href="index.php?act=chitietsp">
							<img class="owl-lazy lazy" src="View/img/products/product_placeholder_square_medium.jpg"
								data-src="View/img/products/shoes/4.jpg" alt="">
						</a>
					</figure>

					<a href="product-detail-1.html">
						<h3>ACG React Terra</h3>
					</a>
					<div class="price_box">
						<span class="new_price">$110.00</span>
					</div>
					<ul>

						<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
								title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to
									compare</span></a></li>
						<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
								title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
						</li>
					</ul>
				</div>
				<!-- /grid_item -->
			</div>
			<!-- /item -->



		</div>
	</div>
	<!-- hết sp đặc sắc  -->
</main>
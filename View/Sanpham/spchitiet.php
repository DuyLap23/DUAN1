<main>
	<?php
	extract($chitietsp);
	$images=explode(',',$image);

	?>
	<div class="container margin_30">
		<!-- <div class="countdown_inner">-20% This offer ends in <div data-countdown="2019/05/15" class="countdown"></div>
			</div> -->
		<div class="row">
			<div class="col-md-6">
				<div class="all">
					<div class="slider">
						<div class="owl-carousel owl-theme main">
								<?php foreach($images as $key => $value):?>
									<img src="./image/<?=$value?>" class="item-box"alt="">
								<?php endforeach; ?>
							

						</div>
						<div class="left nonl"><i class="ti-angle-left"></i></div>
						<div class="right"><i class="ti-angle-right"></i></div>
					</div>
					<div class="slider-two">
						<div class="owl-carousel owl-theme thumbs">
						<?php foreach($images as $key => $value):?>
									<img src="./image/<?=$value?>" class="<?=$key==0?'item active':'item'?>"alt="">
						<?php endforeach; ?>
					

						</div>
						<div class="left-t nonl-t"></div>
						<div class="right-t"></div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Category</a></li>
						<li>Page active</li>
					</ul>
				</div>
				<!-- /page_header -->
				<div class="prod_info">
					<h1>
						<?= $product_name ?>
					</h1>
					<span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
							class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i><em>4
							reviews</em></span>
					<p><small>SKU: MTKRY-001</small><br> </p>
					<div class="prod_options">
						<!-- <div class="row">
								<label class="col-xl-5 col-lg-5  col-md-6 col-6 pt-0"><strong>Color</strong></label>
								<div class="col-xl-4 col-lg-5 col-md-6 col-6 colors">
									<ul>
										<li><a href="#0" class="color color_1 active"></a></li>
										<li><a href="#0" class="color color_2"></a></li>
										<li><a href="#0" class="color color_3"></a></li>
										<li><a href="#0" class="color color_4"></a></li>
									</ul>
								</div>
							</div> -->
						<div class="row">
							<label class="col-xl-5 col-lg-5 col-md-6 col-6"><strong>Size</strong> - Size Guide <a
									href="#0" data-bs-toggle="modal" data-bs-target="#size-modal"><i
										class="ti-help-alt"></i></a></label>
							<div class="col-xl-4 col-lg-5 col-md-6 col-6">
								<div class="custom-select-form">
									<select class="wide">
										<option value="" selected>Small (S)</option>
										<option value="">M</option>
										<option value=" ">L</option>
										<option value=" ">XL</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<label class="col-xl-5 col-lg-5  col-md-6 col-6"><strong>Quantity</strong></label>
							<div class="col-xl-4 col-lg-5 col-md-6 col-6">
								<div class="numbers-row">
									<input type="text" value="1" id="quantity_1" class="qty2" name="quantity_1">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-5 col-md-6">
							<div class="price_main"><span class="new_price">$
									<?= $price ?>
								</span></div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="btn_add_to_cart"><a href="index.php?act=addtocart" class="btn_1">Add to Cart</a>
							</div>
						</div>
					</div>
				</div>
				<!-- /prod_info -->
				<!-- <div class="product_actions">
						<ul>
							<li>
								<a href="#"><i class="ti-heart"></i><span>Add to Wishlist</span></a>
							</li>
							<li>
								<a href="#"><i class="ti-control-shuffle"></i><span>Add to Compare</span></a>
							</li>
						</ul>
					</div> -->
				<!-- /product_actions -->
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->

	<div class="tabs_product">
		<div class="container">
			<ul class="nav nav-tabs" role="tablist">
				<li class="nav-item">
					<a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab">Description</a>
				</li>

			</ul>
		</div>
	</div>
	<!-- /tabs_product -->
	<div class="tab_content_wrapper">
		<div class="container">
			<div class="tab-content" role="tablist">
				<div id="pane-A" class="card tab-pane fade active show" role="tabpanel" aria-labelledby="tab-A">
					<div class="card-header" role="tab" id="heading-A">
						<h5 class="mb-0">
							<a class="collapsed" data-bs-toggle="collapse" href="#collapse-A" aria-expanded="false"
								aria-controls="collapse-A">
								Description
							</a>
						</h5>
					</div>
					<div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
						<div class="card-body">
							<div class="row justify-content-between">
								<div class="col-lg-6">
									<h3>Details</h3>
									<p>
										<?= $description ?>
									</p>
								</div>

							</div>
						</div>
					</div>
					<!-- /TAB A -->
					->
				</div>
				<!-- /tab-content -->
			</div>
			<!-- /container -->
		</div>
		<!-- /tab_content_wrapper -->

		<div class="container margin_60_35">
			<div class="main_title">
				<h2>Sản Phẩm Liên Quan</h2>

			</div>
			<div class="owl-carousel owl-theme products_carousel">
				<?php
				foreach ($sp_cung_loai as $key => $value): ?>
					<?php extract($value); ?>
					<div class="item">
						<div class="grid_item">
							<span class="ribbon new">New</span>
							<figure>
								<a href="product-detail-1.html">
									<img class="owl-lazy" src="../image/<?= explode(',', $image)[0] ?? '' ?>"
										data-src="../image/<?= explode(',', $image)[0] ?? '' ?>" alt="">
								</a>
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
							</div>
							<a href="product-detail-1.html">
								<h3>
									<?= $product_name ?>
								</h3>
							</a>
							<div class="price_box">
								<span class="new_price">$
									<?= $price ?>
								</span>
							</div>
							<ul>
								<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
										title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a>
								</li>
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
				<?php endforeach; ?>



			</div>
			<!-- /products_carousel -->
		</div>
		<!-- /container -->

		<div class="feat">
			<div class="container">
				<ul>
					<li>
						<div class="box">
							<i class="ti-gift"></i>
							<div class="justify-content-center">
								<h3>Free Shipping</h3>
								<p>For all oders over $99</p>
							</div>
						</div>
					</li>
					<li>
						<div class="box">
							<i class="ti-wallet"></i>
							<div class="justify-content-center">
								<h3>Secure Payment</h3>
								<p>100% secure payment</p>
							</div>
						</div>
					</li>
					<li>
						<div class="box">
							<i class="ti-headphone-alt"></i>
							<div class="justify-content-center">
								<h3>24/7 Support</h3>
								<p>Online top support</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!--/feat-->

</main>
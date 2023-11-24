<main>
	<div class="container margin_30">
		<div class="row">
			<aside class="col-lg-3" id="sidebar_fixed">
				<div class="filter_col">
					<div class="inner_bt"><a href="#" class="open_filters"><i class="ti-close"></i></a></div>
					<div class="filter_type version_2">
						<h4><a href="#filter_1" data-bs-toggle="collapse" class="opened">Categories</a></h4>
						<div class="collapse show" id="filter_1">
							<ul>
								<li>
									<label class="container_check">Men <small>12</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">Women <small>24</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">Running <small>23</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">Training <small>11</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
							</ul>
						</div>
						<!-- /filter_type -->
					</div>
					<!-- /filter_type -->
					<div class="filter_type version_2">
						<h4><a href="#filter_2" data-bs-toggle="collapse" class="opened">Color</a></h4>
						<div class="collapse show" id="filter_2">
							<ul>
								<li>
									<label class="container_check">Blue <small>06</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">Red <small>12</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">Orange <small>17</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">Black <small>43</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
							</ul>
						</div>
					</div>
					<!-- /filter_type -->
					<div class="filter_type version_2">
						<h4><a href="#filter_3" data-bs-toggle="collapse" class="closed">Brands</a></h4>
						<div class="collapse" id="filter_3">
							<ul>
								<li>
									<label class="container_check">Adidas <small>11</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">Nike <small>08</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">Vans <small>05</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">Puma <small>18</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
							</ul>
						</div>
					</div>
					<!-- /filter_type -->
					<div class="filter_type version_2">
						<h4><a href="#filter_4" data-bs-toggle="collapse" class="closed">Price</a></h4>
						<div class="collapse" id="filter_4">
							<ul>
								<li>
									<label class="container_check">$0 — $50<small>11</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">$50 — $100<small>08</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">$100 — $150<small>05</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_check">$150 — $200<small>18</small>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</li>
							</ul>
						</div>
					</div>
					<!-- /filter_type -->
					<div class="buttons">
						<a href="#0" class="btn_1">Filter</a> <a href="#0" class="btn_1 gray">Reset</a>
					</div>
				</div>
			</aside>
			<!-- /col -->

			<div class="col-lg-9">
				<div class="row small-gutters">
					<?php foreach ($dssp as $value): ?>
						<?php extract($value);
						?>
						<div class="col-6 col-md-4">
							<div class="grid_item">
								<figure>
									<a href="index.php?act=chitietsp&idct_sp=<?= $product_id ?>">
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
									<span class="new_price">$
										<?= number_format($price, 0, '.', ',') ?>
									</span>
								</div>
								<ul>
									<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
											title="Add to favorites"><i class="ti-heart"></i><span>Add to
												favorites</span></a></li>
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
						<!-- /col -->
					<?php endforeach; ?>
					<!-- /col -->
				</div>
				<!-- /row -->

				<div class="pagination__wrapper">


					<ul class="pagination" id="pagination">
						<li><a href="index.php?act=sanpham&page=<?=$_GET['page']>1?$_GET['page']-1:1?>" class="prev" title="previous page">&#10094;</a></li>

						<?php
            $Pagepagination = ceil($countsp / $limit);
			

						for ($i = 1; $i <= $Pagepagination; $i++):
							?>
							<li>
								<a href="index.php?act=sanpham&page=<?= $i ?>" class="">
									<?= $i ?>
								</a>
							</li>
						<?php endfor; ?>
						<li><a href="index.php?act=sanpham&page=<?=$_GET['page']<$Pagepagination?$_GET['page']+1:$_GET['page']?>" class="next" title="next page">&#10095;</a></li>
					</ul>

				</div>
			</div>
			<!-- /col -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</main>
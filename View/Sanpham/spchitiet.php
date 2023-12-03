<main>
    <?php

	extract($chitietsp);
	$images = explode(',', $image);

	?>
    <div class="container margin_30">
        <form action="index.php?act=addtocart" method="post">
            <div class="row">

                <div class="col-md-6 ">
                    <div class="all">
                        <div class="slider">
                            <div class="owl-carousel owl-theme main">
                                <?php foreach($images as $key => $value): ?>
                                <img src="./image/<?= $value ?>" class="item-box" alt="">
                                <?php endforeach; ?>


                            </div>
                            <div class="left nonl"><i class="ti-angle-left"></i></div>
                            <div class="right"><i class="ti-angle-right"></i></div>
                        </div>
                        <div class="slider-two">
                            <div class="owl-carousel owl-theme thumbs">
                                <?php foreach($images as $key => $value): ?>
                                <img src="./image/<?= $value ?>" class="<?= $key == 0 ? 'item active' : 'item' ?>"
                                    alt="">
                                <?php endforeach; ?>


                            </div>
                            <div class="left-t nonl-t"></div>
                            <div class="right-t"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
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
                        <div class="prod_options">


                            <div class="row">
                                <label class="col-xl-5 col-lg-5 col-md-6 col-6"><strong>Size</strong></label>
                                <?php foreach ($loadall_pro_detail as $index => $value) : ?>
                                <?php
									extract($value);
									$isOutOfStock = ($quantity == 0);
									?>
                                <div class="col-xl-4 col-lg-5 col-md-6 col-6 w-8">
                                    <div class="custom-select-form">
                                        <label for="size<?= $size ?>"
                                            class="sizeLabel <?= $isOutOfStock ? 'outOfStock' : '' ?>"
                                            <?= $isOutOfStock ? 'title="Hết hàng"' : '' ?>>
                                            <?= $size ?>
                                            <input type="radio" name="selected_size" value="<?= $size ?>"
                                                id="size<?= $size ?>" class="checked"
                                                <?= $isOutOfStock ? 'disabled' : '' ?>
                                                onclick="showQuantity(<?= $quantity ?>)">
                                        </label>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <div id="quantityDisplay">Số lượng còn trong kho: </div>

                            <script>
                            function showQuantity(quantity) {
                                document.getElementById("quantityDisplay").innerHTML = "Số lượng còn trong kho: " +
                                    quantity;

                                // Cập nhật thuộc tính max của đầu vào số lượng
                                const quantityInput = document.getElementById("quantity_1");
                                quantityInput.max = quantity;
                            }
                            </script>

                            <div class="row">	
                                <label class="col-xl-5 col-lg-5  col-md-6 col-6"><strong>Số lượng </strong></label>
                                <div class="col-xl-4 col-lg-5 col-md-6 col-6">
                                    <div class="numbers-row">
                                       
                                        <input type="text" value="1" id="quantity_1" class="qty2"
                                            name="selected_quantity" min="1" max="<?= $quantity ?>">
                                   
                                        </div>
                                </div>
                            </div>
                        </div>
						<?php
						
						?>



                        <div class="row d-flex">
                            <div class="col-lg-5 col-md-6">
                                <div class="price_main"><span class="new_price">$
                                        <?= number_format($price, 0, '.', ',') ?>
                                    </span></div>
                            </div>
                            <?php if($user) { ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="btn_add_to_cart"><input type="submit" name="addcart" id=""
                                        value="Thêm vào giỏ hàng" class="btn_1">
                                </div>
                            </div>
                            <?php } else { ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="btn_add_to_cart">
                                    <a href="index.php?act=account" class="btn_1">Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                            <?php } ?>


                        </div>
                    </div>

                </div>


            </div>
            <input type="hidden" name="product_id" id="" value="<?= $product_id ?>">
            <input type="hidden" name="product_name" id="" value="<?= $product_name ?>">
            <input type="hidden" value="<?= $image ?>" name="img">

            <input type="hidden" name="price" id="" value="<?= $price ?>">
            <input type="hidden" name="size" id="" value="<?= $size ?>">
            <input type="hidden" name="quantity" id="" value="<?= $quantity ?>">

        </form>

        <!-- /row -->
    </div>
    <!-- /container -->

    <div class="tabs_product">
        <div class="container">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab">Mô tả</a>
                </li>
                <li class="nav-item">
                    <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab" role="tab">Đánh giá</a>
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
                                Mô Tả
                            </a>
                        </h5>
                    </div>
                    <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-lg-6">
                                    <h3>Mô Tả Chi Tiết</h3>
                                    <p>
                                        <?= $description ?>
                                    </p>
                                </div>
                                <div class="col-lg-5">

                                    <!-- /table-responsive -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /TAB A -->
                <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                    <div class="card-header" role="tab" id="heading-B">
                        <h5 class="mb-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false"
                                aria-controls="collapse-B">
                                Bình Luận
                            </a>
                        </h5>
                    </div>
                    <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
                        <main>
                            <div class="container margin_60_35">
                                <form action="index.php?act=chitietsp" method="post">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <table class="table table-responsive	">
                                                <tr>
                                                    <th>Tên người dùng</th>
                                                    <th>Nội dung</th>
                                                    <th>Ngày bình luận</th>
                                                </tr>
                                                <?php
												foreach($load_all_binhluan as $binhluan) {
													extract($binhluan);
													?>
                                                <tr>
                                                    <td>
                                                        <?= $user_name ?>
                                                    </td>
                                                    <td>
                                                        <?= $content ?>
                                                    </td>
                                                    <td>
                                                        <?= $date_comment ?>
                                                    </td>
                                                </tr>
                                                <?php
												}
												?>
                                            </table>
                                            <div class="write_review">

                                                <?php
												if($user) {
													?>
                                                <div class="form-group">
                                                    <label>Đánh giá của bạn</label>
                                                    <input type="hidden" name="product_id" value="<?= $product_id ?>">
                                                    <textarea class="form-control" name="noidung" cols="30" rows="3"
                                                        placeholder="Viết đánh giá để mọi người có thể hiểu hơn về sản phẩm"></textarea>
                                                </div>

                                                <button class="btn_1" name="guibinhluan">Gửi bình luận</button>
                                                <?php
												} else {
													?>
                                                <div class="form-group">
                                                    Vui lòng đăng nhập để bình luận!
                                                </div>
                                                <?php
												}
												?>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- /row -->
                            </div>
                            <!-- /container -->
                        </main>
                        <!-- /card-body -->
                    </div>
                </div>
                <!-- /tab B -->
            </div>
            <!-- /tab-content -->
        </div>
        <!-- /container -->
    </div>
    <!-- /tab_content_wrapper -->

    <div class="container margin_60_35">
        <div class="main_title">
            <h2>Sản Phẩm liên quan</h2>


        </div>
        <div class="owl-carousel owl-theme products_carousel">
            <?php foreach($sp_cung_loai as $key => $value):
				extract($value);
				?>
            <div class="item">
                <div class="grid_item">
                    <figure>
                        <a href="index.php?act=chitietsp&idct_sp=<?= $product_id ?>">
                            <img class="img-fluid lazy" src="image/<?= explode(',', $image)[0] ?? '' ?>"
                                data-src="image/<?= explode(',', $image)[0] ?? '' ?>" alt="">
                        </a>
                    </figure>
                    <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                            class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
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
                    <!-- <ul>
						<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
								title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
						<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
								title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
						</li>
						<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left"
								title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
					</ul> -->
                </div>
                <!-- /grid_item -->
            </div>

            <?php endforeach ?>


        </div>

    </div>
    <!-- /container -->


</main>
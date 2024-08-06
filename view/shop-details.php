<?php
extract($pro);
$listImg = explode(", ", $anh_san_pham)
?>

<div id="site-main" class="site-main">
	<div id="main-content" class="main-content">
		<div id="primary" class="content-area">
			<div id="title" class="page-title">
				<div class="section-container">
					<div class="content-title-heading">
						<h1 class="text-title-heading">
							<?= $ten_san_pham ?>
						</h1>
					</div>
					<div class="breadcrumbs">
						<a href="index.php">Home</a><span class="delimiter"></span><a href="shop-grid-left.html">Shop</a><span class="delimiter"></span><?= $ten_san_pham ?>
					</div>
				</div>
			</div>

			<div id="content" class="site-content" role="main">
				<div class="shop-details zoom" data-product_layout_thumb="scroll" data-zoom_scroll="true" data-zoom_contain_lens="true" data-zoomtype="inner" data-lenssize="200" data-lensshape="square" data-lensborder="" data-bordersize="2" data-bordercolour="#f9b61e" data-popup="false">
					<div class="product-top-info">
						<div class="section-padding">
							<div class="section-container p-l-r">
								<div class="row">
									<div class="product-images col-lg-7 col-md-12 col-12">
										<div class="row">
											<div class="col-md-2">
												<div class="content-thumbnail-scroll">
													<div class="image-thumbnail slick-carousel slick-vertical" data-asnavfor=".image-additional" data-centermode="true" data-focusonselect="true" data-columns4="5" data-columns3="4" data-columns2="4" data-columns1="4" data-columns="4" data-nav="true" data-vertical="&quot;true&quot;" data-verticalswiping="&quot;true&quot;">
														<?php foreach ($listImg as $img) : ?>

															<div class="img-item slick-slide">
																<span class="img-thumbnail-scroll">
																	<img width="300px" height="300px" src="media/product/<?= $img ?>" alt="">
																</span>
															</div>

														<?php endforeach; ?>
													</div>
												</div>
											</div>
											<div class="col-md-8">
												<div class="scroll-image main-image">
													<div class="image-additional slick-carousel" data-asnavfor=".image-thumbnail" data-fade="true" data-columns4="1" data-columns3="1" data-columns2="1" data-columns1="1" data-columns="1" data-nav="true">
														<?php foreach ($listImg as $img) : ?>

															<div class="img-item slick-slide">
																<img width="300px" height="300px" src="media/product/<?= $img ?>" alt="" title="">
															</div>

														<?php endforeach; ?>

													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="product-info col-lg-5 col-md-12 col-12 ">
										<h1 class="title"><?= $ten_san_pham ?></h1>
										<span class="price">
											<del aria-hidden="true"><span>$<?= number_format($don_gia, 2) ?></span></del>
											<ins><span>$<?= number_format($gia_khuyen_mai, 2) ?></span></ins>
										</span>
										<div class="rating">
											<div class="star star-<?= $rate_avg ?>"></div>
											<div class="review-count">
												(<?= $so_luong_binh_luan ?><span> reviews</span>)
											</div>
										</div>
										<div class="buttons">
											<div class="add-to-cart-wrap">
												<div class="quantity">
													<button type="button" class="plus">+</button>
													<input type="number" class="qty" step="1" min="0" max="" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric" autocomplete="off">
													<button type="button" class="minus">-</button>
												</div>
												<div class="btn-add-to-cart_ct">
													<a class="button" tabindex="0" onclick="addCartQtt(<?= $ma_san_pham ?>, this)">Thêm vào giỏ hàng</a>
												</div>
											</div>
										</div>
										<div class="product-meta">
											<span class="sku-wrapper">SKU: <span class="sku">MSI_<?= $ma_san_pham ?></span></span>
											<span class="posted-in">Category: <a href="?act=shop-grid-left&cate=<?= $ma_loai ?>" rel="tag"><?= $ten_loai ?></a></span>
											<span class="tagged-as">Tags: <a href="?act=shop-grid-left&cate=<?= $ma_loai ?>" rel="tag">Hot</a>, <a href="?act=shop-grid-left&cate=<?= $ma_loai ?>" rel="tag">Trend</a></span>
										</div>
										<div class="product-meta">
											<p class="sku-wrapper">Author : <strong><span class="sku"><?= $tac_gia ?></span></strong></p>
											<p class="posted-in">Publisher: <strong><span class="sku"><?= $nxb ?></span></strong></p>
											<p class="tagged-as">Publication Year: <strong><span class="sku"><?= $nam_xb ?></span></strong></p>
											<p class="tagged-as">Number of pages: <strong><span class="sku"><?= $so_trang ?></span></strong></p>
										</div>
										<div class="social-share">
											<div class="description">
												<p>Mô tả về sách : <?= $mo_ta_tom_tat ?></p>
											</div>
											<div class="description">
												<a href="#" title="Facebook" class="share-facebook" target="_blank">Facebook</a>
												<i class="fa-brands fa-facebook"></i>
											</div>
											<div class="description">
												<a href="#" title="Twitter" class="share-twitter">Twitter</a>
												<i class="fa-brands fa-twitter"></i>
											</div>
											<div class="description">
												<a href="#" title="Pinterest" class="share-pinterest">Intargram</a>
												<i class="fa fa-pinterest"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="product-tabs">
						<div class="section-padding">
							<div class="section-container p-l-r">
								<div class="product-tabs-wrap">
									<ul class="nav nav-tabs" role="tablist">
										<!-- <li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
										</li> -->
										<!-- <li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#additional-information" role="tab">Additional information</a>
										</li> -->
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Đánh giá (<?= $so_luong_binh_luan ?>)</a>
										</li>
									</ul>
									<div class="tab-content">
										<!-- <div class="tab-pane fade show active" id="description" role="tabpanel">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
											<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
										</div> -->
										<!-- <div class="tab-pane fade" id="additional-information" role="tabpanel">
											<table class="product-attributes">
												<tbody>
													<tr class="attribute-item">
														<th class="attribute-label">Color</th>
														<td class="attribute-value">Black, Blue, Green</td>
													</tr>
												</tbody>
											</table>
										</div> -->
										<div class="tab-pane fade" id="reviews" role="tabpanel">
											<div id="reviews" class="product-reviews">
												<div id="comments">
													<h2 class="reviews-title"><?= $so_luong_binh_luan ?> Bình luận cho <span><?= $ten_san_pham ?></span></h2>
													<ol class="comment-list">
														<li class="review">
															<?php foreach ($listBinhLuan as $item) : ?>
																<?php extract($item) ?>
																<div class="content-comment-container">
																	<div class="comment-container">
																		<img src="media/user.jpg" class="avatar" height="60" width="60" alt="">
																		<div class="comment-text">
																			<div class="rating small">
																				<div class="star star-<?= $rate ?>"></div>
																			</div>
																			<div class="review-author"><?php if ($ten_khach_hang == "") echo $email;
																										else echo $ten_khach_hang ?></div>
																			<div class="review-time"><?= $ngay_binh_luan ?></div>
																		</div>
																	</div>
																	<div class="description">
																		<p><?= $noi_dung ?></p>
																	</div>
																</div>
															<?php endforeach; ?>
														</li>
													</ol>
												</div>
												<div id="review-form">
													<div id="respond" class="comment-respond">
														<?php if (isset($_SESSION['user'])) { ?>
															<span id="reply-title" class="comment-reply-title">Add a review</span>

															<form action="?act=binhluan" method="post" id="comment-form" class="comment-form" onsubmit="return validateStar()">
																<input type="hidden" value="<?= $id ?>" name="id">
																<input type="hidden" value="" name="star">
																<!-- <p class="comment-notes">
																	<span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
																</p> -->
																<div class="comment-form-rating">
																	<label for="rating">Đánh giá của bản về sản phẩm</label>
																	<p class="stars" value=0>
																		<span>
																			<a class="star-1" value=1>1</a><a class="star-2" value=2>2</a><a class="star-3" value=3>3</a><a class="star-4" value=4>4</a><a class="star-5" value=5>5</a>
																		</span>
																	</p>
																</div>
																<p class="comment-form-comment">
																	<textarea id="comment" name="comment" placeholder="Đánh giá của bạn *" cols="45" rows="8" aria-required="true" required=""></textarea>
																</p>
																<div class="content-info-reviews">
																	<p class="comment-form-author">
																		<input id="author_cmt" name="author" placeholder="Name *" type="text" value="<?php if (isset($user)) echo $user['name'] ?>" size="30" aria-required="true" required="">
																	</p>
																	<p class="comment-form-email">
																		<input id="email_cmt" name="email" placeholder="Email *" type="email" value="<?php if (isset($user)) echo $user['email'] ?>" size="30" aria-required="true" required="" <?php if (isset($user)) echo 'disabled' ?>>
																	</p>
																	<p class="form-submit">
																		<input name="submit" type="submit" id="submit_cmt" class="submit" value="Gửi">
																	</p>
																</div>
															</form>
														<?php } else { ?>
															<span id="shop-details-btn-show-login" class="comment-reply-title" style="cursor: pointer;">Đăng nhập để bình luận</span>
														<?php } ?>
														<!-- #respond -->
													</div>
												</div>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="product-related">
						<div class="section-padding">
							<div class="section-container p-l-r">
								<div class="block block-products slider">
									<div class="block-title">
										<h2>Related Products</h2>
									</div>
									<div class="block-content">
										<div class="content-product-list slick-wrap">
											<div class="slick-sliders products-list grid" data-slidestoscroll="true" data-dots="false" data-nav="1" data-columns4="1" data-columns3="2" data-columns2="3" data-columns1="3" data-columns1440="4" data-columns="4">
												<div class="item-product slick-slide">
													<div class="items">
														<div class="products-entry clearfix product-wapper">
															<div class="products-thumb">
																<div class="product-lable">
																	<div class="hot">Hot</div>
																</div>
																<div class="product-thumb-hover">
																	<a href="shop-details.html">
																		<img width="600" height="600" src="media/product/1.jpg" class="post-image" alt="">
																		<img width="600" height="600" src="media/product/1-2.jpg" class="hover-image back" alt="">
																	</a>
																</div>
																<div class="product-button">
																	<div class="btn-add-to-cart" data-title="Add to cart">
																		<a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
																	</div>
																	<div class="btn-wishlist" data-title="Wishlist">
																		<button class="product-btn">Add to wishlist</button>
																	</div>
																	<div class="btn-compare" data-title="Compare">
																		<button class="product-btn">Compare</button>
																	</div>
																	<span class="product-quickview" data-title="Quick View">
																		<a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
																	</span>
																</div>
															</div>
															<div class="products-content">
																<div class="contents text-center">
																	<h3 class="product-title"><a href="shop-details.html">Zunkel Schwarz</a></h3>
																	<div class="rating">
																		<div class="star star-5"></div>
																	</div>
																	<span class="price">$100.00</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="item-product slick-slide">
													<div class="items">
														<div class="products-entry clearfix product-wapper">
															<div class="products-thumb">
																<div class="product-lable">
																	<div class="hot">Hot</div>
																</div>
																<div class="product-thumb-hover">
																	<a href="shop-details.html">
																		<img width="600" height="600" src="media/product/2.jpg" class="post-image" alt="">
																		<img width="600" height="600" src="media/product/2-2.jpg" class="hover-image back" alt="">
																	</a>
																</div>
																<div class="product-button">
																	<div class="btn-add-to-cart" data-title="Add to cart">
																		<a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
																	</div>
																	<div class="btn-wishlist" data-title="Wishlist">
																		<button class="product-btn">Add to wishlist</button>
																	</div>
																	<div class="btn-compare" data-title="Compare">
																		<button class="product-btn">Compare</button>
																	</div>
																	<span class="product-quickview" data-title="Quick View">
																		<a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
																	</span>
																</div>
															</div>
															<div class="products-content">
																<div class="contents text-center">
																	<h3 class="product-title"><a href="shop-details.html">Namaste Vase</a></h3>
																	<div class="rating">
																		<div class="star star-4"></div>
																	</div>
																	<span class="price">$200.00</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="item-product slick-slide">
													<div class="items">
														<div class="products-entry clearfix product-wapper">
															<div class="products-thumb">
																<div class="product-lable">
																	<div class="hot">Hot</div>
																</div>
																<div class="product-thumb-hover">
																	<a href="shop-details.html">
																		<img width="600" height="600" src="media/product/3.jpg" class="post-image" alt="">
																		<img width="600" height="600" src="media/product/3-2.jpg" class="hover-image back" alt="">
																	</a>
																</div>
																<div class="product-button">
																	<div class="btn-add-to-cart" data-title="Add to cart">
																		<a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
																	</div>
																	<div class="btn-wishlist" data-title="Wishlist">
																		<button class="product-btn">Add to wishlist</button>
																	</div>
																	<div class="btn-compare" data-title="Compare">
																		<button class="product-btn">Compare</button>
																	</div>
																	<span class="product-quickview" data-title="Quick View">
																		<a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
																	</span>
																</div>
															</div>
															<div class="products-content">
																<div class="contents text-center">
																	<h3 class="product-title"><a href="shop-details.html">Chair Oak Matt Lacquered</a></h3>
																	<div class="rating">
																		<div class="star star-0"></div>
																	</div>
																	<span class="price">$150.00</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="item-product slick-slide">
													<div class="items">
														<div class="products-entry clearfix product-wapper">
															<div class="products-thumb">
																<div class="product-lable">
																	<div class="onsale">-33%</div>
																</div>
																<div class="product-thumb-hover">
																	<a href="shop-details.html">
																		<img width="600" height="600" src="media/product/4.jpg" class="post-image" alt="">
																		<img width="600" height="600" src="media/product/4-2.jpg" class="hover-image back" alt="">
																	</a>
																</div>
																<div class="product-button">
																	<div class="btn-add-to-cart" data-title="Add to cart">
																		<a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
																	</div>
																	<div class="btn-wishlist" data-title="Wishlist">
																		<button class="product-btn">Add to wishlist</button>
																	</div>
																	<div class="btn-compare" data-title="Compare">
																		<button class="product-btn">Compare</button>
																	</div>
																	<span class="product-quickview" data-title="Quick View">
																		<a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
																	</span>
																</div>
															</div>
															<div class="products-content">
																<div class="contents text-center">
																	<h3 class="product-title"><a href="shop-details.html">Pillar Dining Table Round</a></h3>
																	<div class="rating">
																		<div class="star star-5"></div>
																	</div>
																	<span class="price">
																		<del aria-hidden="true"><span>$150.00</span></del>
																		<ins><span>$100.00</span></ins>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="item-product slick-slide">
													<div class="items">
														<div class="products-entry clearfix product-wapper">
															<div class="products-thumb">
																<div class="product-lable">
																	<div class="onsale">-7%</div>
																</div>
																<div class="product-thumb-hover">
																	<a href="shop-details.html">
																		<img width="600" height="600" src="media/product/5.jpg" class="post-image" alt="">
																		<img width="600" height="600" src="media/product/5-2.jpg" class="hover-image back" alt="">
																	</a>
																</div>
																<div class="product-button">
																	<div class="btn-add-to-cart" data-title="Add to cart">
																		<a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
																	</div>
																	<div class="btn-wishlist" data-title="Wishlist">
																		<button class="product-btn">Add to wishlist</button>
																	</div>
																	<div class="btn-compare" data-title="Compare">
																		<button class="product-btn">Compare</button>
																	</div>
																	<span class="product-quickview" data-title="Quick View">
																		<a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
																	</span>
																</div>
																<div class="product-stock">
																	<span class="stock">Out Of Stock</span>
																</div>
															</div>
															<div class="products-content">
																<div class="contents text-center">
																	<h3 class="product-title"><a href="shop-details.html">Amp Pendant Light Large</a></h3>
																	<div class="rating">
																		<div class="star star-4"></div>
																	</div>
																	<span class="price">
																		<del aria-hidden="true"><span>$150.00</span></del>
																		<ins><span>$140.00</span></ins>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
				</div>
			</div><!-- #content -->
		</div><!-- #primary -->
	</div><!-- #main-content -->
</div>

<script>
	$('.stars').click((e) => {
		var eTarget = e.target

		if (!eTarget.className == "") {
			$('.stars a').each(function() {
				this.style.color = ''
			});
			var stars = eTarget.parentElement.parentElement
			var value = eTarget.getAttribute('value')
			var star = document.querySelector('input[name="star"]')
			star.value = value

			stars.setAttribute('value', value)
			do {
				eTarget.style.color = '#f5bf1c'
				eTarget = eTarget.previousElementSibling
			} while (eTarget != null);
		}
	})

	function validateStar() {
		var value = document.querySelector('input[name="star"]').value
		if (value == '') {
			toast({
				title: "Thất bại!",
				message: "Bạn phải đánh giá sản phẩm ở phần rating",
				type: "error",
				duration: 5000
			});
			return false
		}

		return true
	}

	$('#shop-details-btn-show-login').click(() => {
		$('.form-login-register').addClass('active')
	})
</script>
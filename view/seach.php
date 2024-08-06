<div id="site-main" class="site-main">
    <div id="main-content" class="main-content">
        <div id="primary" class="content-area">
            <div id="title" class="page-title">
                <div class="section-container">
                    <div class="content-title-heading">
                        <h1 class="text-title-heading">
                            <?php
                            $name_cate = "Seach";
                            foreach ($listCate as $cate) {
                                extract($cate);
                                if ($id_cate == $ma_loai) {
                                    $name_cate = $ten_loai;
                                    break;
                                }
                            }
                            echo $name_cate;
                            ?>
                        </h1>
                    </div>
                    <div class="breadcrumbs">
                        <a href="index.php">Home</a><span class="delimiter"></span><a href="?act=shop-grid-left">Shop</a><span class="delimiter"></span><?= $name_cate ?>
                    </div>
                </div>
            </div>

            <div id="content" class="site-content" role="main">
                <div class="section-padding">
                    <div class="section-container p-l-r">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-12 col-12 sidebar left-sidebar md-b-50">
                                <!-- Block Product Categories -->
                                <div class="block block-product-cats">
                                    <div class="block-title">
                                        <h2>Danh mục</h2>
                                    </div>
                                    <div class="block-content">
                                        <div class="product-cats-list">
                                            <ul>
                                                <li <?php if ($id_cate == 0) echo 'class="current"' ?>>
                                                    <a href="?act=shop-grid-left&page=1">All<span class="count"><?= $countAll ?></span></a>
                                                </li>
                                                <?php foreach ($listCate as $cate) : ?>
                                                    <?php extract($cate) ?>
                                                    <li <?php if ($id_cate == $ma_loai) echo 'class="current"' ?>>
                                                        <a href="?act=shop-grid-left&cate=<?= $ma_loai ?>&page=1"><?= $ten_loai ?> <span class="count"><?= $so_luong ?></span></a>
                                                    </li>
                                                <?php endforeach; ?>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Block Product Filter -->
                                <!-- <div class="block block-product-filter">
									<div class="block-title">
										<h2>Price</h2>
									</div>
									<div class="block-content">
										<div id="slider-range" class="price-filter-wrap">
											<div class="filter-item price-filter">
												<div class="layout-slider">
													<input id="price-filter" name="price" value="0;100" />
												</div>
												<div class="layout-slider-settings"></div>
											</div>
										</div>
									</div>
								</div> -->

                                <!-- Block Product Filter -->
                                <!-- <div class="block block-product-filter clearfix">
									<div class="block-title">
										<h2>Size</h2>
									</div>
									<div class="block-content">
										<ul class="filter-items text">
											<li><span>L</span></li>
											<li><span>M</span></li>
											<li><span>S</span></li>
										</ul>
									</div>
								</div> -->

                                <!-- Block Product Filter -->
                                <!-- <div class="block block-product-filter clearfix">
									<div class="block-title">
										<h2>Brands</h2>
									</div>
									<div class="block-content">
										<ul class="filter-items image">
											<li><span><img src="media/brand/1.jpg" alt="Brand"></span></li>
											<li><span><img src="media/brand/2.jpg" alt="Brand"></span></li>
											<li><span><img src="media/brand/3.jpg" alt="Brand"></span></li>
											<li><span><img src="media/brand/4.jpg" alt="Brand"></span></li>
											<li><span><img src="media/brand/5.jpg" alt="Brand"></span></li>
										</ul>
									</div>
								</div> -->

                                <!-- Block Products -->
                                <!-- <div class="block block-products">
									<div class="block-title">
										<h2>Feature Product</h2>
									</div>
									<div class="block-content">
										<ul class="products-list">
											<li class="product-item">
												<a href="shop-details.html" class="product-image">
													<img src="media/product/6.jpg">
												</a>
												<div class="product-content">
													<h2 class="product-title">
														<a href="shop-details.html">
															Dining Table
														</a>
													</h2>
													<div class="rating small">
														<div class="star star-5"></div>
													</div>
													<span class="price">
														<del aria-hidden="true"><span>$150.00</span></del>
														<ins><span>$100.00</span></ins>
													</span>
												</div>
											</li>
											<li class="product-item">
												<a href="shop-details.html" class="product-image">
													<img src="media/product/8.jpg">
												</a>
												<div class="product-content">
													<h2 class="product-title">
														<a href="shop-details.html">
															Spinning Pendant Lamp
														</a>
													</h2>
													<div class="rating small">
														<div class="star star-0"></div>
													</div>
													<span class="price">$120.00</span>
												</div>
											</li>
											<li class="product-item">
												<a href="shop-details.html" class="product-image">
													<img src="media/product/9.jpg">
												</a>
												<div class="product-content">
													<h2 class="product-title">
														<a href="shop-details.html">
															Bora Armchair
														</a>
													</h2>
													<div class="rating small">
														<div class="star star-5"></div>
													</div>
													<span class="price">
														<del aria-hidden="true"><span>$200.00</span></del>
														<ins><span>$180.00</span></ins>
													</span>
												</div>
											</li>
										</ul>
									</div>
								</div> -->
                            </div>

                            <div class="col-xl-9 col-lg-9 col-md-12 col-12">
                                <div class="products-topbar clearfix">
                                    <div class="products-topbar-left">
                                        <div class="products-count">
                                            Có <?= $count ?> sản phẩm
                                        </div>
                                    </div>
                                    <div class="products-topbar-right">
                                        <div class="products-sort dropdown">
                                            <span class="sort-toggle dropdown-toggle" data-toggle="dropdown" aria-expanded="true" value=0>Default sorting</span>
                                            <ul class="sort-list dropdown-menu" x-placement="bottom-start" style="transform: translate3d(0px, 36px, 0px) !important ;;">
                                                <li value="0"><a>Sắp xếp mặc đinh</a></li>
                                                <li value="1"><a>Sắp xem theo giá: thấp -> cao</a></li>
                                                <li value="2"><a>Sắp xem theo giá: cao -> thấp</a></li>
                                                <!-- <li value="1"><a>Sort by popularity</a></li> -->
                                                <!-- <li value="2"><a>Sort by average rating</a></li>
												<li value="3"><a>Sort by latest</a></li> -->
                                            </ul>
                                        </div>
                                        <!-- <ul class="layout-toggle nav nav-tabs">
											<li class="nav-item">
												<a class="layout-grid nav-link active" data-toggle="tab" href="#layout-grid" role="tab"><span class="icon-column"><span class="layer first"><span></span><span></span><span></span></span><span class="layer middle"><span></span><span></span><span></span></span><span class="layer last"><span></span><span></span><span></span></span></span></a>
											</li>
											<li class="nav-item">
												<a class="layout-list nav-link" data-toggle="tab" href="#layout-list" role="tab"><span class="icon-column"><span class="layer first"><span></span><span></span></span><span class="layer middle"><span></span><span></span></span><span class="layer last"><span></span><span></span></span></span></a>
											</li>
										</ul> -->
                                    </div>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="layout-grid" role="tabpanel">
                                        <div class="products-list grid">

                                            <div class="product-row">
                                                <?php
                                                foreach ($listSeach as $seach) {
                                                    echo '<div class="product-item">';
                                                    echo '<a href="index.php?act=shop-details&id=' . $seach['ma_san_pham'] . '"><img src="media/product/' . $seach['anh_san_pham'] . '" alt="' . $seach['ten_san_pham'] . '" width="250px" height="300px"></a>';
                                                    echo '<h3>' . $seach['ten_san_pham'] . '</h3>';
                                                    echo '<p>' . $seach['gia_khuyen_mai'] . ' $</p>'; // Thay đổi theo cấu trúc thực tế của bảng san_pham
                                                    echo '</div>';
                                                }
                                                ?>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- <div class="tab-pane fade" id="layout-list" role="tabpanel">
										<div class="products-list list">
											<div class="products-entry clearfix product-wapper">
												<div class="row">
													<div class="col-md-4">
														<div class="products-thumb">
															<div class="product-lable">
																<div class="hot">Hot</div>
															</div>
															<div class="product-thumb-hover">
																<a href="shop-details.html">
																	<img width="600" height="600" src="media/product/6.jpg" class="post-image" alt="">
																	<img width="600" height="600" src="media/product/6-2.jpg" class="hover-image back" alt="">
																</a>
															</div>
															<span class="product-quickview" data-title="Quick View">
																<a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
															</span>
														</div>
													</div>
													<div class="col-md-8">
														<div class="products-content">
															<h3 class="product-title"><a href="shop-details.html">Dining Table</a></h3>
															<span class="price">$150.00</span>
															<div class="rating">
																<div class="star star-5"></div>
																<div class="review-count">
																	(1<span> review</span>)
																</div>
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
															</div>
															<div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis…</div>
														</div>
													</div>
												</div>
											</div>
											<div class="products-entry clearfix product-wapper">
												<div class="row">
													<div class="col-md-4">
														<div class="products-thumb">
															<div class="product-lable">
																<div class="hot">Hot</div>
															</div>
															<div class="product-thumb-hover">
																<a href="shop-details.html">
																	<img width="600" height="600" src="media/product/4.jpg" class="post-image" alt="">
																	<img width="600" height="600" src="media/product/4-2.jpg" class="hover-image back" alt="">
																</a>
															</div>
															<span class="product-quickview" data-title="Quick View">
																<a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
															</span>
														</div>
													</div>
													<div class="col-md-8">
														<div class="products-content">
															<h3 class="product-title"><a href="shop-details.html">Pillar Dining Table Round</a></h3>
															<span class="price">
																<del aria-hidden="true"><span>$150.00</span></del>
																<ins><span>$100.00</span></ins>
															</span>
															<div class="rating">
																<div class="star star-0"></div>
																<div class="review-count">
																	(0<span> review</span>)
																</div>
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
															</div>
															<div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis…</div>
														</div>
													</div>
												</div>
											</div>
											<div class="products-entry clearfix product-wapper">
												<div class="row">
													<div class="col-md-4">
														<div class="products-thumb">
															<div class="product-lable">
																<div class="hot">Hot</div>
															</div>
															<div class="product-thumb-hover">
																<a href="shop-details.html">
																	<img width="600" height="600" src="media/product/7.jpg" class="post-image" alt="">
																	<img width="600" height="600" src="media/product/7-2.jpg" class="hover-image back" alt="">
																</a>
															</div>
															<span class="product-quickview" data-title="Quick View">
																<a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
															</span>
														</div>
													</div>
													<div class="col-md-8">
														<div class="products-content">
															<h3 class="product-title"><a href="shop-details.html">Mags Sofa 2.5 Seater</a></h3>
															<span class="price">$150.00</span>
															<div class="rating">
																<div class="star star-4"></div>
																<div class="review-count">
																	(1<span> review</span>)
																</div>
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
															</div>
															<div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis…</div>
														</div>
													</div>
												</div>
											</div>
											<div class="products-entry clearfix product-wapper">
												<div class="row">
													<div class="col-md-4">
														<div class="products-thumb">
															<div class="product-lable">
																<div class="hot">Hot</div>
															</div>
															<div class="product-thumb-hover">
																<a href="shop-details.html">
																	<img width="600" height="600" src="media/product/8.jpg" class="post-image" alt="">
																	<img width="600" height="600" src="media/product/8-2.jpg" class="hover-image back" alt="">
																</a>
															</div>
															<span class="product-quickview" data-title="Quick View">
																<a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
															</span>
														</div>
													</div>
													<div class="col-md-8">
														<div class="products-content">
															<h3 class="product-title"><a href="shop-details.html">Spinning pendant lamp</a></h3>
															<span class="price">
																<del aria-hidden="true"><span>$120.00</span></del>
																<ins><span>$100.00</span></ins>
															</span>
															<div class="rating">
																<div class="star star-0"></div>
																<div class="review-count">
																	(0<span> review</span>)
																</div>
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
															</div>
															<div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis…</div>
														</div>
													</div>
												</div>
											</div>
											<div class="products-entry clearfix product-wapper">
												<div class="row">
													<div class="col-md-4">
														<div class="products-thumb">
															<div class="product-lable">
																<div class="hot">Hot</div>
															</div>
															<div class="product-thumb-hover">
																<a href="shop-details.html">
																	<img width="600" height="600" src="media/product/9.jpg" class="post-image" alt="">
																	<img width="600" height="600" src="media/product/9-2.jpg" class="hover-image back" alt="">
																</a>
															</div>
															<span class="product-quickview" data-title="Quick View">
																<a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
															</span>
														</div>
													</div>
													<div class="col-md-8">
														<div class="products-content">
															<h3 class="product-title"><a href="shop-details.html">Bora Armchair</a></h3>
															<span class="price">
																<del aria-hidden="true"><span>$100.00</span></del>
																<ins><span>$90.00</span></ins>
															</span>
															<div class="rating">
																<div class="star star-5"></div>
																<div class="review-count">
																	(3<span> review</span>)
																</div>
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
															</div>
															<div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis…</div>
														</div>
													</div>
												</div>
											</div>
											<div class="products-entry clearfix product-wapper">
												<div class="row">
													<div class="col-md-4">
														<div class="products-thumb">
															<div class="product-lable">
																<div class="hot">Hot</div>
															</div>
															<div class="product-thumb-hover">
																<a href="shop-details.html">
																	<img width="600" height="600" src="media/product/10.jpg" class="post-image" alt="">
																	<img width="600" height="600" src="media/product/10-2.jpg" class="hover-image back" alt="">
																</a>
															</div>
															<span class="product-quickview" data-title="Quick View">
																<a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
															</span>
														</div>
													</div>
													<div class="col-md-8">
														<div class="products-content">
															<h3 class="product-title"><a href="shop-details.html">Panton Dining Table</a></h3>
															<span class="price">
																<del aria-hidden="true"><span>$79.00</span></del>
																<ins><span>$50.00</span></ins>
															</span>
															<div class="rating">
																<div class="star star-5"></div>
																<div class="review-count">
																	(2<span> review</span>)
																</div>
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
															</div>
															<div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis…</div>
														</div>
													</div>
												</div>
											</div>
											<div class="products-entry clearfix product-wapper">
												<div class="row">
													<div class="col-md-4">
														<div class="products-thumb">
															<div class="product-lable">
																<div class="hot">Hot</div>
															</div>
															<div class="product-thumb-hover">
																<a href="shop-details.html">
																	<img width="600" height="600" src="media/product/11.jpg" class="post-image" alt="">
																	<img width="600" height="600" src="media/product/11-2.jpg" class="hover-image back" alt="">
																</a>
															</div>
															<span class="product-quickview" data-title="Quick View">
																<a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
															</span>
														</div>
													</div>
													<div class="col-md-8">
														<div class="products-content">
															<h3 class="product-title"><a href="shop-details.html">Kittchen Table</a></h3>
															<span class="price">$120.00</span>
															<div class="rating">
																<div class="star star-4"></div>
																<div class="review-count">
																	(1<span> review</span>)
																</div>
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
															</div>
															<div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis…</div>
														</div>
													</div>
												</div>
											</div>
											<div class="products-entry clearfix product-wapper">
												<div class="row">
													<div class="col-md-4">
														<div class="products-thumb">
															<div class="product-lable">
																<div class="hot">Hot</div>
															</div>
															<div class="product-thumb-hover">
																<a href="shop-details.html">
																	<img width="600" height="600" src="media/product/12.jpg" class="post-image" alt="">
																	<img width="600" height="600" src="media/product/12-2.jpg" class="hover-image back" alt="">
																</a>
															</div>
															<span class="product-quickview" data-title="Quick View">
																<a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
															</span>
														</div>
													</div>
													<div class="col-md-8">
														<div class="products-content">
															<h3 class="product-title"><a href="shop-details.html">Mundo Sofa With Cushion</a></h3>
															<span class="price">
																<del aria-hidden="true"><span>$200.00</span></del>
																<ins><span>$180.00</span></ins>
															</span>
															<div class="rating">
																<div class="star star-5"></div>
																<div class="review-count">
																	(4<span> review</span>)
																</div>
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
															</div>
															<div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis…</div>
														</div>
													</div>
												</div>
											</div>
											<div class="products-entry clearfix product-wapper">
												<div class="row">
													<div class="col-md-4">
														<div class="products-thumb">
															<div class="product-lable">
																<div class="hot">Hot</div>
															</div>
															<div class="product-thumb-hover">
																<a href="shop-details.html">
																	<img width="600" height="600" src="media/product/5.jpg" class="post-image" alt="">
																	<img width="600" height="600" src="media/product/5-2.jpg" class="hover-image back" alt="">
																</a>
															</div>
															<span class="product-quickview" data-title="Quick View">
																<a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
															</span>
														</div>
													</div>
													<div class="col-md-8">
														<div class="products-content">
															<h3 class="product-title"><a href="shop-details.html">Amp Pendant Light Large</a></h3>
															<span class="price">$140.00</span>
															<div class="rating">
																<div class="star star-5"></div>
																<div class="review-count">
																	(1<span> review</span>)
																</div>
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
															</div>
															<div class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis…</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div> -->
                                </div>

                                <!-- <nav class="pagination">
                                    <ul class="page-numbers">
                                        <li><a class="prev page-numbers" href="#">Previous</a></li>
                                        <li><span aria-current="page" class="page-numbers current">1</span></li>
                                        <li><a class="page-numbers" href="#">2</a></li>
                                        <li><a class="page-numbers" href="#">3</a></li>
                                        <li><a class="next page-numbers" href="#">Next</a></li>
                                    </ul>
                                </nav> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- #content -->
        </div><!-- #primary -->
    </div><!-- #main-content -->
</div>

<script>
    $(document).ready(function() {
        var sort = getParameterByName('sort')
        showProductShop(sort)
        test()

        setTimeout(function() {
            if (document.documentElement.scrollTop == 0 && document.body.scrollTop == 0) {
                document.body.scrollTop = 410;
                document.documentElement.scrollTop = 410;
            }
        }, 1000)

    });

    function test() {
        var productsSort = document.querySelector('.products-sort');
        var sortToggle = productsSort.querySelector('.sort-toggle')
        var sortList = productsSort.querySelector('.sort-list')
        var pageNumberE = document.querySelector('.pagination').querySelector('ul')
        var sort = getParameterByName('sort')
        if (sort == null) sort = 0
        var html = sortList.querySelector(`li[value="${sort}"]`).querySelector('a').innerHTML
        sortToggle.innerHTML = html
        sortToggle.setAttribute('value', sort)
        sortList.onclick = function(event) {
            var eleClick = event.target
            if (eleClick.querySelector('a') == null) {
                eleClick = eleClick.parentElement
            }
            var value = eleClick.getAttribute('value')
            var text = eleClick.querySelector('a').innerHTML
            if (text != sortToggle.innerHTML) {
                sortToggle.innerHTML = text
                sortToggle.setAttribute('value', value)
                showProductShop(value)
            }
        }
    }
</script>
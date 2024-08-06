<?php
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}
$listCategories = get_all_loai_sp();
?>
<header id="site-header" class="site-header header-v2">
    <div id="header-topbar" class="topbar-v1 hidden-sm hidden-xs">
        <div class="topbar-inner">
            <div class="section-padding">
                <div class="section-container large p-l-r">
                    <div class="row">
                        <div class="col-md-6 topbar-left">
                            <div class="block block-html">
                                <div class="address hidden-xs">
                                    <a href="#"><i class="icon-pin"></i>Trịnh Văn Bô</a>
                                </div>
                                <div class="email hidden-xs">
                                    <i class="icon-envelope"></i><a href="mailto:support@hakybook.com">support@hakybook.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 topbar-right">
                            <ul id="topbar-menu" class="menu">
                                <li class="menu-item"><a href="#">Gift Cards</a></li>
                                <li class="menu-item"><a href="#">FAQs</a></li>
                                <li class="menu-item"><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-mobile">
        <div class="section-padding">
            <div class="section-container large">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 header-left">
                        <div class="navbar-header">
                            <button type="button" id="show-megamenu" class="navbar-toggle"></button>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 header-center">
                        <div class="site-logo">
                            <a href="index.php">
                                <img width="400" height="79" src="media/logo.png" alt="Ruper – Furniture HTML Theme" />
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 header-right">
                        <div class="ruper-topcart dropdown">
                            <div class="dropdown mini-cart top-cart">
                                <div class="remove-cart-shadow"></div>
                                <a class="dropdown-toggle cart-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="icons-cart"><i class="icon-large-paper-bag"></i><span class="cart-count">2</span></div>
                                </a>
                                <div class="dropdown-menu cart-popup">
                                    <div class="cart-empty-wrap">
                                        <ul class="cart-list">
                                            <li class="empty">
                                                <span>No products in the cart.</span>
                                                <a class="go-shop" href="shop-grid-left.html">GO TO SHOP<i aria-hidden="true" class="arrow_right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cart-list-wrap">
                                        <ul class="cart-list ">
                                            <li class="mini-cart-item">
                                                <a href="#" class="remove" title="Remove this item"><i class="icon_close"></i></a>
                                                <a href="" class="product-image"><img width="600" height="600" src="" alt=""></a>
                                                <a href="shop-details.html" class="product-name">Chair Oak Matt
                                                    Lacquered</a>
                                                <div class="quantity">Qty: 1</div>
                                                <div class="price">$150.00</div>
                                            </li>
                                            <li class="mini-cart-item">
                                                <a href="#" class="remove" title="Remove this item"><i class="icon_close"></i></a>
                                                <a href="shop-details.html" class="product-image"><img width="600" height="600" src="" alt=""></a>
                                                <a href="shop-details.html" class="product-name">Zunkel
                                                    Schwarz</a>
                                                <div class="quantity">Qty: 1</div>
                                                <div class="price">$100.00</div>
                                            </li>
                                        </ul>
                                        <div class="total-cart">
                                            <div class="title-total">Total: </div>
                                            <div class="total-price"><span>$100.00</span></div>
                                        </div>
                                        <div class="free-ship">
                                            <div class="title-ship">Buy <strong>$400</strong> more to enjoy
                                                <strong>FREE Shipping</strong>
                                            </div>
                                            <div class="total-percent">
                                                <div class="percent" style="width:20%"></div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <a href="shop-cart.html" class="button btn view-cart btn-primary">View cart</a>
                                            <a href="shop-checkout.html" class="button btn checkout btn-default">Check out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-mobile-fixed">
            <!-- Shop -->
            <div class="shop-page">
                <a href="shop-grid-left.html"><i class="wpb-icon-shop"></i></a>
            </div>

            <!-- Login -->
            <div class="my-account">
                <div class="login-header">
                    <a href="page-my-account.html"><i class="wpb-icon-user"></i></a>
                </div>
            </div>

            <!-- Search -->
            <div class="search-box">
                <div class="search-toggle"><i class="wpb-icon-magnifying-glass"></i></div>
            </div>

            <!-- Wishlist -->
            <div class="wishlist-box">
                <a href="shop-wishlist.html"><i class="wpb-icon-heart"></i></a>
            </div>
        </div>
    </div>



    <div class="header-desktop">
        <div class="header-wrapper">
            <div class="section-padding">
                <div class="section-container large p-l-r">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 header-left">
                            <div class="site-navigation">
                                <nav id="main-navigation">
                                    <ul id="menu-main-menu" class="menu">
                                        <li class="level-0 menu-item">
                                            <a href="index.php"><span class="menu-item-text">Home</span></a>
                                        </li>
                                        <li class="level-0 menu-item menu-item-has-children">
                                            <a href="?act=shop-grid-left&cate=0&page=1"><span class="menu-item-text">Danh mục</span></a>
                                            <ul class="sub-menu">
                                                <?php foreach ($listCategories as $category) : ?>
                                                    <li>
                                                        <a href="?act=shop-grid-left&cate=<?= $category['ma_loai'] ?>&page=1"><span class="menu-item-text"><?= $category['ten_loai'] ?></span></a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </li>
                                        <li class="level-0 menu-item">
                                            <form action="index.php?act=seach" method="POST">
                                                <input type="text" name="kyw" id="" placeholder="Từ khóa tìm kiếm">
                                                <input type="submit" name="timkiem" value="tìm kiếm">
                                            </form>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12 text-center header-center">
                            <div class="site-logo">
                                <a href="index.php">
                                    <!-- <img width="400" height="79" src="media/logo.png" alt="Ruper – Furniture HTML Theme" /> -->
                                    <h2>HaKy Book</h2>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 header-right">
                            <div class="header-page-link">
                                <!-- Login -->
                                <?php if ($user == []) { ?>
                                    <div class="login-header">
                                        <a class="active-login" href="#">Đăng nhập</a>
                                        <div class="form-login-register">
                                            <div class="box-form-login">
                                                <div class="active-login"></div>
                                                <div class="box-content">
                                                    <div class="form-login active">
                                                        <form id="login_ajax" method="post" class="login">
                                                            <h2>Đăng nhập</h2>
                                                            <p class="status"></p>
                                                            <div class="content">
                                                                <div class="username">
                                                                    <input type="text" required="required" class="input-text" name="email" id="email" placeholder="Your email" />
                                                                </div>
                                                                <div class="password">
                                                                    <input class="input-text" required="required" type="password" name="password" id="password" placeholder="Password" />
                                                                </div>
                                                                <div class="rememberme-lost">
                                                                    <!-- <div class="rememberme">
                                                                        <input name="rememberme" type="checkbox" id="rememberme" value="forever" />
                                                                        <label for="rememberme" class="inline">Remember me</label>
                                                                    </div> -->
                                                                    <!-- <div class="lost_password">
                                                                        <a href="forgot-password.html">Quên mật khẩu?</a>
                                                                    </div> -->
                                                                </div>
                                                                <div class="button-next-login button-form" style="background-color: black !important;" id="login">Đăng nhập</div>
                                                                <div class="button-next-reregister">Đăng ký tài khoản</div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="form-register">
                                                        <form method="post" class="register">
                                                            <h2>Đăng ký</h2>
                                                            <div class="content">
                                                                <div class="email">
                                                                    <input type="email" class="input-text" placeholder="Email" name="email" id="reg_email" value="" />
                                                                </div>
                                                                <div class="password">
                                                                    <input type="password" class="input-text" placeholder="Password" name="password" id="reg_password" />
                                                                </div>
                                                                <div class="button-next-reregister button-form" style="background-color: black !important;" id="register">Đăng ký</div>
                                                                <div class="button-next-login">Đã có tài khoản</div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="user-header">
                                        <span><?php
                                                if ($user['name'] == "") {
                                                    echo $user['email'];
                                                } else {
                                                    echo $user['name'];
                                                }
                                                ?></span>
                                        <ul class="show">
                                            <li><a>Chỉnh sửa thông tin</a></li>
                                            <li id="logout" style="font-weight: 600;"><a>Đăng xuất</a></li>
                                        </ul>
                                    </div>
                                <?php } ?>

                                <!-- Search -->
                                <!-- <div class="search-box">
                                    <div class="search-toggle"><i class="icon-search"></i></div>
                                </div> -->

                                <!-- Wishlist -->
                                <!-- <div class="wishlist-box">
                                    <a href="shop-wishlist.html"><i class="icon-heart"></i></a>
                                    <span class="count-wishlist">1</span>
                                </div> -->

                                <!-- Cart -->
                                <div class="ruper-topcart dropdown light">
                                    <div class="dropdown mini-cart top-cart">
                                        <div class="remove-cart-shadow"></div>
                                        <a class="dropdown-toggle cart-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="icons-cart"><i class="icon-large-paper-bag"></i><span class="cart-count">2</span></div>
                                        </a>
                                        <div class="dropdown-menu cart-popup">
                                            <!-- <div class="cart-empty-wrap">
                                                <ul class="cart-list">
                                                    <li class="empty">
                                                        <span>No products in the cart.</span>
                                                        <a class="go-shop" href="shop-grid-left.html">GO TO
                                                            SHOP<i aria-hidden="true" class="arrow_right"></i></a>
                                                    </li>
                                                </ul>
                                            </div> -->
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
</header>

<script>
    $(".user-header").click(() => {
        window.location = "?act=page-my-account"
    })
    $('#logout').click(() => {
        $.get("api/main.php?act=logout",
            function() {
                window.location = "?act=page-login"
            }
        );
    })

    $('#login').click(() => {
        validateLogin('#email', '#password')
    })
    $('#register').click(() => {
        validateRegister('#reg_email', '#reg_password')
    })
    $('#email').on('keydown', function(e) {
        if (e.which == 13 || e.keyCode == 13) {
            $('#password').focus()
        }
    });

    $('#password').on('keydown', function(e) {
        if (e.which == 13 || e.keyCode == 13) {
            validateLogin('#email', '#password')
        }
    });

    $('#reg_email').on('keydown', function(e) {
        if (e.which == 13 || e.keyCode == 13) {
            $('#reg_password').focus()
        }
    });

    $('#reg_password').on('keydown', function(e) {
        if (e.which == 13 || e.keyCode == 13) {
            validateRegister('#reg_email', '#reg_password')
        }
    });
</script>
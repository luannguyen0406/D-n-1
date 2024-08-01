<div id="site-main" class="site-main">
    <div id="main-content" class="main-content">
        <div id="primary" class="content-area">
            <div id="title" class="page-title">
                <div class="section-container">
                    <div class="content-title-heading">
                        <h1 class="text-title-heading">
                            <?php
                            $name_cate = "All";
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
                            </div>

                            <nav class="pagination">
                                <ul class="page-numbers">
                                    <li><a class="prev page-numbers" href="#">Previous</a></li>
                                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                                    <li><a class="page-numbers" href="#">2</a></li>
                                    <li><a class="page-numbers" href="#">3</a></li>
                                    <li><a class="next page-numbers" href="#">Next</a></li>
                                </ul>
                            </nav>
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
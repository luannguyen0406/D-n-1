<body>
  <div id="toast"></div>
  <script>
    console.log(localStorage.getItem('darkMode'));
    if (localStorage.getItem('darkMode') === "on") {
      document.body.classList.add("dark");
      document.addEventListener("DOMContentLoaded", function() {
        document.querySelector('.js-switch-theme input').checked = true;
      });
    }
  </script>
  <div class="page">
    <div class="sidebar">
      <div class="sidebar__top"><button class="sidebar__close"><svg class="icon icon-close">
            <use xlink:href="img/sprite.svg#icon-close"></use>
          </svg></button><a class="sidebar__logo" href="index.php?act=list_category"><img class="sidebar__pic sidebar__pic_black" src="img/logo.png" alt="" /><img class="sidebar__pic sidebar__pic_white" src="img/logo-white.png" alt="" /></a><button class="sidebar__burger"></button></div>
      <div class="sidebar__wrapper">
        <div class="sidebar__inner"><a class="sidebar__logo" href="index.php?act=list_category"><img class="sidebar__pic" src="img/logo-sm.png" alt="" /></a>
          <div class="sidebar__list">
            <div class="sidebar__group">
              <div class="sidebar__caption caption-sm">Admin<span> tools</span></div>
              <div class="sidebar__menu"><a class="sidebar__item <?php if (!isset($act)) echo 'active' ?>" href="index.php" style="">
                  <div class="sidebar__icon"><svg class="icon icon-overview">
                      <use xlink:href="img/sprite.svg#icon-overview"></use>
                    </svg></div>
                  <div class="sidebar__text">Overview</div>
                </a><a class="sidebar__item <?php if ($act == 'list_products') echo 'active' ?>" href="index.php?act=list_products">
                  <div class="sidebar__icon"><svg class="icon icon-bag">
                      <use xlink:href="img/sprite.svg#icon-bag"></use>
                    </svg></div>
                  <div class="sidebar__text">Sản phẩm</div>
                </a><a class="sidebar__item <?php if ($act == 'list_category') echo 'active' ?>" href="index.php?act=list_category">
                  <div class="sidebar__icon"><svg class="icon icon-chart">
                      <use xlink:href="img/sprite.svg#icon-chart"></use>
                    </svg></div>
                  <div class="sidebar__text">Danh mục</div>
                </a><a class="sidebar__item <?php if ($act == 'list_user') echo 'active' ?>" href="index.php?act=list_user">
                  <div class="sidebar__icon"><svg class="icon icon-discovery">
                      <use xlink:href="img/sprite.svg#icon-discovery"></use>
                    </svg></div>
                  <div class="sidebar__text"> Khách hàng</div>
                </a><a class="sidebar__item <?php if ($act == 'list_com') echo 'active' ?>" href="index.php?act=list_com">
                  <div class="sidebar__icon"><svg class="icon icon-wallet">
                      <use xlink:href="img/sprite.svg#icon-wallet"></use>
                    </svg></div>
                  <div class="sidebar__text">Bình luận</div>
                </a><a class="sidebar__item <?php if ($act == 'bill') echo 'active' ?>" href="?act=bill">
                  <div class="sidebar__icon"><svg class="icon icon-document">
                      <use xlink:href="img/sprite.svg#icon-document"></use>
                    </svg></div>
                  <div class="sidebar__text">Hoá đơn</div>
                </a><a class="sidebar__item <?php if ($act == 'thongke') echo 'active' ?>" href="?act=thongke">
                  <div class="sidebar__icon"><svg class="icon icon-document">
                      <use xlink:href="img/sprite.svg#icon-document"></use>
                    </svg></div>
                  <div class="sidebar__text">Thống kê</div>
                </a>
                <!-- <a class="sidebar__item js-popup-open" href="#popup-settings" data-effect="mfp-zoom-in">
                  <div class="sidebar__icon"><svg class="icon icon-settings">
                      <use xlink:href="img/sprite.svg#icon-settings"></use>
                    </svg></div>
                  <div class="sidebar__text">Settings </div>
                </a> -->
              </div>
            </div>
            <!-- <div class="sidebar__group">
              <div class="sidebar__caption caption-sm">Insights</div>
              <div class="sidebar__menu"><a class="sidebar__item" href="inbox.html">
                  <div class="sidebar__icon"><svg class="icon icon-message">
                      <use xlink:href="img/sprite.svg#icon-message"></use>
                    </svg></div>
                  <div class="sidebar__text">Inbox</div>
                  <div class="sidebar__counter">18</div>
                </a><a class="sidebar__item" href="notifications.html">
                  <div class="sidebar__icon"><svg class="icon icon-notification">
                      <use xlink:href="img/sprite.svg#icon-notification"></use>
                    </svg></div>
                  <div class="sidebar__text">Notifications</div>
                  <div class="sidebar__counter">2 </div>
                </a><a class="sidebar__item" href="comments.html">
                  <div class="sidebar__icon"><svg class="icon icon-chat">
                      <use xlink:href="img/sprite.svg#icon-chat"></use>
                    </svg></div>
                  <div class="sidebar__text">Comments</div>
                  <div class="sidebar__counter">20</div>
                </a></div>
            </div> -->
          </div>
          <div class="sidebar__profile">
            <div class="sidebar__details"><a class="sidebar__link" href="?act=logout_admin">
                <div class="sidebar__icon"><svg class="icon icon-logout">
                    <use xlink:href="img/sprite.svg#icon-logout"></use>
                  </svg></div>
                <div class="sidebar__text">Log out</div>
              </a></div><a class="sidebar__user">
              <div class="sidebar__ava"><img class="sidebar__pic" src="img/ava.png" alt="" /></div>
              <div class="sidebar__desc">
                <div class="sidebar__man"><?php echo $_SESSION['user_admin']['name'] ?></div>
                <div class="sidebar__status caption">Free account</div>
              </div>
              <div class="sidebar__arrow"><svg class="icon icon-arrows">
                  <use xlink:href="img/sprite.svg#icon-arrows"></use>
                </svg></div>
            </a>
          </div>
        </div>
      </div>
      <div class="sidebar__bottom"><label class="switch switch_theme js-switch-theme"><input class="switch__input" type="checkbox" /><span class="switch__in"><span class="switch__box"></span><span class="switch__icon"><svg class="icon icon-moon">
                <use xlink:href="img/sprite.svg#icon-moon"></use>
              </svg><svg class="icon icon-sun">
                <use xlink:href="img/sprite.svg#icon-sun"></use>
              </svg></span></span></label></div>
    </div>
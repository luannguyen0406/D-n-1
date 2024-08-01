<?php
$total = 0;
$index = 0;

?>


<div class="page__wrapper">
    <div class="page__center">
        <div class="page__row page__row_head">
            <div class="page__col">
                <div class="page__hello h5">Hi Tam Tran,</div>
                <div class="page__welcome h2">Welcome back<span class="desktop-hide">👋</span></div>
            </div>
            <div class="page__col">
                <div class="header"><button class="header__burger"></button>
                    <div class="search">
                        <div class="search__field"><input class="search__input" type="text" placeholder="Search" /><button class="search__toggle"><svg class="icon icon-search">
                                    <use xlink:href="img/sprite.svg#icon-search"></use>
                                </svg><svg class="icon icon-close">
                                    <use xlink:href="img/sprite.svg#icon-close"></use>
                                </svg></button></div>
                        <div class="search__result">
                            <div class="search__info caption-sm">Recent Searches</div>
                            <div class="search__list"><a class="search__item" href="#">
                                    <div class="search__preview bg-pink"><img class="search__pic" src="img/figure-1.png" alt="" />
                                    </div>
                                    <div class="search__text">Earning byitems<svg class="icon icon-arrow-right">
                                            <use xlink:href="img/sprite.svg#icon-arrow-right"></use>
                                        </svg></div>
                                </a><a class="search__item" href="#">
                                    <div class="search__preview bg-yellow"><img class="search__pic" src="img/figure-4.png" alt="" />
                                    </div>
                                    <div class="search__text">This monthStatements<svg class="icon icon-arrow-right">
                                            <use xlink:href="img/sprite.svg#icon-arrow-right"></use>
                                        </svg></div>
                                </a><a class="search__item" href="#">
                                    <div class="search__preview bg-blue-light"><img class="search__pic" src="img/figure-3.png" alt="" /></div>
                                    <div class="search__text">How manysales I got…<svg class="icon icon-arrow-right">
                                            <use xlink:href="img/sprite.svg#icon-arrow-right"></use>
                                        </svg></div>
                                </a></div><button class="search__btn btn btn_purple btn_wide">Advance Search</button>
                        </div>
                    </div><button class="header__search"><svg class="icon icon-search">
                            <use xlink:href="img/sprite.svg#icon-search"></use>
                        </svg></button>
                    <div class="notifications"><button class="notifications__open"><svg class="icon icon-bell">
                                <use xlink:href="img/sprite.svg#icon-bell"></use>
                            </svg><span class="notifications__counter">2</span></button>
                        <div class="notifications__wrap">
                            <div class="notifications__info h6">Recent Notification</div>
                            <div class="notifications__list"><a class="notifications__item" href="notifications.html">
                                    <div class="notifications__ava"><img class="notifications__pic" src="img/ava-1.png" alt="" />
                                        <div class="notifications__status bg-blue"><img class="notifications__pic" src="img/chat.html" alt="" /></div>
                                    </div>
                                    <div class="notifications__details">
                                        <div class="notifications__line">
                                            <div class="notifications__user caption">Sarah Saunders</div>
                                            <div class="notifications__time caption">8h</div>
                                        </div>
                                        <div class="notifications__text caption-sm">Commented on <span class="notifications__project">Collab Design</span></div>
                                    </div>
                                    <!-- </a><a class="notifications__item" href="notifications.html">
                  <div class="notifications__ava"><img class="notifications__pic" src="img/ava-1.png" alt="" />
                    <div class="notifications__status bg-green"><img class="notifications__pic" src="img/bag.svg" alt="" /></div>
                  </div>
                  <div class="notifications__details">
                    <div class="notifications__line">
                      <div class="notifications__user caption">Glenn Greer</div>
                      <div class="notifications__time caption">12h</div>
                    </div>
                    <div class="notifications__text caption-sm">Just pushaded <span class="notifications__project">Sapiens Illustration</span></div>
                  </div>
                </a><a class="notifications__item" href="notifications.html">
                  <div class="notifications__ava"><img class="notifications__pic" src="img/ava-1.png" alt="" />
                    <div class="notifications__status bg-purple"><img class="notifications__pic" src="img/message.svg" alt="" /></div>
                  </div>
                  <div class="notifications__details">
                    <div class="notifications__line">
                      <div class="notifications__user caption">Sarah Saunders</div>
                      <div class="notifications__time caption">14h</div>
                    </div>
                    <div class="notifications__text caption-sm">Sent you a message 📪 </div>
                  </div>
                </a><a class="notifications__item" href="notifications.html">
                  <div class="notifications__ava"><img class="notifications__pic" src="img/ava-1.png" alt="" />
                    <div class="notifications__status bg-red"><img class="notifications__pic" src="img/heart.svg" alt="" /></div>
                  </div>
                  <div class="notifications__details">
                    <div class="notifications__line">
                      <div class="notifications__user caption">Sarah Saunders</div>
                      <div class="notifications__time caption">21h</div>
                    </div>
                    <div class="notifications__text caption-sm">Liked <span class="notifications__project">Folio
                        Agency</span></div>
                  </div>
                </a><a class="notifications__item" href="notifications.html">
                  <div class="notifications__ava"><img class="notifications__pic" src="img/ava-1.png" alt="" />
                    <div class="notifications__status bg-blue"><img class="notifications__pic" src="img/chat.html" alt="" /></div>
                  </div>
                  <div class="notifications__details">
                    <div class="notifications__line">
                      <div class="notifications__user caption">Sarah Saunders</div>
                      <div class="notifications__time caption">8h</div>
                    </div>
                    <div class="notifications__text caption-sm">Commented on <span class="notifications__project">Collab Design</span></div>
                  </div>
                </a><a class="notifications__item" href="notifications.html">
                  <div class="notifications__ava"><img class="notifications__pic" src="img/ava-1.png" alt="" />
                    <div class="notifications__status bg-green"><img class="notifications__pic" src="img/bag.svg" alt="" /></div>
                  </div>
                  <div class="notifications__details">
                    <div class="notifications__line">
                      <div class="notifications__user caption">Glenn Greer</div>
                      <div class="notifications__time caption">12h</div>
                    </div>
                    <div class="notifications__text caption-sm">Just pushaded <span class="notifications__project">Sapiens Illustration</span></div>
                  </div>
                </a> -->
                            </div>
                            <div class="notifications__btns"><a class="notifications__btn btn btn_black" href="notifications.html">See all incoming activity</a></div>
                        </div>
                    </div><a class="header__user" href="#"><img class="header__pic" src="img/ava.png" alt="" /></a>
                </div>
            </div>
        </div>
        <div class="page__content">
            <div class="banner">
                <!--<div class="banner__container">
              <div class="banner__preview"><img class="banner__pic" src="img/banner-pic.png" alt=""></div>
              <div class="banner__wrap">
                <div class="banner__title h3">Your Products</div>
                <div class="banner__text">Create Your Product Dashboard in Minutes</div><button
                  class="banner__btn btn btn_white">Check all settings</button>
              </div>
            </div> -->
            </div>
            <form>
                <div class="form-label">
                    <span class="text-red">Trạng thái đơn hàng</span>
                    <select name="trang_thai" <?php if($ma_trang_thai > 3) echo "disabled"; ?> disabled>
                        <?php foreach ($list_trang_thai as $i) : ?>
                            <option value="<?= $i['ma_trang_thai'] ?>" <?php if ($i['ma_trang_thai'] == $ma_trang_thai) echo 'selected' ?>><?= $i['ten_trang_thai'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-body">
                    <div style="width:50%;">
                        <div class="form-label">
                            <span>Mã hoá đơn</span>
                            <input type="text" name="ma_don_hang" placeholder="Mã hoá đơn" required="Vui lòng không bỏ trống ô này" disabled value="<?= $ma_don_hang ?>" disabled>
                        </div>

                        <div class="form-label">
                            <span>Email</span>
                            <input type="text" name="email" placeholder="Mật khẩu" value="<?= $email ?>" disabled>
                        </div>
                        <div class="form-label">
                            <span>Ngày tạo</span>
                            <input type="text" name="ngay_dat_hang" placeholder="Mật khẩu" value="<?= $ngay_dat_hang ?>" disabled>
                        </div>
                        <div class="form-label">
                            <span>Phương thức giao hàng</span>
                            <select name="pt_ship" id="" disabled>
                                <?php foreach ($list_pt_ship as $i) : ?>
                                    <option value="<?= $i['ma_pt'] ?>"><?= $i['ten_pt'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div style="width:50%;">
                        <div class="form-label">
                            <span>Tên người nhận</span>
                            <input type="text" name="ten_nguoi_nhan" placeholder="Email" value="<?= $ten_nguoi_nhan ?>" disabled>
                        </div>

                        <div class="form-label">
                            <span>Số điện thoại</span>
                            <input type="text" name="so_dien_thoai" placeholder="Số điện thoại" value="<?= $so_dien_thoai ?>" disabled>
                        </div>

                        <div class="form-label">
                            <span>Địa chỉ</span>
                            <input type="text" name="dia_chi" placeholder="Địa chỉ" value="<?= $dia_chi ?>" disabled>
                        </div>

                        <div class="form-label">
                            <span>Phương thức thanh toán</span>
                            <input type="text" name="pttt" placeholder="Địa chỉ" value="<?= $ten_pttt ?>" disabled>
                        </div>
                    </div>

                </div>



                <table class="table-bill" style="margin: 0 !important;">
                    <thead>
                        <tr>
                            <th style="width: 10%;text-align: center;">#</th>
                            <th style="width: 40%;text-align: start;">Description</th>
                            <th style="width: 15%; text-align: center;">Qty</th>
                            <th style="width: 17.5%;text-align: end;">Unit price</th>
                            <th class="text-end px-4" style="text-align: end;">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($bill_detail as $item) : ?>
                            <?php
                            extract($item);
                            $totalItem = $so_luong * $don_gia;
                            $total += $totalItem;
                            $index++;
                            ?>
                            <tr>
                                <th style="color: rgba(145, 158, 171, 1);"><?= $index ?></th>
                                <td>
                                    <div class="text-product text-product_main"><?= $ten_san_pham ?></div>
                                    <div class="text-product text-product_sub"><?= $ten_loai ?></div>
                                </td>
                                <td class="text-center" style="text-align: center;"><?= $so_luong ?></td>
                                <td style="text-align: end;">$<?= $don_gia ?></td>
                                <td class="text-end px-4" style="text-align: end;">$<?= $totalItem ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-end" style="text-align: end;">Subtotal</td>
                            <td class="text-end px-4" style="text-align: end;">$<?= $total ?></td>
                        </tr>
                        <!-- <tr>
								<td></td>
								<td></td>
								<td></td>
								<td class="text-end">Discount</td>
								<td class="text-end text-red px-4">-$20.00</td>
							</tr> -->
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-end" style="text-align: end;">Ship</td>
                            <td class="text-end px-4" style="text-align: end;">$<?= $totalAll - $total ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-end fw-bolder fs-5" style="text-align: end;font-size: 1.75rem; font-weight: 500;">Total</td>
                            <td class="text-end fw-bolder fs-5 px-4" style="text-align: end;font-size: 1.75rem; font-weight: 500;">$<?= $totalAll ?></td>
                        </tr>
                    </tfoot>
                </table>



                <div class="them" style="margin-top: 20px;display:flex;column-gap: 20px;">
                    <a href="?act=bill"><input type="button" value="Danh sách" class="reset"></a>
                    <!-- <div class="reset" id="update" style="cursor: pointer;text-align: center;">Cập nhật</div> -->
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<script>
    $('#update').click(() => {
        var ten_nguoi_nhan = $('input[name="ten_nguoi_nhan"]').val().trim()
        var so_dien_thoai = $('input[name="so_dien_thoai"]').val().trim()
        var ngay_dat_hang = $('input[name="ngay_dat_hang"]').val().trim()
        var dia_chi = $('input[name="dia_chi"]').val().trim()
        var pt_ship = $('select[name="pt_ship"]').val()
        var ma_trang_thai = $('select[name="trang_thai"]').val()
        var ma_don_hang = $('input[name="ma_don_hang"]').val().trim()
        if (ten_nguoi_nhan.length == 0 || so_dien_thoai.length == 0 || dia_chi.length == 0 || ngay_dat_hang.length == 0) {
            toast({
                title: "Thất bại!",
                message: "Tất cả các trường không được bỏ trống",
                type: "error",
                duration: 5000
            });
            return
        }
        var form_data = new FormData();
        form_data.append('ten_nguoi_nhan', ten_nguoi_nhan);
        form_data.append('so_dien_thoai', so_dien_thoai);
        form_data.append('ngay_dat_hang', ngay_dat_hang);
        form_data.append('dia_chi', dia_chi);
        form_data.append('pt_ship', pt_ship);
        form_data.append('ma_trang_thai', ma_trang_thai);
        form_data.append('ma_don_hang', ma_don_hang);
        $.ajax({
            url: "../api/main.php?act=updateBill", //Server api to receive the file
            type: "POST",
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            success: function(suc) {
                toast({
                    title: "Thành công!",
                    message: "Cập nhật thành công thành công",
                    type: "success",
                    duration: 5000
                });
                setTimeout(() => {
                    window.location = "?act=bill"
                }, 1000);

            }
        });
    })
</script>
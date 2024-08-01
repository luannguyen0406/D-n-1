<div class="" style="margin-left: 300px;background-color: rgb(237,246,246);margin-top: 20px;padding: 20px;border-radius: 20px;">

    <section class="list_products">

        <div class="wrapper-table" style="margin-top: 0px;">
            <div class="cot4">

                <form method="POST" action="index.php?act=list_com">
                    <div class="right3">
                        <div class="cot22">
                            <input id="id2" name="kyw" type="text" placeholder="Nhập id sản phẩm">
                            <button class="handel-search">
                                <svg id="id1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <table class="table-inform">
                <thead>
                <td width="50px">STT</td>
                <td width="300px">Nội dung</td>
                <td width="120px">Id sản phẩm</td>
                <td width="120px">Id người dùng</td>
                <td width="120px">Tên người dùng</td>
                <td width="170px">Ngày cmt</td>
                <td width="80px">Thao tác</td>
                </thead>
                <?php
                foreach ($list_cmt as $user) {
                    extract($user);
                    $delete_cmt="index.php?act=delete_cmt&id=".$ma_binh_luan;
                    echo '
                            <tr>
                                <td>'.$ma_binh_luan.'</td>
                                <td>'.$noi_dung.'</td>
                                <td>'.$ma_san_pham.'</td>
                                <td>'.$ma_khach_hang.'</td>
                                <td>'.$ten_khach_hang.'</td>
                                <td>'.$ngay_binh_luan.'</td>
                                <td class="flex">
                                    <a class="a" href="'.$delete_cmt.'">
                                    <i class="fa-regular fa-trash-can"></i>
                                    </a>
                                </td>
                            </tr>
                            ';
                }
                ?>

            </table>
        </div>

    </section>
</div>

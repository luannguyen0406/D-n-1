<div style="margin-left:300px;background-color: rgb(237,246,246);margin-top: 20px;padding: 20px;border-radius: 20px;" class="">

    <section class="list_products">

        <div class="wrapper-table" style="margin-top: 0px;">
            <div class="cot4">
                <div class="dropdown">
                    <a href="index.php?act=add_user"><input class="dropbtn adc" type="button" value="Thêm mới"></a>
                </div>
                <div class="dropdown">
                    <a>
                        <button class="dropbtn adc ">Vai trò</button>
                    </a>
                    <div class="dropdown-content add">
                        <?php
                        echo '<a href="index.php?act=list_user&id=1">Nhân viên</a>';
                        echo '<a href="index.php?act=list_user&id=0">Khách hàng</a>';
                        ?>
                    </div>
                </div>
                <form method="POST" action="index.php?act=list_user">
                    <div class="right3">
                        <div class="cot22">
                            <input id="id2" name="kyw" type="text" placeholder="Nhập tên người dùng">
                            <button>
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <table class="table-inform">
                <thead>
                    <td width="30px">ID</td>
                    <td width="100px">Tên</td>
                    <td width="80px">Mật khẩu</td>
                    <td width="110px">Email</td>
                    <td width="100px">Số điện thoại</td>
                    <td width="200px">Địa chỉ</td>
                    <td width="100px">Vai trò</td>
                    <td width="70px">Thao tác</td>
                </thead>
                <?php
                foreach ($list_user as $user) {
                    extract($user);
                    $update_user = "index.php?act=update_user&id=" . $ma_khach_hang;
                    $delete_user = "index.php?act=delete_user&id=" . $ma_khach_hang;
                    if ($chuc_nang == 1) {
                        $chuc_nang = "Nhân viên";
                    } else if ($chuc_nang == 0) {
                        $chuc_nang = "Khách hàng";
                    }
                    echo '
                            <tr>
                                <td>' . $ma_khach_hang . '</td>
                                <td>' . $ten_khach_hang . '</td>
                                <td>' . $mat_khau . '</td>
                                <td>' . $email . '</td>
                                <td>' . $so_dt . '</td>
                                <td>' . $dia_chi . '</td>
                                <td>' . $chuc_nang . '</td>
                                <td class="flex">
                                    <a class="a" href="' . $update_user . '" style="margin-right:10px">
                                    <i class="fa-solid fa-wrench"></i>
                                    </a>
                                    <a class="a" href="' . $delete_user . '">
                                    <i class="fa-solid fa-user-minus"></i>
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
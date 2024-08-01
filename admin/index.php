<?php
session_start();


require "../model/pdo.php";
require "../model/product.php";
require "../model/category.php";
require "../model/user.php";
require "../model/bill.php";
require "../global.php";
require "../model/comment.php";
ob_start();
if (!isset($_SESSION['user_admin'])) {
    include "login/login.php";
} else {

    include "view/header.php";

    if (isset($_GET['act'])) {

        $act = $_GET['act'];
        include "view/navbar.php";
        switch ($act) {
                //            Use----------------------------------     //
            case "list_user":
                if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                    $kyw = $_POST['kyw'];
                } else {
                    $kyw = "";
                }
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                } else {
                    $id =  0;
                }
                $list_user = user_all($kyw, $id);
                include 'user/list.php';
                break;
            case 'add_user':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $ten_khach_hang = $_POST['ten_khach_hang'];
                    $so_dt = $_POST['so_dt'];
                    $email = $_POST['email'];
                    $chuc_nang = $_POST['chuc_nang'];
                    $mat_khau = $_POST['mat_khau'];
                    $dia_chi = $_POST['dia_chi'];

                    insert_user($ten_khach_hang, $so_dt, $email, $chuc_nang, $mat_khau, $dia_chi);
                    $thongbao = "Thêm thành công";
                    header("Location: index.php?act=list_user");
                }

                $list_user = user_all("", 0);
                include 'user/add.php';
                break;
            case 'update_user':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $user = loadone_user($_GET['id']);
                }
                include 'user/update.php';
                break;
            case 'updateuser':
                if (isset($_POST['update_user']) && ($_POST['update_user'])) {
                    $id = $_POST['id'];
                    $ten_khach_hang = $_POST['ten_khach_hang'];
                    $so_dt = $_POST['so_dt'];
                    $email = $_POST['email'];
                    $chuc_nang = $_POST['chuc_nang'];
                    $mat_khau = $_POST['mat_khau'];
                    $dia_chi = $_POST['dia_chi'];

                    $update = update_user($id, $ten_khach_hang, $so_dt, $email, $chuc_nang, $mat_khau, $dia_chi);
                    $thongbao = "Update thành công";
                    $list_user = user_all("", 0);
                    header("Location: index.php?act=list_user");
                }
                include 'user/list.php';
                break;

            case 'delete_user':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $user = loadone_user($_GET['id']);
                }
                include 'user/delete.php';
                break;
            case 'deleteuser':
                if (isset($_POST['delete']) && ($_POST['delete'])) {
                    $id = $_POST['id'];
                    delete_user($id);
                }
                $list_user = user_all("", 0);
                include 'user/list.php';
                break;
            case 'bill':
                include 'view/hoadon.php';
                break;

            case 'bill_detail':
                $ma_don_hang = $_GET['id'];
                $bill = get_bill_admin($ma_don_hang);
                $bill_detail = get_bill_detail($ma_don_hang);
                $list_trang_thai = get_list_trang_thai();
                $list_pttt = get_list_pttt();
                $list_pt_ship = get_list_pt_ship();
                // dd($bill);
                extract($bill);
                $totalAll = $don_gia;

                include 'view/bill_detail.php';
                break;

            case 'test':
                include 'view/products.php';
                break;


                //            Comment ///////////////////////////
            case 'list_com':
                if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                    $kyw = $_POST['kyw'];
                } else {
                    $kyw = "";
                }
                $list_cmt = cmt_all($kyw);
                include 'comment/list.php';
                break;
            case 'delete_cmt':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $cmt = cmt_one($_GET['id']);
                }
                include 'comment/delete.php';
                break;

            case 'deletecmt':
                if (isset($_POST['delete']) && ($_POST['delete'])) {
                    $id = $_POST['id'];
                    cmt_delete($id);
                }
                $list_cmt = cmt_all("");
                include 'comment/list.php';
                break;

            case 'thongke':
                include 'thongke/thongke.php';
                break;

            case 'logout_admin':
                unset($_SESSION['user_admin']);
                header('Location: index.php');
                ob_end_flush();

                break;

            case 'btn-add':
                if (isset($_POST['btn-add']) && ($_POST['btn-add'])) {
                    $ten_loai = $_POST['ten_loai'];
                    add_loai_sp($ten_loai);
                }
                include 'category/add.php';
                break;

            case 'btn-edit':
                if (isset($_GET['editId'])) {
                    $id = $_GET['editId'];
                    $row = get_one_loai_sp($id);
                }
                $categories = get_all_loai_sp();
                include "category/edit.php";
                break;
            case 'list_category':
                if (isset($_GET['deleteId'])) {
                    $id = $_GET['deleteId'];
                    delete_loai_sp($id);
                }
                $results = get_all_loai_sp();
                include 'category/list.php';
                break;

            case 'product-add':
                $loai_sp = get_all_loai_sp();
                if (isset($_POST["them_product"])) {
                    // $ten_san_pham = $_POST["ten_san_pham"];
                    // $don_gia = $_POST["don_gia"];
                    // $ma_loai = $_POST["ma_loai"];
                    // $anh_san_pham = $_FILES['anh_san_pham']['name'];
                    // $mo_ta_tom_tat = $_POST["mo_ta_tom_tat"];
                    // $ngay_tao = $_POST["ngay_tao"];
                    // $gia_khuyen_mai = $_POST["gia_khuyen_mai"];
                    // $so_luong = $_POST["so_luong"];

                    // if (isset($_FILES["anh_san_pham"])) {
                    //     $target_dir = "../media/product/";
                    //     $nameImg = $_FILES["anh_san_pham"]["name"];
                    //     $target_file = $target_dir . $nameImg;
                    //     $maxFileSize = 800000;
                    //     $allowUpload = true;
                    //     $allowTypes = ["jpg", "png", "jpeg", "gif"];
                    //     $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

                    //     if ($_FILES["anh_san_pham"]["size"] > $maxFileSize) {
                    //         $error["img_size"] = "Khong duoc upload anh > " . $maxFileSize . "(Byte)";
                    //         $allowUpload = false;
                    //     }

                    //     if (!in_array($imageFileType, $allowTypes)) {
                    //         $error["img_type"] = "Chi duoc upload cac dinh dang jpg,png,jbeg,gif";
                    //         $allowUpload = false;
                    //     }

                    //     if ($allowUpload) {
                    //         // move_uploaded_file($_FILES["anh_san_pham"]["tmp_name"], $target_file);
                    //         // add_san_pham($ten_san_pham, $don_gia, $ma_loai, $anh_san_pham, $mo_ta_tom_tat, $ngay_tao, $gia_khuyen_mai, $so_luong);
                    //         $message = "Thêm thành công";
                    //     }
                    // }
                }
                include 'product/add.php';
                break;

            case "update_product":
                $loai_sp = get_all_loai_sp();
                // $id = $_GET['editId'];
                // $product = get_one_san_pham($id);

                $error = [];
                if (isset($_POST["edit_san_pham"])) {
                    $ma_sp = $_POST["ma_sp"];
                    $ten_san_pham = $_POST["ten_san_pham"];
                    $don_gia = $_POST["don_gia"];
                    $ma_loai = $_POST['loai_sp'];
                    $anh_san_pham = $_FILES['anh_san_phama']['name'];
                    $mo_ta_tom_tat = $_POST["mo_ta_tom_tat"];
                    $ngay_tao = $_POST["ngay_tao"];
                    $gia_khuyen_mai = $_POST["gia_khuyen_mai"];
                    $so_luong = $_POST["so_luong"];
                    $tac_gia = $_POST['tac_gia'];
                    $nxb = $_POST['nxb'];
                    $nam_xb = $_POST['nam_xb'];
                    $so_trang = $_POST['so_trang'];

                    if (isset($_FILES["anh_san_phama"])) {
                        $target_dir = "../media/product/";
                        $nameImg = $_FILES["anh_san_phama"]["name"];
                        $target_file = $target_dir . $nameImg;
                        $maxFileSize = 800000;
                        $allowUpload = true;
                        $allowTypes = ["jpg", "png", "jpeg", "gif"];
                        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);


                        if ($_FILES["anh_san_phama"]["size"] > $maxFileSize) {
                            $error["img_size"] = "Khong duoc upload anh > " . $maxFileSize . "(Byte)";
                            $allowUpload = false;
                        }

                        if (!in_array($imageFileType, $allowTypes)) {
                            $error["img_type"] = "Chi duoc upload cac dinh dang jpg,png,jbeg,gif";
                            $allowUpload = false;
                        }

                        if ($allowUpload == true) {
                            move_uploaded_file($_FILES["anh_san_phama"]["tmp_name"], $target_file);
                        }
                        edit_san_pham(
                            $ma_sp,
                            $ten_san_pham,
                            $don_gia,
                            $ma_loai,
                            $anh_san_pham,
                            $mo_ta_tom_tat,
                            $ngay_tao,
                            $gia_khuyen_mai,
                            $so_luong,
                            $tac_gia,
                            $nxb,
                            $nam_xb,
                            $so_trang
                        );

                        $message = "update thành công";
                        header("Location: index.php?act=list_products");
                    }
                }
                include 'product/edit.php';
                break;
            case 'list_products':
                if (isset($_GET['deleteId'])) {
                    $id = $_GET['deleteId'];
                    delete_san_pham($id);
                }
                $results = get_all_san_pham();
                include 'product/list.php';
                break;

            default:
                include "view/home.php";
        }
        include "view/footer.php";
    } else {
        include "view/navbar.php";

        include "view/home.php";
        include "view/footer.php";
    }
}

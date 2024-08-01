<?php

function get_list_product($st, $step)
{
    $sql = "SELECT * FROM san_pham ORDER BY san_pham.ma_san_pham DESC LIMIT $st,$step";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function get_product($id)
{
    $sql = "SELECT * FROM san_pham INNER JOIN loai_sp ON loai_sp.ma_loai = san_pham.ma_loai WHERE san_pham.ma_san_pham = $id";
    $pro = pdo_query_one($sql);
    return $pro;
}
// loai san pham
function add_san_pham($ten_san_pham, $don_gia, $ma_loai, $gia_khuyen_mai, $mo_ta_tom_tat, $ngay_tao, $so_luong, $tac_gia, $nxb, $nam_xb, $so_trang)
{
    $sql = "INSERT INTO `duan`.`san_pham` (`ma_san_pham`, `ten_san_pham`, `don_gia`, `ma_loai`, `gia_khuyen_mai`,
     `mo_ta_tom_tat`, `ngay_tao`, `chi_tiet_san_pham`, `so_luong_san_pham`,`tac_gia`,`nxb`,`nam_xb`,`so_trang`) " .
        "VALUES (DEFAULT, '$ten_san_pham', '$don_gia', $ma_loai, '$gia_khuyen_mai','$mo_ta_tom_tat', '$ngay_tao','a', $so_luong,'$tac_gia','$nxb', $nam_xb, $so_trang);";
    $id = pdo_execute_lastInsertId($sql);
    return $id;
}

function add_img_san_pham($id, $_img)
{
    $sql = "UPDATE `duan`.`san_pham` SET `anh_san_pham` = '$_img' WHERE `ma_san_pham` = $id;";
    pdo_execute($sql);
}

function get_all_san_pham()
{
    $sql = "SELECT * FROM san_pham INNER JOIN loai_sp ON san_pham.ma_loai = loai_sp.ma_loai ORDER BY san_pham.ma_san_pham DESC";
    $results = pdo_query($sql);
    return $results;
}
function delete_san_pham($id)
{
    $sql = "DELETE FROM san_pham WHERE ma_san_pham='$id';ALTER TABLE san_pham AUTO_INCREMENT= '$id';";
    pdo_execute($sql);
}
function get_one_san_pham($id)
{
    $sql = "SELECT * FROM san_pham WHERE ma_san_pham=" . $id;
    $product =  pdo_query_one($sql);
    return $product;
}
function edit_san_pham(
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
) {
    $sql = "UPDATE san_pham SET ten_san_pham='$ten_san_pham', don_gia='$don_gia',ma_loai='$ma_loai', anh_san_pham='$anh_san_pham', 
            gia_khuyen_mai='$gia_khuyen_mai',mo_ta_tom_tat='$mo_ta_tom_tat', ngay_tao='$ngay_tao',  so_luong_san_pham='$so_luong',
            tac_gia = '$tac_gia', nxb = '$nxb', nam_xb='$nam_xb', so_trang='$so_trang'  WHERE ma_san_pham='$ma_sp'";
    pdo_execute($sql);
    var_dump($sql);
}



function get_list_cate()
{
    $sql = "SELECT loai_sp.ten_loai, loai_sp.ma_loai, COUNT(san_pham.ma_loai) as so_luong " .
        "FROM san_pham INNER JOIN loai_sp ON san_pham.ma_loai = loai_sp.ma_loai " .
        "GROUP BY san_pham.ma_loai";
    $listCate = pdo_query($sql);

    return $listCate;
}

function get_list_pro_shop($ma_loai, $page, $sort)
{
    $st = 9 * ($page - 1);
    if ($ma_loai == 0) $sqlCate = "";
    else $sqlCate = "WHERE san_pham.ma_loai = $ma_loai ";
    switch ($sort) {
        case 0:
            $sql = "SELECT * FROM san_pham " .
                $sqlCate .
                "ORDER BY san_pham.ma_san_pham DESC LIMIT $st, 9";
            break;

        case 1:
            $sql = "SELECT * FROM san_pham " .
                $sqlCate .
                "ORDER BY san_pham.don_gia ASC LIMIT $st, 9";
            break;

        case 2:
            $sql = "SELECT * FROM san_pham " .
                $sqlCate .
                "ORDER BY san_pham.don_gia DESC LIMIT $st, 9";
            break;
    }

    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function get_count_cate($ma_loai)
{

    $sql = "SELECT san_pham.ma_loai, COUNT(san_pham.ma_loai) as so_luong FROM san_pham WHERE san_pham.ma_loai = $ma_loai GROUP BY san_pham.ma_loai ";
    $so_luong = pdo_query_one($sql);
    return $so_luong['so_luong'];
}

function get_count_all()
{

    $sql = "SELECT COUNT(san_pham.ma_san_pham) as so_luong FROM san_pham";
    $so_luong = pdo_query_one($sql);
    return $so_luong['so_luong'];
}



function flus_luot_xem($id)
{
    $sql = "UPDATE `duan`.`san_pham` SET `luot_xem` = `luot_xem` + 1 WHERE san_pham.ma_san_pham = $id;";
    pdo_execute($sql);
}

function get_avg_rate($id)
{
    $sql = "SELECT AVG(binh_luan.rate) as rate_avg FROM binh_luan WHERE binh_luan.ma_san_pham = $id";
    $rate = pdo_query_one($sql)["rate_avg"];
    if ($rate == null) $rate = 0;
    return $rate;
}

function get_qty($id)
{
    $sql = "SELECT ten_san_pham ,so_luong_san_pham FROM san_pham WHERE ma_san_pham = $id";
    $item = pdo_query_one($sql);

    return $item;
}

function minus_qty($id, $qty)
{
    $sql = "UPDATE `duan`.`san_pham` SET `so_luong_san_pham` = `so_luong_san_pham` - $qty WHERE `ma_san_pham` = $id;";
    pdo_execute($sql);
}

function plus_qty($id, $qty)
{
    $sql = "UPDATE `duan`.`san_pham` SET `so_luong_san_pham` = `so_luong_san_pham` + $qty WHERE `ma_san_pham` = $id;";
    pdo_execute($sql);
}

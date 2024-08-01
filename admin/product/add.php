<?php
$loai_sp = get_all_loai_sp();
if (isset($_POST["them_product"])) {
    $ten_san_pham = $_POST["ten_san_pham"];
    $don_gia = $_POST["don_gia"];
    $ma_loai = $_POST["ma_loai"];
    $anh_san_pham = $_FILES['anh_san_pham']['name'];
    $mo_ta_tom_tat = $_POST["mo_ta_tom_tat"];
    $ngay_tao = $_POST["ngay_tao"];
    $gia_khuyen_mai = $_POST["gia_khuyen_mai"];
    $so_luong = $_POST["so_luong"];
    $tac_gia = $_POST['tac_gia'];
    $nxb = $_POST['nxb'];
    $nam_xb = $_POST['nam_xb'];
    $so_trang = $_POST['so_trang'];

    if (isset($_FILES["anh_san_pham"])) {
        foreach ($_FILES['anh_san_pham']['name'] as $index => $value) {
            $target_dir = "../media/product/";
            $nameImg = $_FILES["anh_san_pham"]["name"][$index];
            $maxFileSize = 1000000;
            $allowUpload = true;
            $allowTypes = ["jpg", "png", "jpeg", "gif"];
            $imageFileType = pathinfo($nameImg, PATHINFO_EXTENSION);
            if ($_FILES["anh_san_pham"]["size"][$index] > $maxFileSize) {
                $error["img_size"] = "Khong duoc upload anh > " . $maxFileSize . "(Byte)";
                $allowUpload = false;
                break;
            }

            if (!in_array($imageFileType, $allowTypes)) {
                $error["img_type"] = "Chi duoc upload cac dinh dang jpg,png,jbeg,gif";
                $allowUpload = false;
                break;
            }
        };



        if ($allowUpload) {
            $id = add_san_pham($ten_san_pham, $don_gia, $ma_loai,$gia_khuyen_mai ,$mo_ta_tom_tat, $ngay_tao , $so_luong, $tac_gia, $nxb, $nam_xb, $so_trang);
            $_img = [];
            foreach ($_FILES['anh_san_pham']['name'] as $index => $value) {
                $target_dir = "../media/product/";
                $nameImg = $_FILES["anh_san_pham"]["name"][$index];
                $imageFileType = pathinfo($nameImg, PATHINFO_EXTENSION);
                if($index == 0) {
                    $img = $id . '.' . $imageFileType;
                } else {
                    $img = $id . '-' . $index . '.' . $imageFileType;
                }
                $_img[] = $img;
                $target_file = $target_dir . $img;
                move_uploaded_file($_FILES["anh_san_pham"]["tmp_name"][$index], $target_file);
            };
            $_img = implode(", ",$_img);
            add_img_san_pham($id, $_img);
            
        }
        header("Location: index.php?act=list_products");
    }
}


?>
<div style="margin-left: 350px">
    <div class="alert alert-success" role="alert">
        <h2>QUẢN LÝ SẢN PHẨM</h2>
    </div>
    <form class="row g-3 needs-validation" action="index.php?act=product-add" method="post" enctype="multipart/form-data">

        <div class="col-md-6">
            <label for="validationCustom01" class="form-label fw-bold">Tên Sản Phẩm</label>
            <input type="text" name="ten_san_pham" class="form-control" id="validationCustom01" required>
            <div class="invalid-feedback">
                Vui lòng nhập tên hàng hóa
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustomUsername" class="form-label fw-bold">Đơn Giá</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">$</span>
                <input type="text" name="don_gia" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Please choose a price.
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom04" class="form-label fw-bold">Tên Loại</label>
            <select class="form-select" name="ma_loai" id="validationCustom04" required>
                <option selected disabled value="">Choose</option>
                <?php foreach ($loai_sp as $key => $value) { ?>
                    <option value="<?php echo $value['ma_loai']; ?>"><?php echo $value['ten_loai']; ?></option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">
                Vui lòng chọn loại hàng
            </div>
        </div>
        <div class="col-md-6">
            <label style="" for="validationCustom05" class="form-label fw-bold">Hình ảnh</label>
            <input type="file" name="anh_san_pham[]" class="form-control" id="validationCustom05" required multiple>
            <div class="invalid-feedback">
                <?php echo (isset($error["img_size"]) ? $error["img_size"] : isset($error["img_type"])) ? $error["img_type"] : "Vui lòng chọn 1 hình ảnh"; ?>
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom06" class="form-label fw-bold">Mô tả</label>
            <textarea name="mo_ta_tom_tat" class="form-control" id="validationCustom06" cols="30" rows="5" required></textarea>
            <div class="invalid-feedback">
                Vui lòng nhập mô tả
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label fw-bold">Ngày tạo</label>
            <input type="date" name="ngay_tao" class="form-control" id="validationCustom02" required>
            <div class="invalid-feedback">
                Vui lòng nhập ngày tạo
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom06" class="form-label fw-bold">Giá Khuyến Mại</label>
            <textarea name="gia_khuyen_mai" class="form-control" id="validationCustom06" cols="30" rows="5" required></textarea>
            <div class="invalid-feedback">
                giá khuyến mại
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom06" class="form-label fw-bold">Số Lượng</label>
            <input name="so_luong" class="form-control" id="validationCutom06" cols="30" rows="5" required></input>
            <div class="invalid-feedback">
                Vui lòng nhập số lượng
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom06" class="form-label fw-bold">Tác giả</label>
            <input name="tac_gia" class="form-control" id="validationCutom06" cols="30" rows="5" required></input>
            <div class="invalid-feedback">
                Vui lòng nhập tên tác giả
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom06" class="form-label fw-bold">Nhà xuất bản</label>
            <input name="nxb" class="form-control" id="validationCutom06" cols="30" rows="5" required></input>
            <div class="invalid-feedback">
                Vui lòng nhập nhà xuất bản
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom06" class="form-label fw-bold">Năm xuất bản</label>
            <input name="nam_xb" class="form-control" id="validationCutom06" cols="30" rows="5" required></input>
            <div class="invalid-feedback">
                Vui lòng nhập năm xuất bản
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom06" class="form-label fw-bold">Số trang</label>
            <input name="so_trang" class="form-control" id="validationCutom06" cols="30" rows="5" required></input>
            <div class="invalid-feedback">
                Vui lòng nhập số trang
            </div>
        </div>


        <div class="col-12">
            <button class="btn btn-primary" name="them_product" type="submit">Thêm mới</button>
        </div>
    </form>
    <br>
    <!-- <button type="button" class="btn btn-outline-secondary" onclick="window.location.reload()">Nhập lại</button> -->
    <a href="index.php?act=list_products" class="btn btn-outline-secondary">Danh sách</a>
    </br>
    </br>
    <?php echo isset($message) ? "<div class='alert alert-success' role='alert'>" . $message . "</div>" : ""; ?>
</div>
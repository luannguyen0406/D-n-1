
<?php
    $id = $_GET['editId'];
    if (isset($_POST['btn-edit']) && ($_POST['btn-edit'])) {
        // $id = $_POST['id'];
        $ten_loai = $_POST['ten_loai'];
        edit_loai_sp($id,$ten_loai);
        $message= "Edit thành công";
        header("Location: index.php?act=list_category");
    }
?>
<div style="margin-left: 350px" class="container">
<div class="alert alert-success" role="alert">
    <h2>QUẢN LÝ LOẠI HÀNG</h2>
</div>
<form class="form" action="index.php?&act=btn-edit&editId=<?= $id  ?>" method="POST">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label fw-bold">Mã loại</label>
        <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo !isset($message) && isset($row['ma_loai']) ?  $row['ma_loai'] : ''; ?>" disabled>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label fw-bold">Tên loại</label>
        <input type="text" class="form-control" name="ten_loai" id="formGroupExampleInput2" placeholder="Enter tên loại" value="<?php echo !isset($message) && isset($row['ten_loai']) ?  $row['ten_loai'] : ''; ?>">
    </div>
    <input type='submit'class="btn btn-outline-secondary" name="btn-edit" value = 'edit' >
    <button  type="button" class="btn btn-outline-secondary">Nhập lại</button>
    <button><a href="index.php?act=list_category" class="btn btn-outline-secondary" >Danh sách</a></button>
</form>
<br>

<?php echo isset($message) ? "<div class='alert alert-success' role='alert'>.$message.</div>" : ""; ?>
</div>


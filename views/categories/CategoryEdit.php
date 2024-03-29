<?php require (ROOT.'/views/layouts/admin_header.php');?>
<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <h3 class="text-center text-uppercase fw-bold">Sửa thông tin thể loại</h3>
            <form method="post" action="index.php?controller=category&action=update">
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatId">Mã thể loại</span>
                    <input type="text" class="form-control" name="txtCatId" readonly value="<?= $_GET['id'] ?>">
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Tên thể loại</span>
                    <input type="text" class="form-control" name="txtCatName" value = "<?= $_GET['name'] ?>">
                </div>

                <div class="form-group  float-end ">
                    <input type="submit" name="Save" value="Sửa" class="btn btn-success">
                    <a href="index.php?controller=category&action=index" class="btn btn-warning ">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</main>
<?php require(ROOT . '/views/layouts/footer.php');?>

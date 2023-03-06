<?php require (ROOT.'/views/layouts/admin_header.php');?>
<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <h3 class="text-center text-uppercase fw-bold">Thêm mới thể loại</h3>
            <form method="post" action="<?php ROOT.'/controllers/CategoryCtrl.php'?>">
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Tên thể loại</span>
                    <input type="text" class="form-control" name="txtCatName" >
                </div>

                <div class="form-group  float-end ">
                    <input type="submit" class="btn btn-success" name="btnCatAdd" value="Thêm">
                    <a href="CategoryHome.php" class="btn btn-warning">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</main>
<?php require (ROOT.'/views/layouts/footer.php');?>
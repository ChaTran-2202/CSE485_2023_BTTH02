<?php
require(VIEW_PATH . '/layouts/admin_header.php');
?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Sửa tác giả</h3>
                <form action="index.php?controller=author&action=edit" method="post">
                <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatId">Mã tác giả</span>
                        <input type="text" class="form-control" name="id" readonly value=<?= $_GET['id']?>>
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên tác giả</span>
                        <input type="text" class="form-control" name="name" value =<?= $_GET['name']?>>
                    </div>

                    <div class="form-group  float-end ">
                        <input type="submit" name = "save" value="Sửa" class="btn btn-success">
                        <a href="index.php?controller=author&action=get" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
<?php require(VIEW_PATH. '/layouts/footer.php');?>
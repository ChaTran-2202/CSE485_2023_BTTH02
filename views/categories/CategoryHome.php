<?php require (ROOT.'/layouts/admin_header.php');?>
<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <a href="CategoryAdd.php" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên thể loại</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Nhạc trữ tình</td>
                    <td>
                        <a href="CategoryEdit.php?id=1"><i class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                    <td>
                        <a href=""><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php require (ROOT.'/layouts/footer.php');?>
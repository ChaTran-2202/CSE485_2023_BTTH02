<?php
require(VIEW_PATH . '/layouts/admin_header.php');
?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <a href="index.php?controller=category&action=add" class="btn btn-success">Thêm mới</a>
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
                    <?php
                    foreach ($data as $category): ?>
                        <tr>
                            <th scope="row"><?= $category->getMaTloai(); ?></th>
                            <td><?= $category->getTenTloai(); ?></td>
                            <td>
                                <a href="index.php?controller=category&action=edit&id=<?= $category->getMaTloai(); ?>&name=<?= $category->getTenTloai(); ?>"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href="index.php?controller=category&action=delete&id=<?= $category->getMaTloai(); ?>"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<?php require(VIEW_PATH. '/layouts/footer.php'); ?>
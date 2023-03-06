<?php
define('ROOT', dirname(__FILE__, 3));
require(ROOT . '/views/layouts/admin_header.php');
?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <a href="<?= ROOT ?>/index.php?controller=category&action=add" class="btn btn-success">Thêm mới</a>
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
                    <?php foreach ($categoryList as $category) { ?>
                        <tr>
                            <th scope="row"><?= $category->getMaTloai(); ?></th>
                            <td><?= $category->getTenTloai(); ?></td>
                            <td>
                                <a href="<?= ROOT ?>/index.php?controller=category&action=update&id=<?= $category->getMaTloai(); ?>"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href=""><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<?php require(ROOT . '/views/layouts/footer.php'); ?>
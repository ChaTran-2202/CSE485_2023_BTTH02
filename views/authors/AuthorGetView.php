<?php require(VIEW_PATH . '/layouts/admin_header.php') ?>
<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <a href="index.php?controller=author&action=addView" class="btn btn-success">Thêm tác giả</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên tác giả</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($authors_arr as $author) { ?>
                    <tr>
                        <th scope="row"><?= $author->getId(); ?></th>
                        <td><?= $author->getName(); ?></td>
                        <td>
                            <a href="index.php?controller=author&action=editView&id=<?= $author->getId(); ?>&name=<?= $author->getName(); ?>"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                        <td>
                            <a href="index.php?controller=author&action=delete&id=<?= $author->getId(); ?>"><i
                                        class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php require(VIEW_PATH . '/layouts/footer.php'); ?>
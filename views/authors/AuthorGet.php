<?php
    define('ROOT', dirname(__FILE__, 3));
    // require ROOT.'\controllers\AuthorCtrl.php';
    require ROOT.'\configs\DbConnect.php';
    // $authorsClass = new AuthorCtrl();
    // $authors = $authorsClass->get();
    print_r($authors)



    
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style_login.css">
</head>
<body>
    <?php require ROOT.'\views\layouts\ad_header.php'?>
    <main class="container mt-5 mb-5">
       
        <div class="row">
            <div class="col-sm">
                <a href="add_author.php" class="btn btn-success">Thêm tác giả</a>
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
                        <?php foreach($authors as $author){ ?>
                            <tr>
                                <th scope="row"><?=$author['id'] ?></th>
                                <td><?=$author['name']?></td>
                                <td>
                                    <a href="<?=$author['ma_tgia']?>.php?id=<?=$author['ma_tgia']?>&name=<?=$author['ten_tgia']?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                </td>
                                <td>
                                    <a href="delete_author.php?id=<?=$author['ma_tgia']?>"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                      <?php  } ?>                                          
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html> -->
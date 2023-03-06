<?php
  
  class AuthorAdd{

    public function add(){
        require_once ROOT.'/views/authors/AuthorAddView.php';
        // if(isset($_POST['addNameAuthor'])){
        //     $sqlEnd = "SELECT * FROM tacgia ORDER BY ma_tgia DESC";
        //     $stament = $conn->query($sqlEnd);
        //     $index = $stament->fetch();
        //     $indexEnd = $index['ma_tgia'] + 1;
    
        //     $name =$_POST['txtNameAuthor'];
        //     $sql = "INSERT INTO tacgia (ma_tgia , ten_tgia) VALUES ('$indexEnd','$name')";
        //     $conn->exec($sql);
        //     header('Location:index.php?controller=author&action=get');
        //     }
            
    }

}
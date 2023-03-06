<?php
// define('ROOT', dirname(__FILE__, 2));
require_once ROOT.'/services/AuthorSer.php';
require_once ROOT.'/views/authors/AuthorGet.php';
class AuthorCtrl{

    public function get(){
       
        $authorSer = new AuthorSer();
        $authors_arr = $authorSer->getAllAuthor();
       
        $authorsView = new AuthorGet();
        $authorsView->showAllAuthor($authors_arr);
        
    }

    public function addView(){
        require_once ROOT.'/views/authors/AuthorAddView.php';
    }
    
    public function add(){
        $authorSer = new AuthorSer();
        $authorSer->authorAdd($_POST['txtNameAuthor']);
    }

    public function editView(){
        require_once ROOT.'/views/authors/AuthorEditView.php';
    }

    public function edit(){
        $authorSer = new AuthorSer();
        $authorSer->authorEdit($_POST['id'] ,$_POST['name']);
    }

    public function delete(){
        $authorSer = new AuthorSer();
        $authorSer->authorDelete($_GET['id']);
    }

}

    // $x = new AuthorCtrl();
    // $c = $x->get();
?> 

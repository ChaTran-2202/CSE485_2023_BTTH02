<?php
// define('ROOT', dirname(__FILE__, 2));
require_once ROOT.'/services/AuthorSer.php';
require_once ROOT.'/views/authors/AuthorGet.php';
require_once ROOT.'/views/authors/AuthorAdd.php';
require_once ROOT.'/views/authors/AuthorEdit.php';
class AuthorCtrl{

    public function get(){
       
        $authorSer = new AuthorSer();
        $authors_arr = $authorSer->getAllAuthor();
       
        $authorsView = new AuthorGet();
        $authorsView->showAllAuthor($authors_arr);
        
    }

    public function add(){
        $authorsAdd = new AuthorAdd();
        $authorsAdd->add();
    }

    public function edit(){
        $authorsEdit = new AuthorEdit();
        $authorsEdit->edit();
    }

    
}

    // $x = new AuthorCtrl();
    // $c = $x->get();
?> 

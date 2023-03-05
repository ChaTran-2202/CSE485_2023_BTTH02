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

    public function edit(){
        
    }

    public function add(){
        
    }
}

    // $x = new AuthorCtrl();
    // $c = $x->get();
?> 

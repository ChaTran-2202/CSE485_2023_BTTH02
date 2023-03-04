<?php
define('ROOT', dirname(__FILE__, 2));
include ROOT.'/services/AuthorSer.php';
class AuthorCtrl{

    public function get(){
        $authorSer = new AuthorSer();
        $authors = $authorSer->getAllAuthor();
        
        require_once ROOT.'views\authors\AuthorGet.php';
    }

    public function edit(){
        
    }

    public function add(){
        
    }
}


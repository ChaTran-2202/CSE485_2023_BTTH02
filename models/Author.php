<?php

class Author{
    private $id;
    private $name;

    public function __construct($id, $name){
        $this->id = $id;
        $this->name = $name;
    }

    // Hàm setter và getter;
    public function getId(){
        return $this->id;
    }
    
    public function getName(){
        return $this->name;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setName($name){
        $this->name = $name;
    }
}

<?php

class DbConnection
{
    private $conn=null;
    public function __construct(){
        // B1. Kết nối DB Server
        try {
            $this->conn = new PDO('mysql:host=localhost;dbname=btth01_cse485;port=3307', 'root','');
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), $e->getCode());
        }
    }
    public function getConnection(){
        return $this->conn;
    }
}
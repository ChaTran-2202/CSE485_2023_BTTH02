<?php
class CategorySer{
    public function getAllCategory(){
        require_once '../configs/DbConnect.php';
        $sql = "SELECT * FROM theloai";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $category = $stmt->fetchAll();
        return $category;
    }

    public function insertCategory(){
        $sqlIndex = "SELECT COUNT(ma_tloai) FROM theloai";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $endIndex = $stmt->fetch() + 1;


    }

}

<?php
require (ROOT.'/models/Category.php');
class CategorySer{
    public function getAllCategory(){
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        $sql = "SELECT * FROM theloai";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $categorylist = [];
        foreach ($stmt->fetchAll() as $row){
            $categorylist[] = new Category($row['ma_tloai'], $row['ten_tloai']);
        }
        return $categorylist;
    }
    public function addCategory($data){
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        $sql = "INSERT INTO theloai (ma_tloai, ten_tloai) VALUES (:id, :name)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue('ma_tloai', $data['id'], PDO::PARAM_INT);
        $stmt->bindValue('ten_tloai', $data['name'], PDO::PARAM_STR);
        $stmt->execute();
    }
    public function updateCategory($data){
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        $sql = "UPDATE theloai SET ten_tloai = :name WHERE ma_tloai = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue('ma_tloai', $data['name'], PDO::PARAM_INT);
        $stmt->bindValue('ten_tloai', $data['id'], PDO::PARAM_STR);
        $stmt->execute();
    }
    public function delCategory($id){
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        $sql = "DELETE FROM theloai WHERE ma_tloai = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue('ten_tloai', $id, PDO::PARAM_STR);
        $stmt->execute();
    }
}

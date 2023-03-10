<?php
require_once ('configs/DbConnection.php');
require_once ('models/Category.php');
class CategorySer
{
    private $conn;
    public function __construct()
    {
        $this->conn = DbConnection::getConnection();
    }

    public function getAllCategory()
    {
        $sql = "SELECT * FROM theloai";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $categories = [];
        foreach ($stmt->fetchAll() as $row){
            $category = new Category($row['ma_tloai'], $row['ten_tloai']);
            array_push($categories,$category);
        }
        return $categories;
    }

    public function addCategory($data)
    {
        $sql = "INSERT INTO theloai (ma_tloai, ten_tloai) VALUES (:id, :name)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue('ma_tloai', $data['id'], PDO::PARAM_INT);
        $stmt->bindValue('ten_tloai', $data['name'], PDO::PARAM_STR);
        $stmt->execute();
    }

    public function updateCategory($data)
    {
        $sql = "UPDATE theloai SET ten_tloai = :name WHERE ma_tloai = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue('ma_tloai', $data['name'], PDO::PARAM_INT);
        $stmt->bindValue('ten_tloai', $data['id'], PDO::PARAM_STR);
        $stmt->execute();
    }

    public function delCategory($id)
    {
        $sql = "DELETE FROM theloai WHERE ma_tloai = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue('ten_tloai', $id, PDO::PARAM_STR);
        $stmt->execute();
    }
}

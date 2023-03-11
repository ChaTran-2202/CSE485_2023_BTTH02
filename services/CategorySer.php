<?php
require_once(DB_PATH . '/DbConnection.php');
require_once(MODEL_PATH . '/Category.php');

class CategorySer
{
    private $conn;
    public function __construct()
    {
        $this->conn = DbConnection::getConnection();
    }

    public function getAllCategory()
    {
        $stmt = $this->conn->prepare("SELECT * FROM theloai");
        $stmt->execute();
        $categories = array();
        foreach ($stmt->fetchAll() as $row) {
            $categories[] = new Category($row['ma_tloai'], $row['ten_tloai']);
        }
        return $categories;
    }

    public function addCategory($id, $name)
    {
        $stmt = $this->conn->prepare("INSERT INTO theloai (ma_tloai, ten_tloai) VALUES (?, ?)");
        $stmt->execute([$id, $name]);
        return $this->conn->lastInsertId();
    }

    public function updateCategory($id, $name)
    {
        $stmt = $this->conn->prepare("UPDATE theloai SET ten_tloai = ? WHERE ma_tloai = ?");
        return $stmt->execute([$name, $id]);
    }

    public function delCategory($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM theloai WHERE ma_tloai = ?");
        return $stmt->execute([$id]);
    }
}

//echo "<pre>";
//$x = new CategorySer();
//$c = $x->getAllCategory();
//print_r($c);
//echo "</pre>";

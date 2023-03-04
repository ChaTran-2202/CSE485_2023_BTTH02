<?php

   define('ROOT', dirname(__FILE__, 2));
    class AuthorSer{
        // Chứa các hàm tương tác và xử lý dữ liệu      
        public function getAllAuthor(){
            // Bước 01: Kết nối DB Server      
            require_once ROOT . '\configs\DbConnect.php';
            // Bước 02: Truy vấn DL              
            $sql = 'SELECT * FROM tacgia';            
            $stmt = $pdo->prepare($sql);         
            $stmt->execute();              
            // Bước 03: Trả về dữ liệu
            $authors  = $stmt->fetchAll();                    
     
            return $authors;
        }
    }
  
?>

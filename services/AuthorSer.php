<?php
    class AuthorSer{
        // Chứa các hàm tương tác và xử lý dữ liệu      
        public function getAllAuthor(){
            // Bước 01: Kết nối DB Server      
            require_once ROOT . '\configs\DbConnection.php';
            require_once ROOT . '\models\Author.php';
            // Bước 02: Truy vấn DL
            $db = new DbConnection();
            $conn = $db->getConnection();              
            $sql = 'SELECT * FROM tacgia';            
            $stmt = $conn->prepare($sql);         
            $stmt->execute();              
            // Bước 03: Trả về dữ liệu
            $authors  = $stmt->fetchAll();                    
            $authors_arr = array();
            foreach($authors as $author){
                $authors_arr[] = new Author($author['ma_tgia'] , $author['ten_tgia']);
            }
            return $authors_arr;
        }
    }

    // echo "<pre>";
    // $x = new AuthorSer();
    // $c = $x->getAllAuthor();
    // print_r($c);
    // echo "</pre>";

?>

<?php
   // Bước 01: Kết nối DB Server      
            require_once DB_PATH . '\DbConnection.php';
            require_once MODEL_PATH . '\Author.php';
    class AuthorSer{
        // Chứa các hàm tương tác và xử lý dữ liệu      
        public function getAllAuthor(){
         
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

        public function authorAdd($authorName){
              $db = new DbConnection();
              $conn = $db->getConnection(); 

            
                // $sqlEnd = "SELECT * FROM tacgia ORDER BY ma_tgia DESC";
                // $stmt = $conn->prepare($sqlEnd);
                // $stmt->execute(); 
                // $index = $stmt->fetch();
                // $indexEnd = $index['ma_tgia'] + 1;

                $stmt = $conn->prepare('SELECT COUNT(*) as quatity FROM tacgia');
                $stmt->execute();
                $index = $stmt->fetch();
                $indexEnd = $index['quatity'] + 1;

                $name =$authorName;
                $sql = "INSERT INTO tacgia (ma_tgia , ten_tgia) VALUES ('$indexEnd','$name')";
                $conn->exec($sql);
                header('Location:index.php?controller=author&action=get');
                          
        }

        public function authorDelete($authorid){
            $db = new DbConnection();
            $conn = $db->getConnection(); 
            $sql = "DELETE FROM tacgia WHERE ma_tgia = {$authorid}";
            $conn->exec($sql);
            header('Location:index.php?controller=author&action=get');
        }
                
        public function authorEdit($id , $name){
            $db = new DbConnection();
            $conn = $db->getConnection(); 
            
            $stmt = $conn->prepare("UPDATE tacgia SET ten_tgia ='$name' WHERE ma_tgia='$id'");
            $stmt->execute();
            header('Location:index.php?controller=author&action=get');
        }
              
      
    }

//     echo "<pre>";
//     $x = new AuthorSer();
//     $c = $x->getAllAuthor();
//     print_r($c);
//     echo "</pre>";

?>

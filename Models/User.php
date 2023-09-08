<?php
    // Ket noi voi database
    class User {
        // lay ta ca du lieu
        public static function all(){
            global $conn;

           
           
            if (isset($_GET['search']) && $_GET['search']) {
                $keyword = $_GET['search'];
                $sql = "SELECT users.*, users.tenbenhnhan, users.phong
                FROM users
    
                WHERE `tenbenhnhan` LIKE '%$keyword%' OR `phong` LIKE '%$keyword%'";
            }else{
            $sql = "SELECT users.*, users.tenbenhnhan, users.phong
            FROM users;";
            }
           

            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $rows = $stmt->fetchAll();
            // Tra ve cho Model
            return $rows;
        }
     
     // lay chi tiet 1 du lieu
     public static function find($id){
        global $conn;
        $sql = "SELECT * FROM users WHERE `id` = '$id'";

        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $stmt->fetch();
        return $row;
    }

        // Them moi du lieu
        public static function store($data){
            global $conn;
            // $id = $data['id'];
        
            $tenbenhnhan = $data['tenbenhnhan'];
            $phong= $data['phong'];
            $ngaynhapvien= $data['ngaynhapvien'];
            $gioitinh= $data['gioitinh'];
            $tinhtrang= $data['tinhtrang'];
            $thongtin= $data['thongtin'];

            
            $sql = "INSERT INTO `users` 
            (   `tenbenhnhan` , `phong` ,  `ngaynhapvien` , `gioitinh` , `tinhtrang` ,  `thongtin`) 
            VALUES 
            (  '$tenbenhnhan' , '$phong' , '$ngaynhapvien' , '$gioitinh' , '$tinhtrang' , '$thongtin')";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;
        }
        // Cap nhat du lieu
        public static function update($id, $data) {
            global $conn;
            $tenbenhnhan = $data['tenbenhnhan'];
            $phong= $data['phong'];
            $ngaynhapvien= $data['ngaynhapvien'];
            $gioitinh= $data['gioitinh'];
            $tinhtrang= $data['tinhtrang'];
            $thongtin= $data['thongtin'];
        
            $sql = "UPDATE `users` SET  `tenbenhnhan` = '$tenbenhnhan' , `phong` = '$phong' , `ngaynhapvien` = '$ngaynhapvien' ,
             `gioitinh` = '$gioitinh' , `tinhtrang` = '$tinhtrang' , `thongtin` = '$thongtin' WHERE `id` = '$id'";
        
            // Thực hiện truy vấn
            $conn->exec($sql);
        
            return true;
        }
       // Xoa du lieu
       public static function delete($id){
        global $conn;
        $sql = "DELETE FROM `users` WHERE `id` = '$id' ";
        // Thuc thi SQL
        $conn->exec($sql);
        return true;
    }
  
   
    }   
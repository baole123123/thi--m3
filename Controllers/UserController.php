<?php
// require_once 'Models/Book.php';
require_once 'Models/User.php';
class UserController {
    // Hien thi danh sach records => table
    public function index(){
        $items = User::all();

       
        // Truyen data xuong view
        require_once 'Views/users/index.php';
       
    }
    // Hien thi form them moi
    public function create(){
        $rows = User::all();

        // var_dump($teams1);
        // die();
        require_once 'Views/users/create.php';
    }
    // Xu ly them moi
    public function store(){

       
        User::store($_POST);
                // Chuyen huong ve trang danh sach
                echo '<script>window.location.href = "index.php?controller=user&action=index";</script>';
            
        
        

    }
    // Hien thi form chinh sua
    public function edit() {
        $id = $_GET['id'];
        // $r = Book::find($id);
        $row = User::find($id);
    
        // Truyền xuống view
        require_once 'Views/users/edit.php';
    }
    // Xu ly chinh sua
    public function update(){
        $id = $_GET['id'];  
        User::update( $id, $_POST );
        
        // Chuyen huong ve trang danh sach
        echo '<script>window.location.href = "index.php?controller=user&action=index";</script>';
        
    }

    // Xoa
    public function destroy(){
        $id = $_GET['id'];
        User::delete($id);
        // Chuyen huong ve trang danh sach
        echo '<script>window.location.href = "index.php?controller=user&action=index";</script>';
    }
    // Xem chi tiet
    public function show(){
        $id = $_GET['id'];
        $row  = User::find($id);
        // Truyen xuong view
        require_once 'Views/users/show.php';
    }
    
}
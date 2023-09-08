<form action="index.php?controller=user&action=update&id=<?= $row['id'];?>" method="post" enctype="multipart/form-data">

Tên bệnh nhân: <input type="text" name="tenbenhnhan" value="<?= $row['tenbenhnhan'];?>"> <br>
Phòng: <input type="text" name="phong" value="<?= $row['phong'];?>"> <br>
Ngày nhập viện: <br>
<input type="date" name="ngaynhapvien" value="<?= $row['ngaynhapvien'];?>"> <br>
Giới tính: <br>
<select name="gioitinh">
  <option value="nam" <?= ($row['gioitinh'] == 'nam') ? 'selected' : ''; ?>>Nam</option>
  <option value="nữ" <?= ($row['gioitinh'] == 'nữ') ? 'selected' : ''; ?>>Nữ</option>
  
</select> <br>
Tình trạng: <br> 
<select name="tinhtrang">
  <option value="Nhẹ" <?= ($row['tinhtrang'] == 'Nhẹ') ? 'selected' : ''; ?>>Nhẹ</option>
  <option value="Bình thường" <?= ($row['tinhtrang'] == 'Bình thường') ? 'selected' : ''; ?>>Bình thường</option>
  <option value="Nguy hiểm" <?= ($row['tinhtrang'] == 'Nguy hiểm') ? 'selected' : ''; ?>>Nguy hiểm</option>
</select> <br>
Thông tin: <input type="text" name="thongtin" value="<?= $row['thongtin'];?>"> <br>



 
    
   
    <input type="submit" value="Cập nhật">
    <button> 
        <a href="index.php?controller=user&action=index">Quay lại</a>
        
    </button>
    

    <style>
    form {
        width: 300px;
        margin: 0 auto;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="submit"],
    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        cursor: pointer;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover,
    button:hover {
        background-color: #45a049;
    }

    button a {
        color: white;
        text-decoration: none;
    }
</style>

    <style>
    form {
        width: 300px;
        margin: 0 auto;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"] {
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
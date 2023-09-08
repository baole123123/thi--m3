
<style>
  .form-container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f7f7f7;
  }

  .form-container input[type="text"],
  .form-container input[type="date"],
  .form-container select,
  .form-container textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  .form-container select {
    height: 36px;
  }

  .form-container button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .form-container button:hover {
    background-color: #45a049;
  }
</style>

<form action="index.php?controller=user&action=store" method="post"enctype="multipart/form-data">

    Tên bệnh nhân: <input type="text" name="tenbenhnhan" required> <br>
    Phòng: <input type="text" name="phong" required> <br>
    Ngày nhập viện: <br>
     <input type="date" name="ngaynhapvien" required> <br>
    Giới tính: <br>
     <select name="gioitinh" required>
 
 <option value="nam">Nam</option>
 <option value="nữ">Nữ</option> 
 </select> <br>
    Tình trạng: <br> 
    <select name="tinhtrang" required>
 
  <option value="nhẹ">Nhẹ</option>
  <option value="bình thường">Bình thường</option>
  <option value="Nguy hiểm">Nguy hiểm</option>
</select> <br>

    Thông tin: <input type="text" name="thongtin" required> <br>

    
   
    <input type="submit" value="Thêm">
    
    <style>
    form {
        width: 300px;
        margin: 0 auto;
        font-family: Arial, sans-serif;
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        cursor: pointer;
        border-radius: 4px;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>


</form>     
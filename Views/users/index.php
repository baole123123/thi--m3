



<!-- <form action="" method="GET">
<input type="text" name="search">
<input type="submit" name="submit" value="Tìm kiếm">
</form> -->
<h1> DANH SÁCH BỆNH NHÂN</h1>
<style>
    h1 {
  text-align: center;
  margin: 0 auto;
}
</style>
<a href="index.php?controller=user&action=create" class="button">Thêm bệnh nhân</a>
<form action="index.php?controller=user&action=index" method="get" enctype="multipart/form-data">
<input type="text" name="search" placeholder="Nhập tên...">
    <input type="submit" value="Tìm kiếm">
</form>

<style>
.button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #337ab7;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
  font-weight: bold;
}

.button:hover {
  background-color: #23527c;
}
</style>

<table border="1">
    <tr>
        <th>Mã bệnh nhân</th>
        <th>Tên bệnh nhân</th>
        <th>Phòng</th>
        <!-- <th>Ngày nhập viện</th>
        <th>Giới tính</th>
        <th>Tình trạng</th>
        <th>Thông tin</th>
       -->
      
       <th>Thao tác</th>
    


       

       
</form>
    </tr>

    <!-- Bắt đầu lặp -->
<?php
        foreach($items as $r) :
            
        ?>   
    <tr>
      
        <td><?php echo $r['id'];?> </td>
        <td><?php echo $r['tenbenhnhan'];?> </td>
        <td><?php echo $r['phong'];?> </td>
        <!-- <td><?php echo $r['ngaynhapvien'];?> </td>
        <td><?php echo $r['gioitinh'];?> </td>
        <td><?php echo $r['tinhtrang'];?> </td>
        <td><?php echo $r['thongtin'];?> </td>
 -->

       
       

        <td>
            <style>
    /* Định dạng cho liên kết */
    .custom-link {
        display: inline-block;
        padding: 5px 10px;
        margin-right: 10px;
        color: #fff;
        background-color: #007bff;
        border-radius: 5px;
        text-decoration: none;
    }

    /* Định dạng khi di chuột qua liên kết */
    .custom-link:hover {
        background-color: #0056b3;
    }
    
</style>

<!-- Các liên kết với lớp CSS "custom-link" -->
<a  href="index.php?controller=user&action=edit&id=<?php echo $r['id'];?>"><button type="button" class="btn btn-primary">Sửa</button>
</a>
<a  href="index.php?controller=user&action=show&id=<?php echo $r['id'];?>"><button type="button" class="btn btn-success">Xem</button>
</a>
<a  onclick="return confirm('Bạn đã chắc chắn chưa?');" href="index.php?controller=user&action=destroy&id=<?php echo $r['id'];?>"><button type="button" class="btn btn-danger">Xóa</button>
</a>            <style>
button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #ff0000;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
  font-weight: bold;
}

.button:hover {
  background-color: #23527c;
}
</style>
        </td>
    </tr>

    <!-- Kết thúc vòng lặp -->
    <?php endforeach; ?>
</table>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #e6e6e6;
        transition: background-color 0.3s;
    }

    tr:hover td {
        transform: scale(1.1);
        transition: transform 0.3s;
    }
    
    a {
        text-decoration: none;
        color: blue;
    }
</style>
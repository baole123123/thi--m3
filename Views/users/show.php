
<h1> CHI TIẾT BỆNH NHÂN</h1>
<style>
    h1 {
  text-align:
  margin: 0 auto;
}
</style>
<table border="1">
     
     
<tr>
        <td>Mã bệnh nhân</td>
        <td><?= $row['id'];?></td>
    </tr>
    
    <tr>
        <td>Tên bệnh nhân</td>
        <td><?= $row['tenbenhnhan'];?></td>
    </tr><tr>

        <td>Phòng</td>
        <td><?= $row['phong'];?></td>
    </tr><tr>

        <td>Ngày nhập viện</td>
        <td><?= $row['ngaynhapvien'];?></td>
    </tr><tr>

        <td>Giới tính</td>
        <td><?= $row['gioitinh'];?></td>
    </tr><tr>

        <td>Tình trạng</td>
        <td><?= $row['tinhtrang'];?></td>
    </tr><tr>

        <td>Thông tin</td>
        <td><?= $row['thongtin'];?></td>
    </tr>

   
        


    <style>
    table {
        border-collapse: collapse;
        width: 40%;
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
</style>
</table>
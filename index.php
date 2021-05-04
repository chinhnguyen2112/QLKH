<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Khách hàng</title>
<link type="text/css" href="style.css" rel="stylesheet" media="screen">
</head>
<body>

<?php
    include('connect.php');
?>
<div class="content">
<h1>Thông tin khách hàng</h1>
        <form action="#" method="POST">
            <table class="center" border="3">
                <tr>
                    <td>Mã KH</td>
                    <td>Tên KH</td>
                    <td>Số lượng</td>
                    <td>Đơn giá</td>
                    <td>Tổng tiền</td>
                    <td>Chức năng</td>
                </tr>
                <?php
                    $query=mysqli_query($connect,"SELECT * FROM muahang");
                    while($show=mysqli_fetch_assoc($query))
                    {
                        $sum=0;
                ?>
                <tr>
                    <td><?php echo $show['MaKH'] ?></td>
                    <td><?php echo $show['HoTen'] ?></td>
                    <td><?php echo $show['SoLuong'] ?></td>
                    <td><?php echo $show['DonGia'] ?></td>
                    <td><?php echo $show['SoLuong']*$show['DonGia'] ?></td>
                    <td>
                         <a href="sua1.php?id=<?php echo $show['MaKH'] ?>"class="delete"> Sửa </a>  || 
				 <a href="xoa.php?id=<?php echo $show['MaKH'] ?>"class="delete"> xóa </a> 
                     </td>
                    <div class="row">
                        <input type="submit" value="THÊM">
                    </div>
                </tr>
                <?php

                    }
                    ?>

            </table>
        </form>
 </div>
    </body>

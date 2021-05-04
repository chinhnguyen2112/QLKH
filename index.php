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
                        <a href="them.php">Thêm</a> || <a href="sua.php">Sửa</a> || <a href="xoa.php">Xóa</a>
                     </td>
                </tr>
                <?php

                    }
                    ?>


        </form>
 </div>
    </body>

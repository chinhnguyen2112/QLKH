<?php
    include('connect.php');
?>
<form action="#" method="POST">
    <table border="10">
        <tr>
            <td>Mã KH</td>
            <td>Tên kh</td>
            <td>Số lượnbg</td>
            <td>Đơn giá</td>
            <td>Tổng tiền</td>
        </tr>
        <?php
            $query=mysqli_query($connect,"SELECT * FROM muahang");
            while($show=mysqli_fetch_assoc($query))
            {
                $sum=0;
        ?>
        <tr>
            <td><?php echo $show['MaKH'] ?></td>
            <td><?php echo $show['TenKH'] ?></td>
            <td><?php echo $show['SoLuong'] ?></td>
            <td><?php echo $show['DonGia'] ?></td>
            <td><?php echo $show['SoLuong']*$show['DonGia'] ?></td>
        </tr>
        <?php
                
            }
            ?>
        
    </table>
</form>
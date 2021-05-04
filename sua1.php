<?php 
include("connect.php");
$ma=$_POST['ma'];
$query=mysqli_query($connect,"SELECT* FROM muahang where MaKH=$ma");
$row=mysqli_fetch_assoc($query);
$makh=$row['MaKH'];
$ten=$row['HoTen'];
$sl=$row['SoLuong'];
$gia=$row['DonGia'];

?>
<form action="#" method="POST">
    <table border="2">
        <tr>
            <td>Mã KH</td>
            <td><input type="text" name="ma" value="<?php echo $makh ?>"></td>
        </tr>
        <tr>
            <td>Tên KH</td>
            <td><input type="text" name="ten" value="<?php echo $ten ?>"></td>
        </tr>
   
    <tr>
            <td>Đơn Giá</td>
            <td><input type="text" name="gia"value="<?php echo $gia ?>"></td>
        </tr>
       
    <tr>
            <td>Số Lượng</td>
            <td><input type="text" name="sl"value="<?php echo $sl ?>"></td>
        </tr>
        <tr>
            
            <td><input type="submit" name="sua" value="SỬA"></td> ||<td><a href="index.php">« Back </a></td>
        </tr>
    
   
    </table>
</form>
<?php
    if(isset($_POST['sua']))
    {
        $makh=$_POST['ma'];
        $ten=$_POST['ten'];
        $gia=$_POST['gia'];
        $sl=$_POST['sl'];
        $show=mysqli_query($connect,"UPDATE `muahang` SET `MaKH`='$makh',`HoTen`='$ten',`SoLuong`='$sl',`DonGia`='$gia' WHERE 1");
        if($query){
            echo "<script> alert('Sửa thành công')</script>";
        }
        else echo  "<script> alert('Sửa thất bại')</script>";
    }
?>

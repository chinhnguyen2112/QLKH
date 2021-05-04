<?php
include('connect.php');
?>
<form action="#" method="POST">
    <table border="10">
        <tr>
            <td>Mã KH</td>
            <td><input type="text" name="ma"></td>
        </tr>
        <tr>
            <td>Tên KH</td>
            <td><input type="text" name="ten"></td>
        </tr>
        <tr>
            <td>Số Lượng</td>
            <td><input type="text" name="sl"></td>
        </tr>
        <tr>
            <td>Giá</td>
            <td><input type="text" name="gia"></td>
        </tr>
        <tr>
            <td><input type="submit" name="them" value="THÊM">||<a href="index.php"></a></td>
        </tr>
    </table>
</form>
<?php
    if(isset($_POST['them']))
    {
        $ma=$_POST['ma'];
        $ten=$_POST['ten'];
        $sl=$_POST['sl'];
        $gia=$_POST['gia'];
        $query=mysqli_query($connect,"INSERT INTO `muahang`(`MaKH`, `HoTen`, `SoLuong`, `DonGia`) VALUES ('$ma','$ten','$sl','$gia')");
        if($query){
            echo "<script> alert('thêm thành công')</script>";
        }
        else echo  "<script> alert('thêm thành thất bại')</script>";
    } 
    ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CACULATOR</title>
<link type="text/css" href="style.css" rel="stylesheet" media="screen">
</head>
<body>


<?php 
include("connect.php");
$ma=$_POST['ma'];
$query=mysqli_query($connect,"SELECT* FROM muahang where MaKH=$ma");
$row=mysqli_fetch_assoc($query);
$makh=$row['MaKH'];
$ten=$row['TenKH'];
$sl=$row['SoLuong'];
$gia=$row['DonGia'];

?>
<div class="content">
<h1>Sửa thông tin khách hàng</h1>
<form action="#" method="POST">
    <table border="2">
        <div class="row">
            <span>Mã KH</span>
            <input type="text" name="ma" value="<?php echo $makh ?>">
       </div>
       <div class="row">
            <span>Tên KH</span>
            <input type="text" name="ten" value="<?php echo $ten ?>">
            </div>
   
        <div class="row">
            <span>Đơn giá</span>
           <input type="text" name="gia"value="<?php echo $gia ?>">
            </div>
       
        <div class="row">
            <span>Số lượng</span>
            <input type="text" name="sl"value="<?php echo $sl ?>">
            </div>
        <div class="row">
            <input type="submit" name="sua" value="SỬA">||<a href="index.php">««Back </a>
            </div>
    
   
    </table>
</form>
</div>
<?php
    if(isset($_POST['sua']))
    {
        $makh=$_POST['ma'];
        $ten=$_POST['ten'];
        $gia=$_POST['gia'];
        $sl=$_POST['sl'];
        $show=mysqli_query($connect,"UPDATE `muahang` SET `MaKH`='$makh',`TenKH`='$ten',`SoLuong`='$sl',`DonGia`='$gia' WHERE 1");
        if($query){
            echo "<script> alert('Sửa thành công')</script>";
        }
        else echo  "<script> alert('Sửa thất bại')</script>";
    }
?>


</body>

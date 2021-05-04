  
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thêm thông tin khách hàng</title>
<link type="text/css" href="style.css" rel="stylesheet" media="screen">
</head>
<body>

<?php
include('connect.php');
?>
<div class="content">
    <h1>Nhập thông tin khách hàng</h1>
    <form action="#" method="POST">
        
            <div class="row">
            <span>Mã KH</span>
                <input type="text" name="ma">
        </div>
            <div class="row">
            <span>Tên KH</span>
                <input type="text" name="ten">
             </div>
           <div class="row">
            <span>Số Lượng</span>
                <input type="text" name="sl">
             </div>
            <div class="row">
            <span>Giá</span>
                <input type="text" name="gia">
             </div>
            <div class="row">
                <input type="submit" name="them" value="THÊM"><a href="index.php"> Back</a>
             </div>
        
    </form>
</div>
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
    </body>

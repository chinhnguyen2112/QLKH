<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>QLKH</title>
<link type="text/css" href="style.css" rel="stylesheet" media="screen">
</head>
<body>
    <div class="content">
        <h1>Chọn mã khách hàng</h1>
<form action="sua1.php" method="POST">
    <table border="2">
    <?php
include('connect.php');
echo '<select name="MaKH">';
echo '<option value="">-----Chọn---</option>';
            $xoa=mysqli_query($connect,"SELECT  * FROM muahang");
            while($show=mysqli_fetch_assoc($xoa))
            {
                echo '<option value="' . htmlspecialchars($show["MaKH"]) . '">'  . htmlspecialchars($show["MaKH"]).'</option>';
            }
            '</select>'
        
?>
        <div class="row">
            <input type="submit" name="go" value="GO">
            </div>
    </table>
</form>
</div>
</body>

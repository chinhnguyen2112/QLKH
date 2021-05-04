
<form action="index.php" method="GET">
    <table border="10">
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
           
          <td><input type="submit" name="xoa" value="XÓA"></td>
        <tr>
            
             <td><a href="index.php"><input type="submit" name="sua" value="« Back ↩"></a></td>
        </tr>
        
    </table>

</form>
<?php

    if(isset($_GET['xoa']))
    {
        $ma=$_GET['MaKH'];
       
        $query=mysqli_query($connect,"DELETE FROM `muahang` WHERE MaKH=$ma");
        if($query){
            echo "<script> alert('Xóa thành công')</script>";
        }
        else echo  "<script> alert('Xóa thất bại')</script>";
    }
?>


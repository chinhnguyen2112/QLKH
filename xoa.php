<?php
        
            
        
$id= $_GET['id'];
include('connect.php');


$query = mysqli_query($connect,"DELETE  FROM `muahang` where MaKH='$id'") or die ("ERRRO");


header("location:index.php");

?>

<?php
     include("connect.php");
     $IDMenu = $_GET['IDMenu'];
 
     $delete = mysqli_query($conn, "DELETE FROM menu WHERE IDMenu = '$IDMenu'");
 
     header("Location:menu.php");
?>
<?php
     include("connect.php");
     $IDKategori = $_GET['IDKategori'];
 
     $delete = mysqli_query($conn, "DELETE FROM kategori WHERE IDKategori = '$IDKategori'");
 
     header("Location:kategori.php");
?>
<?php
     include("connect.php");
     $IDTransaksi = $_GET['IDTransaksi'];
 
     $delete = mysqli_query($conn, "DELETE FROM transaksi WHERE IDTransaksi = '$IDTransaksi'");
 
     header("Location:transaksi.php");
?>
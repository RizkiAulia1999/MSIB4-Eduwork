<?php
    //mengambil data yg telah dikirimkan oleh form dalam add.php
    $id = $_POST['id_penerbit'];
    $nama = $_POST['nama_penerbit'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    include("connect.php");
    //$sql = "INSERT INTO `penerbit` (`nama_penerbit`, `email`, `telp` , `alamat`) VALUES ('$nama' , '$email' ,'$telp' ,'$alamat')";

   $result = mysqli_query($conn, "INSERT INTO `penerbit` (`id_penerbit`,`nama_penerbit`, `email`, `telp` , `alamat`) VALUES ('$id','$nama' , '$email' ,'$telp' ,'$alamat');");

    header("Location:index.php");
?>
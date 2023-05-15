<?php
include "connect.php";//memanggil file connection php
$query = mysqli_query($conn, "SELECT * FROM penerbit");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <center>
    <div class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Perpus</a>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="index.php">Penerbit</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Katalog</a>
                </li>
            </ul>
            </div>
        </div>
    </div>

    <table class="table table-hover mt-5" style="width: 900px;">
        <tr  class="bg-transparent">
            <td colspan="7">
                <a class="btn btn-primary m-3 align-items-centeralign-items-center" href="add.php">Tambah Penerbit</a>
            </td>
        </tr>
        <tr class="bg-light">
            <th>No</th>
            <th>id</th>
            <th>nama</th>
            <th>email</th>
            <th>telp</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){//untuk mengetahui berapa jumlah baris di dalam tabel ?>
        <?php
            $no = 1;
            while ( $value = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $value["id_penerbit"]; ?></td>
            <td><?php echo $value["nama_penerbit"]; ?></td>
            <td><?php echo $value["email"]; ?></td>
            <td><?php echo $value["telp"]; ?></td>
            <td><?php echo $value["alamat"]; ?></td>
            <td>
                <a class="btn btn-warning" href='edit.php?id_penerbit=<?php echo $value["id_penerbit"]?>'>Edit</a> 
                <a class="btn btn-danger" href='proses_delete.php?id_penerbit=<?php echo $value["id_penerbit"]?>'>Delete</a>   
            </td>
        </tr>
          <?php  
          $no++; }?>
          <?php } ?>
    </table>
    </center>
</body>
</html>
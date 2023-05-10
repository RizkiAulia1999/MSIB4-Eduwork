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
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Perpus</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
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
    </nav>
    <br>
    <a class="btn btn-primary" href="add.php">Tambah Penerbit</a>

    <table class="table table-striped mt-5" align="center" style="width: 900px;">
        <tr>
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
                <button class="btn btn-primary">Edit</button>
                <button class="btn btn-danger">Delete</button>
            </td>
        </tr>
          <?php  
          $no++; }?>
          <?php } ?>
    </table>
</body>
</html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

<?php
include "connect.php";//memanggil file connection php
$query = mysqli_query($conn, "SELECT * FROM penerbit");
?>
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

    <div class="container card mt-5">
        <div class="card-body ">
            <a href="add.php" Class="btn btn-primary mt-3 mb-3">Tambah Data</a>
            <table class="table" id="example">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>id</th>
                        <th>nama</th>
                        <th>email</th>
                        <th>telp</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    
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
                </tbody>
            </table>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>
</html>
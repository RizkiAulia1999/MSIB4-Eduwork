<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Edit Kategori</title>
</head>
<body>
<?php
ob_start();
    include "connect.php";
    $IDKategori     = $_GET['IDKategori'];
    $array_menu = mysqli_query($conn,"SELECT*FROM menu");
    $array_kategori = mysqli_query($conn,"SELECT*FROM kategori where IDKategori = '$IDKategori'");

    while ($kategori_data = mysqli_fetch_array($array_kategori)) {
        $Kategori   = $kategori_data['Kategori'];
        $Gambar     = $kategori_data['Gambar'];
    }
?>
    <!-- Navbar -->
    <div class="navbar fixed-top bg-light"  style="height:70px;">
        <div class="container">
            <a style="font-family:'Comic Sans MS'" class="navbar-brand text-dark" href="../home.php"><b>kanUenak<b><span class="text-danger">.</span></a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="menu.php">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="kategori.php">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="transaksi.php">Transaksi</a>
                </li>              
            </ul>
        </div>
    </div>

    <!-- Main -->
    <div class="container" style="margin-top: 100px;">
        <div class="col-md-9 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Menu</h4>
                </div>
                <div class="card-body">
                    <form action="edit_kategori.php?IDKategori=<?php echo $IDKategori; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" class="form-control" required="required" name="Kategori" value="<?php echo $Kategori; ?>">
                        </div>
                        <div class="form-group mt-2">
                                <label>Gambar</label>
                                <input type="file" class="form-control" required="required" name="Gambar" value="<?php echo $Gambar; ?>"><br>
                        </div>
                        <input type="submit"  class="rounded-pill btn btn-danger float-right" name="Submit" value="simpan"></input>                      
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


<?php
    if (isset($_POST['Submit'])) {
        $Kategori = $_POST['Kategori'];
        $Gambar   = $_FILES['Gambar']['name'];

        $update = mysqli_query($conn, "UPDATE kategori SET Kategori      = '$Kategori',
                                                        Gambar           = '$Gambar'
                                                        WHERE IDKategori = '$IDKategori';");
        header("location:kategori.php");
    }
?>
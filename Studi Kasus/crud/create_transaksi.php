<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Tambah Menu</title>
</head>
<body>
<?php
ob_start();
    include "connect.php";
    $array_menu = mysqli_query($conn,"SELECT*FROM menu");
    $array_kategori = mysqli_query($conn,"SELECT*FROM kategori");
    $array_user= mysqli_query($conn,"SELECT*FROM user");
    $array_transaksi= mysqli_query($conn,"SELECT*FROM transaksi");
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
                    <h4>Tambah Transaksi</h4>
                </div>
                <div class="card-body">
                    <form action="create_transaksi.php" method="post" enctype="multipart/form-data">
                        <div class="form-group mt-2">
                            <label>Pelanggan</label>
                            <select name="IDUser" class="form-select">
                                <?php
                                    while ($user= mysqli_fetch_array($array_user)) {
                                        echo"
                                            <option value=".$user['IDUser'].">".$user['user']."</option>
                                        ";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group mt-2">
                            <label>Menu</label>
                            <select name="IDMenu" class="form-select">
                                <?php
                                    while ($menu= mysqli_fetch_array($array_menu)) {
                                        echo"
                                            <option value=".$menu['IDMenu'].">".$menu['Nama_menu']."</option>
                                        ";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group mt-2">
                            <label>Kategori</label>
                            <select name="IDKategori" class="form-select">
                                <?php
                                    while ($kategori = mysqli_fetch_array($array_kategori)) {
                                        echo"
                                            <option value=".$kategori['IDKategori'].">".$kategori['Kategori']."</option>
                                        ";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group mt-2">
                                <label>Jumlah Pesan</label>
                                <input type="number" class="form-control" required="required" name="Jumlah_Pesan">
                        </div>
                        <div class="form-group mt-2">
                                <label>Total_Harga</label>
                                <input type="number" class="form-control" required="required" name="Total_Harga">
                        </div>
                        <br>
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
        $IDUser    = $_POST['IDUser'];
        $IDMenu = $_POST['IDMenu'];
        $IDKategori = $_POST['IDKategori'];
        $Jumlah_Pesan   = $_POST['Jumlah_Pesan'];
        $Total_Harga   = $_POST['Total_Harga'];

        $insert = mysqli_query($conn, "INSERT INTO `transaksi` (`IDUser`,`IDMenu`,`IDKategori`,`Jumlah_Pesan`,`Total_Harga`) 
                                        VALUES ('$IDUser','$IDMenu','$IDKategori','$Jumlah_Pesan','$Total_Harga');");

        header("location:transaksi.php");
    }
?>
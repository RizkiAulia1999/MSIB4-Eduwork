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
                    <h4>Tambah Menu</h4>
                </div>
                <div class="card-body">
                    <form action="create_menu.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" required="required" name="Nama_menu">
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
                                <label>Stok</label>
                                <input type="number" class="form-control" required="required" name="Stok">
                        </div>
                        <div class="form-group mt-2">
                                <label>Harga</label>
                                <input type="number" class="form-control" required="required" name="Harga">
                        </div>
                        <div class="form-group mt-2">
                                <label>Gambar</label>
                                <input type="file" class="form-control" required="required" name="Gambar"><br>
                        </div>
                        <div class="form-group mt-2">
                                <label>Deskripsi</label>
                                <textarea type ="text" class="form-control" rows="3"  required="required" name="deskripsi"></textarea>
                        </div><br>
                        <input type="submit"   class="rounded-pill btn btn-danger float-right" name="Submit" value="simpan"></input>           
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


<?php
    if (isset($_POST['Submit'])) {
        $Nama_menu  = $_POST['Nama_menu'];
        $IDKategori = $_POST['IDKategori'];
        $Stok    = $_POST['Stok'];
        $Harga    = $_POST['Harga'];
        $Gambar   = $_FILES['Gambar']['name'];
        $tmp_file = $_FILES['Gambar']['tmp_name'];
        $Deskripsi   = $_POST['deskripsi'];

        //menentukan lokasi file akan dipindahkan
        $upload     = "images/".$Gambar;

        //pindahkan file
        if (move_uploaded_file($tmp_file,$upload)) {
            $insert = mysqli_query($conn, "INSERT INTO `menu` (`Nama_menu`,`IDKategori`,`Stok`,`Harga`,`Gambar`,`deskripsi`) 
                                VALUES ('$Nama_menu','$IDKategori','$Stok','$Harga','$Gambar','$Deskripsi');");
          
            if ($insert) {//cek apakah berhasil simpan ke database
                //jika berhasil
                header("location:menu.php");
            } else {
               echo "MAAF , TERJADI KESALAHAN SAAT MENYIMPAN KE DATABASE";
            }  
        } else {
            //Jika gambar gagal upload
            echo "Maaf , Gambar Gagal di Upload";
        }
    }
?>
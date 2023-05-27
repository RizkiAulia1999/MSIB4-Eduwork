<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Tambah Kategori</title>
</head>
<body>
<?php
ob_start();
    include "connect.php";
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
                    <h4>Tambah Kategori</h4>
                </div>
                <div class="card-body">
                    <form action="create_kategori.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" class="form-control" required="required" name="Kategori">
                        </div>
                        <div class="form-group mt-2">
                                <label>Gambar</label>
                                <input type="file" class="form-control" required="required" name="Gambar"><br>
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
        $Kategori   = $_POST['Kategori'];
        $Gambar   = $_FILES['Gambar']['name'];
        $tmp_file = $_FILES['Gambar']['tmp_name'];
      
        //menentukan lokasi file akan dipindahkan
        $upload     = "images/".$Gambar;

        //pindahkan file
        if (move_uploaded_file($tmp_file,$upload)) {
            $insert = mysqli_query($conn, "INSERT INTO `kategori` (`Kategori`,`Gambar`) 
                                VALUES ('$Kategori','$Gambar');");
          
            if ($insert) {//cek apakah berhasil simpan ke database
                //jika berhasil
                header("location:kategori.php");
            } else {
               echo "MAAF , TERJADI KESALAHAN SAAT MENYIMPAN KE DATABASE";
            }  
        } else {
            //Jika gambar gagal upload
            echo "Maaf , Gambar Gagal di Upload";
        }
    }
?>
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
    $IDMenu     = $_GET['IDMenu'];
    $array_menu = mysqli_query($conn,"SELECT*FROM menu where IDMenu = '$IDMenu'");
    $array_kategori = mysqli_query($conn,"SELECT*FROM kategori");

    while ($menu_data = mysqli_fetch_array($array_menu)) {
        $Nama_menu   = $menu_data['Nama_menu'];
        $IDKategori  = $menu_data['IDKategori'];
        $Stok        = $menu_data['Stok'];
        $Harga       = $menu_data['Harga'];
        $Gambar      = $menu_data['Gambar'];
        $Deskripsi   = $menu_data['deskripsi'];
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
                    <form action="edit_menu.php?IDMenu=<?php echo $IDMenu; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" required="required" name="Nama_menu" value="<?php echo $Nama_menu; ?>">
                        </div>
                        <div class="form-group mt-2">
                            <label>Kategori</label>
                            <select name="IDKategori" class="form-control" value="<?php echo $IDKategori; ?>">
                                <?php
                                    while ($kategori = mysqli_fetch_array($array_kategori)) {
                                        echo"
                                            <option ".($kategori['IDKategori'] == $IDKategori ? 'selected' : '')." value=".$kategori['IDKategori'].">".$kategori['Kategori']."</option>
                                        ";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group mt-2">
                                <label>Stok</label>
                                <input type="number" class="form-control" required="required" name="Stok" value="<?php echo $Stok; ?>">
                        </div>
                        <div class="form-group mt-2">
                                <label>Harga</label>
                                <input type="number" class="form-control" required="required" name="Harga" value="<?php echo $Harga; ?>">
                        </div>
                        <div class="form-group mt-2">
                                <label>Gambar</label>
                                <input type="file" class="form-control" required="required" name="Gambar" value="<?php echo $Gambar; ?>"><br>
                        </div>
                        <div class="form-group mt-2">
                                <label>Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" rows="3" value="<?php echo $Deskripsi; ?>"></textarea>
                        </div><br>
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
        $Nama_menu  = $_POST['Nama_menu'];
        $IDKategori = $_POST['IDKategori'];
        $Stok       = $_POST['Stok'];
        $Harga      = $_POST['Harga'];
        $Gambar     = $_FILES['Gambar']['name'];
        $Deskripsi  = $_POST['deskripsi'];

        $update = mysqli_query($conn, "UPDATE menu SET Nama_menu   = '$Nama_menu',
                                                        IDKategori = '$IDKategori',
                                                        Stok       = '$Stok',
                                                        Harga      = '$Harga',
                                                        Gambar     = '$Gambar',
                                                        deskripsi  = '$Deskripsi' WHERE IDMenu = '$IDMenu';");
        header("location:menu.php");
    }
?>
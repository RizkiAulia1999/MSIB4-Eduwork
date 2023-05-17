<?php
    include("connect.php");
    $id_penerbit = $_GET['id_penerbit'];

    $penerbit = mysqli_query($conn, "SELECT * FROM penerbit WHERE id_penerbit = '$id_penerbit'");

    while ($value = mysqli_fetch_array($penerbit)) {
        $id_penerbit = $value['id_penerbit'];
        $nama_penerbit = $value['nama_penerbit'];
        $email = $value['email'];
        $telp = $value['telp'];
        $alamat = $value['alamat'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Edit PHP</title>
</head>
<body>
    <form action="proses_edit.php?id_penerbit=<?php echo $id_penerbit; ?>" method="post">
        <table class="table table-striped">
            <tr>
                <td colspan="4">
                    <h4 style="text-align: center;">EDIT PENERBIT</h1>
                </td>
            </tr>
            <tr>
                <td>Nama Penerbit</td>
                <td><input type="text" name="nama_penerbit" value="<?php echo $nama_penerbit ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email ?>"></td>
            </tr>
            <tr>
                <td>Telp</td>
                <td><input type="number" name="telp" value="<?php echo $telp ?>"></td>
             </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $alamat ?>"></td>
             </tr>
            <tr>
                <td></td>
                <td><input type="Submit" name="Submit" class="btn btn-primary"></td>           
             </tr>
        </table>
    </form>
</body>
</html>
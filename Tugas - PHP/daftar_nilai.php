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
<?php
    $json_string = file_get_contents('data.json');//mengambil data json
    $json = json_decode($json_string,true);//json => array asosiatif
?> 
<table class="table table-striped mt-5" style="width: 900px;" align="center">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Umur</th>
            <th>Nilai</th>
            <th>Hasil</th>
        </tr>  
        <?php 
        $no = 1; 
        foreach ($json as $value) { ?>  
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $value["nama"] ?></td>
                <td><?php echo $value["kelas"] ?></td>
                <td><?php echo $value["alamat"] ?></td>
                <td><?php echo $value["tanggal_lahir"] ?></td>
                <td><?php 
                    $lahir =new DateTime($value["tanggal_lahir"]);
                    $today = new DateTime();
                    $umur = $today->diff($lahir);
                    echo $umur->y;echo " Tahun";
                    ?>
                </td>
                <td><?php echo $value["nilai"] ?></td>
                <td>
                    <?php
                        switch ($value["nilai"]) {
                            case $value["nilai"] >= 90 && $value["nilai"] <= 100:
                                echo "A";
                                break;
                            case $value["nilai"] >= 80 && $value["nilai"] < 90:
                                echo "B";                                
                                break;
                            case $value["nilai"] >= 70 && $value["nilai"] < 80:
                                echo "C";                                
                                break;
                            case $value["nilai"] >= 0 && $value["nilai"] < 70:
                                echo "D";                                
                                break;
                            break;
                        }           
                    ?>
                </td>
            </tr>
        <?php  
        $no++;
        }?>      
   </table>
</body>
</html>


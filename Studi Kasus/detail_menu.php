<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>kanEuenak</title>
</head>
<body>
<?php
    include "crud/connect.php";
    $detail_menu = $_GET["detail"];
    $query_menu = mysqli_query($conn, "SELECT menu.*, kategori.Kategori FROM menu INNER JOIN kategori 
                                        ON menu.IDKategori = kategori.IDKategori WHERE IDMenu = '$detail_menu'");
?>

    <!-- Navbar -->
    <div class="navbar fixed-top bg-light">
        <div class="container">
            <a style="font-family:'Comic Sans MS'" class="navbar-brand text-dark" href="home.php"><b>kanUenak<b><span class="text-danger">.</span></a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link text-secondary" aria-current="page" href="home.php#menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="contact.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Detail Menu -->
    <div class="container" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
        <div class="container-fluid">
        <?php
            while ($detail = mysqli_fetch_array($query_menu)) {
                echo "
                     <div class='row my-5'>
                        <div class='col-lg-5'>
                            <img src='crud/images/".$detail['Gambar']."' width='400px' height='400px'>
                        </div>
                        <div class='col-lg-5' style='margin-top:120px;font-size:20px'>
                            <a href='home.php#menu' style='text-decoration:none;color:grey'>Menu</a>
                            > ".$detail['Kategori']."  
                            <br><br>    
                            <h3>".$detail['Nama_menu']."</h3>
                            <p style='color:dimgrey;font-size:16px'>
                                ".$detail['deskripsi']."
                            </p>
                            <h3>Rp.".$detail['Harga']."</h3>
                        </div>
                            <div class='col-lg-2' style='margin-top:80px'>
                                <div class='card px-3' style='width:200px;height:100px;padding-top:30px;margin-top:50px'>
                                <a href='https://api.whatsapp.com/send?phone=6285784739251' class='btn btn-success'>
                                    Order By Whatsapp
                                </a>
                            </div>
                        </div>
                     </div>
                ";
            }
        ?>
        </div>
    </div>

    <!-- Footer -->
        <div class="container-fluid bg-dark" style="height: 300px;">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-4">
                    <h5 class="text-light">
                        <img src="crud/images/location.png" style="width:25px;"alt="">&nbsp;&nbsp;Address
                    </h5>
                    <h6 style="color:grey;margin-left:35px;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                       Jl. RA Kartini SumberTempur <br>
                       Wonosari, Kab. Malang, Jawa Timur
                    </h6>
                </div>
                <div class="col-lg-3">
                    <h5 class="text-light">
                        <img src="crud/images/phone.png" style="width:25px;" alt="">&nbsp;&nbsp;Reservation
                    </h5>
                    <h6 style="color:grey;;margin-left:35px;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                       <b>Phone</b>: +62 886757657 <br>
                       <b>Email</b>: inpo@gmail.com
                    </h6>
                </div>
                <div class="col-lg-3">
                    <h5 class="text-light">
                        <img src="crud/images/clock.png" style="width:20px;" alt="">&nbsp;&nbsp;Opening Hours
                    </h5>
                    <h6 style="color:grey;;margin-left:35px;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                        <b>Mon - Sat</b>: 12PM - 23PM <br>
                        <b>Sunday   </b>: Closed
                    </h6>
                </div>
                <div class="col-lg-2">
                    <h5 class="text-light">Follow Us</h5>
                    <div class="social-links d-flex">
                        <a href="#">
                            <img src="crud/images/twt.png" width="30px">
                        </a>&nbsp;&nbsp;
                        <a href="#">
                            <img src="crud/images/ig.png" width="30px">
                        </a>&nbsp;&nbsp;
                        <a href="#">
                            <img src="crud/images/fb.png" width="30px">
                        </a>&nbsp;&nbsp;               
                        <a href="#">
                            <img src="crud/images/linkedin.png" width="30px">
                        </a>                    
                    </div>
                </div>   
            </div>
            <hr class="mt-4" style="color:#efebe9">
            <div class="ft-copyright text-center mt-5">
                <h6 style="color:grey;;margin-left:35px;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                    © Copyright <b>kanUenak</b><span class="text-danger">.</span><br>
                    All Rights Reserved
                </h6>
            </div>
        </div>
    </div>
</body>
</html>
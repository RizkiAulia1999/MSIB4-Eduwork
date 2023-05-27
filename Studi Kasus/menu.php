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
    $kategori_menu = $_GET["category"];
    $query_menu = mysqli_query($conn, "SELECT * FROM menu WHERE IDKategori = '$kategori_menu'");
    $query_kategori = mysqli_query($conn, "SELECT * FROM kategori");
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
    <br><br><br>

     <!-- Menu -->
    <div class="container text-center py-2 mb-5">
        <div class="row text-center">
            <h3 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Our Menu</h3>
        </div>
        <center>
            <hr class="mb-5" size="2" color=grey width="100px" height="2px">
        </center>
        <div class="row m-5">
            <?php
            while ($menu = mysqli_fetch_array($query_menu)) {
                    echo"              
                <div class='col-md-4'>  
                        <div class='col-md-8 offset-md-2'>
                            <a href='detail_menu.php?detail=".$menu['IDMenu']."' style='text-decoration:none;'>
                                <img src='crud/images/".$menu['Gambar']."' width='250' height='250'>
                                <h2 style='color:black;font-size:25px'>".$menu['Nama_menu']."</h2>
                                <h3 style='color:dimgray;font-size:20px'>Start From 10.000</h3>
                            </a>
                            <br><br>
                        </div>       
                    <br>    
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="http://example.com/favicon.ico" />

    <title>kanEuenak</title>
</head>
<body>

    <?php
        include "crud/connect.php";
        $query_kategori = mysqli_query($conn, "SELECT * FROM kategori");
    ?>

    <!-- Navbar -->
    <div class="navbar fixed-top bg-light"  style="height:70px;">
        <div class="container">
            <a style="font-family:'Comic Sans MS'" class="navbar-brand text-dark" href="home.php"><b>kanUenak<b><span class="text-danger">.</span></a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="home.php#menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="contact.php">Contact Us</a>
                </li> 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-secondary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Admin</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="crud/menu.php">Data Menu</a></li>
                        <li><a class="dropdown-item" href="crud/kategori.php">Data Kategori</a></li>
                        <li><a class="dropdown-item" href="crud/transaksi.php">Data Transaksi</a></li>
                        <li><a class="dropdown-item" href="crud/user.php">Data User</a></li>
                    </ul>
                </li>               
            </ul>
        </div>
    </div>

    <!-- About -->
    <div class="container" style="margin-top: 100px;">
        <div class="row text-center">
            <h3 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"><b>ABOUT US</b></h3>
            <h4 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;color:grey">Created with love and passion , kanEuenak is today's largest bakery & pastry shop chain in Indonesia</h4>
        </div>
        <img style="margin-left: 150px;" src="crud/images/about-cake.png" width="850px">
        <div class="row justify-content-start mt-5" style="border:10px">
            <div class="col-lg-6" style="margin-top: 90px;">
                <p style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;color:dimgray">
                    Established in 2004, kanUenak is the pioneer in European style pastry shop chain in Indonesia. 
                    With more than 91 stores and growing in both major and small cities of Indonesia, kanUenak steadily 
                    delivers promise of good quality and service to its stakeholders at large.
                </p>
                <p style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;color:dimgray;">
                    kanUenak delivers the steady promise of superior product quality, sensational product presentations with 
                    inventive packaging and exceptional service standards. kanUenak innovative approach drives the brand to 
                    continuously research and develop products, adding artful collaboration in each and every creation, 
                    making it a market leader in the business.
                </p>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <img class="rounded-5 float-start" style="width: 600px; height: 400px;" src="crud/images/toko1.jpg" alt="">
            </div>
        </div>
    </div>

    <br><br>

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

<!-- Footer -->
<!-- <script>
    $(document).ready(function(){
    $(".dropdown-toggle").dropdown();
    });
    </script> -->
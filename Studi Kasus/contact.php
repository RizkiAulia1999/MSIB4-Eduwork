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
        $query_user = mysqli_query($conn, "SELECT * FROM user");
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
    <br><br><br>

    <!-- Contact Us -->
    <div class="container mt-4">
        <div class="col-md-9 offset-md-2">
            <div class="row text-center mb-4">
                <h3 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:18px;color:grey">CONTACT</h3>
                <h2 style="font-family:'Comic Sans MS'">NEED HELP ? <span style="color:brown;">CONTACT US</span></h2>
            </div>
            <div class="mb-3">
                <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d493.94212418348434!2d112.61591113524486!3d-7.9433266018527355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788274e9c41b51%3A0xb66aa2d4fd7ab2e5!2sStudio%20Rupa%20Malang%20Store!5e0!3m2!1sid!2sid!4v1685096592149!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="contact.php" method="post" enctype="multipart/form-data">
                        <div class="row mb-4">
                            <div class="col-xl-6 form-group">
                                <input type="text" class="form-control" required="required" name="user" placeholder="Your Name">
                            </div>
                            <div class="col-xl-6 form-group">
                                <input type="text" class="form-control" required="required" name="email" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <input type="number" class="form-control" required="required" name="phone" placeholder="Mobile Phone">
                        </div>
                        <div class="form-group mt-2">
                            <textarea type ="text" class="form-control" rows="4"  name="message" required="required" placeholder="Message" ></textarea>
                        </div><br>
                            <center>
                                <input type="submit" class="rounded-pill btn text-light px-4 py-2" name="Submit" value="Send Message" style="background-color: brown;"></input>           
                            </center>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br><br>

    <!-- Footer -->
    <div class="container-fluid bg-dark mb-0" style="height: 300px;">
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

<?php
    if (isset($_POST['Submit'])) {
        $name_user  = $_POST['user'];
        $email = $_POST['email'];
        $phone    = $_POST['phone'];
        $message    = $_POST['message'];
        
        $insert = mysqli_query($conn, "INSERT INTO `user` (`user`,`email`,`phone`,`message`) 
        VALUES ('$name_user','$email','$phone','$message');");

    }
?>
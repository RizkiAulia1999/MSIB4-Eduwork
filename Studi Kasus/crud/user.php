<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <title>Tambah Menu</title>
</head>
<body>
    <?php
        include "connect.php";
        $query_user= mysqli_query($conn, "SELECT * FROM user
                                                ORDER BY IDUser ASC");
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
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="user.php">User</a>
                </li>              
            </ul>
        </div>
    </div>

    <!-- Main -->
    <div class="container" style="margin-top: 100px;">
        <div class="col-md-9 offset-md-2 mt-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Daftar User</h4>
                </div>
                <div class="card-body">
                    <table class="table mt-2" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>User</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               $no = 0; 
                               while ($user = mysqli_fetch_array($query_user)) {
                               $no++;
                                echo "
                                    <tr>
                                        <td>".$no."</td>
                                        <td class='text-center'>".$user['user']."</td>
                                        <td>".$user['email']."</td>
                                        <td>".$user['phone']."</td>
                                        <td>".$user['message']."</td>
                                    </tr>
                                 ";
                               } 
                            ?>
                        </tb>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="container-fluid bg-dark mt-5" style="height: 300px;">
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
                            <img src="images/twt.png" width="30px">
                        </a>&nbsp;&nbsp;
                        <a href="#">
                            <img src="images/ig.png" width="30px">
                        </a>&nbsp;&nbsp;
                        <a href="#">
                            <img src="images/fb.png" width="30px">
                        </a>&nbsp;&nbsp;               
                        <a href="#">
                            <img src="images/linkedin.png" width="30px">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
<?php
session_start();
require "function.php";
?>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bengkel Anwar</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel = "stylesheet" href="assets/css/alertify.min.css">
    </head>
    <body id = "page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php"><img src="your-logo.png" /></a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Akhir navbar -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Pesan Sekarang!</h1>
                                </div>
                                <form class="user" action="proses.php" method="POST">
                                    <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="nama"
                                                placeholder="Your Name" style="width: 400; max-width:100%;">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="no_hp"
                                            placeholder="No. Handphone / Whatsapp">
                                    </div>
                                        <div class="form-group">
                                            <textarea class="form-control form-control-user" name="alamat"
                                                placeholder="Alamat"></textarea>
                                        </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" name="email"
                                            placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="tipe"
                                            placeholder="Tipe dan Jenis Motor">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control form-control-user" name="jenis_services">
                                            <option>--- Jenis Services ---</option>
                                            <option>Service Ringan</option>
                                            <option>Service Sedang</option>
                                            <option>Service Berat</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal dan Waktu Pesan</label>
                                            <input type ="datetime-local" class="form-control form-control-user" 
                                            name="tanggal">
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary" name="button">
                                        Pesan</button>
                                    <button type="reset" class="btn btn-secondary" name="button">
                                        Refresh</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-1.12.4.js" 
        integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
        <script src ="assets/alertify.min.js"></script>
        <script>
        $(document).ready(function(){
            //KONDISI PENGECEKAN ALERTIFY AKAN DILAKUKAN DISINI
            <?php
            echo_validasi(); //<-----
            ?>
        });
        </script>
    </body>
</html>
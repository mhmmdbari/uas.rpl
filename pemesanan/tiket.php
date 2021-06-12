<?php
include 'koneksi.php';
session_start();
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

        <style>
        .container{ width: 96%; max-width:960px;
        margin:0 auto;}
        img {
            width: 100%;
            height: auto;
        }
        </style>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="card o-hidden shadow-lg border-0 my-5 mx-auto">
            <div class="card-body p-0">
            <div class="card-header shadow-lg">
                <div class="alert alert-success text-center">Pesanan sudah dikonfirmasi</div>
            </div>
                <div class="col-lg-12">
                    <div class="p-5">
                        
                        <?php 
                        $no_tiket = $_SESSION["kode"];
                        $jenis_services = $_SESSION["jenis"];
                        
                        ?><p>Nomor Tiket Anda</p>
                        <h1><?php echo $no_tiket ?></h1>
                        <p>Silahkan untuk membayar DP dari pemesanan tersebut sesuai dengan jenis service yang sudah anda pilih</p>
                        <img src ="assets/img/shareqr.png" width="400" height="600">
                        <div class="text-center">
                        <p>Jenis Services Anda = <?php echo $jenis_services ?> <br>
                        Jumlah yang harus dibayar 
                        <?php                         
                                if($jenis_services == "Service Berat"){
                                    $harga = "Rp. 50.000,00";
                                }else if($jenis_services == "Service Sedang"){
                                    $harga = "Rp. 25.000,00";
                                }else{
                                    $harga = "Rp. 10.000,00";
                                } 
                        echo $harga ?></p>
                        </div>
                        <p>BNI : <b>0843418893</b> a.n. Muhammad Bari Abdul Majid</p>
                        <p>Atau anda bisa mentransfer dengan cara isi saldo dana ke nomor <b>089665753975</b></p>
                        <p>Silahkan kirimkan bukti pembayaran DP anda ke nomor Whatsapp berikut :<br>
                        <b>+62 896-2520-3696</b> : Muhammad Rafi Nahjan</p>
                        <div class="text-center">
                        <a type ="btn btn-success" href="index.php">Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

        <style type="text/css">
        p,h1{
        white-space:pre;
        font-family:'Courier New', Courier, monospace;
        }
        .user{width:100%;
        height:auto;}

      </style>
    </head>
<body>
<div class="container">
	<?php
	include 'koneksi.php';
	$query = mysqli_query($koneksi, "SELECT max(no_tiket) as kodeTerbesar FROM pending_services");
	$data = mysqli_fetch_array($query);
	$kodeTiket = $data['kodeTerbesar'];
	$urutan = (int) substr($kodeTiket, 3, 3);
	$urutan++;
	$huruf = "BKL";
	$kodeTiket = $huruf . sprintf("%03s", $urutan);
	?>
            <div class="row justify-content-center">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                <h1><legend>    Konfirmasi Pesanan  </legend></h1>  
                                </div>  
                                <form action="prosestambahpesan.php" class="user" method="POST">
                                <?php 
                                $nama_pelanggan = $_SESSION["nama"];
                                $no_hp = $_SESSION["no_hp"];
                                $alamat = $_SESSION["alamat"];
                                $email_pelanggan = $_SESSION["email"];
                                $tipe = $_SESSION["tipe"];
                                $jenis_services = $_SESSION["jenis_services"];
                                $tanggal = $_SESSION["tanggal"];?>
                                <p>Nomor Tiket    : <input type="text" name="kode" style="max-width:100%; width:100px;" required="required" value="<?php echo$kodeTiket?>" readonly></p>
                                <?php
                                echo "<p>Nama           : ".$nama_pelanggan."</p>";
                                echo "<p>No. Handphone  : ".$no_hp."</p>";
                                echo "<p>Alamat         : ".$alamat."</p>";
                                echo "<p>Email          : ".$email_pelanggan."</p>";
                                echo "<p>Tipe           : ".$tipe."</p>";
                                echo "<p>Jenis Services : ".$jenis_services."</p>";
                                if($jenis_services == "Service Berat"){
                                    $harga = "Rp. 50.000,00";
                                }else if($jenis_services == "Service Sedang"){
                                    $harga = "Rp. 25.000,00";
                                }else{
                                    $harga = "Rp. 10.000,00";
                                } 
                                echo "<p>Harga bayar DP : ".$harga."</p>";
                                echo "<p>Tanggal        : ".$tanggal."</p>";
                                ?>
                                <button type="submit" class="btn btn-warning btn-user btn-block" name="button">
                                Konfirmasi</button>
                                <a class="btn btn-secondary btn-user btn-block" href="pesan.php">Back</a>
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
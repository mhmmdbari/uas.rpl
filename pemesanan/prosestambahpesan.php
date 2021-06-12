<?php
session_start();
include 'koneksi.php';
$nama = $_SESSION["nama"];
$no_hp = $_SESSION["no_hp"];
$alamat = $_SESSION["alamat"];
$email = $_SESSION["email"];
$tipe = $_SESSION["tipe"];
$jenis_services = $_SESSION["jenis_services"];
$tanggal = $_SESSION["tanggal"];
$no_tiket = $_POST["kode"];
$_SESSION["kode"] = $_POST["kode"];
$_SESSION["jenis"] = $jenis_services;

$query=mysqli_query($koneksi,"INSERT INTO `pending_services` 
VALUES ('$no_tiket','$nama','$no_hp','$alamat','$email','$jenis_services','$tipe','$tanggal','0')")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: tiket.php");
}else{
    echo "Gagal";
}

?>
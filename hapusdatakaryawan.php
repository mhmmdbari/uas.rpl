<?php
include 'koneksi.php';
$kd_karyawan=$_GET['kd_karyawan'];

$query=mysqli_query($koneksi,"DELETE FROM data_diri WHERE kd_karyawan='$kd_karyawan' ")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: databasekaryawan.php");
}else{
    echo "Gagal";
}
?>
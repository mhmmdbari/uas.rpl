<?php 
include 'koneksi.php';
$kd_karyawan_lama = $_GET['kd_karyawan'];
$kd_karyawan = $_POST['kd_karyawan'];
$nama = $_POST['nama'];
$bagian = $_POST['bagian'];
$ttl_karyawan = $_POST['ttl_karyawan'];
$umur = $_POST['umur'];

$query=(mysqli_query($koneksi,"UPDATE data_diri SET kd_karyawan='$kd_karyawan',nama_karyawan='$nama',bagian='$bagian',
ttl_karyawan='$ttl_karyawan',umur='$umur' WHERE kd_karyawan='$kd_karyawan_lama'")) or die(mysqli_query($koneksi));

if($query){
    header("Location: databasekaryawan.php");
}else{
    echo "Gagal";
}
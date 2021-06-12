<?php
include 'koneksi.php';

$kd_karyawan = $_POST['kd_karyawan'];
$nama = $_POST['nama'];
$bagian = $_POST['bagian'];
$alamat = $_POST['alamat'];
$ttl_karyawan = $_POST['ttl_karyawan'];
$umur = $_POST['umur'];

$query = mysqli_query($koneksi,"INSERT INTO data_diri VALUES('$kd_karyawan','$nama','$bagian','$alamat','$ttl_karyawan','$umur')")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: databasekaryawan.php");
}else{
    echo "Gagal";
}
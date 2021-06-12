<?php
session_start();
include 'koneksi.php';

$nama = $_SESSION["nama"];
$email = $_SESSION["email"];
$cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM absen WHERE nama='$nama' or email='$email'"));
    
if ($cek > 0){
    echo "<script>window.alert('Anda sudah melakukan absen')
    window.location='absen.php'</script>";
}else{
    $query=mysqli_query($koneksi,"INSERT INTO `absen` VALUES ('$nama','$email',NOW(),NOW())")
    or die(mysqli_error($koneksi));
    $query2=mysqli_query($koneksi,"INSERT INTO `gaji` VALUES ('$nama',NOW(),NOW())")
    or die(mysqli_error($koneksi));
    echo "<script>window.alert('Data Tersimpan') 
    window.location='absen.php'</script>";
}
?>
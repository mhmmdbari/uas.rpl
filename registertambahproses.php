<?php
include 'koneksi.php';
session_start();

$username=$_POST['username'];
$password=$_POST['password'];
$nama=$_POST['nama'];
$email=$_POST['email'];

$query=mysqli_query($koneksi,"INSERT INTO `user` (`username`, `password`, `nama`, `email`) 
VALUES ('$username','$password','$nama','$email')") 
or die(mysqli_error($koneksi));

if ($query){
    $_SESSION["alert"] = "Berhasil melakukan registrasi";
    header ("Location: register.php");
}else{
    echo "Gagal";
}

?>
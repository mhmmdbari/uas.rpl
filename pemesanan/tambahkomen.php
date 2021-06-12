<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$query = "INSERT INTO `komen` (`nama`,`email`,`no_telp`,`isi`) VALUES('$nama','$email','$phone','$message')";
 mysqli_query($koneksi,$query);

if ($query){
    header("Location: index.php");
}else{
    echo "Gagal";
}
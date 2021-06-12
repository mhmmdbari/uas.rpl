<?php 
include 'koneksi1.php';

$pelanggan = $_POST['pelanggan'];

$query = mysqli_query($koneksi,"INSERT INTO jumlah_pelanggan VALUES(NOW(),'$pelanggan')")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: index.php");
}else{
    echo "Gagal";
}
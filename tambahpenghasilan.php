<?php 
include 'koneksi.php';

$penghasilan = $_POST['penghasilan'];

$query = mysqli_query($koneksi,"INSERT INTO penghasilanharian VALUES(NOW(),'$penghasilan')")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: penghasilan.php");
}else{
    echo "Gagal";
}
<?php
include 'koneksi1.php';
$no_tiket_lama = $_GET["no_tiket"];
 
$query = (mysqli_query($koneksi,"UPDATE pending_services SET status_pembayaran='1' WHERE no_tiket = '$no_tiket_lama'"))
or die(mysqli_error($koneksi));

if($query){
    header("Location: pendingpelanggan.php");
}else{
    echo "Gagal";
}
?>
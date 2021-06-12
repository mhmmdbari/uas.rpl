<?php 
require "function.php";
session_start();
$_SESSION["nama"] = $_POST['nama'];
$_SESSION["no_hp"] = $_POST['no_hp'];
$_SESSION["alamat"] = $_POST['alamat'];
$_SESSION["email"] = $_POST['email'];
$_SESSION["tipe"] = $_POST['tipe'];
$_SESSION["jenis_services"] = $_POST['jenis_services'];
$_SESSION["tanggal"] = $_POST['tanggal'];

if(isset($_POST)){
	$name = $_POST['nama'];
	$email = $_POST['email'];
	$telp = $_POST['no_hp'];
	$alamat = $_POST['alamat'];
	$tipe = $_POST['tipe'];
	$jenis = $_POST['jenis_services'];
	$tanggal = $_POST['tanggal'];

	if(empty($name) or empty($email) or empty($telp) or empty($alamat) or empty($tipe) or empty($jenis) or empty($tanggal)){
		create_validasi(
			"Form Tidak Lengkap",
			"Kelihatannya belum semua kolom diisi dengan benar, silakan dicek lagi..",
			"pesan.php");
	}
	else{
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			create_validasi(
				"Invalid Email",
				"Email yang anda masukkan tidak valid, silakan dicek lagi..",
				"pesan.php"
			);
		}
		else{
			//ceritanya ada perintah penyimpanan disini
			//setelah selesai, dibuat alert success
			create_validasi(
				"Success!!!",
				"Silahkan konfirmasi pesanan anda",
				"tambahpesan.php"
			);
		}
	}

}
?>

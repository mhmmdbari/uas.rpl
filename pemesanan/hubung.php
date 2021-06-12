<?php
if(empty($_SESSION["nama"])){
    $_SESSION["alert"] = "Silahkan isi kolom yang kosong";
    header("Location:pesan.php");
}
?>
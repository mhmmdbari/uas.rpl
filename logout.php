<?php
session_start();
unset($_SESSION["username"]);
    $_SESSION["alert"] = "Anda berhasil log out";
    header("Location:login.php");
?>
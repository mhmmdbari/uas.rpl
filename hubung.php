<?php
if(empty($_SESSION["username"])){
    $_SESSION["alert"] = "Silahkan login terlebih dahulu";
    header("Location:login.php");
}
?>
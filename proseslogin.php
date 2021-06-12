<?php
session_start();
$koneksi = mysqli_connect("localhost","root","","karyawan");
$username = $_POST["username"];
$password = $_POST["password"];
$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'")
or die(mysqli_error($koneksi));
$user = mysqli_fetch_array($query);

if(
    md5($username) == md5($user["username"])
    AND
    md5($password) == md5($user["password"])
){
    $_SESSION["username"] = $user["username"];
    $_SESSION["password"] = $user["password"];
    $_SESSION["nama"] = $user["nama"];
    $_SESSION["email"] =$user["email"];
    $nama = $_SESSION["nama"];
    $_SESSION["alert"] = "Anda berhasil login, selamat datang $nama";
    header("Location: index.php");
}else{
    $_SESSION["alert"] = "Username atau password anda salah";
    header("Location: login.php");
}

?>
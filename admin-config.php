<?php
// Mulai session
session_start();

// Cek apakah pengguna sudah login, jika sudah redirect ke halaman utama
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}

$serverlocation = "/superadmin.php";
$username = "sysadmin";
$md5_password = "c62d929e7b7e7b6165923a5dfc60cb56";

// Buat koneksi
$link = mysqli_connect($servername, $username_db, $password_db, $dbname);

// Periksa koneksi
if($link === false){
    die("ERROR: Tidak dapat terhubung ke database. " . mysqli_connect_error());
}

<?php
// Menutup koneksi database
mysqli_close($link);
?>


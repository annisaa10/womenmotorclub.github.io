<?php
include 'koneksi.php';

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($koneksi, "SELECT * FROM admin WHERE username ='$username' AND password = '$password' ");
$data = mysqli_fetch_array($sql);

if (!empty($data)) {
    $_SESSION['username']           = $data['username'];

    echo "<script> alert('Berhasil Login Admin!'); </script>";
    echo "<script> window.location='admin.php' </script>";
} else {
    echo "<script> alert('Username dan Password salah!'); </script>";
    echo "<script> window.location='login.php' </script>";
}

<?php
session_start();
$query = new mysqli('localhost', 'root', '', 'nailartis');

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($query, "SELECT * from customer where Nama_lengkap='$username' and password='$password'")
    or die(mysqli_error($query));

$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header("location:home2.php");
} else {
    header("location:login.php?pesan=gagal");
}
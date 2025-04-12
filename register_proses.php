<?php
session_start();
$query = new mysqli('localhost', 'root', '', 'nailartis');

$email           = "";
$username        = "";
$password        = "";
$confirmpass     = "";
$error           = "";

$username   = $_POST['username'];
$email      = $_POST['email'];
$password   = $_POST['password'];
$confirmpass = $_POST['confirmpass'];


if ($password != $confirmpass) {
    header("location: register.php?pesan=salah_confirm");
} else {

    $data = mysqli_query($query, "SELECT * FROM customer WHERE password='$password'")
        or die(mysqli_error($query));
    $cek = mysqli_num_rows($data);

    if ($cek > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header("location: register.php?pesan=salah_pass");
    } else {
        $input = "INSERT INTO customer(Nama_lengkap, Email, Password) VALUES('$username', '$email', '$password')";
        if (mysqli_query($query, $input)) {
            header("location: login.php?pesan=sukses");
        } else {
            header("location: register.php?pesan=gagal");
        }
    }
}

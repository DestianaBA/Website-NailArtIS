<?php
session_start();
if (empty($_SESSION['username'])) {
    header("location:login.php?pesan=belum_login");
}

$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "nailartis";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek apakah sudah terhubung ke database
    die("Gagal terkoneksi ke database!!!");
}

$nama          = "";
$number        = "";
$servis        = "";
$tanggal       = "";
$sukses        = "";
$error         = "";

if (isset($_GET['op'])) { //untuk edit data
    $op  = $_GET['op'];
} else {
    $op = "";
}

if ($op == 'edit') {
    $id       = $_GET['id']; // Correct variable name
    $sql1           = "SELECT * FROM appointment WHERE id = '$id'";
    $q1             = mysqli_query($koneksi, $sql1);
    $r1             = mysqli_fetch_array($q1);
    $nama               = $r1['nama'];
    $number             = $r1['noHP'];
    $servis             = $r1['service'];
    $tanggal             = $r1['tanggal'];

    if ($nama == '') {
        $error = "Data tidak ditemukan";
    }
}

if (isset($_POST['simpan'])) { //untuk create data
    $nama       = $_POST['nama'];
    $number     = $_POST['number'];
    $servis     = $_POST['servis'];
    $tanggal    = $_POST['tanggal'];

    // Cek apakah tanggal sudah digunakan
    $sql_check  = "SELECT * FROM appointment WHERE tanggal = '$tanggal'";
    $q_check    = mysqli_query($koneksi, $sql_check);

    if (mysqli_num_rows($q_check) > 0) {
        $error = "Tanggal sudah digunakan. Silakan pilih tanggal lain.";
    } else {
        if ($nama && $tanggal && $servis && $number) {
            if ($op == 'edit') { //untuk update
                $sql1 = "UPDATE appointment SET nama='$nama', noHP='$number', tanggal='$tanggal', service='$servis' WHERE id='$id' ";
                $q1   = mysqli_query($koneksi, $sql1);
                if ($q1) {
                    $sukses = "Data Berhasil Diupdate";
                    echo "<script>window.location.href = 'tampil.php';</script>";
                    exit;
                } else {
                    $error  = "Gagal Memperbarui Data";
                }
            } else { //untuk insert
                $sql1 = "INSERT INTO appointment (nama, tanggal, service, noHP) VALUES ('$nama', '$tanggal', '$servis', '$number')";
                $q1   = mysqli_query($koneksi, $sql1);

                if ($q1) {
                    $sukses = "Berhasil Memasukkan Data Baru";
                    echo "<script>window.location.href = 'tampil.php';</script>";
                    exit;
                } else {
                    $error  = "Gagal Memasukkan Data";
                }
            }  
        } else {
            $error = "Silakan Isikan Semua Data";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make a Appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body {
        height: 80vh;
        background-image: url("1.png");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        position: relative;
        display: flex;
        justify-content: center;

    }

    body::after {
        content: " ";
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.8);
    }

    .popup {
        z-index: 1;
        position: absolute;
        top: 50%;
        left: 50%;
        opacity: 0;
        transform: translate(-50%, -50%) scale(1.25);
        width: 500px;
        padding: 20px 30px;
        margin-top: 70px;
        background: white;
        box-shadow: 2px 2px 5px 5px rgba(0, 0, 0, 0.15);
        transition: top 0ms ease-in-out 200ms,
            opacity 200ms ease-in-out 0ms,
            transform 200ms ease-in-out 0ms;
    }

    .popup.active {
        top: 50%;
        opacity: 1;
        transform: translate(-50%, -50%) scale(1);
        transition: top 0ms ease-in-out 0ms,
            opacity 200ms ease-in-out 0ms,
            transform 200ms ease-in-out 0ms;
    }

    .popup .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        width: 20px;
        height: 20px;
        background: white;
        color: black;
        text-align: center;
        line-height: 15px;
        border: 1px solid black;
        border-radius: 15px;
        cursor: pointer;
    }

    .popup .form-container h3 {
        text-align: center;
        color: black;
        margin: 10px 0px 20px;
        font-size: 25px;
    }

    .login-container {
        display: none;
    }
</style>

<body>
    
    <div class="popup active" id="popup">
        <div class="close-btn" onclick="closePopup()">&times;</div>
        <div class="form-container">
            <form method="POST" action=" ">
                <h3>APPOINTMENT</h3>
                <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $error ?>
                    </div>
                <?php
                    header("refresh:3;url=promise.php");
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?= $sukses ?>
                    </div>
                <?php
                    header("refresh:3;url=tampil.php");
                }
                ?>
                <div class="mb-3">
                    <label for="nama" class="form-label"><b>Nama</b></label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama ?>" required placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="number" class="form-label"><b>No. HP</b></label>
                    <input type="text" class="form-control" id="number" name="number" value="<?= $number ?>"required placeholder="Enter your number">
                </div>
                <div class="mb-3">
                    <label for="servis" class="form-label"><b>Service </b></label>
                    <select class="form-select" name="servis" aria-label="Default select example">
                        <option value="Menicure" <?= ($servis == "Manicure") ? "selected" : "" ?> selected>Menicure</option>
                        <option value="Nails Art" <?= ($servis == "Nails Art") ? "selected" : "" ?>>Nails Art</option>
                        <option value="Manicure + Nails Art" <?= ($servis == "Manicure + Nails Art") ? "selected" : "" ?>>Manicure + Nails Art</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="col-sm-2 col-form-label"><b>Tanggal</b></label>
                    <input type="date" id="tanggal" name="tanggal" value="<?= $tanggal ?>" min="2024-05-20" class="form-control">
                </div>
        
                <div class="mb-3 text-center">
                    <input type="submit" name="simpan" value="BUAT APPOINTMENT" class="btn btn-primary" /><a href="tampil.php"></a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function closePopup() {
            window.location.href = 'home2.php'; // Redirects to the login page
        }
    </script>
    </script>
</body>

</html>
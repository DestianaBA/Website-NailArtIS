<?php
session_start();
if (empty($_SESSION['username'])) {
    header("location:login.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>SERVICES PAGE</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        .navbar {
            background-color: black;
            /* Set background color to black */
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            padding-top: 0;
            margin-top: 0;
            margin-left: 40%;
        }

        .navbar-brand img {
            height: 100px;
            /* Adjust height as needed */
        }

        .vl {
            border-left: 3px solid goldenrod;
            height: 90px;
            margin: 0 10px;
            /* Adjust margins to position the line */
        }

        .brand-text {
            display: flex;
            flex-direction: column;
        }

        .brand-text p {
            margin: 0;
            color: rgb(214, 52, 132);
        }

        .nav-tabs {
            background-color: rgb(214, 52, 132);
            padding: 5px 3px;
        }

        .navbar-pilihan {
            gap: 0.5em;
            text-decoration: none;
        }

        .navbar-pilihan li {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-right: 2em;
            border-radius: 0.5em;
        }

        .navbar-pilihan li a {

            text-decoration: none;
            margin-left: 2em;
            color: #fff;
            bottom: -10px;
            transition: 0.3s;
        }

        .navbar-pilihan li:hover {
            background-color: #821a4e;
            transition: background-color 1s ease;
        }

        .offcanvas {
            background-color: rgb(214, 52, 132);
        }


        .button {
            display: block;
            width: 100%;
            padding: 10px 15px;
            background-color: blue;
            border: none;
            color: white;
            cursor: pointer;
            text-align: center;
            border-radius: 5px;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .container form p {
            margin-top: 20px;
            margin-bottom: 0;
            color: gold;
            text-align: center;
        }

        .container form p a {
            color: yellow;
            text-decoration: none;
        }

        .container form text {
            color: white;
        }

        .custom-carousel {
            width: 80%;
            margin: 0 auto;
            margin-top: 2em;
        }

        .heading h1 {
            color: #D63484;
            font-size: 55px;
            text-align: center;
            margin-top: 35px;
        }

        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        .body {
            width: 100px;
            background-color: #809faa;
        }

        .title h1 {
            text-align: center;
            padding-top: 20px;
            font-size: 42px;
        }

        .title h1::after {
            content: "";
            height: 4px;
            width: 230px;
            background-color: #000;
            display: block;
            margin: auto;
        }

        .service {
            width: 85%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 75px auto;
            text-align: center;
        }

        .card {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: column;
            margin: 0px 20px;
            padding: 20px 20px;
            background-color: #efefef;
            border-radius: 10px;
            cursor: pointer;
        }

        .card:hover {
            background-color: #cac8c8;
            transition: background-color 1s ease;
        }

        .card .icon {
            font-size: 35px;
            margin-bottom: 10px;
        }

        .card h2 {
            font-size: 28px;
            color: #D63484;
            margin-bottom: 20px;
        }

        .card p {
            font-size: 17px;
            margin-bottom: 30px;
            line-height: 1.5;
            color: #5e5e5e;
        }

        .tombol {
            text-decoration: none;
            border: none;
            height: 2.5em;
            width: 15em;
            border-radius: 0.5em;
            background-color: #D63484;
            color: #fff;
            margin-top: 1em;
            transition: all 0.4s ease-in-out;
        }

        .tombol:hover {
            transform: rotate(4deg);

        }

        footer {
            background-color: black;
            color: white;

        }

        .sosmed {
            display: flex;
            justify-content: center;
            color: black;
        }

        .sosmed a {
            text-decoration: none;
            padding: 5px;
            background-color: palevioletred;
            margin-top: 100px;
            margin: 10px;
            border-radius: 50%;

        }

        .sosmed a i {
            font-size: 2em sans-serif;
            color: black;
            opacity: 0.9;
        }

        .sosmed a:hover {
            background-color: white;
            transition: 0.5;
        }

        footer .navbar-brand img {
            height: 200px;
            /* Adjust height as needed */
        }

        footer .brand-text {
            display: flex;
            flex-direction: column;
            font-size: 50px;
            font-family: sans-serif;
        }

        footer.brand-text p {
            margin: 0;
            color: rgb(214, 52, 132);
        }

        footer table {
            text-align: left;
        }

        .text-justify {
            text-align: justify;
        }

        /* Ulasasn */
        .uls {
            display: flex;
            justify-content: center;

        }

        .ulas {
            height: 16em;
            width: 30em;
            background-color: rgba(250, 235, 215, 0.6);
            border-radius: 0.5em;
            border: 1px solid #D63484;
            margin-top: 2em;
        }

        .offcanvas-body.bg {
            background-color: rgb(214, 52, 132);
        }

        .offcanvas-header {
            background-color: rgb(214, 52, 132);
        }

        .navbar-toggler :hover {
            background-color: #821a4e;
            transition: background-color 1s ease;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <nav class="navbar navbar">
        <div class="container-fluid">
            <ul class="nav  d-flex align-items-center navbar-pilihan" style="height: 5em;">
                <li> <a class="navbar-brand">
                        <img src="logo-bgoff.png" alt="Logo" height="1px" class="d-inline-block align-text-top">
                    </a></li>
                <li>
                    <a aria-current="home" href="home2.php">Home</a>
                </li>
                <li>
                    <a href="kami.php">About us</a>
                </li>
                <li>
                    <a href="service.php">Services</a>
                </li>
                <li>
                    <a href="inspirasi.php">Inspiration Art</a>
                </li>
            </ul>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <img src="user.png" width="50px">
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Welcome, <?= $_SESSION['username'] ?></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body bg">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="data.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <b>My Appointment</b>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-tertiary">
                                <li><a class="dropdown-item" href="promise.php">Add </a></li>
                                <li><a class="dropdown-item" href="tampil.php">Check</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php"><b>Logout</b></a>
                        </li>
                </div>
            </div>
        </div>
    </nav>
    <div id="carouselExampleAutoplaying" class="carousel slide custom-carousel" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/bg1.jpg" style="height: 25em;" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/bg2.jpg" style="height: 25em;" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/bg3.jpg" style="height: 25em;" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <div class="section">
        <center>
            <a href=""><button class="tombol" style="border-radius: 1.5em; height: 4em; width: 50em; margin-top: 4em;">
                    <h2>Our Service</h2>
                </button></a>
        </center>
        <div class="service">
            <div class="card shadow" style="height: 30em;">
                <div class="icon">
                    <i class="fas fa-calendar"></i>
                </div>
                <h2>Manicure</h2>
                <p> Layanan manicure kami adalah perawatan kecantikan untuk tangan dan kuku yang melibatkan beberapa langkah. proses ini dimulai dari pembersihan tangan dan kuku. Selanjutnya kuku dipotong dan dibentuk sesuai keinginan Anda. Tangan kemudian dipijat dengan lotion untuk melembutkan kulit. Manicure tidak hanya mempercantik kuku tetapi juga menjaga kesehatan kuku dan kulit tangan</p>
            </div>
            <div class="card shadow" style="height: 30em;">
                <div class="icon">
                    <i class="fas fa-wrench"></i>
                </div>
                <h2>Nails Art</h2>
                <p> Layanan nail art kami mencakup beragam pilihan, mulai dari desain sederhana dan elegan hingga desain yang lebih rumit dan artistik. Kami menyediakan berbagai opsi dekorasi seperti stiker, glitter, rhinestones, serta teknik lukis tangan dan stamping. Anda juga dapat memilih dari koleksi warna cat kuku yang luas, baik warna klasik maupun warna-warna terbaru yang sedang tren.</p>

            </div>
            <div class="card shadow" style="height: 30em;">
                <div class="icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h2>Manicure & Nails Art</h2>
                <p> Jika Anda menginginkan keduanya, maka layanan paket manicure dan nail art kami ini sangat cocok untuk Anda. Layanan paket ini tidak hanya memperindah kuku Anda, tetapi juga memastikan kesehatan dan kebersihan yang optimal. Dengan menggunakan alat-alat steril dan produk berkualitas, kami berkomitmen untuk memberikan pengalaman yang aman dan memuaskan bagi setiap pelanggan.</p>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- Ulasan -->
    <center>
        <a href=""><button class="tombol" style="border-radius: 1.5em; height: 4em; width: 50em; margin-top: 5em;">
                <h2>Review From Artiser</h2>
            </button></a>
    </center>
    <div class="container-fluid" style="margin-top: 3em;">
        <div class="row">
            <div class="col-4 uls">
                <div class="ulas">
                    <div class="person p-3">
                        <img src="img/anisa.png" alt="" style="width: 3em;">
                    </div>
                    <div class="txt p-3">
                        Layanan nail art di Nail Art Is benar-benar juaraa! Desainnya sangat kreatif dan hasil akhirnya selalu mengesankan
                    </div>
                    <div class="star d-flex mb-2" style="margin-left: 1em;">
                        <img src="img/star.png" alt="" style="width: 2em;">
                        <img src="img/star.png" alt="" style="width: 2em;">
                        <img src="img/star.png" alt="" style="width: 2em;">
                        <img src="img/star.png" alt="" style="width: 2em;">
                        <img src="img/star.png" alt="" style="width: 2em;">
                    </div>
                </div>
            </div>
            <div class="col-4 uls">
                <div class="ulas">
                    <div class="person p-3">
                        <img src="img/anisa.png" alt="" style="width: 3em;">
                    </div>
                    <div class="txt p-3">
                        Saya sangat puas dengan kebersihan dan profesionalisme di store inii. Kuku saya terlihat cantik dan sehat setiap kali berkunjung
                    </div>
                    <div class="star d-flex mb-2" style="margin-left: 1em;">
                        <img src="img/star.png" alt="" style="width: 2em;">
                        <img src="img/star.png" alt="" style="width: 2em;">
                        <img src="img/star.png" alt="" style="width: 2em;">
                        <img src="img/star.png" alt="" style="width: 2em;">
                    </div>
                </div>
            </div>
            <div class="col-4 uls">
                <div class="ulas">
                    <div class="person p-3">
                        <img src="img/anisa.png" alt="" style="width: 3em;">
                    </div>
                    <div class="txt p-3">
                        Tim disini sangat berbakat dan ramah. Mereka selalu mendengarkan keinginan saya dan memberikan saran yang tepat untuk desain nail art.
                    </div>
                    <div class="star d-flex mb-2" style="margin-left: 1em;">
                        <img src="img/star.png" alt="" style="width: 2em;">
                        <img src="img/star.png" alt="" style="width: 2em;">
                        <img src="img/star.png" alt="" style="width: 2em;">
                        <img src="img/star.png" alt="" style="width: 2em;">
                        <img src="img/star.png" alt="" style="width: 2em;">
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-left: 200px;">
            <div class="col-5 uls">
                <div class="ulas">
                    <div class="person p-3">
                        <img src="img/anisa.png" alt="" style="width: 3em;">
                    </div>
                    <div class="txt p-3">
                        Saya suka bagaimana Nail Art Is selalu mengikuti tren terbaru dalam nail art. Pilihan warna dan dekorasinya sangat beragam!
                    </div>
                    <div class="star d-flex mb-2" style="margin-left: 1em;">
                        <img src="img/star.png" alt="" style="width: 2em;">
                        <img src="img/star.png" alt="" style="width: 2em;">
                        <img src="img/star.png" alt="" style="width: 2em;">
                        <img src="img/star.png" alt="" style="width: 2em;">
                    </div>
                </div>
            </div>
            <div class="col-5 uls">
                <div class="ulas">
                    <div class="person p-3">
                        <img src="img/anisa.png" alt="" style="width: 3em;">
                    </div>
                    <div class="txt p-3">
                        Pengalaman manicure dan nail art di Nail Art Is selalu menenangkan dan memuaskan. Hasilnya selalu melebihi ekspektasi saya
                    </div>
                    <div class="star d-flex mb-2" style="margin-left: 1em;">
                        <img src="img/star.png" alt="" style="width: 2em;">
                        <img src="img/star.png" alt="" style="width: 2em;">
                        <img src="img/star.png" alt="" style="width: 2em;">
                        <img src="img/star.png" alt="" style="width: 2em;">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <footer class="bg-body-black text-center text-lg-center" style="margin-top: 5em;">
        <!-- Grid container -->
        <div class="container-fluid p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="home.php">
                            <img src="logo-bgoff.png" alt="Logo" class="d-inline-block align-text-top">

                        </a>
                        <div class="brand-text">
                            <p>NailsArtIS</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contact Us :</h5>
                    <div class="sosmed">
                        <a href="https://www.instagram.com/destyninth_?igsh=MWp4b3c3dHNhMmJ1bQ=="><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://wa.me/6281270707067"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="https://www.tiktok.com/@karmalogy/video/7372133019739524357?_t=8mcH8OZoEBF&_r=1"><i class="fa-brands fa-tiktok"></i></a>
                    </div>
                    <p>&copy; 2024 NailArtIS</p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">About Us :</h5>
                    <p class="text-justify">
                        Nails Art Is – tempat di mana kreativitas bertemu dengan kesempurnaan. Di Nails Art Is, kami percaya bahwa kuku bukan hanya pernyataan kecantikan, tetapi juga kanvas untuk mengekspresikan individualitas dan gaya. Misi kami adalah menyediakan layanan nail art berkualitas tinggi yang menggabungkan seni, presisi, dan perawatan untuk menciptakan desain menakjubkan yang disukai oleh pelanggan kami.
                    </p>
                    <table>
                        <tr>
                            <td>Alamat</td>
                            <td>: Babarsari, Depok, Kab. Sleman, D.I. Yogyakarta</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>: NailsArtIS@gmail.com</td>
                        </tr>
                        <tr>
                            <td>No. Hp</td>
                            <td> : +6281270707067</td>
                        </tr>
                        <tr>
                            <td>Instagram</td>
                            <td>: @NailsArtIS</td>
                        </tr>
                        <tr>
                            <td>Tiktok</td>
                            <td>: @NailsArtIS</td>
                        </tr>
                    </table>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
    </footer>

    <script>
        feather.replace();
    </script>
</body>

</html>
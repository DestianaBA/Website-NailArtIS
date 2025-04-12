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
    <title>ABOUT US</title>
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

        .custom-carousel {
            width: 80%;
            margin: 0 auto;
            margin-top: 2em;
        }

        .judul {
            color: black;
        }

        .judul span {
            background-color: #D63484;
            color: #fff;
            padding-right: 0.5em;

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
            <ul class="nav d-flex align-items-center navbar-pilihan" style="height: 5em;">
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
                <img src="1.png" style="height: 25em;" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/bg5.jpg" style="height: 25em;" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/bg6.jpg" style="height: 25em;" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <section class="hero">
        <center>
            <a href=""><button class="tombol" style="border-radius: 1.5em; height: 4em; width: 50em; margin-top: 4em;">
                    <h2>Let's Know About Us</h2>
                </button></a>
        </center>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="shadow" style="background-color: rgba(250, 235, 215, 0.6);border-radius: 0.5em;padding: 0.5em 2em;margin-top: 4em">
                        <h1 style="margin-top: 1em; font-family: poppins" class="judul">Nail<span>Art</span></h1>
                        <p style="margin-top: 2em; font-family: poppins; font-size: 20px;">
                            Selamat datang di Nails Art Is – tempat di mana kreativitas bertemu dengan kesempurnaan. Di Nails Art Is, kami percaya bahwa kuku bukan hanya pernyataan kecantikan, tetapi juga kanvas untuk mengekspresikan individualitas dan gaya. Misi kami adalah menyediakan layanan nail art berkualitas tinggi yang menggabungkan seni, presisi, dan perawatan untuk menciptakan desain menakjubkan yang disukai oleh pelanggan kami.
                        </p><br>
                        <p style="font-family: poppins; font-size: 20px;">Nails Art Is didirikan dengan semangat untuk seni kuku dan komitmen terhadap keunggulan. Dimulai sebagai butik kecil, kini telah berkembang menjadi pusat yang berkembang untuk para penggemar nail art, berkat dedikasi kami terhadap kualitas dan pelanggan setia kami. Setiap anggota tim kami adalah seniman terampil, terlatih dalam teknik dan tren terbaru untuk memastikan kuku Anda selalu tampak terbaik.</p>
                    </div>
                </div>
                <div class="col-4">
                    <img src="logo.jpeg" alt="" style="width: 30em;margin-top: 8em;">
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 2em;">
            <div class="row">
                <div class="col-6">
                    <img src="img/nail3.jpg" alt="" style="margin-top: 2.5em; height: 60%; width:auto;">
                </div>
                <div class="col-6">
                    <h1 style="margin-top: 2em; font-family: poppins">Komitmen Kami</h1>
                    <p class="shadow" style="margin-top: 2em; font-family: poppins; font-size: 20px;background-color: rgba(250, 235, 215, 0.6);border-radius: 0.5em; padding: 2em">
                        Di Nails Art Is, kami mengutamakan kepuasan dan keamanan Anda. Kami hanya menggunakan produk berkualitas tinggi dan non-toksik serta mematuhi praktik kebersihan yang ketat untuk memastikan lingkungan yang bersih dan nyaman. Tujuan kami adalah membuat setiap kunjungan menjadi pengalaman yang menyenangkan, dengan hasil kuku yang tidak hanya tampak menakjubkan tetapi juga sehat dan kuat.</p>
                </div>
                <center>
                    <a href="home.php"><button class="tombol" style="border-radius: 1.5em; height: 4em; width: 50em;">
                            <h2>Bergabunglah Bersama Kami</h2>
                        </button></a>
                    <p style="font-family: poppins; font-size: 20px; margin-bottom: 2em;"><br>Masuklah ke Nails Art Is dan biarkan kami mengubah kuku Anda menjadi karya seni. Apakah Anda sedang mempersiapkan untuk acara khusus atau hanya ingin memanjakan diri, tim berbakat kami siap mewujudkan impian nail art Anda. Ikuti kami di media sosial untuk tetap mendapatkan informasi terbaru tentang desain terbaru, promosi, dan acara kami.
                        Terima kasih telah memilih Nails Art Is. Kami menantikan untuk melayani Anda dan membantu Anda mengekspresikan gaya unik Anda melalui nail art.
                    </p>
                </center>
            </div>
        </div>
    </section>

    <footer class="bg-body-black text-center text-lg-center">
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
                        Selamat datang di Nails Art Is – tempat di mana kreativitas bertemu dengan kesempurnaan. Di Nails Art Is, kami percaya bahwa kuku bukan hanya pernyataan kecantikan, tetapi juga kanvas untuk mengekspresikan individualitas dan gaya. Misi kami adalah menyediakan layanan nail art berkualitas tinggi yang menggabungkan seni, presisi, dan perawatan untuk menciptakan desain menakjubkan yang disukai oleh pelanggan kami.
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
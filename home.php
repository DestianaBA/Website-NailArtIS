<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>HOME PAGE</title>
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



        .content {
            height: 80vh;
            background-image: url("1.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content::after {
            content: " ";
            display: block;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .content h2 {
            color: white;
            z-index: 1;
            padding: 20px 25px;
            border: 3px solid white;
            text-decoration: none;
        }

        .content a {
            color: white;
        }

        section {
            padding: 50px 0;
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
                <a href="login.php"><img src="user.png" width="50px"></a>
            </button>
        </div>
    </nav>
    <section class="content">
        <h2><a href="promise.php">Let's Make Appointment</a></h2>
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
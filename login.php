<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>LOGIN PAGE</title>
</head>
<style>
    .content {
        height: 100vh;
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

    .container {
        z-index: 1;
        max-width: 40%;
        padding: 20px;
        box-shadow: 0 5px 10px rgba(255, 255, 255, 0.5);
        background-color: rgba(0, 0, 0, 0.7);
        color: white;
    }

    .container form h3 {
        text-align: center;
        font-size: 30px;
        text-transform: uppercase;
        margin-bottom: 50px;
        color: white;
        text-shadow: 2px 2px 5px rgba(255, 255, 255, 0.7);
    }

    .register {
        display: block;
        width: 100%;
        padding: 10px 15px;
        text-align: center;
        color: white;
        background-color: hotpink;
        text-decoration: none;
        cursor: pointer;
        border-radius: 5px;
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
</style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
    ?>
            <script>
                alert('Login gagal. username atau password salah.')
            </script>
        <?php
        } elseif ($_GET['pesan'] == "logout") {
        ?>
            <script>
                alert('Logout Berhasil')
            </script>
        <?php
        } elseif ($_GET['pesan'] == "belum_login") {
        ?>
            <script>
                alert('Anda harus login terlebih dahulu!!!!')
            </script>
        <?php
        } elseif ($_GET['pesan'] == "sukses") {
        ?>
            <script>
                alert('Registrasi Berhasil. Silakan LOGIN.')
            </script>
    <?php
        }
    }
    ?>
    <div class="content">
        <div class="container">
            <form method="POST" action="login_proses.php">
                <h3><img src="logo-bgoff.png" height="80px"></h3>
                <div class="mb-3">
                    <label for="username" class="form-label">username</label>
                    <i class="fa fa-envelope"></i>
                    <input type="username" name="username" class="form-control" id="username" placeholder="Masukkan username" />
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <i class="fa fa-lock"></i>
                    <input type="password" name="password" class="form-control" id="password" aria-describedby="passwordHelp" placeholder="Password" />
                    <div id="passwordHelp" class="form-text" style="color:gray">We'll never share your password with anyone else.</div>
                </div>
                <div class="mb-3 text-center">
                    <a href="home2.php"><input type="submit" name="login" value="Login" class="button" /></a>
                </div>
                <p class="login-register-text">Belum punya akun? Silakan Lakukan Registrasi.</p>
                <a href="register.php" class="register">Register</a>
            </form>
        </div>
    </div>
</body>

</html>
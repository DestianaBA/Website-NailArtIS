<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
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
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            // echo "Registrasi gagal.";
    ?>
            <script>
                alert('Registrasi Gagal! Silakan coba lagi.')
            </script>
        <?php
        } elseif ($_GET['pesan'] == "salah_confirm") {
        ?>
            <script>
                alert('Password tidak sama, ULANGI!!!.')
            </script>
        <?php
        } elseif ($_GET['pesan'] == "salah_pass") {
        ?>
            <script>
                alert('Password sudah digunakan, gunakan password lain!')
            </script>
    <?php
        }
    }
    ?>
    <div class="popup active" id="popup">
        <div class="close-btn" onclick="closePopup()">&times;</div>
        <div class="form-container">
            <form method="POST" action="register_proses.php">
                <h3>REGISTRASI</h3>
                <div class="mb-3">
                    <label for="email" class="form-label"><b>Email</b></label>
                    <input type="email" class="form-control" id="email" name="email" required placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label"><b>Nama Lengkap</b></label>
                    <input type="text" class="form-control" id="username" name="username" required placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label"><b>Password</b></label>
                    <input type="password" class="form-control" id="password" name="password" required placeholder="Enter your password">
                </div>
                <div class="mb-3">
                    <label for="confirmpass" class="form-label"><b>Confirm Password</b></label>
                    <input type="password" class="form-control" id="confirmpass" name="confirmpass" required placeholder="Confirm your password">
                </div>
                <div class="mb-3 text-center">
                    <input type="submit" name="signin" value="BUAT AKUN" class="btn btn-primary" />
                    <p class="login-register-text">Sudah punya akun? Silakan <a href="login.php">LOGIN</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function closePopup() {
            window.location.href = 'login.php'; // Redirects to the login page
        }
    </script>
    </script>
</body>

</html>
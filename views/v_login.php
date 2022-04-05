<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="form">
    <div class="container">
        <div class="row align-content-center justify-content-around vh-100">
            <div class="col-md-6">
                <h1 class="logo">Peduli Diri</h1>
                <h2 class="logo2">Catatan perjalanan</h2>
            </div>
            <div class="col-md-4">
                <div class="form">
                    <div class="card rounded-3">
                        <?php echo @$alert ?>
                        <div class="card-body">
                            <form action="login.php" method="post">
                                <input type="number" name="nik" class="form-control mb-4" placeholder="Masukan NIK" required>
                                <input type="text" name="nama" class="form-control mb-4" placeholder="Masukan Nama Lengkap" required>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-outline-primary" name="login">Login</button>
                                    <a href="register.php" class="btn btn-outline-primary">Belum punya akun? Buat akun sekarang</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap.js"></script>
</body>

</html>